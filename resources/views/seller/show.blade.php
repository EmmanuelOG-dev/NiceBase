@extends('layouts.app')

@section('template_title')
    {{ $seller->name ?? __('Show') . " " . __('Seller') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-sm-4 mx-sm-auto">
                <div class="card">
                    <div class="card-header text-bg-dark d-flex justify-content-between align-items-center">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Seller</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('sellers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>DNI:</strong>
                                    {{ $seller->dni }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Name Seller:</strong>
                                    {{ $seller->name_seller }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Lastname Seller:</strong>
                                    {{ $seller->lastname_seller }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
