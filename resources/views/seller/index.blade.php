@extends('layouts.app')

@section('template_title')
    Sellers
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8 mx-sm-auto">
                <div class="card">
                    <div class="card-header text-bg-dark d-flex justify-content-between align-items-center">
                        <span id="card_title">
                            {{ __('Sellers') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('sellers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>No</th>
                                        
									<th >DNI</th>
									<th >Name Seller</th>
									<th >Lastname Seller</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sellers as $seller)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $seller->dni }}</td>
										<td >{{ $seller->name_seller }}</td>
										<td >{{ $seller->lastname_seller }}</td>

                                            <td>
                                                <form id="delete-form-{{ $seller->id }}" action="{{ route('sellers.destroy', $seller->id) }}" method="POST">
                                                    <div class="btn-group" role="group">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('sellers.show', $seller->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('sellers.edit', $seller->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirmDelete-{{ $seller->id }}">
                                                            <i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}
                                                        </button>
                                                    </div>
                                                </form>

                                                {{-- start delete modal --}}
                                                <div class="modal fade" id="confirmDelete-{{ $seller->id }}" tabindex="-1" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="confirmDeleteLabel">{{ __('Delete Customers') }}</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                {{ __('Are you sure you want to delete this seller?') }}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-dark" onclick="document.getElementById('delete-form-{{ $seller->id }}').submit();">{{ __('Delete') }}</button>
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
                {!! $sellers->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
