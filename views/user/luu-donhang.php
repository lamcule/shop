<?php 
require_once 'models/Order.php';
$makh = $_POST['makh'];
$tongtien = $_POST['tongtien'];
// $ngaydathang = $_POST['ngaydathang'];
$note = $_POST['note'];
$ngaygiaohang = '';
$trangthai = $_POST['trangthai'];

$model = new Order();
$model->makh = $makh;
$model->tongtien = $tongtien;
$model->ngayDathang = (new Datetime())->format('Y-m-d');
$model->ngayGiaohang = $ngaygiaohang;
$model->note = $note;
$model->trangthai = $trangthai;
$model->insert();
header('location:trang-chu');

 ?>