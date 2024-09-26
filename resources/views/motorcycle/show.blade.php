@extends('layouts.app')

@section('template_title')
    {{ $motorcycle->name ?? __('Show') . " " . __('Motorcycle') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-sm-4 mx-sm-auto">
                <div class="card">
                    <div class="card-header text-bg-dark d-flex justify-content-between align-items-center">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Motorcycle</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('motorcycles.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Vin:</strong>
                                    {{ $motorcycle->vin }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Reference:</strong>
                                    {{ $motorcycle->reference->name }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
