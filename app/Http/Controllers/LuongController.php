<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nhanvien;
use App\luong; 
use App\chamcong;
use App\phongban;
use App\baohiem;

class LuongController extends Controller
{ 
     public function getDanhSach(){  
        $banluong = new luong(); 
        $luong = $banluong->xuatluong();
        return view('page.luong',['luong'=>$luong]);
    }
    public function getLuongAdmin(){
    	$luong = luong::all();        
        return view('page.Luong.luongadmin',['luong'=>$luong]);
    }
    public function getThem(){
        $phongban = phongban::all();
        $chamcong = chamcong::all(); 
        $nhanvien = nhanvien::all(); 
        $baohiem = baohiem::all();  
        return view('page.Luong.them',['phongban' =>$phongban,'chamcong' =>$chamcong, 'nhanvien' => $nhanvien,'baohiem' =>$baohiem]);
    }
    public function postThem(Request $request){
        
        $luong = new luong;
        $luong->MaNhanVien = $request->MaNhanVien;
        $luong->LuongCoBan = $request->LuongCoBan;
        $luong->MaPB = $request->MaPB; 
        $luong->MaCC = $request->MaCC;
        $luong->Thue = $request->Thue;
        $luong->BaoHiem = $request->MaBH;
        
        $luong->save();
        return redirect('luongadmin');
    }
    public function getSua(Request $request){        
        $phongban = phongban::all();
        $chamcong = chamcong::all(); 
        $nhanvien = nhanvien::all(); 
        $baohiem = baohiem::all();
        $luong = luong::where('MaLuong','=',$request->maluong)->get();
        
        return view('page.Luong.sua',['phongban' =>$phongban,'chamcong' =>$chamcong, 'nhanvien' => $nhanvien,'baohiem' =>$baohiem, 'luong' =>$luong[0] ]);
    }
    public function postSua(Request $request){
        
        $luong = luong::where('MaLuong',$request->MaLuong)->update(['MaNhanVien'=> $request->MaNhanVien,'LuongCoBan'=> $request->LuongCoBan,'MaPB'=> $request->MaPB,'MaCC' => $request->MaCC, 'Thue' => $request->Thue,'BaoHiem' => $request->BaoHiem]);
        
        return redirect('luongadmin');
    }
    public function getXoa(Request $request){

		$luong = luong::where('MaLuong',$request->maluong)->delete();
    	return redirect()->back();
    }

} 
  