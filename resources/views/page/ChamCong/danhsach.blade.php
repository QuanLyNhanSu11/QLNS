@extends('layout.index');
@section('content')
<div class="content-wrapper">
<section class="content">
	<div class="container-fluid">		
		<div class="row">
      <div class="col-lg-12 col-xs-12">        	
				<div class="box box-block bg-white">
					<div>
						<h5 style="color: red; font-size: 25px">Bảng Chấm Công</h5>
						<form action="#" method="get" class="form-inline">
					        <div class="input-group">
					          <input type="text" name="" class="form-control" placeholder="Search...">
					          <span class="input-group-btn">
					                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
					                </button>
					          </span>
					        </div>
					        <a type="submit" href="themcc" class="btn btn-primary">Thêm</a>
					    </form>
						
					</div>
					<div class="table-responsive">
						<table class="table table-stripped table-bordered table-hover">
							<thead>
								<tr align="center">
									<th>Mã Chấm Công</th>
									<th>Mã Ca</th>
									<th>Mã Nhân Viên</th>
									<th>Tổng Ngày Công</th>
									<th>Tổng Ca</th>
									<th>Tháng</th>
									<th>Năm</th>
								</tr>
							</thead>
							<tbody>
								@foreach($chamcong as $cc)
								<tr class="odd gradeX" align="center">
									<td>{{$cc->MaCC}}</td>
									<td>{{$cc->MaCa}}</td>
									<td>{{$cc->MaNhanVien}}</td>
									<td>{{$cc->TongNgayCong}}</td>
									<td>{{$cc->Tongca}}</td>						
									<td>{{$cc->Thang}}</td>
									<td>{{$cc->Nam}}</td>
									
									<td>
										<a href="suacc?macc={{ $cc->MaCC }}" data-toggle="modal" data-whatever="@mdo"><span class="fa fa-pencil"></span></a>&nbsp;
										<a href="xoacc?macc={{ $cc->MaCC }}"><span class="fa fa-trash"></span></a>						
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