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
	<link rel="stylesheet" type="text/css" href="views/css/accessory.css">
	<!-- <link rel="stylesheet" type="text/css" href="views/css/style.css"> -->
</head>
<body>
<?php include 'views/inc/clients/header.php'; ?>
	<main>
		<div class="container" style="border-bottom: 2px solid #ccc; padding-bottom: 50px;">
			<div style="padding-top: 100px;" class="row">
				<div class="col-xs-6 col-sm-3 detail-product">
					<div class="banner">
						<div style="border-bottom: 2px solid #ccc; margin: 0px;" class="text">
							<h3 class="list-main">
								<a href="homepage" style="text-decoration: none; font-family: none">Trang chủ </a>
								<i style="font-size: 20px;" class="fa fa-hand-o-right" aria-hidden="true"></i>
								<a href="" style="text-decoration: none">Áo Nam </a>
							</h3>
						</div>
						<div class="category">
							<div class="nav-cate" style="font-family: none;"><h6 style="font-weight: bold">DANH MỤC</h6>
								<ul style="padding: 0;">
									<li><a href="trousers" title="">Quần Nam</a></li>
									<li><a href="shirts" title="">Áo Nam</a></li>
									<li><a href="accessories" title="">Phụ kiện</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<?php foreach ($accessories as $accessory): ?>
					<div class="col-xs-6 col-sm-3 detail-product">
						<div class="banner">
							<div class="btn01">
					           <a href="detail-product?id=<?=$accessory->id?>" title=""><img src="<?=$accessory->anh?>" alt="" class="img-responsive"></a>
					        </div>
					        <div class="itemProduct ivt">
								<i>   </i>
								<h3>
									<span style="font-family: none"><?=$accessory->tensanpham?></span>
								</h3>
								<span><?=$accessory->gia?></span>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
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