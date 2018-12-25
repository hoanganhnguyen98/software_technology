<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><i class="fa fa-home"></i>
						Phòng 207 nhà TC - Viện Đào tạo liên tục
						</br>
						94 Lê Thanh Nghị, Bách Khoa, Hai Bà Trưng, Hà Nội
						</li>
						<li><i class="fa fa-phone"></i>
						0987654321 - dogobachkhoa@gmail.com
						</li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
					@if(Auth::check())
						<li><a href="{{route('info')}}">Xin chào {{Auth::user()->name}}</a></li>
						<li><a href="{{route('logout')}}">Đăng xuất</a></li>
					@else
						<li><a href="{{route('signin')}}">Đăng kí</a></li>
						<li><a href="{{route('login')}}">Đăng nhập</a></li>
					@endif

					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
						<a href="{{route('trang-chu')}}" id="logo"><img src="source/assets/dest/images/logo-bk.png" width="200px" alt="trang-chu"></a>
				</div>
				<!-- <div class="pull-left"><p></p></div> -->
				<!-- <div class="center-block">
					<h4 class="widget-title"><em>K Tigers</em></h4>
						<iframe width="500" height="200"
						src="https://www.youtube.com/embed/uU6bXUsPN7k"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture">
						</iframe>
				</div> -->
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="/">
					        <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>
					<div class="beta-comp">
					
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (@if(Session::has('cart')){{Session('cart')->totalQty}}@else Trống @endif) <i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">

							@if(Session::has('cart'))
							@foreach($product_cart as $product)
								<div class="cart-item">
									<a class="cart-item-delete" href="{{route('xoagiohang',$product['item']['id'])}}"><i class="fa fa-times"></i></a>
									<div class="media">
										<a class="pull-left" href="#"><img src="source/image/product/{{$product['item']['image']}}" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">{{$product['item']['name']}}</span>
											<span class="cart-item-amount">{{$product['qty']}}*<span>@if($product['item']['promotion_price']==0){{number_format($product['item']['unit_price'])}} @else {{number_format($product['item']['promotion_price'])}}@endif</span></span>
										</div>
									</div>
								</div>
							@endforeach
								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">@if(Session::has('cart')){{number_format($totalPrice)}} @else 0 @endif đồng</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="{{route('dathang')}}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							@endif
							</div>
						</div> <!-- .cart -->
					</div>
					<div>
						<marquee><em>Tốt gỗ hơn tốt nước sơn - Mua đồ mỹ nghệ còn hơn mua vàng</em></marquee>
					</div>
				</div>
				<div class="clearfix"></div>
				
			</div> <!-- .container -->
		</div> <!-- .header-body -->

		<!-- <div id='ads-left'>
		<div style='margin:0 0 5px 0; padding:0;width:200px;position:fixed; left:0; top:0;'>
		<a href="https://www.facebook.com/dogonoithatmynghelienha/" target='_blank'><img src="https://media.giphy.com/media/3oriO6qJiXajN0TyDu/giphy.gif" height='500' width='120'/></a>
		</div></div> -->

		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{route('trang-chu')}}">Trang chủ</a></li>
						<li><a>Loại sản phẩm</a>
							<ul class="sub-menu">
								@foreach($loai_sp as $loai)
								<li><a href="{{route('loaisanpham',$loai->id)}}">{{$loai->name}}</a></li>
								@endforeach
							</ul>
						</li>
						<li><a href="{{route('gioithieu')}}">Giới thiệu</a></li>
						<li><a href="{{route('lienhe')}}">Liên hệ</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->