<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@extends('UI.layout')
@section('content')




	<div class="content_top">
		<div class="back-links">

		</div>
		<div class="clear"></div>
	</div>
	<div class="section group" ng-controller="SanphamCtrl">
		<div class="cont-desc span_1_of_2" >
			<div class="product-details">
				<div class="grid images_3_of_2" >
					<div id="container">
						<div id="products_example">
							<div id="products"  ng-init="getdetail()+getdetailhinh()"  >
								<div  class="slides_container" >

									<div id="slider">
										<figure ng-repeat="$d in data">
											<img  src="{!! asset('public/uploads/<% $d.ten_ha %>') !!}"  alt=" " />
										</figure>
									</div>

								</div>

								{{--<ul class="pagination"  ng-repeat="$d in datas">--}}
								{{--<li><a href="#"><img src="{!! asset('public/ui/images/<% $d.ten_ha %>.jpg') !!}" alt=" " /></a></li>--}}
								{{--<li><a href="#"><img src="public/ui/images/thumbnailslide-2.jpg" alt=" " /></a></li>--}}
								{{--<li><a href="#"><img src="public/ui/images/thumbnailslide-2.jpg" alt=" " /></a></li>--}}
								{{--<li><a href="#"><img src="public/ui/images/thumbnailslide-2.jpg" alt=" " /></a></li>--}}
								{{--</ul>--}}

							</div>
						</div>
					</div>
				</div >
				<div ng-repeat-end="" style="display: block" ></div>




				<div class="desc span_3_of_2"  >
					<h2 ng-repeat="$d in datas"> <% $d.ten_sp %> </h2>
					<p> Cam kết cung cấp sản phẩm tốt nhất </p>
					<div class="price" >
						<p  ng-repeat="$d in datas">Giá bán: <span><% $d.don_gia %> đ</span></p>
					</div>
					<div class="available" ng-repeat="$d in datas">
						<p>Số lượng : <a><% $d.so_luong %> Máy</a> </p>

					</div>
					<div class="share-desc">
						<div class="share">
							<p>Chia sẻ :</p>
							<ul>
								<li><a href="#"><img src="public/ui/images/facebook.png" alt="" /></a></li>
								<li><a href="#"><img src="public/ui/images/twitter.png" alt="" /></a></li>
							</ul>
						</div>
						<div class="button"ng-repeat="$d in datas"><span><a  href="{!! asset('mua-hang/<% $d.id %>/<% $d.ten_sp %>') !!}">Add to Cart</a></span></div>
						<div class="clear"></div>
					</div>

				</div>
				<div class="clear"></div>
			</div>
			<div class="product_desc">
				<div id="horizontalTab">
					<ul class="resp-tabs-list">
						<li>Product Details</li>
						{{--<li>product Tags</li>--}}
						<li>Product Reviews</li>
						<div class="clear"></div>
					</ul>
					<div class="resp-tabs-container" >
						<div class="product-desc" >
							<p ng-repeat="$d in datas"  ng-bind-html="trustAsHtml($d.mo_ta)"></p>


						</div>

						{{--<div class="product-tags">--}}
							{{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>--}}
							{{--<h4>Add Your Tags:</h4>--}}
							{{--<div class="input-box">--}}
								{{--<input type="text" value="">--}}
							{{--</div>--}}
							{{--<div class="button"><span><a href="#">Add Tags</a></span></div>--}}
						{{--</div>--}}

						<div class="review">

							<ul ng-repeat="$d in datas">
								<li>CPU :<a href="#" ><% $d.cpu %></a></li>
								<li>RAM :<a href="#"><% $d.ram %></a></li>
								<li>Hệu điều hành :<a href="#"><% $d.he_dieu_hanh %></a></li>
								<li>PIN :<a href="#"><% $d.pin %></a></li>
								<li>Camera :<a href="#"><% $d.camera %></a></li>
								<li>Màn hình:<a href="#"><% $d.man_hinh %></a></li>
							</ul>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
							<div class="your-review">
								<h3>How Do You Rate This Product?</h3>
								<p>Write Your Own Review?</p>
								<form>
									<div>
										<span><label>Nickname<span class="red">*</span></label></span>
										<span><input type="text" value=""></span>
									</div>
									<div><span><label>Summary of Your Review<span class="red">*</span></label></span>
										<span><input type="text" value=""></span>
									</div>
									<div>
										<span><label>Review<span class="red">*</span></label></span>
										<span><textarea> </textarea></span>
									</div>
									<div>
										<span><input type="submit" value="SUBMIT REVIEW"></span>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});
			</script>
			<div class="content_bottom">
				<div class="heading">
					<h3>Related Products</h3>
				</div>
				<div class="see">
					<p><a href="#">See all Products</a></p>
				</div>
				<div class="clear"></div>
			</div>
			<div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					<a href="#"><img src="images/new-pic1.jpg" alt=""></a>
					<div class="price" style="border:none">
						<div class="add-cart" style="float:none">
							<h4><a href="#">Add to Cart</a></h4>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="#"><img src="images/new-pic2.jpg" alt=""></a>
					<div class="price" style="border:none">
						<div class="add-cart" style="float:none">
							<h4><a href="#">Add to Cart</a></h4>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="#"><img src="images/new-pic4.jpg" alt=""></a>
					<div class="price" style="border:none">
						<div class="add-cart" style="float:none">
							<h4><a href="#">Add to Cart</a></h4>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<img src="images/new-pic3.jpg" alt="">
					<div class="price" style="border:none">
						<div class="add-cart" style="float:none">
							<h4><a href="#">Add to Cart</a></h4>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>

		<div class="rightsidebar span_3_of_1" ng-controller="DanhmucCtrl" >
			<?php

			$d = App\Danhmucs::select('ma_cdm','ten_dm','id')->get()->toArray();

			?>
			<h3>Danh mục</h3>
			<ul class="tree">

				@foreach($d as $item)
					@if($item['ma_cdm']==0)
						<li >
							<a >  {!! $item['ten_dm'] !!}</a>
							{{--<ul class="sub-menu" style="background-color: white">--}}
							{{--@foreach($d as $it)--}}
							{{--@if($it['ma_cdm']== $item['ma_cdm'])--}}
							{{--<li>--}}
							{{--<a href="{!! asset('listtingproduct?=') !!}{!! $it['ma_dm'] !!}">--}}
							{{--{!! $it['ten_dm'] !!}--}}
							{{--</a>--}}
							{{--</li>--}}
							{{--@endif--}}
							{{--@endforeach--}}
							{{--</ul>--}}
							<?php
							$dd = App\Http\Controllers\danhmucController::sub($d,$item['id']);
							echo $dd;

							?>
						</li>
					@endif



				@endforeach
			</ul>



			{{--<div class="subscribe">--}}
			{{--<h2>Newsletters Signup</h2>--}}
			{{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.......</p>--}}
			{{--<div class="signup">--}}
			{{--<form>--}}
			{{--<input type="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';"><input type="submit" value="Sign up">--}}
			{{--</form>--}}
			{{--</div>--}}
			{{--</div>--}}
			{{--<div class="community-poll">--}}
			{{--<h2>Community POll</h2>--}}
			{{--<p>What is the main reason for you to purchase products online?</p>--}}
			{{--<div class="poll">--}}
			{{--<form>--}}
			{{--<ul>--}}
			{{--<li>--}}
			{{--<input type="radio" name="vote" class="radio" value="1">--}}
			{{--<span class="label"><label>More convenient shipping and delivery </label></span>--}}
			{{--</li>--}}
			{{--<li>--}}
			{{--<input type="radio" name="vote" class="radio" value="2">--}}
			{{--<span class="label"><label for="vote_2">Lower price</label></span>--}}
			{{--</li>--}}
			{{--<li>--}}
			{{--<input type="radio" name="vote" class="radio" value="3">--}}
			{{--<span class="label"><label for="vote_3">Bigger choice</label></span>--}}
			{{--</li>--}}
			{{--<li>--}}
			{{--<input type="radio" name="vote" class="radio" value="5">--}}
			{{--<span class="label"><label for="vote_5">Payments security </label></span>--}}
			{{--</li>--}}
			{{--<li>--}}
			{{--<input type="radio" name="vote" class="radio" value="6">--}}
			{{--<span class="label"><label for="vote_6">30-day Money Back Guarantee </label></span>--}}
			{{--</li>--}}
			{{--<li>--}}
			{{--<input type="radio" name="vote" class="radio" value="7">--}}
			{{--<span class="label"><label for="vote_7">Other.</label></span>--}}
			{{--</li>--}}
			{{--</ul>--}}
			{{--</form>--}}
			{{--</div>--}}
			{{--</div>--}}
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<a href="#" id="toTop"><span id="toTopHover"> </span></a>






@endsection()
<style>

	@keyframes slidy {
		0% { left: 0%; }
		20% { left: 0%; }
		25% { left: -100%; }
		45% { left: -100%; }
		50% { left: -200%; }
		70% { left: -200%; }
		75% { left: -300%; }
		95% { left: -300%; }
		100% { left: -400%; }
	}

	body { margin: 0; }
	div#slider { overflow: hidden; }
	div#slider figure img { float: left; }
	div#slider figure {
		position: relative;
		width: 500%;
		margin: 0;
		left: 0;
		text-align: left;
		font-size: 0;
		animation: 15s slidy infinite;
	}

</style>