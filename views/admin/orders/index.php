<?php include 'views/inc/header.php'; ?>
<div class="content-wrapper">
	<div class="container">
		<h2>List orders</h2>
		<table class="table table-bordered table-hover">
			<!-- <caption>table title and/or explanatory text</caption> -->
			<thead>
				<tr>
					<th>Mã khách hàng</th>
					<th>Tổng tiền</th>
					<th>Ngày giao hàng</th>
					<th>Ngày đặt hàng</th>
					<th>Ghi chú</th>
					<th>Trạng thái</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($orders as $order): ?>
					<tr>
						<td><?= $order->makh?></td>
						<td><?= $order->tongtien?></td>
						<td><?= $order->ngayGiaohang?></td>
						<td><?= $order->ngayDathang?></td>
						<td><?= $order->ghichu?></td>
						<td><?php if($order->trangthai == 0){
							echo "Chưa thanh toán";
							}else
								echo "Đã thanh toán"; ?></td>
						<td>
							<a href="update-order?madh=<?=$order->madh?>" title="" class="btn btn-success">Update</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>		
</div>	
<?php include 'views/inc/footer.php'; ?>