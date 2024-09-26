@extends('layouts.app')

@section('template_title')
    Motorcycles
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8 mx-sm-auto">
                <div class="card">
                    <div class="card-header text-bg-dark d-flex justify-content-between align-items-center">
                        <span id="card_title">
                            {{ __('Motorcycles') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('motorcycles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Vin</th>
									<th >Reference</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($motorcycles as $motorcycle)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $motorcycle->vin }}</td>
										<td >{{ $motorcycle->reference->name }}</td>

                                            <td>
                                                <form id="delete-form-{{ $motorcycle->id }}" action="{{ route('motorcycles.destroy', $motorcycle->id) }}" method="POST">
                                                    <div class="btn-group" role="group">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('motorcycles.show', $motorcycle->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('motorcycles.edit', $motorcycle->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirmDelete-{{ $motorcycle->id }}">
                                                            <i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}
                                                        </button>
                                                    </div>
                                                </form>

                                                {{-- start delete modal --}}
                                                <div class="modal fade" id="confirmDelete-{{ $motorcycle->id }}" tabindex="-1" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="confirmDeleteLabel">{{ __('Delete Customers') }}</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                {{ __('Are you sure you want to delete this motorcycle?') }}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-dark" onclick="document.getElementById('delete-form-{{ $motorcycle->id }}').submit();">{{ __('Delete') }}</button>
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
                {!! $motorcycles->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
