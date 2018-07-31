
	<?php 
		include "views/inc/header.php";
	 ?>
<div class="content-wrapper">
	<div class="container">
		<div class="col-md-6 col-md-offset-2">
			<h2>UPDATE ADMIN</h2>
			<form id="updateForm" action="save-update-admin" method="post" accept-charset="utf-8">
				
				<input type="hidden" name="id" value="<?= $model->id?>">
				<div class="form-group">
					<label>User name</label>
					<input type="text" readonly name="username" class="form-control" value="<?= $model->username?>">
				</div>
				<div class="form-group">
					<label>Old Password</label>
					<input type="password" name="oldpassword" class="form-control">
				</div>	
				<div class="form-group">
					<label>New Password</label>
					<input type="password" id="newpassword" name="newpassword" class="form-control">
				</div>	
				<div class="form-group">
					<label>Comfirm Password</label>
					<input type="password" name="confirmpassword" class="form-control">
				</div>	
				<div class="form-group">
					<button type="submit" class="btn btn-success">Save update admin</button>
				</div>	
			</form>
		</div>	
	</div>	
</div>
<script>
	$(document).ready(function(){
		$('#updateForm').validate({
			rules: {
				username: {
					required: true,
					maxlength: 30,
					minlength: 3
				},
				oldpassword: {
					required: true,
					maxlength: 30,
					minlength: 3
				},
				newpassword: {
					required: true,
					maxlength: 30,
					minlength: 3
				},
				confirmpassword: {
					equalTo: "#newpassword"
				}
			},
			messages: {
				username: {
					required: "Chưa nhập",
					maxlength: "Phải it hơn 30 ký tự",
					minlength: "Phải nhiều hơn 3 ký tự"
				},
				oldpassword: {
					required: "Chưa nhập",
					maxlength: "Phải it hơn 30 ký tự",
					minlength: "Phải nhiều hơn 3 ký tự"
				},
				newpassword: {
					required: "Chưa nhập",
					maxlength: "Phải it hơn 30 ký tự",
					minlength: "Phải nhiều hơn 3 ký tự"
				},
				confirmpassword: {
					equalTo: "Không khớp mật khẩu"
				}	
			}
			
		});
	});
</script>
	<?php 
		include "views/inc/footer.php";
	 ?>