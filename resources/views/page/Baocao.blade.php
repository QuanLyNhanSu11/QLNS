@extends('layout.index')
@section('content')
<div class="content-wrapper">
<section class="content">
	<div class="container-fluid">		
		<div class="row">
        <div class="col-lg-12 col-xs-12">
			<div class="box box-block bg-white">
				<h5 style="color: red; font-size: 45px; text-align: center;">Báo Cáo Lương Nhân Viên	</h5>
				<div class="col-xs-12">
					<div>
						<p>Lọc theo:</p>
					</div>
					<div class="col-xs-4">
						<select class="form-control"  name="mapb">
							<option value="">Chọn phòng ban</option>
				                @foreach($luong as $l)
									<option value="{{$l->TenPB}}">{{$l->TenPB}}</option>
				                @endforeach
						</select>
					</div>
					
					<div class="col-xs-4">
						<select class="form-control"  name="mapb">
							<option value="">Chọn tháng</option>
				                @foreach($luong as $l)
									<option value="{{$l->Thang}}">{{$l->Thang}}</option>
				                @endforeach
						</select>
					</div>
					<div class="col-xs-4">
						<select class="form-control"  name="mapb">
							<option value="">Chọn năm</option>
				                @foreach($luong as $l)
									<option value="{{$l->Nam}}">{{$l->Nam}}</option>
				                @endforeach
						</select>
					</div>
				</div>	
				<hr/>			
				<table class="table table-stripped table-bordered table-hover">
				<thead>
					<tr align="center">
						<th>Mã Lương</th>
						<th>Tên Nhân Viên</th>
						<th>Tên Phòng Ban</th>
						<th>Tổng Lương</th>
						<th>Tháng</th>
						<th>Năm</th>

					</tr>
				</thead>
				<tbody>
					@foreach($luong as $l)
					<tr>
						<td>{{ $l->MaLuong }}</td>
						<td>{{ $l->HoTen }}</td>
						<td>{{ $l->TenPB }}</td>
						<td>{{ $l->TongLuong }}</td>
						<td>{{ $l->Thang }}</td>
						<td>{{ $l->Nam }}</td>						
					</tr>
					@endforeach
				</tbody>
			</table>
			<br>			
		</div>
	</div>
</div>
</div>
</section>
</div>
@endsection