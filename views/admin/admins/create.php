<?php 
	include "views/inc/header.php";
?>
<div class="content-wrapper">
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<h2>CREATE ADMIN</h2>
			<form action="save-admin" method="post" accept-charset="utf-8" id="createForm">
				<div class="form-group">
					<label>User name</label>
					<input type="text"  name="username" class="form-control">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" id="password" name="password" class="form-control">
				</div>	
				<div class="form-group">
					<label>Confirm password</label>
					<input type="password"  name="confirmpassword" class="form-control">
				</div>
				<div class="form-group">
					<p id="msg" style="color: red"></p>
				</div>	
				<div class="form-group">
					<button type="submit" class="btn btn-success">Save admin</button>
				</div>	
			</form>
		</div>	
	</div>	
</div>
	<?php 
		include "views/inc/footer.php";
	 ?>
<script>
	$(document).ready(function(){
		$('#createForm').validate({
			rules: {
				username: {
					required: true,
					maxlength: 30,
					minlength: 3
				},
				password: {
					required: true,
					maxlength: 30,
					minlength: 3
				},
				confirmpassword: {
					equalTo: "#password"
				}
			},
			messages: {
				username: {
					required: "Chưa nhập",
					maxlength: "Phải it hơn 30 ký tự",
					minlength: "Phải nhiều hơn 3 ký tự"
				},
				password: {
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