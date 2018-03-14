<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nhanvien;
use App\luong;
use App\chamcong;
class BaoCaoController extends Controller
{
    public function getDanhSach(){  

        $banluong = new luong();
        $luong = $banluong->xuatluong();
        return view('page.BaoCao',['luong'=>$luong]);
    }

} 
