
@section('content')
    <div class="col-md-6">
        <div class="card mb-4 mx-4">
            <div class="card-body p-4 text-center">
                <h1>{{ __('Recuperar contraseña') }}</h1>

                <form action="{{ route('password.update') }}" method="POST">
                    @csrf

                    <div class="input-group mb-3"><span class="input-group-text">
                    <svg class="icon">
                        <use xlink:href="{{ asset('icons/logo2') }}"></use>
                    </svg></span>
                        <input class="form-control @error('email') is-invalid @enderror" type="text"
                              name="email" placeholder="{{ __('Correo') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="input-group mb-4"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="{{ asset('icons/logo2') }}"></use>
                    </svg></span>
                        <input class="form-control @error('password') is-invalid @enderror" type="password"
                               id="password" name="password"
                               placeholder="{{ __('Contraseña') }}">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="input-group mb-4"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="{{ asset('icons/logo2') }}"></use>
                    </svg></span>
                        <input class="form-control @error('password_confirmation') is-invalid @enderror" type="password"
                               id="password_confirmation" name="password_confirmation"
                               placeholder="{{ __('Confirmar contraseña') }}">
                        @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <button class="btn btn-block btn-success"
                            type="submit">{{ __('Enviar') }}</button>
                </form>

            </div>
        </div>
    </div>
@endsection
