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
</head>
<body>
	<?php include 'views/inc/clients/header.php'; ?>
	<section>
		  <!-- Wrapper for slides -->
		 	<div class="carousel-inner">
		    	<div class="item active">
		      		<img src="views/public/uploads/anhbanner.jpg" class="img-responsive" alt="...">
		      		<div class="carousel-caption">
						<h5>
						FASHION IS WHAT YOU'RE <br>
						OFFERED FOUR TIMES A YEAR BY DESIGNERS <br></h5>
						<h3>AND STYLE IS WHAT YOU CHOOSE. </h3>
						<h6> -&nbsp; NINE SHOP &nbsp; - </h6>
						<br>
						<br>
						<a class="action-shop-now">
							<span> SHOP NOW <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
						</a>
		      		</div>
		   		</div>
		   	</div>		    
	</section>
	<section>
		<div class="container" style="padding-top: 100px">	
			<div class="row">
				<div class="col-sm-4">
					<div class="banner zoom">
						<img src="views/public/uploads/cogai.png" alt="" class="img-responsive" >
						<div class="middle-left">
							<div class="banner-text">
								<h2><strong>THE - <br> CLOTH <br>'07</strong></h2>	
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="banner zoom">
						<img src="views/public/uploads/doigiay.png" alt="" class="img-responsive ">
						<div class="middle-left">
							<div class="banner-text">
								<h2><strong>SHO <br>.ES <small><b>&</b></small> <br>STYLE</strong></h2>	
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="banner zoom">
						<img src="views/public/uploads/vayxinh.png" alt="" class="img-responsive">
						<div class="middle-left">
							<div class="banner-text">
								<h2><strong>SKIRT <br> IN <br> YOU</strong></h2>	
							</div>
						</div>
					</div>
				</div>
				</div>
			</div> 
		</div>	
	</section>
	<div class="container" style="padding-top: 64px">
		<div class="row">
			<div class="content-heading">
				<div class="sub-title">SWEET THINGS</div>
				<h2 style="margin: 0px" class="titile">NEW ARRIVALS</h2>
				<p style="margin-top: 8px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae magna quis ligula blandit dapibus a in 
				sem. Maecenas porta, justo quis pretium venenatis.</p>
			</div>
		</div>	
	</div>
	<section>
		<div class="container" style="padding-top: 38px;">	
			<div class="row">	
				<?php foreach ($products as $product): ?>
					<div class="col-xs-6 col-sm-3 detail-product">
						<div class="banner">
							<div class="btn01">
					            <a href="detail-product?id=<?=$product->id?>" title=""><img src="<?=$product->anh?>" alt="" class="img-responsive"></a>
					        </div>
					        <div class="itemProduct ivt">
								<i>   </i>
								<h3>
									<span href="" style="font-family: none"><?=$product->tensanpham?></span>
								</h3>
								<span><?=$product->gia?> vnđ</span>
							</div>
						</div>
					</div>
				<?php endforeach ?>	
			</div>
		</div>
	</section>
	<section>
		<div class="container-fluid" style="padding-top: 97px;">
			<div class="row">
				<div class="banner">
					<div class="middle-banner" style="background-image: url('views/public/uploads/men.jpg');">
						<div class="text">
							<!-- <h5>" QUẦN ÁO LÀ THỨ TỒN TẠI DUY NHẤT</h5>
							<h2>NHỮNG THỨ KHÁC CÓ HAY KHÔNG <br>
								 KHÔNG QUAN TRỌNG " </h2>
							<span style="color: white">All start at $49.99</span> -->
						</div>
						<div class="shop-now2">
						<!-- <a href=""><span>SHOP NOW <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>  -->
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="container" style="padding-top: 65px;">
		<div class="row">
			<div class="content-heading">
				<div class="sub-title">THE LATEST</div>
				<h2 style="margin: 0px" class="titile">FROM BLOG</h2>
			</div>
		</div>	
	<section>
		<div class="container" style=" padding: 0px; border-bottom: 1px solid #e1e1e1; padding-top: 33px; padding-bottom: 20px;">	 
			<div class="row">
				<div class="col-sm-4 col-lg-4">
					<div class="banner zoom">
						<img src="views/public/uploads/hiha.png" alt="" class="img-responsive" >
						<div class="text" style="margin-top: 20px;">
							<span>Jan . 23th , 2018</span>
							<h6><b>A Key to shine yourself</b></h6>
							<p style="margin-top: 16px">Lorem ipsum dolor sit amet, consectetur adipisc- <br>ing elit. Etiam vitae magna quis ligula blandit <br> dapibus a in sem. Maecenas porta, justo quis pre- <br>tium venenatis</p>
						</div>
						
					</div>
				</div>
				<div class="col-sm-4 col-lg-4">
					<div class="banner zoom">
						<img src="views/public/uploads/huha.png" alt="" class="img-responsive">
						<div class="text" style="margin-top: 20px;">
							<span>Oct . 13th , 2018</span>
							<h6><b>Fashion in style</b></h6>
							<p style="margin-top: 16px">Lorem ipsum dolor sit amet, consectetur adipisc- <br>ing elit. Etiam vitae magna quis ligula blandit <br> dapibus a in sem. Maecenas porta, justo quis pre- <br>tium venenatis</p>
						</div>
						
					</div>
				</div>
				<div class="col-sm-4 col-lg-4">
					<div class="banner zoom">
						<img src="views/public/uploads/haha.png" alt="" class="img-responsive">
						<div class="text" style="margin-top: 20px;">
							<span>Dec . 31th , 2018</span>
							<h6><b>Tropical trend is on the way</b></h6>
							<p style="margin-top: 16px">Lorem ipsum dolor sit amet, consectetur adipisc- <br>ing elit. Etiam vitae magna quis ligula blandit <br> dapibus a in sem. Maecenas porta, justo quis pre- <br>tium venenatis</p>
						</div>
					</div>
				</div>
				</div>
			</div> 
		</div>	
	</section>
	<div class="banner" style=" letter-spacing: 4px; padding-top: 68px;  padding-bottom: 50px; max-width: 500px; margin: auto;">
		<div class="text-center">
			<h2 style="font-weight: 600; font-size: 32px;margin: auto; padding-bottom: 45px; ">Join our newsletter</h2>
			<input type="text" placeholder="Enter your email address">
		</div>
	</div>		
	<?php include 'views/inc/clients/footer.php'; ?>
	<div class="container" style="padding-top: 20px;">
		<div class="row">
			<div class="col-xs-6">
				<div class="contact">
					<p>2018 <i class="fa fa-copyright"></i> Nine Theme by <span style="color: red">59PM1</span></p>
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
