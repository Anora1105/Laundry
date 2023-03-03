@extends('layouts.mainbar')
@section('main')
<h1 class="text-center mb-4"> Edit Data</h1>
<div class="conatiner justify-content-center">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                <form action="/update/{{ $dataTransaksi->id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Customer</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="namacustomer" value="{{ $dataTransaksi->namacustomer}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Laundry </label>
                        <select class="form-select" aria-label="Default select example" name="jenislaundry">
                            <option selected>{{ $dataTransaksi->jenislaundry }}</option>
                            <option value="1">Badcover</option>
                            <option value="2">Baju</option>
                            <option value="3">Karpet</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Paket</label>
                        <select class="form-select" aria-label="Default select example" name="paket">
                            <option selected>{{ $dataTransaksi->paket }}</option>
                            <option value="Bronze">Bronze</option>
                            <option value="Silver">Silver</option>
                            <option value="Gold">Gold</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Berat</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="berat" value="{{ $dataTransaksi->berat }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Status</label>
                        <select class="form-select" aria-label="Default select example" name="status">
                            <option selected>{{ $dataTransaksi->status }}</option>
                            <option value="proses">proses</option>
                            <option value="selesai">selesai</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Outlet</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="outlet" value="{{ $dataTransaksi->outlet }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection