@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Reference
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-8 mx-sm-auto">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="float-left">
                            <span class="card-title">{{ __('Create') }} Reference</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('references.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('references.store', $reference->id) }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('reference.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
