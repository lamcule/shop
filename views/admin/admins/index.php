	<?php
	 include "views/inc/header.php"; 
	 ?>
	<div class="content-wrapper">
		<div class="container">
			<h2>ADMIN</h2>
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>username</th>
						<th>password</th>
						<th>
							<a href="create-admin" title="" class="btn btn-primary">Create</a>
						</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($admins as $admin): ?>
						<tr>
							<td><?= $admin->username ?></td>
							<td><?= $admin->password ?></td>
							<td>
								<a href="update-admin?id=<?= $admin->id?>" title="" class="btn btn-success">Edit</a>
								<a href="delete-admin?id=<?= $admin->id?>" title="" class="btn btn-danger" onclick="return confirm('Sure?')">Delete</a>
 							</td>
						</tr>	
					<?php endforeach ?>	
				</tbody>
			</table>
		</div>
	</div>
	<script>
		// $(function(){
		// 	$('#delAdmin').click(function(){
		// 		return confirm("Are you sure to remove Admin?");
		// 	});
		// });
	</script>
	<?php include "views/inc/footer.php" ?>
