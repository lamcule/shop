<?php include 'views/inc/header.php'; ?>
<!-- <script src="shop/views/js/validate.js"></script> -->

<div class="content-wrapper">
	<div class="container">
		<h2>Create product</h2>
		<form action="save-product" method="post" accept-charset="utf-8" enctype="multipart/form-data" id="createProductForm" onsubmit="return send()">
			<div class="col-md-6 col-md-offset-2">
				<div class="form-group">
					<label for="">Tên sản phẩm</label>
					<input type="text" required="" name="tensanpham" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Loại sản phẩm</label>
					<select name="maloai" class="form-control">
						<?php foreach ($typeproducts as $typeproduct): 
								if ($typeproduct->trangthai == 1) {
						?>
							<option value="<?=$typeproduct->id?>"><?=$typeproduct->tenloai?></option>
						<?php 
							}
						endforeach 
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="">Giá bán</label>
					<input type="number" required="" name="gia" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Số lượng</label>
					<input type="number" required="" name="soluong" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Thông tin sản phẩm</label>
					<textarea name="thongtin" required="" cols="10" rows="5" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<label for="">Ảnh</label>
					<input type="file" name="anh" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Sale percent</label>
					<input type="number" name="salepercent" required="" class="form-control">
				</div>	
				<div class="form-group">
					<label for="">Sale price</label>
					<input type="number" name="giasale" required="" class="form-control">
				</div>
				<!-- Error -->
				<div class="form-group">
					<p style="color: red" id="msg"></p>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Create</button>
				</div>		
			</div>	
		</form>
	</div>
</div>
<!-- Validate -->
<script>
	function inner(name){
			return document.querySelector("input[name='" + name + "']").value;
		}
	function msg(str){
		document.querySelector("p#msg").innerHTML = str;
	}
	function greaterThanZero(name){
		elm = inner(name);
		if (elm > 0){
			return true;
		}
		return false;
	}
	function send(){
		if (!greaterThanZero("gia")) {
			msg("Giá không hợp lệ");
			return false;
		} else if (!greaterThanZero("soluong")){
			msg("Số lượng không hợp lệ");
			return false;
		}
	}

</script>
<?php include 'views/inc/footer.php'; ?>