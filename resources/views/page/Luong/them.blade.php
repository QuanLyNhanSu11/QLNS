@extends('layout.index')
@section('content')
<div class="content-wrapper">
<section class="content">
	<div class="container">		
		<div class="col-md-12">
			<div class="row">
				<form class="form-horizontal" action="themluong" method="post">
					{{ csrf_field() }}
					<legend style="color: red; font-size: 35px; text-align: center;">Thêm Bảng Lương </legend>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Mã Nhân Viên</label>
						<div class="col-xs-5 selectContainer">
				            <select class="form-control" name="MaNhanVien">
				                <option value="">Chọn Mã NV</option>
				                @foreach($nhanvien as $nv)
											<option value="{{$nv->MaNhanVien}}">{{$nv->MaNhanVien}}</option>
				                @endforeach
				            </select>
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Lương Cơ Bản</label>
						<div class="col-xs-5 selectContainer">
				            <select class="form-control" name="LuongCoBan">
				                <option value="">Chọn Mức Lương</option>
								<option value="3000000">3.000.000</option>
								<option value="3500000">3.500.000</option>
								<option value="4000000">4.000.000</option>
				            </select>
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Mã Phòng ban</label>
						<div class="col-xs-5 selectContainer">
				            <select class="form-control" name="MaPB">
				                <option value="">Chọn Mã PB</option>
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
				                <option value="">Chọn Mã Chấm Công</option>
				                @foreach($chamcong as $cc)
									<option value="{{$cc->MaCC}}">{{$cc->MaCC}}</option>
				                @endforeach
				            </select>
				        </div>
					</div>
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Thuế</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" name="Thue" />
				        </div>
					</div>	
					<div class="form-group col-md-6">
						<label class="col-xs-4 control-label">Loại Bảo Hiểm</label>
						<div class="col-xs-5 selectContainer">
				            <select class="form-control" name="MaBH">
				                <option value="">Chọn Mã Bảo Hiểm</option>
				                @foreach($baohiem as $bh)
									<option value="{{$bh->MaBH}}">{{$bh->MaBH}}</option>
				                @endforeach
				            </select>
				        </div>
					</div>
					<div class="col-xs-12">
						<div class="col-xs-4">
						
						</div>
						<div class="col-xs-4">
							
							<button type="submit" class="btn btn-primary">Thêm Mới</button>
						</div>
						<div class="col-xs-4">
						
						</div>
					</div>
					
				</form>			
		</div>
	</div>
</div>
</section>
</div>
@endsection