<?php include 'views/inc/header.php'; ?>

<div class="content-wrapper">
	<div class="container">
		<div class="col-md-6 col-md-offset-2">
			<h2>Update type product</h2>
			<form action="save-update-typeproduct" method="post" accept-charset="utf-8">
				<input type="hidden" name="id" value="<?= $model->id?>">
				<div class="form-group">
					<label for="">Tên loại sản phẩm</label>
					<input type="text" required="" name="tenloai" class="form-control" value="<?= $model->tenloai ?>">
				</div>
				<div class="form-group">
					<button type="submit">Update</button>
				</div>			
			</form>
		</div>	
	</div>
</div>

<?php include 'views/inc/footer.php' ?>