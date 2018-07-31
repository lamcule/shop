<?php include 'views/inc/header.php'; ?>

<div class="content-wrapper">
	<div class="container">
		<h2>List Product</h2>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tên sản phẩm</th>
					<th>Loại sản phẩm</th>
					<th>Giá</th>
					<th>Số lượng</th>
					<th>Thông tin</th>
					<th>Ảnh</th>
					<th>Ngày nhập</th>
					<th>Sale percent</th>
					<th>Sale price</th>
					<th>
						<a href="create-product" title="" class="btn btn-primary">Create</a>
					</th>	
				</tr>
			</thead>
			<tbody>
				<?php foreach ($products as $product): ?>
					<?php if ($product->trangthai == 1): ?>
						<tr>
							<td><?= $product->id?></td>
							<td><?= $product->tensanpham?></td>
							<td><?= $product->getTenLoai()?></td>
							<td><?= $product->gia?></td>
							<td><?= $product->soluong?></td>
							<td><?= $product->thongtin?></td>
							<td>
								<a href="detail-product?id=<?=$product->id?>" title=""><img src="<?= $product->anh?>" width="70px"></a></td>
							<td><?= $product->ngaynhap?></td>
							<td><?= $product->salepercent?></td>
							<td><?= $product->giasale?></td>
							<td>
								<a href="update-product?id= <?= $product->id?>" title="" class="btn btn-success">Edit</a>
								<a href="delete-product?id= <?= $product->id?>" title="" class="btn btn-danger" onclick="return confirm('Sure?')">Delete</a>
							</td>	
						</tr>
					<?php endif ?>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>	
</div>		



<?php include 'views/inc/footer.php'; ?>