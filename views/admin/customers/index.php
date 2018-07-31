<?php include 'views/inc/header.php'; ?>
<div class="content-wrapper">
	<div class="container">
		<h2>Customer</h2>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Mã</th>
					<th>Tên khách hàng</th>
					<th>Địa chỉ</th>
					<th>Email</th>
					<th>Điện thoại</th>
					<th>Username</th>
					<th>Loại khách hàng</th>
					<th>Tổng tiền</th>
					<th>
						<!-- <a href="create-customer" title="" class="btn btn-success">Create</a> -->
					</th>
				</tr>
			</thead>
				<tbody>
					<?php foreach ($customers as $customer): ?>
						<?php if ($customer->trangthai == 1): ?>
							<tr>
								<td><?= $customer->id ?></td>
								<td><?= $customer->tenkhachhang ?></td>
								<td><?= $customer->diachi ?></td>
								<td><?= $customer->email ?></td>
								<td><?= $customer->dienthoai ?></td>
								<td><?= $customer->username ?></td>
								<td><?= $customer->loaikhachhang ?></td>
								<td><?= $customer->tongtien ?></td>
								<td>
									<a href="update-customer?id=<?= $customer->id ?>" title="" class="btn btn-primary">Edit</a>
									<a href="delete-customer?id=<?= $customer->id ?>" id= "delCustomer" title="" class="btn btn-danger">Del</a>
								</td>	
							</tr>
						<?php endif ?>
					<?php endforeach ?>
				</tbody>
		</table>
	</div>	
</div>
<?php include 'views/inc/footer.php'; ?>
<script>
	$(function(){
		$('#delCustomer').click(function(){
			return confirm("Are you sure to remove Customer?");
		});
	});
</script>	