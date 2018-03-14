 @extends('layout.index')

@section('content')
<div class="content-wrapper">
<section class="content">
	<div class="container-fluid">		
		<div class="row">
        <div class="col-lg-12 col-xs-12">
		<div class="box box-block bg-white">
			<div>
				<h5 style="color: red; font-size: 35px; text-align: center;">Lương Nhân Viên
				</h5>
						<form action="#" method="get" class="form-inline">
					        <div class="input-group">
					          <input type="text" name="" class="form-control" placeholder="Search...">
					          <span class="input-group-btn">
					                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
					                </button>
					          </span>
			 		        </div>
					        <a type="submit" href="themluong" class="btn btn-primary">Thêm</a>
					    </form>
				
			</div>
			<table class="table table-stripped table-bordered table-hover">
				<thead>
					<tr align="center">
						<th>Mã lương</th>
						<th>Mã nhân viên</th>
						<th>Lương Cơ bản</th>
						<th>Mã phòng ban</th>
						<th>Mã chấm công</th>
						<th>Thuế</th>
						<th>Bảo hiểm</th>
						<th>Thao tác</th>
					</tr>
				</thead>
				<tbody>
					@foreach($luong as $l)
					<tr>
						<td>{{ $l->MaLuong }}</td>
						<td>{{ $l->MaNhanVien }}</td>
						<td>{{ $l->LuongCoBan }}</td>
						<td>{{ $l->MaPB }}</td>
						<td>{{ $l->MaCC }}</td>
						<td>{{ $l->Thue }}</td>
						<td>{{ $l->BaoHiem }}</td>
						<td>
							<a href="sualuong?maluong={{ $l->MaLuong }}" data-toggle="modal" data-whatever="@mdo"><span class="fa fa-pencil"></span></a>&nbsp;
							<a href="xoaluong?maluong={{ $l->MaLuong }}"><span class="fa fa-trash"></span></a>							
						</td>
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