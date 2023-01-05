<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_dosen;

class Dosen extends Controller
{
   function profil()
   {
        $data1 = tb_dosen::get();
        $data = [
            'data' => $data1
        ];
        return view('dosen.v_profil', $data);
   }
   function data_pengampu()
   {
    return view('dosen.v_ampu');
   }
}
