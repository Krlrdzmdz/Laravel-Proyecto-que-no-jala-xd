<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('¿Olvidaste tu contraseña? Coloca el correo electronico con el que esta registrada tu cuenta y te enviaremos un enlace para que puedas restaurarla') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <div class="flex justify-between my-3">
                    <x-link
                        :href="route('register')"
                    >
                        ¿Aun no tienes una cuenta? Crear una
                    </x-link>

                    <x-link
                        :href="route('login')"
                    >
                        Iniciar Sesion
                    </x-link>
                    
                </div> 
            </div>

            <x-primary-button class="w-full justify-center">
                {{ __('Enviar instrucciones') }}
            </x-primary-button>

        </form>
    </x-auth-card>
</x-guest-layout>
