@extends('layouts.auth')

@section('title', __('Reset Password'))

@section('content')
    <div class="mb-2 pb-1 text-center">
        <h1 class="h3 fw-bolder">{{ __('Reset Password') }}</h1>
        <p>{{ __("Enter your email to recover your password.") }}</p>
    </div>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group mb-4">
            <label for="email" class="form-label">{{ __('Email Address') }}</label>
            <input id="email" type="email" placeholder="{{ __('E.g. example@domain.com') }}" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus />

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary w-100 py-8 fs-4 rounded-2">
                {{ __('Send Password Reset Link') }}
            </button>

            <a href="{{ route('login') }}" class="btn btn-link text-decoration-none w-100 py-8 fs-4 rounded-2">
                {{ __('Back To Login') }}
            </a>
        </div>
    </form>
@endsection
