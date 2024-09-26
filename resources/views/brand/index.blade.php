@extends('layouts.app')

@section('template_title')
    Brands
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5 mx-sm-auto">
                <div class="card">
                    <div class="card-header text-bg-dark d-flex justify-content-between align-items-center">
                        <span id="card_title">
                            {{ __('Brands') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('brands.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Brand</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brands as $brand)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td>{{ $brand->brand }}</td>

                                            <td>
                                                <form id="delete-form-{{ $brand->id }}" action="{{ route('brands.destroy', $brand->id) }}" method="POST">
                                                    <div class="btn-group" role="group">
                                                        <a class="btn btn-sm btn-primary " href="{{ route('brands.show', $brand->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('brands.edit', $brand->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirmDelete-{{ $brand->id }}">
                                                            <i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}
                                                        </button>
                                                    </div>
                                                </form>

                                                {{-- start delete modal --}}
                                                <div class="modal fade" id="confirmDelete-{{ $brand->id }}" tabindex="-1" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="confirmDeleteLabel">{{ __('Delete Brand') }}</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                {{ __('Are you sure you want to delete this brand?') }}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-dark" onclick="document.getElementById('delete-form-{{ $brand->id }}').submit();">{{ __('Delete') }}</button>
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
                {!! $brands->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
