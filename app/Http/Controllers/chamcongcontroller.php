<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chamcong;
use App\nhanvien;
use App\calamviec;


class chamcongcontroller extends Controller
{
    public function getDanhSach(Request $request){
        $chamcong = chamcong::all();
        
        return view('page.ChamCong.danhsach',['chamcong' =>$chamcong]);
    }
    public function getThem(){
        $chamcong = chamcong::all();
        $nhanvien = nhanvien::all();
        $calamviec = calamviec::all();
        return view('page.ChamCong.them',['chamcong' =>$chamcong,'nhanvien' =>$nhanvien, 'calamviec' => $calamviec]);
    }
    public function postThem(Request $request){
        
        
    }
}
 