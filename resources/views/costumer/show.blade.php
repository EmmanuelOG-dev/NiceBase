@extends('layouts.app')

@section('template_title')
    {{ $costumer->name ?? __('Show') . " " . __('Costumer') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-sm-6 mx-sm-auto">
                <div class="card">
                    <div class="card-header text-bg-dark d-flex justify-content-between align-items-center">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Costumer</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('costumers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>DNI:</strong>
                                    {{ $costumer->dni }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Name Costumer:</strong>
                                    {{ $costumer->name_costumer }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Lastname Costumer:</strong>
                                    {{ $costumer->lastname_costumer }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Birth Date:</strong>
                                    {{ $costumer->birth_date }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Gender:</strong>
                                    {{ $costumer->gender }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Phone:</strong>
                                    {{ $costumer->phone }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Address:</strong>
                                    {{ $costumer->address }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email:</strong>
                                    {{ $costumer->email }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Origin:</strong>
                                    {{ $costumer->origin->origin }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
