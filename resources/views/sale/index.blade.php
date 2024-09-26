@extends('layouts.app')

@section('template_title')
    Sales
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 mx-sm-auto">
                <div class="card">
                    <div class="card-header text-bg-dark d-flex align-items-center">
                        <div class="me-auto">
                            <span id="card_title">
                                {{ __('Sales') }}
                            </span>
                        </div>

                        <div class="px-3">
                            <a class="btn btn-outline-light btn-sm" href="{{ URL::to('sales/report') }}" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-bar-graph pe-1" viewBox="0 0 16 16">
                                    <path d="M10 13.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-6a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5z"/>
                                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                </svg>
                                <span class="align-bottom">PDF</span>
                            </a>
                        </div>

                        <div>
                            <a href="{{ route('sales.create') }}" class="btn btn-primary btn-sm"  data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>#</th>
                                        
									<th >Motorcycle Vin</th>
									<th >Reference</th>
									<th >Seller</th>
									<th >Costumer DNI</th>
									<th >Costumer Name</th>
									<th >Status</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sales as $sale)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $sale->motorcycle->vin }}</td>
										<td >{{ $sale->motorcycle->reference->name }}</td>
										<td >{{ $sale->seller->name_seller }}</td>
										<td >{{ $sale->costumer->dni }}</td>
										<td >{{ $sale->costumer->name_costumer }}</td>
										<td >{{ $sale->status->status }}</td>

                                            <td>
                                                <form id="delete-form-{{ $sale->id }}" action="{{ route('sales.destroy', $sale->id) }}" method="POST">
                                                    <div class="btn-group" role="group">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('sales.show', $sale->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('sales.edit', $sale->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirmDelete-{{ $sale->id }}">
                                                            <i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}
                                                        </button>
                                                    </div>
                                                </form>

                                                {{-- start delete modal --}}
                                                <div class="modal fade" id="confirmDelete-{{ $sale->id }}" tabindex="-1" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="confirmDeleteLabel">{{ __('Delete Customers') }}</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                {{ __('Are you sure you want to delete this sale?') }}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-dark" onclick="document.getElementById('delete-form-{{ $sale->id }}').submit();">{{ __('Delete') }}</button>
                                                                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- end delete modal --}}
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $sales->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
