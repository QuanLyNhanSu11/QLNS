<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class nhanvien extends Model
{
    protected $table ='nhanvien';
 
	protected $primaryKey = 'MaNhanVien'; 
	 
	public $timestamps = false;
	 
	
	public function dem(){
		$dem = DB::select("select * from phongban where MaPB not in (SELECT MaPB from nhanvien )");
		return $dem;
	}

}
