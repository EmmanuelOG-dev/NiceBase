@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-12 mx-sm-auto">
            <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
                <div class="col">
                    <div class="card text-bg-dark h-100">
                        <div class="card-body">
                            <h3 class="card-text"> Total sales: </h3>
                            <h3 class="card-title"> {{ $totalSales }} </h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-bg-dark h-100">
                        <div class="card-body">
                            <h3 class="card-text"> Open sales: </h3>
                            <h3 class="card-title"> {{ $openSales }} </h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-bg-dark h-100">
                        <div class="card-body">
                            <h3 class="card-text"> Closed sales: </h3>
                            <h3 class="card-title"> {{ $closedSales }} </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
