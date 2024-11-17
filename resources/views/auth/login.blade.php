<x-guest-layout>
    @push('style')
    <style>
        .login-container {
            opacity: 0;
            transform: translateY(20px);
        }
        .login-box {
            background: white;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            opacity: 0;
            transform: translateX(-20px);
        }
        .login-button {
            opacity: 0;
            transform: scale(0.9);
        }
        .login-title {
            opacity: 0;
            transform: translateY(-20px);
        }
    </style>

    @endpush
    <div class="login-container">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="login-box">
            <h2 class="text-2xl font-bold mb-6 text-center login-title">Welcome Back</h2>

            <form method="POST" action="{{ route('login') }}" class="login-form">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <x-input-label for="email" :value="__('Email')" class="label" />
                    <x-text-input id="email" class="block mt-1 w-full input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="form-group mt-4">
                    <x-input-label for="password" :value="__('Password')" class="label" />
                    <x-text-input id="password" class="block mt-1 w-full input"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="ms-3 login-button">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>


    @push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tl = gsap.timeline();

            // Fade in container
            tl.to('.login-container', {
                opacity: 1,
                y: 0,
                duration: 0.6,
                ease: 'power2.out'
            });

            // Animate title
            tl.to('.login-title', {
                opacity: 1,
                y: 0,
                duration: 0.5,
                ease: 'back.out'
            });

            // Animate form groups
            tl.to('.form-group', {
                opacity: 1,
                x: 0,
                duration: 0.5,
                stagger: 0.2,
                ease: 'power2.out'
            });

            // Animate login button
            tl.to('.login-button', {
                opacity: 1,
                scale: 1,
                duration: 0.5,
                ease: 'back.out(1.7)'
            });

            // Add hover animation for button
            gsap.to('.login-button', {
                scale: 1.05,
                duration: 0.3,
                paused: true,
                ease: 'power2.out'
            });

            // Form submission animation
            const form = document.querySelector('.login-form');
            form.addEventListener('submit', (e) => {
                gsap.to('.login-box', {
                    scale: 0.95,
                    opacity: 0.8,
                    duration: 0.2,
                    ease: 'power2.in'
                });
            });
        });
    </script>
    @endpush
</x-guest-layout>

