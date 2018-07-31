<?php include 'views/inc/header.php' ?>

	<div class="content-wrapper">
		<div class="container">
			<div class="col-md-6 col-md-offset-2">
				<h2>Register</h2>
				<form action="save-customer" method="post" accept-charset="utf-8">
					<div class="form-group">
						<label>Tên khách hàng</label>
						<input type="text" name="tenkhachhang" class="form-control">
					</div>	
					<div class="form-group">
						<label>Địa chỉ</label>
						<input type="text" name="diachi" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Điện thoại</label>
						<input type="text" name="dienthoai" class="form-control">
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="text" name="password" class="form-control">
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
						<label>Trạng thái</label>
						<select name="trangthai" class="form-control">
							<option value="0">0</option>
							<option value="1">1</option>
						</select>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Save customer</button>
					</div>	
				</form>
			</div>	
		</div>
	</div>

<?php include 'views/inc/footer.php' ?>