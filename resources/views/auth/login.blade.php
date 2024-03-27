@extends('layouts.auth')

@section('content')
    <div class="mb-3 pb-1 text-center">
        <h1 class="h1 fw-bolder">{{ __('Welcome') }}</h1>
        <p>{{ __('Login to the system to manage data.') }}</p>
    </div>

    <form method="POST" class="js-validate" novalidate action="{{ route('login') }}">
        @csrf

        <div class="form-group mb-3">
            <label for="email" class="form-label">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" placeholder="{{ __('E.g. example@domain.com') }}" required autocomplete="email"
                autofocus />

            <span class="invalid-feedback">{{ __('Enter your email first!') }}</span>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


        <!-- Form -->
        <div class="mb-4">
            <label class="form-label w-100" for="signupSrPassword" tabindex="0">
                <span class="d-flex justify-content-between align-items-center">{{ __('Password') }}</span>
            </label>

            <div class="input-group input-group-merge" data-hs-validation-validate-class>
                <input
                    type="password"
                    class="js-toggle-password form-control form-control-lg"
                    name="password"
                    id="signupSrPassword"
                    placeholder="8+ characters required"
                    aria-label="8+ characters required"
                    required
                    minlength="8"
                    data-hs-toggle-password-options='{
                        "target": "#changePassTarget",
                        "defaultClass": "bi-eye-slash",
                        "showClass": "bi-eye",
                        "classChangeTarget": "#changePassIcon"
                    }'
                />
                <a id="changePassTarget" class="input-group-append input-group-text" href="javascript:;">
                    <i id="changePassIcon" class="bi-eye"></i>
                </a>
            </div>

            <span class="invalid-feedback">{{ __('Enter your password first!') }}</span>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <!-- End Form -->

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

        <button type="submit" class="btn btn-primary fw-bold w-100 fs-4 py-3 rounded-2">
            {{ __('Login') }}
        </button>
    </form>
@endsection
