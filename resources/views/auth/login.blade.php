<x-guest-layout>

<nav class="navbar fixed">
  <b><a class="navbar-brand  text-blue-900 " href="/">
    <img src="{{asset('storage/images/evo.png')}}" width="50" height="50" class="d-inline-block align-top df rounded-md" alt=""> E-Vonic
  </a></b>
  @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                    @endauth
                </div>
            @endif
</nav>

    <x-jet-authentication-card>
    <p class="text-center py-2 font-bold text-stone-600 opacity-100"> Log In </p>
        <x-jet-validation-errors class="mb-4 text-center" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}"> 
            @csrf

            <div>
                <x-jet-label for="email" class="text-stone-600" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full @error('email') is-invalid @enderror" type="email" name="email" :value="old('email')" autofocus />
                @error('email')
                <div class="invalid-feedback text-red-600">{{$message}}</div>
                @enderror
            </div>

            <div class="mt-4">
                <x-jet-label for="password" class="text-stone-600" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full @error('password') is-invalid @enderror" type="password" name="password" autocomplete="current-password" />
                @error('password')
                <div class="invalid-feedback text-red-600">{{$message}}</div>
                @enderror
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-blue-900 font-italic">{{ __('Ingat Info Masuk Saya') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                {{-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Lupa Password?') }}
                    </a>
                @endif --}}

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
