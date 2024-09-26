@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Costumer
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-8 mx-sm-auto">
                <div class="card">
                    <div class="card-header text-bg-dark d-flex justify-content-between align-items-center">
                        <div class="float-left">
                            <span class="card-title">{{ __('Update') }} Costumer</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('costumers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('costumers.update', $costumer->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('costumer.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
