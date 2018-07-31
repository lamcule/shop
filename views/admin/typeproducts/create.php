<?php include 'views/inc/header.php'; ?>

<div class="content-wrapper">
	<div class="container">
		<div class="col-md-6 col-md-offset-2">
			<h2>Create type product</h2>
			<form action="save-typeproduct" method="post" accept-charset="utf-8">
				<div class="form-group">
					<label for="">Tên loại sản phẩm</label>
					<input type="text" required="" name="tenloai" class="form-control">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Save</button>
				</div>			
			</form>
		</div>	
	</div>
</div>

<?php include 'views/inc/footer.php' ?>