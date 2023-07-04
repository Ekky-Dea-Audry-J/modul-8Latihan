<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    @extends('layouts.app')
    @section('content')


            <div class="container mt-4">

                <div class="row mb-0">

                    <div class="col-lg-9 col-xl-10">

                    <h4 class="mb-3">Customers</h4>

                </div>

                <div class="col-lg-3 col-xl-2">

                    <div class="d-grid gap-2">

                        <a href="{{ route('employees.create') }}" class="btn btn-primary">Create Barang</a>

                    </div>

                </div>

            </div>
<hr>

<div class="table-responsive border p-3 rounded-3">
    <table class="table table-bordered table-hover table-striped mb-0
    bg-white">
    <thead>
    <tr>
    <th>Kode Barang</th>
    <th>Nama Barang</th>
    <th>Harga Barang</th>
    <th>Deskripsi Barang</th>
    <th>Satuan Barang</th>
    <th></th>
    </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
        <tr>
        <td>{{ $employee->kodebarang }}</td>
        <td>{{ $employee->namabarang}}</td>
        <td>{{ $employee->hargabarang }}</td>
        <td>{{ $employee->deksripsibarang}}</td>
        <td>{{ $employee->position->satuanbarang }}</td>
        <td>@include('employee.actions')</td>

        </tr>
        {{-- ACTIONS SECTION --}}
        </td>
        </tr>
        @endforeach
    </table>
    </div>
</div>
@endsection

</body>
</html>
