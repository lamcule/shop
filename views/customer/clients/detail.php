<!DOCTYPE html>
<html lang="en">
<head>
	<title> NINE </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="views/css/font-awesome.min.css">
	<link rel="stylesheet" href="views/css/bootstrap.min.css">
	<script src="views/css/jquery-2.2.4.min.js"></script>
	<script src="views/css/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link rel="stylesheet" href="views/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" type="text/css" href="views/css/style.css">
	<link rel="stylesheet" type="text/css" href="views/css/site.css">
	<!-- <script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script> -->
</head>
<body>
	<?php include'views/inc/clients/header.php'; ?>
	
	
	<main style="margin-top: 100px;">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="main-image">
						<img src="<?=$model->anh?>" alt="" width="400px;">
					</div>
				</div>		
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<h6 style="font-family: none; font-weight: bold;">THÔNG TIN CHI TIẾT SẢN PHẨM</h6>
					<div class="main-content">
						<div class="mt-top">
							<div class="name">
								<p><strong style="font-family: none">Tên sản phẩm:</strong> <span style="padding-left: 20px;font-size: 20px; font-family: none"><?=$model->tensanpham?></span></p>
							</div>
							<hr>
							<div class="price">
								<p><strong style="font-family: none">Giá sản phẩm: </strong><span style="padding-left: 20px;font-size: 20px; font-family: none"><?=$model->gia?></span></p>
							</div>
							<hr>
							<div class="info-product">
								<p><strong style="font-family: none">Mô tả: </strong></p>
							</div>
						</div>
						<p>Knit cardigan with an open front, contrasting jewel appliqués on the shoulders, drop-shoulder sleeves, side pockets and button-up fastening in the front.</p>	
						<br>
						
					</div>
					<?php if (isset($_SESSION['user'])): ?>
						<form action="detail-cart" method="post" accept-charset="utf-8">
							<input type="hidden" name="id" value="<?php echo $model->id ?>">
							<input type="hidden" name="name" value="<?php echo $model->tensanpham ?>">
							<input type="hidden" name="price" value="<?php echo $model->gia ?>">
							<div style="padding-bottom: 30px;">
								<b>Số lượng:</b>
								<input type="number" name="quantity" value="1">
							</div>
							<div class="btn">
								<button type="submit" name="submit">Add To Cart</button>
								<!-- <a href="homepage" style="color: #fff" title="" class="btn">Buy More</a> -->
							</div>		
						</form>
					<?php endif ?>
					<?php if (!isset($_SESSION['user'])): ?>
						<form action="sign-in" method="post" accept-charset="utf-8">
							<input type="hidden" name="id" value="<?php echo $model->id ?>">
							<input type="hidden" name="name" value="<?php echo $model->tensanpham ?>">
							<input type="hidden" name="price" value="<?php echo $model->gia ?>">
							<div style="padding-bottom: 30px;">
								<b>Số lượng:</b>
								<input type="number" name="quantity" value="1">
							</div>
							<div class="btn">
								<button type="submit" onclick="" name="submit">Add To Cart</button>
								<!-- <a href="homepage" style="color: #fff" title="" class="btn">Buy More</a> -->
							</div>		
						</form>				
					<?php endif ?>				
					<button type="button"><a href="homepage" style="color: #fff" title="">Buy More</a></button>
				</div>
			</div>
		</div>
		<!-- <section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-product">
							<strong style="font-size: 20px;">MỘT SỐ SẢN PHẨM LIÊN QUAN</strong>
							<hr>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row">
					<div class="same-product">
						<div class="col-xs-6 col-sm-3 detail-product">
							<div class="banner">
								<div class="btn01">
						            <img src="image/5.jpg" alt="" class="img-responsive">
						            <div class="ovrly"></div>
						            <div class="buttons">
						                <a href="#" class="pe pe-7s-search"></a>
						                <a href="#" class="pe pe-7s-like"></a>
						            </div>
						        </div>
						        <div class="itemProduct ivt">
									<i>   </i>
									<h3>
										<a href="">AT9901</a>
									</h3>
									<span>190,000 vnđ</span>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3 detail-product">
							<div class="banner">
								<div class="btn01">
						            <img src="image/6.jpg" alt="" class="img-responsive">
						            <div class="ovrly"></div>
						            <div class="buttons">
						                <a href="#" class="pe pe-7s-search"></a>
						                <a href="#" class="pe pe-7s-like"></a>
						            </div>
						        </div> 
						        <div class="itemProduct ivt">
									<i>   </i>
									<h3>
										<a href="">AT9901</a>
									</h3>
									<span>190,000 vnđ</span>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3 detail-product">
							<div class="banner">
								<div class="btn01">
						            <img src="image/7.jpg" alt="" class="img-responsive">
						            <div class="ovrly"></div>
						            <div class="buttons">
						                <a href="#" class="pe pe-7s-search"></a>
						                <a href="#" class="pe pe-7s-like"></a>
						            </div>
						        </div>
						        <div class="itemProduct ivt">
									<i>   </i>
									<h3>
										<a href="">AT9901</a>
									</h3>
									<span>190,000 vnđ</span>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3 detail-product">
							<div class="banner">
								<div class="btn01">
						            <img src="image/8.jpg" alt="" class="img-responsive">
						            <div class="ovrly"></div>
						            <div class="buttons">
						                <a href="#" class="pe pe-7s-search"></a>
						                <a href="#" class="pe pe-7s-like"></a>
						            </div>
						        </div>
						        <div class="itemProduct ivt">
									<i>   </i>
									<h3>
										<a href="">AT9901</a>
									</h3>
									<span>190,000 vnđ</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
	</main>
	<?php include 'views/inc/clients/footer.php'; ?>
	<div class="container" style="padding-top: 20px;">
		<div class="row">
			<div class="col-xs-6">
				<div class="contact">
					<p>2017 <i class="fa fa-copyright"></i> Nine Theme by <span style="color: red">59PM1</span></p>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="card">
					<ul class="card-icon" style="letter-spacing: 5px">
						<li><a href=""><i class="fa fa-cc-visa"></i></a></li>
						<li><a href=""><i class="fa fa-cc-paypal"></i></a></li>
						<li><a href=""><i class="fa fa-cc-mastercard"></i></a></li>
						<li><a href=""><i class="fa fa-cc-discover"></i></a></li>
						<li><a href=""><i class="fa fa-cc-amex"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</body>
</html>


