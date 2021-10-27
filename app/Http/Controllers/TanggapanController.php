<?php

namespace App\Http\Controllers;

use App\Models\Tanggapan;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TanggapanController extends Controller
{
    public function index(){
        $tanggapans = Tanggapan::all();
        return view('case-study', compact('tanggapans'));
    }

}
