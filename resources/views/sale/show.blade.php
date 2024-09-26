@extends('layouts.app')

@section('template_title')
    {{ $sale->name ?? __('Show') . " " . __('Sale') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-sm-6 mx-sm-auto">
                <div class="card">
                    <div class="card-header text-bg-dark d-flex justify-content-between align-items-center">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Sale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('sales.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Motorcycle:</strong>
                                    {{ $sale->motorcycle->vin }} - {{ $sale->motorcycle->reference->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Seller:</strong>
                                    {{ $sale->seller->dni }} - {{ $sale->seller->name_seller }} {{ $sale->seller->lastname_seller }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Costumer:</strong>
                                    {{ $sale->costumer->dni }} - {{ $sale->costumer->name_costumer }} {{ $sale->costumer->lastname_costumer }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Status:</strong>
                                    {{ $sale->status->status }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
