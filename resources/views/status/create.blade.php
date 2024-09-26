@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Status
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-sm-4 mx-sm-auto">
                <div class="card">
                    <div class="card-header text-bg-dark d-flex justify-content-between align-items-center">
                        <div class="float-left">
                            <span class="card-title">{{ __('Create') }} Status</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('statuses.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('statuses.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('status.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
