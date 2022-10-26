<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" novalidate>  <!--novalidate para que entren las validaciones de laravel y no las de html-->
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Correo Electronico')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Contraseña')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-rose-900 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                </label>
            </div>

            <div class="flex justify-between my-3">
                <x-link
                    :href="route('password.request')"
                >
                    Olvide mi contraseña
                </x-link>

                <x-link
                    :href="route('register')"
                >
                    ¿Aun no tienes una cuenta? Crear una
                </x-link>

            </div>

            <x-primary-button class="w-full justify-center">
                {{ __('Iniciar Sesion') }}
            </x-primary-button>
        </form>
    </x-auth-card>
</x-guest-layout>