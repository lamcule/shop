<?php include 'views/inc/header.php'; ?>
<div class="content-wrapper">
	<div class="container">
		<h2>Update status order</h2>
		<form action="save-update-order" method="post" accept-charset="utf-8">
			<div class="col-md-4 col-md-offset-3">
				<input type="hidden" name="madh" value="<?=$model->madh?>">
				<input type="hidden" name="makh" value="<?=$model->makh?>">
				<div class="form-group">
					<label>Tên khách hàng</label>
					<input type="" readonly="" class ="form-control" name="tenkhachhang" value="<?=$model->getTenKh()?>">
				</div>	
				<div class="form-group">
					<label>Tổng tiền</label>
					<input type="" readonly="" class ="form-control" name="tongtien" value="<?=$model->tongtien?>">
				</div>	
				<div class="form-group">
					<label>Ngày giao hàng</label>
					<input type="date" class ="form-control" name="ngayGiaohang" value="<?=$model->ngayGiaohang?>">
				</div>
				<div class="form-group">
					<label>Ngày đặt hàng</label>
					<input type="" readonly="" class ="form-control" name="ngayDathang" value="<?=$model->ngayDathang?>">
				</div>
				<div class="form-group">
					<label>Ghi chú</label>
					<input type="" readonly="" class ="form-control" name="ghichu" value="<?=$model->ghichu?>">
				</div>
				<div class="form-group">
					<label>Status</label>
					<select name="trangthai" class="form-control">
						<option value="0">Chưa thanh toán</option>
						<option value="1">Đã thanh toán</option>
					</select>
				</div>	
				<div class="form-group">
					<input type="submit" name="submit" value="Update" class="btn btn-primary">
				</div>		
			</div>
		</form>
	</div>
</div>
<?php include 'views/inc/footer.php'; ?>