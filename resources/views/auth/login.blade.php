@extends('layouts.guest')
@push('login-styles')
    <link href="{{ asset('css/login2.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="container">
    <div class="login__content">
        <img src="{{ asset('bg-login.png') }}" alt="imagen de inicio de sesión" class="login__img">

        <form action="{{ route('login') }}" method="POST" class="login__form">
            @csrf
            <div>
                <h1 class="login__title">
                    <span>Brew</span> Ride
                </h1>
                <p class="login__description">
                    ¡Bienvenido! Por favor inicie sesión para continuar.
                </p>
            </div>

            <div>
                <div class="login__inputs">
                    <div>
                        <label for="input-email" class="login__label">Correo electrónico</label>
                        <input type="email" name="email" placeholder="Ingrese su dirección de correo electrónico" required class="login__input @error('email') is-invalid @enderror" id="input-email">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div>
                        <label for="input-pass" class="login__label">Contraseña</label>
                        <div class="login__box">
                            <input type="password" name="password" placeholder="Ingrese su contraseña" required class="login__input @error('password') is-invalid @enderror" id="input-pass">
                            <i class="ri-eye-off-line login__eye" id="input-icon"></i>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="login__check">
                    <input type="checkbox" class="login__check-input" id="input-check" name="remember">
                    <label for="input-check" class="login__check-label">Recordarme</label>
                </div>
            </div>

            <div>
                <div class="login__buttons">
                    <button class="login__button" type="submit">{{ __('Iniciar Sesión') }}</button>
                    <a href="{{ route('register') }}" class="login__button login__button-ghost">{{ __('Registrarse') }}</a>
                </div>

                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="login__forgot">{{ __('¿Olvidó su Contraseña?') }}</a>
                @endif
            </div>
        </form>
    </div>
</div>
@endsection
