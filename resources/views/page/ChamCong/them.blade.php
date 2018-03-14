@extends('layout.index')
@section('content')
<div class="content-wrapper">
<section class="content">
	<div class="container">		
		<div class="col-md-12">
			<div class="row">
				<form class="form-horizontal" action="themcc" method="post">
					{{ csrf_field() }}
					<legend style="color: red; font-size: 35px; text-align: center;">Thêm Bảng Chấm Công </legend>				
				<row class="col-md-12">					
					<div class="form-group col-md-3">
						<label class="col-xs-5 control-label">Chọn Ca Làm Việc</label>
						<div class="col-xs-7 selectContainer">
				            <select class="form-control" name="maca">
				                <option value="">Chọn ca làm</option>
				                @foreach($calamviec as $clv)
											<option value="{{$clv->MaCa}}">{{$clv->TenCa}}</option>
				                @endforeach
				            </select>
				        </div>
					</div>
					<div class="form-group col-md-3">
						<label class="col-xs-5 control-label">Tên Nhân Viên</label>
						<div class="col-xs-7 selectContainer">
				            <select class="form-control" name="manv">
				                <option value="">Chọn Tên</option>
				                @foreach($nhanvien as $ten)
											<option value="{{$ten->MaNhanVien}}">{{$ten->HoTen}}</option>
				                @endforeach
				            </select>
				        </div>
					</div>
					<form method="get">
					<div class="form-group col-md-3">
						<label class="col-xs-5 control-label">Tháng</label>
						<div class="col-xs-7 selectContainer">
				            <select class="form-control" name="thang" id='laythang' onchange="getNgay()">
				                <option value="" >Chọn Tháng</option>
				                @for($i=1;$i < 13; $i++)
									<option value="{{$i}}">{{$i}}</option>
				                @endfor
				            </select>
				        </div>
					</div>	
 
					<button type="submit" class="btn btn-primary col-md-1">Thêm</button>
				</row>
				<row class="col-md-12">
					<div class="col-xs-7 selectContainer">						
						<table border="2" id="ds" class="table table-striped">
							
				       	</table>
				    </div>
				</row>
				</form>			
		</div>
	</div>
</div>
</section>
</div>
<script language="javascript">
        function getNgay(){
        	var x=document.getElementById('laythang').value;
        	var a = new Date(2018, x, 0).getDate();
        	var c='';
        	
        		c += "<thead><tr>";
        		for(var i=1; i<=a; i++){
        			c+=" <th>"+i+ "<input type='checkbox' name='dem[]' value='"+i+"'></th>";
        		}
        		"</tr></tbody>";
        	
        	document.getElementById('ds').innerHTML = c;
        	
        } 
</script>
@endsection