<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;


class luong extends Model
{ 
	protected $table ='luong';
    public $timestamps = false;
    function xuatluong(){
    	$luong = DB::select("SELECT luong.MaLuong,nhanvien.HoTen,luong.LuongCoBan,phongban.TenPB,ROUND(luong.LuongCoBan/26 *chamcong.TongNgayCong,-3) as 'TongLuong',chamcong.Thang, chamcong.Nam FROM luong,chamcong,nhanvien,phongban WHERE luong.MaCC= chamcong.MaCC AND nhanvien.MaNhanVien = chamcong.MaNhanVien AND phongban.MaPB = luong.MaPB");
    	return $luong;
    }
} 
  