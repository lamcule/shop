<?php include "views/inc/header.php"; ?>


<div class="content-wrapper">
		<div class="container">
			<h2>Tổng doanh thu</h2>
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>Số lượng sản phẩm</th>
						<th>Tổng doanh thu</th>
					</tr>
				</thead>
				<tbody>
						<tr>
							<td><?= $amount ?></td>
							<td><?= number_format($total) ?></td>
						</tr>	
				</tbody>
			</table>
		</div>
	</div>





<?php include "views/inc/footer.php" ?>