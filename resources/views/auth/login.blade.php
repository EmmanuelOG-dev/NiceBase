@extends('layouts.start')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col-md-8">
            <div class="text-center bg-black text-white bg-opacity-75 centered-card card shadow-lg">
                <h3 class="card-header bg-black bg-opacity-75">{{ __('Login') }}</h3>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" novalidate>
                        @csrf

                        <div class="row mb-3 form-floating text-black">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="email">{{ __('Email') }}</label>
                        </div>

                        <div class="row mb-3 form-floating text-black">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                            
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="password">{{ __('Password') }}</label>
                        </div>

                        <div class="row mb-3 d-flex justify-content-center">
                            <div class="col-10">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-light">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                        
                        <div class="row my-1">
                            <div class="d-grid gap-2">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        
                        <div class="row mb-0">
                            <div class="d-grid gap-2">
                                @if (Route::has('register'))
                                    <a
                                        href="{{ route('register') }}"
                                        class="btn btn-outline-light"
                                    >
                                        {{ __('Register') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
