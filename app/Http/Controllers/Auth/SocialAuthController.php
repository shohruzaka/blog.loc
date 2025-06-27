<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SocialAuthController extends Controller
{
    public function redirectToProvider($provider)
    {
        // Qo'llab-quvvatlanadigan providerlarni tekshirish
        if (!in_array($provider, ['google', 'github'])) {
            return redirect()->route('login')->with('error', 'Noto\'g\'ri ijtimoiy tarmoq tanlandi.');
        }

        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();
            
            // Mavjud foydalanuvchini topish
            $user = User::where('email', $socialUser->getEmail())->first();
            
            if ($user) {
                // Agar foydalanuvchi mavjud bo'lsa, ijtimoiy tarmoq ma'lumotlarini yangilash
                $user->update([
                    'provider' => $provider,
                    'provider_id' => $socialUser->getId(),
                    'provider_token' => $socialUser->token,
                    'avatar' => $socialUser->getAvatar(),
                    'email_verified_at' => now(), // Ijtimoiy tarmoq orqali kirgan emailni tasdiqlangan deb hisoblash
                ]);
            } else {
                // Yangi foydalanuvchi yaratish
                $user = User::create([
                    'name' => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                    'provider' => $provider,
                    'provider_id' => $socialUser->getId(),
                    'provider_token' => $socialUser->token,
                    'avatar' => $socialUser->getAvatar(),
                    'password' => Hash::make(Str::random(24)), // Tasodifiy parol
                    'email_verified_at' => now(),
                ]);
            }

            // Foydalanuvchini tizimga kiritish
            Auth::login($user, true);

            return redirect('/');
            
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Ijtimoiy tarmoq orqali kirish jarayonida xatolik yuz berdi.');
        }
    }
}
