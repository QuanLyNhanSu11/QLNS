@extends('layout.index')
@section('content')
<div class="content-wrapper">
<section class="content">
	<div class="container-fluid">		
		<div class="row">
        <div class="col-lg-12 col-xs-12">
			<div class="box box-block bg-white">
				<h5 style="color: red; font-size: 45px; text-align: center;"> Yêu cầu tuyển nhân viên tại phòng ban 	</h5>

				<table class="table table-stripped table-bordered table-hover">
				<thead>
					<tr align="center">
						<th>Mã PB</th>
						<th>Ten PB</th>
					
					</tr>
				</thead>
				<tbody>
					@foreach($dem as $d)
					<tr>
						<td>{{ $d->MaPB }}</td>
						<td>{{ $d->TenPB }}</td>					
					</tr>
					@endforeach
				</tbody>
			</table>
			<br>
			<div class="col-xs-4"></div>	
			<div class="col-xs-4">	
				<button type="submit" ><a href="themhs">Danh Sách Tuyển Dụng</a></button>	
			</div>
			</div>
	</div>
</div>
</div>
</section>
</div>
@endsection