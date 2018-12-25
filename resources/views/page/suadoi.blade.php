@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sửa thông tin</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Sửa thông tin</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
			
			<form action="{{route('change')}}" method="post" class="beta-form-checkout">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="row">
					<div class="col-sm-3"></div>
					@if(count($errors)>0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
							{{$err}}
							@endforeach
						</div>
					@endif
					@if(Session::has('thanhcong'))
						<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
					@endif
					<div class="col-sm-6">
						<h4>Sửa thông tin</h4>
						<div class="space20">&nbsp;</div>
						
						<div class="form-block">
							<label for="email">Email*</label>
							<input type="email" name="email" value="{{Auth::user()->email}}" disabled>
						</div>
						<div class="form-block">
							<label for="your_last_name">Tên*</label>
							<input type="text" name="name" required value="{{Auth::user()->name}}">
						</div>
						<div class="form-block">
							<label for="adress">Địa chỉ</label>
							<input type="text" name="address" value="{{Auth::user()->address}}">
						</div>
						<div class="form-block">
							<label for="phone">Số điện thoại</label>
							<input type="text" name="phone" value="{{Auth::user()->phone}}">
						</div>
						<div class="form-block">
							<label for="phone">Mật khẩu mới*</label>
							<input type="password" name="password" required>
						</div>
						<div class="form-block">
							<label for="phone">Nhập lại mật khẩu*</label>
							<input type="password" name="re_password" required>
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Lưu</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection