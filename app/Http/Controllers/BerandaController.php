<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(){
        $dataBeranda = Beranda::all();
        return view('beranda', compact('dataBeranda'),[
           "tittle" => "ariza",
           "page" => "Beranda",
        ]);
    }
}
