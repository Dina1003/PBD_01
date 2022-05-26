<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    
    public function index(){
        $data = DB::table('transaksis')->get();
        $bar = DB::table('barangs')->get();
        $restok = DB::table('restoks')->get();
        return view('Dashboard.dashboard', ['data'=> $data], ['bar'=> $bar],['restok'=> $restok]); 
       
    }

    
    
   
  
}
