@extends('layout.index')
@section('content')
<div class="content-wrapper">
<section class="content">
	<div class="container">		
	
		<div class="col-md-12 ">
			<div class="row">
				<form class="form-horizontal" action="sualuong" method="post">
					{{ csrf_field() }}
					<legend style="color: red; font-size: 35px; text-align: center;">Sửa Danh Sách </legend>	
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Mã Lương</label>
						<div class="col-xs-5 selectContainer">
						<input class="form-control" value="{{$luong->MaLuong}}" name="MaLuong" readonly placeholder="Mã Lương" />
						</div>
					</div>					 			
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Mã Nhân Viên</label>
						<div class="col-xs-5 selectContainer">
				            <select class="form-control" name="MaNhanVien">
				                @foreach($nhanvien as $nv)
						 					<option value="{{$nv->MaNhanVien}}">{{$nv->MaNhanVien}}</option>
				                @endforeach
				            </select>
				        </div>
					</div>					
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Lương Cơ Bản</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="LuongCoBan" value="{{$luong->LuongCoBan}}" />
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
						<label class="col-xs-4 control-label">Mã Chấm Công</label>
						<div class="col-xs-5 selectContainer">
				            <select class="form-control" name="MaCC">
				                @foreach($chamcong as $cc)
											<option value="{{$cc->MaCC}}">{{$cc->MaCC}}</option>
				                @endforeach
				            </select>
				        </div>
					</div> 
					
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Thuế</label>
				        <div class="col-xs-5 ">
				            <input type="text" class="form-control" name="Thue" value="{{$luong->Thue}}" />
				        </div>
					</div>	 
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Bảo Hiểm  </label>
						<div class="col-xs-5 selectContainer">
				            <select class="form-control" name="MaBH">
				                @foreach($baohiem as $bh)
											<option value="{{$bh->MaBH}}">{{$bh->MaBH}}</option>
				                @endforeach
				            </select>
				        </div>
					</div>

					<div class="col-md-12">
						<div class="col-xs-4"></div>
						<div class="col-xs-4">
							<button type="submit" class="btn btn-primary">Lưu</button>
							<button type="submit" class="btn btn-warning">Hủy</button>
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
