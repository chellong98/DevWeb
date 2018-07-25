
<!--/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */-->

<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['list'])) {
	 header('Location: index.php');
}
?>
<html>
<head>
        <meta charset="UTF-8">
	<title>trang chủ</title>
	<meta charset="utf-8">
</head>
<body>
    
    Chúc mừng bạn có username là <?php echo '<pre>';print_r(json_encode($_SESSION));echo '<pre>';  ?> đã đăng ky thành công !
    <?php 
        $item = $_SESSION['list'];
        
        echo $item["name"];
      //session_destroy();         
      
    ?>
</body>
</html>