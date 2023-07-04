
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
    <div class="container-sm mt-5">
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger
alert-dismissible fade show">
                                {{ $error }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endforeach
                    @endif
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Create Employee</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kodebarang" class="form-label">Kode Barang</label>
                            <input class="form-control" type="text" name="kodebarang" id="kodebarang" value=""
                                placeholder="Enter Kode Barang ">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="namabarang" class="form-label">Nama Barang</label>
                            <input class="form-control" type="text" name="namabarang" id="namabarang" value=""
                                placeholder="Enter Nama Barang">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="hargabarang" class="form-label">Harga Barang</label>
                            <input class="form-control" type="text" name="hargabarang" id="hargabarang" value=""
                                placeholder="Enter Harga Barang">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="deskripsibarang" class="form-label">Deksripsi Barang</label>
                            <input class="form-control" type="text" name="deskripsibarang" id="deskripsibarang" value=""
                                placeholder="Enter Deskripsi Barang">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('employees.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circle
me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark
btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @endsection
</body>

</html>
