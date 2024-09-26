@extends('layouts.app')

@section('template_title')
    Costumers
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header text-bg-dark d-flex justify-content-between align-items-center">
                        <span id="card_title">
                            {{ __('Costumers') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('costumers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
									<th >Name Costumer</th>
									<th >Lastname Costumer</th>
									<th >Birth Date</th>
									<th >Gender</th>
									<th >Phone</th>
									<th >Address</th>
									<th >Email</th>
									<th >Origin</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($costumers as $costumer)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $costumer->dni }}</td>
										<td >{{ $costumer->name_costumer }}</td>
										<td >{{ $costumer->lastname_costumer }}</td>
										<td >{{ $costumer->birth_date }}</td>
										<td >{{ $costumer->gender }}</td>
										<td >{{ $costumer->phone }}</td>
										<td >{{ $costumer->address }}</td>
										<td >{{ $costumer->email }}</td>
										<td >{{ $costumer->origin->origin }}</td>

                                            <td>
                                                <form id="delete-form-{{ $costumer->id }}" action="{{ route('costumers.destroy', $costumer->id) }}" method="POST">
                                                    <div class="btn-group" role="group">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('costumers.show', $costumer->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('costumers.edit', $costumer->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirmDelete-{{ $costumer->id }}">
                                                            <i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}
                                                        </button>
                                                    </div>
                                                </form>

                                                {{-- start delete modal --}}
                                                <div class="modal fade" id="confirmDelete-{{ $costumer->id }}" tabindex="-1" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="confirmDeleteLabel">{{ __('Delete Customers') }}</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                {{ __('Are you sure you want to delete this costumer?') }}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-dark" onclick="document.getElementById('delete-form-{{ $costumer->id }}').submit();">{{ __('Delete') }}</button>
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
                {!! $costumers->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
