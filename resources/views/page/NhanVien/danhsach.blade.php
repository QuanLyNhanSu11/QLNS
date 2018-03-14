@extends('layout.index')
@section('content')
<div class="content-wrapper">
<section class="content">
	<div class="container-fluid">		
		<div class="row">
      <div class="col-lg-12 col-xs-12">        	
				<div class="box box-block bg-white">
					<div>
						<h5 style="color: red; font-size: 35px; text-align: center;">Danh sách nhân viên</h5>
						<form action="#" method="get" class="form-inline">
					        <div class="input-group">
					          <input type="text" name="" class="form-control" placeholder="Search...">
					          <span class="input-group-btn">
					                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
					                </button>
					          </span>
					        </div>
					        <a type="submit" href="themnv" class="btn btn-primary">Thêm</a>
					    </form>
						
					</div>
					<div class="table-responsive">
						<table class="table table-stripped table-bordered table-hover">
							<thead>
								<tr align="center">
									<th>Mã NV</th>
									<th>Mã Lương</th>
									<th>Mã PB</th>
									<th>Mã CV</th>
									<th>Họ Tên</th>
									<th>Giới Tính</th>
									<th>Ngày Sinh</th>
									<th>CMND</th>
									<th>Nơi Ở HT</th>
									<th>SDT</th>
									<th>Email</th>
									<th>Ngày TD</th>
									<th>Kinh Nghiệm</th>
								</tr>
							</thead>
							<tbody>
								@foreach($nhanvien as $nv)
								<tr class="odd gradeX" align="center">
									<td>{{$nv->MaNhanVien}}</td>
									<td>{{$nv->MaLuong}}</td>
									<td>{{$nv->MaPB}}</td>
									<td>{{$nv->MaCV}}</td>						
									<td>{{$nv->HoTen}}</td>
									<td>{{$nv->GioiTinh}}</td>
									<td>{{$nv->NgaySinh}}</td>
									<td>{{$nv->CMND}}</td>
									<td>{{$nv->NoiOHienTai}}</td>
									<td>{{$nv->SDT}}</td>
									<td>{{$nv->Email}}</td>
									<td>{{$nv->NgayTuyenDung}}</td>
									<td>{{$nv->KinhNghiem}}</td>
									<td>
										<a href="suanv?manv={{ $nv->MaNhanVien }}" data-toggle="modal" data-whatever="@mdo"><span class="fa fa-pencil"></span></a>&nbsp;
										<a href="xoanv?manv={{ $nv->MaNhanVien }}"><span class="fa fa-trash"></span></a>						
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>		
				</div>
			</div>
		</div>
	</div>
</section>
</div>
@endsection