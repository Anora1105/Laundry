@extends('layouts.mainbar')
@section('main')
<h1 class="text-center mb-4"> Laundry Penuh Kuman</h1>
<div class="container justify-content-center">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                 <a href="/tambah" type="button" class="btn btn-secondary">Tambah</a>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Laundry</th>
                        <th scope="col">Paket</th>
                        <th scope="col">Berat</th>
                        <th scope="col">Status</th>
                        <th scope="col">Outlet</th>
                        <th scope="col">Total Bayar</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                        $no = 1;
                        @endphp 

                        @foreach($dataTransaksi as $index =>$row)
                        <tr>
                        <td> <?php echo $no++; ?></td>
                        <td>{{ $row->namacustomer}}</td>
                        <td>{{ $row->jenislaundry}}</td>
                        <td>{{ $row->paket}}</td>
                        <td>{{ $row->berat}}</td>
                        <td><center>
                                <div class="progress" style="width: 45px;">
                                    <div class="progress-bar {{ ($row->status == 'selesai') ? 'bg-success 9' : 'bg-danger' }}" style="width: 100%" arial-valuenow="20" arial-valuemin="0" arial-valuemax="20">
                                        {{$row->status}}
                                    </div>
                                </div>
                            </center></td>
                        <td>{{ $row->outlet}}</td>
                        <td>{{ $row->totalbayar}}</td>
                        <td>@if($row->status === 'proses')
                            <a href="/edit/{{$row->id}}" type="button" class="btn btn-warning">Edit</a>
                            <a href="/hapus/{{$row->id}}" type="button" class="btn btn-danger">Hapus</a>
                            @endif
                            <a href="/nota/{{$row->id}}" type="button" class="btn btn-info">Nota</a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection