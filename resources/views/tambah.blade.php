@extends('layouts.mainbar')
@section('main')
<h1 class="text-center mb-4"> Tambah Data</h1>
<div class="conatiner justify-content-center">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                <form action="/insert" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Customer</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="namacustomer">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis</label>
                        <select class="form-select" aria-label="Default select example" name="jenislaundry">
                            <option selected>Pilih Jenis</option>
                            <option value="Badcover">Badcover</option>
                            <option value="Baju">Baju</option>
                            <option value="Karpet">Karpet</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Paket</label>
                        <select class="form-select" aria-label="Default select example" name="paket">
                            <option selected>Pilih Paket</option>
                            <option value="Bronze">Bronze</option>
                            <option value="Silver">Silver</option>
                            <option value="Gold">Gold</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Berat</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="berat">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Outlet</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="outlet">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection