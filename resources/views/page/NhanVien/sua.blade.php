

@extends('layout.index')
@section('content')
<div class="content-wrapper">
<section class="content">
	<div class="container">		
	
		<div class="col-md-12 ">
			<div class="row">
				<form class="form-horizontal" action="suanv" method="post">
					{{ csrf_field() }}
					<legend style="color: red; font-size: 35px; text-align: center;">Sửa Nhân Viên </legend>	
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Mã Nhân Viên</label>
						<div class="col-xs-5 selectContainer">
						<input class="form-control" value="{{$nhanvien->MaNhanVien}}" name="MaNhanVien" readonly placeholder="Mã Nhân Viên" />
						</div>
					</div>								
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Mã Lương</label>
						<div class="col-xs-5 selectContainer">
				            <select class="form-control" name="MaLuong">
				                @foreach($luong as $l)
											<option value="{{$l->MaLuong}}">{{$l->MaLuong}}</option>
				                @endforeach
				            </select>
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Mã Phòng Ban</label>
						<div class="col-xs-5 selectContainer">
				            <select class="form-control" name="MaPB">
				                @foreach($phongban as $pb)
											<option value="{{$pb->MaPB}}">{{$pb->MaPB}}</option>
				                @endforeach
				            </select>
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Mã Chức Vụ</label>
	 					<div class="col-xs-5 selectContainer">
				            <select class="form-control" name="MaCV">
				                @foreach($chucvu as $cv)
											<option value="{{$cv->MaCV}}">{{$cv->MaCV}}</option>
				                @endforeach
				            </select>
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Họ Tên</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="HoTen" value="{{$nhanvien->HoTen}}" />
				        </div>
					</div>
					
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Ngày Sinh</label>
				        <div class="col-xs-5 ">
				            <input type="date" class="form-control" name="NgaySinh" value="{{$nhanvien->NgaySinh}}" />
				        </div>
					</div>
						<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Giới Tính</label>
				        <div class="col-xs-5">
								<input name='GioiTinh' checked="{{$nhanvien->GioiTinh}}" type='radio' value='Nam'/>Nam
								<input name='GioiTinh' checked="{{$nhanvien->GioiTinh}}" type='radio' value='Nữ'/>Nữ
				         </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Nơi Sinh</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="NoiSinh"  value="{{$nhanvien->NoiSinh}}" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">CMND</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="CMND"  value="{{$nhanvien->CMND}}" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Ngày Cấp</label>
				        <div class="col-xs-5">
				            <input type="date" class="form-control" name="NgayCapCmnd"  value="{{$nhanvien->NgayCapCmnd}}" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Nơi Cấp</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="NoiCap" value="{{$nhanvien->NoiCap}}" />
				        </div>
					</div>
						
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Dân Tộc</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="DanToc" value="{{$nhanvien->DanToc}}"/>
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Quốc Tịch</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="QuocTich" value="{{$nhanvien->QuocTich}}" />
				        </div>
					</div>	
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">TT Hôn Nhân</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="TTHonNhan" value="{{$nhanvien->TTHonNhan}}" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Quê Quán</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="QueQuan" value="{{$nhanvien->QueQuan}}"/>
				        </div>
					</div>

					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Nơi Ở HT</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="NoiOHienTai" value="{{$nhanvien->NoiOHienTai}}" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">SDT</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="SDT" value="{{$nhanvien->SDT}}"/>
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Email</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="Email" value="{{$nhanvien->Email}}"/>
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Ngày TD</label>
				        <div class="col-xs-5">
				            <input type="date" class="form-control" name="NgayTuyenDung" value="{{$nhanvien->NgayTuyenDung}}"/>
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Cơ quan TD</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="CoQuanTuyenDung" value="{{$nhanvien->CoQuanTuyenDung}}" />
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">TD Học Vấn</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="TDHocVan" value="{{$nhanvien->TDHocVan}}"/>
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Kinh Nghiệm</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="KinhNghiem" value="{{$nhanvien->KinhNghiem}}"/>
				        </div>
					</div>		
					<div class="col-md-12">
						<div class="col-xs-4"></div>
						<div class="col-xs-4">
							<button type="submit" class="btn btn-primary ">Lưu</button>
							<button type="submit" class="btn btn-warning ">Hủy</button>
						</div>
						<div class="col-xs-4"></div>
					</div> 
					
				</form>		
		</div>
	</div>
	</div>
</section>
</div>
@endsection