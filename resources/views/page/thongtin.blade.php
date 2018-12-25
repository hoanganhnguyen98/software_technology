@extends('master')
@section('content')
        <div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Thông tin người dùng</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Thông tin</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
            <div class="container">
                    <div id="content">
					<div class="col-sm-6">
						<h4>Thông tin</h4>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email">Email</label>
							<input type="email" name="email" required value="{{Auth::user()->email}}" disabled>
						</div>

						<div class="form-block">
							<label for="your_last_name">Tên</label>
							<input type="text" name="name" required value="{{Auth::user()->name}}" disabled>
						</div>

						<div class="form-block">
							<label for="adress">Địa chỉ</label>
                                                        <input type="text" name="address" value="{{Auth::user()->address}}" disabled>
						</div>
						<div class="form-block">
							<label for="phone">Số điện thoại</label>
                                                        <input type="text" name="phone" value="{{Auth::user()->phone}}" disabled>
						</div>
						<div class="form-block">
                                                    <a href="{{route('change')}}"><button type="submit" class="btn btn-primary">Sửa thông tin - Mật khẩu</button></a>
						</div>
					</div>
					<div class="col-sm-3"></div>
                    </div> <!-- #content -->
            </div> <!-- .container -->
@endsection