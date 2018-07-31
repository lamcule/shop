<?php include 'views/inc/header.php'; ?>

<div class="content-wrapper">
	<div class="container">
		<h2>Admin Update Customer</h2>
		<form action="save-update-customer" method="post" accept-charset="utf-8">
			<div class="col-md-6 col-md-offset-2">
				<input type="hidden" name="id" value="<?= $model->id ?>">
				<div class="form-group">
					<label>Tên khách hàng</label>
					<input type="text" readonly name="tenkhachhang" class="form-control" value="<?= $model->tenkhachhang?>">
				</div>
				<div class="form-group">
					<label>Địa chỉ</label>
					<input type="text" readonly name="diachi" class="form-control" value="<?= $model->diachi ?>">
				</div>
				<div class="form-group">
					<label>Điện thoại</label>
					<input type="text" readonly name="dienthoai" class="form-control" value="<?= $model->dienthoai ?>">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" readonly name="username" class="form-control" value="<?= $model->username ?>">
				</div>
				<div class="form-group">
					<label>Loại khách hàng</label>
					<select name="loaikhachhang" class="form-control">
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
					</select>
				</div>
				<div class="form-group">
					<label>Tổng tiền</label>
					<input type="text" readonly name="tongtien" class="form-control" value="<?= $model->tongtien?>">
				</div>
				<!-- <div class="form-group">
					<label>Trạng thái</label>
					<select name="trangthai" class="form-control" >
						<option value="1">1</option>
						<option value="0">0</option>
					</select>
				</div> -->
				<div class="form-group">
					<button type="submit" class="btn btn-success">Save update customer</button>
				</div>
			</div>
		</form>	
	</div>
</div>

<?php include 'views/inc/footer.php' ?>