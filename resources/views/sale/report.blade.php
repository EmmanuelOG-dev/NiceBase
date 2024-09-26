<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('Sales Report') }}</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ public_path('css/pdfStyles.css') }}">

</head>
<body>

    <h4 class="logo">Nicebase</h4>
    <h1 class="title text-center">{{ __('Sales Report') }}</h1>
    <p class="text-right date">{{ __('Date') }}: {{ $date }}</p>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                
            <th >Motorcycle Vin</th>
            <th >Reference</th>
            <th >Seller</th>
            <th >Costumer DNI</th>
            <th >Costumer Name</th>
            <th >Status</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $sale)
                <tr>
                    
                <td >{{ $sale->motorcycle->vin }}</td>
                <td >{{ $sale->motorcycle->reference->name }}</td>
                <td >{{ $sale->seller->name_seller }}</td>
                <td >{{ $sale->costumer->dni }}</td>
                <td >{{ $sale->costumer->name_costumer }}</td>
                <td >{{ $sale->status->status }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
