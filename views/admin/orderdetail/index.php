<?php include 'views/inc/header.php'; ?>
	<div class="content-wrapper">
		<div class="container">
			<table class="table table-bordered table-hover">
				<!-- <caption>table title and/or explanatory text</caption> -->
				<thead>
					<tr>
						<th>Mã đơn hàng</th>
						<th>Tên sản phẩm</th>
						<th>Số lượng</th>
						<th>Giá</th>
						<th>Trạng thái</th>
					</tr>
				</thead>
				<tbody>
					
					<?php foreach ($orderdetail as $value): ?>
							
								<tr>
									<td><?=$value->madh?></td>
									<td><?=$value->masp?></td>
									<td><?=$value->soluong?></td>
									<td><?=$value->gia?></td>
									<td>
										<?php if ($value->trangthai == 1) {
											echo "Đã xử lý";
										} else {
											echo "Chưa xử lý";
										}
										?>
										
									</td>
								</tr>
							
					<?php endforeach ?>
					
				</tbody>
			</table>
		</div>	
	</div>	

<?php include 'views/inc/footer.php'; ?>