@extends('layouts.app')

@section('template_title')
    {{ $brand->name ?? __('Show') . " " . __('Brand') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-sm-6 mx-sm-auto">
                <div class="card">
                    <div class="card-header text-bg-dark d-flex justify-content-between align-items-center">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Brand</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('brands.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Brand:</strong>
                                    {{ $brand->brand }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
