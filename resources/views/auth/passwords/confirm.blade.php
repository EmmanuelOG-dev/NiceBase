@extends('layouts.start')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col-md-8">
            <div class="text-center bg-black text-white bg-opacity-25 centered-card card shadow-lg">
                <h3 class="card-header">{{ __('Confirm Password') }}</h3>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="row mb-3 form-floating text-black">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                        </div>

                        <div class="row mb-0">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-light">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
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
