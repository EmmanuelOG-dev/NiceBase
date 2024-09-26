@extends('layouts.app')

@section('template_title')
    {{ $reference->name ?? __('Show') . " " . __('Reference') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-sm-4 mx-sm-auto">
                <div class="card">
                    <div class="card-header text-bg-dark d-flex justify-content-between align-items-center">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Reference</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('references.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $reference->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Build Year:</strong>
                                    {{ $reference->build_year }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Brand:</strong>
                                    {{ $reference->brand->brand }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Category:</strong>
                                    {{ $reference->category->category }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Engine Size:</strong>
                                    {{ $reference->engine_size }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
