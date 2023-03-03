<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class TransaksiController extends Controller
{
    public function transaksi(Request $request){
        $dataTransaksi = Transaksi::all();
        $status = $request->status;
        return view('datatransaksi', compact('dataTransaksi', 'status'),[
            "tittle" => "Transaksi",
            "page" => "Data",
        ]);
    }

    public function tambah(){
        return view('tambah',[
            "tittle" => "Transaksi",
            "page" => "Tambah",
        ]);
    }
    
    public function insert(Request $request){
        $berat = $request->berat;
        $hargapaket = ['Bronze' => 5000, 'Silver' => 10000, 'Gold' => 15000];
        $totalbayar = $berat * $hargapaket[$request->paket];
        DB::table('transaksis')->insert([
           'namacustomer' =>$request->namacustomer, 
           'jenislaundry' =>$request->jenislaundry, 
           'paket' =>$request->paket, 
           'berat' =>$request->berat, 
           'status' =>'proses', 
           'outlet' =>$request->outlet, 
           'totalbayar' =>$totalbayar, 
        ]);
        return redirect('transaksi');
    }

    public function edit($id){
        $dataTransaksi = Transaksi::find($id);
        return view('edit', compact('dataTransaksi'),[
            "tittle" => "Transaksi",
            "page" => "Edit",
        ]);
    }

    public function update(Request $request, $id){
         $dataTransaksi = Transaksi::find($id);
        $berat = $request->berat;
        $hargapaket = ['Bronze' => 5000, 'Silver' => 10000, 'Gold' => 15000];
        $totalbayar = $berat * $hargapaket[$request->paket];
       $dataTransaksi->update([
           'namacustomer' =>$request->namacustomer, 
           'jenislaundry' =>$request->jenislaundry, 
           'paket' =>$request->paket, 
           'berat' =>$request->berat, 
           'status' =>$request->status, 
           'outlet' =>$request->outlet, 
           'totalbayar' =>$totalbayar, 
        ]);
        return redirect('transaksi');
    }

    public function hapus($id){
        $dataTransaksi = Transaksi::find($id);
        $dataTransaksi->delete();
        return redirect('transaksi');
    }
    public function nota(Request $request){
        $dataTransaksi = Transaksi::find($request->id);
        view()->share('datatransaksi', $dataTransaksi);
        $data['transaksi'] =$dataTransaksi;
        $pdf =PDF::loadView('nota',$data);
        return $pdf->stream('nota.pdf');
    }
}
