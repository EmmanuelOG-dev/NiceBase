@extends('layouts.start')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col-md-8">
            <div class="text-center bg-black text-white bg-opacity-25 centered-card card shadow-lg">
                <h3 class="card-header">{{ __('Verify Your Email Address') }}</h3>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-light">
                                    {{ __('click here to request another') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
