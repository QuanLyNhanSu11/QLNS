@extends('layout.index')
@section('content')
<div class="content-wrapper">
<section class="content">
	<div class="container">		
		<div class="col-md-12">
			<div class="row">
				<form class="form-horizontal" action="themcc" method="post">
					{{ csrf_field() }}
					<legend style="color: red; font-size: 25px; text-align: center;">Thêm Bảng Chấm Công </legend>				
				<row class="col-md-12">					
					<div class="form-group col-md-3">
						<label class="col-xs-5 control-label">Chọn Ca Làm Việc</label>
						<div class="col-xs-7 selectContainer">
				            <select class="form-control" name="calam">
				                <option value="">Chọn ca làm</option>
				                @foreach($calamviec as $clv)
											<option value="{{$clv->TenCa}}">{{$clv->TenCa}}</option>
				                @endforeach
				            </select>
				        </div>
					</div>
					<div class="form-group col-md-3">
						<label class="col-xs-5 control-label">Tên Nhân Viên</label>
						<div class="col-xs-7 selectContainer">
				            <select class="form-control" name="tennv">
				                <option value="">Chọn Tên</option>
				                @foreach($nhanvien as $ten)
											<option value="{{$ten->HoTen}}">{{$ten->HoTen}}</option>
				                @endforeach
				            </select>
				        </div>
					</div>
					<div class="form-group col-md-3">
						<label class="col-xs-5 control-label">Tháng</label>
						<div class="col-xs-7 selectContainer">
				            <select class="form-control" name="MaCV">
				                <option value="">Chọn Tháng</option>
				                @for($i=0;$i < 13; $i++)
											<option value="{{$i}}">{{$i}}</option>
				                @endfor
				            </select>
				        </div>
					</div>		 
					<button type="submit" class="btn btn-primary col-md-1">Thêm</button>
				</row>
				</form>			
		</div>
	</div>
</div>
</section>
</div>
@endsection