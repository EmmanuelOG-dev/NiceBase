@extends('layouts.start')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col-md-8">
            <div class="text-center bg-black text-white bg-opacity-75 centered-card card shadow-lg">
                <h3 class="card-header bg-black bg-opacity-75">{{ __('Register') }}</h3>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" novalidate>
                        @csrf

                        <div class="row mb-3 form-floating text-black">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="name">{{ __('Name') }}</label>
                        </div>

                        <div class="row mb-3 form-floating text-black">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="email">{{ __('Email Address') }}</label>
                        </div>

                        <div class="row mb-3 form-floating text-black">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="password">{{ __('Password') }}</label>
                        </div>

                        <div class="row mb-3 form-floating text-black">
                            <input id="password-confirm" type="password" class="form-control" placeholder="Password" name="password_confirmation" required autocomplete="new-password">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        </div>

                        <div class="row mb-3">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-light">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="d-grid gap-2">
                                @if (Route::has('login'))
                                    <a
                                        href="{{ route('login') }}"
                                        class="btn btn-outline-light"
                                    >
                                        {{ __('Login') }}
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
