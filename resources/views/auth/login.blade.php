@extends('layouts.auth')

@section('content')
    <div class="mb-3 pb-1 text-center">
        <h1 class="h3 fw-bolder">{{ __("Welcome") }}</h1>
        <p>{{ __('Login to the system to manage data.') }}</p>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group mb-3">
            <label for="email" class="form-label">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" placeholder="{{ __('E.g. example@domain.com') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="current-password" placeholder="{{ __('Enter your password') }}" />

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="d-flex align-items-center justify-content-between mb-4">
            <div class="form-check">
                <input class="form-check-input primary" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            @if (Route::has('password.request'))
                <a class="text-primary fw-bold" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>

        <button type="submit" class="btn btn-primary w-100 py-8 fs-4 rounded-2">
            {{ __('Login') }}
        </button>
    </form>
@endsection
