@extends('layouts.app')

@section('template_title')
    {{ $origin->name ?? __('Show') . " " . __('Origin') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-sm-4 mx-sm-auto">
                <div class="card">
                    <div class="card-header text-bg-dark d-flex justify-content-between align-items-center">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Origin</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('origins.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Origin:</strong>
                                    {{ $origin->origin }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
