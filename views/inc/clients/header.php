<header style="border-bottom: 0.5px solid #dbdbdb">
		<div class="container-fluid">
			<div class="row">
				<div class="mobile-navigation">
					<nav class="navbar navbar-default" role="navigation">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="homepage">
									<div>
										<img src="views/public/uploads/logo.png" alt="">
									</div>									
								</a>
								<div class="sub-menu-navđ">
									<ul nav-right style="list-style-type: none;text-align: right;">
										<li style="" class="nav-item"><i style="font-size: 24px;" class="pe-7s-shopbag"></i></li>
										<li class="nav-item"><i style="font-size: 24px;" class="pe-7s-search"></i></li>
										<!--<li class="nav-item"><img src="image/icon1.png" alt=""></li>-->
									</ul>
								</div>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-ex1-collapse">
								<ul class="nav navbar-nav">
									<li class="active"><a href="">Home</a></li>
									<li><a href="trousers">Trouser</a></li>
									<li><a href="shirts">Shirt</a></li>
									<li><a href="accessories">Accessories</a></li>
									<li><a href="sign-in">Sign In</a></li>
									<li><a href="contact">Contact</a></li>
								</ul>								
							</div><!-- /.navbar-collapse -->
						</div>
					</nav>
				<!-- >786 -->
				</div>
				<div class="col-sm-3">
					<div class="logo">
						<a href="homepage" title=""><img src="views/public/uploads/logo.png" alt=""></a>
					</div>					
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="menu-navigation">
						<ul class="nav nav-center">
							<li class="nav-item"><a href="homepage" class="nav-link">Home</a></li>
							<li class="nav-item"><a href="trousers" class="nav-link">Trouser</a></li>
							<li class="nav-item"><a href="shirts" class="nav-link">Shirt</a></li>
							<li class="nav-item"><a href="accessories" class="nav-link">Accessories</a></li>
							<li class="nav-item"><?php session_start(); if (isset($_SESSION['user'])) {
								echo '<a href="sign-out" class="">Sign Out</a>';								
								} else{
									echo '<a href="sign-in" class="">Sign In</a>';
								} ?>
								
							</li>
							<li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="menu-item">
						<ul class="nav nav-right">
							<li class="nav-item search"><i class="pe-7s-search" style="font-size: 24px;"></i></li>
							<!--Them vao-->
							<div class="test">
								<form action="search" method="post">
									<input type="text" placeholder="Tìm kiếm" name="search">
									<input type="submit" value="search" name="submit">
								</form>						
							</div>
							<!--Them vao-->
							<li style=" margin: 0 10px;" class="nav-item"></li>
							<li>
								<?php 
									session_start(); 
									if (isset($_SESSION['user'])) {
										echo '<a href="detail-cart" title="" style="padding: 0;"><i class="pe-7s-shopbag" style="font-size: 24px;"></i></a></a>';								
									} else{
										echo '<a href="homepage" title="" style="padding: 0;"><i class="pe-7s-shopbag" style="font-size: 24px;"></i></a></a>';
									} 
								?>
							</li>
							<li style="color: red;"><a href="update-info-customer" style="padding: 0 0; color: red;"><?php session_start(); echo $_SESSION['user']['username'] ?></a></li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<a href="detail-cart" title="" style="padding: 0;"><i class="pe-7s-shopbag" style="font-size: 24px;"></i></a>