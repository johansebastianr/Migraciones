@section('content')
<div class="container">
    <div class="login__content">
        <img src="{{ asset('bg-login.png') }}" alt="login image" class="login__img">

        <form method="POST" action="{{ route('register') }}" class="login__form">
            @csrf
            <div>
                <h1 class="login__title">
                    <span>Brew</span> Ride
                </h1>
                <p class="login__description">
                    Bienvenido! Porfavor Registrate para iniciar.
                </p>
            </div>

            <div>
                <div class="login__inputs">
                    <div>
                        <label for="first_name" class="login__label">Nombre</label>
                        <input type="text" name="first_name" placeholder="Ingrese su nombre" required
                            class="login__input @error('first_name') is-invalid @enderror" id="first_name">
                        @error('first_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <label for="last_name" class="login__label">Apellido</label>
                        <input type="text" name="last_name" placeholder="Ingrese su apellido" required
                            class="login__input @error('last_name') is-invalid @enderror" id="last_name">
                        @error('last_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <label for="role" class="login__label">Rol</label>
                        <select name="role" id="role" class="login__input @error('role') is-invalid @enderror" required>
                            <option value="">Seleccionar Rol</option>
                            <option value="pasajero">Pasajero</option>
                            <option value="conductor">Conductor</option>
                        </select>
                        @error('role')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="login__label">Correo electrónico</label>
                        <input type="email" name="email" placeholder="Ingrese su dirección de correo electrónico"
                            required class="login__input @error('email') is-invalid @enderror" id="email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="login__label">Contraseña</label>
                        <div class="login__box">
                            <input type="password" name="password" placeholder="Ingrese su contraseña" required
                                class="login__input @error('password') is-invalid @enderror" id="password">
                            <i class="ri-eye-off-line login__eye" id="input-icon"></i>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="password_confirmation" class="login__label">Confirmar Contraseña</label>
                        <div class="login__box">
                            <input type="password" name="password_confirmation" placeholder="Confirme su contraseña"
                                required class="login__input @error('password_confirmation') is-invalid @enderror"
                                id="password_confirmation">
                            <i class="ri-eye-off-line login__eye" id="input-icon-confirm"></i>
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="login__check">
                    <input type="checkbox" class="login__check-input" id="input-check">
                    <label for="input-check" class="login__check-label">Recordarme</label>
                </div>
            </div>

            <div>
                <div class="login__buttons">
                    <button class="login__button" type="submit">{{ __('Registrar') }}</button>
                    <a href="{{ route('login') }}"
                        class="login__button login__button-ghost">{{ __('Iniciar Sesión') }}</a>
                </div>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="login__forgot">{{ __('¿Olvidó su Contraseña?') }}</a>
                @endif
            </div>
        </form>
    </div>
</div>

<link rel="stylesheet" href="{{ asset('stylesregister.css') }}">
