<?php include 'views/inc/header.php'; ?>

<div class="content-wrapper">
	<div class="container">
		<h2>List type product</h2>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>
						<a href="create-typeproduct" title="" class="btn btn-success">Create</a>
					</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($typeproducts as $typeproduct): ?>
					<?php if ($typeproduct->trangthai == 1): ?>
						<tr>
							<td><?= $typeproduct->id ?></td>
							<td><?= $typeproduct->tenloai ?></td>
							<td>
								<a href="update-typeproduct?id=<?= $typeproduct->id?>" title="" class="btn btn-primary">Edit</a>
								<!-- <a href="delete-typeproduct?id=<?= $typeproduct->id?>" id="delTypeProduct" title="" class="btn btn-danger">Del</a> -->
								<a href="delete-typeproduct?id=<?= $typeproduct->id?>" title="" class="btn btn-primary" onclick="return confirm('Sure?')">Delete</a>
							</td>	
						</tr>
					<?php endif ?>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>	
</div>

<?php include 'views/inc/footer.php' ?>
<script>
	$(function(){
		$('#delTypeProduct').click(function(){
			return confirm("Are you sure to remove this type product?");
		});
	});
</script>	