<?php

function UserReturn($error, $message, $data)
{
	$data = array("error"=>$error,"message"=>$message, "data"=>$data);
	die(json_encode($data)); //chuyen mang thanh chuoi Json
} 
function uploadImage ($nameImage) {
    // print_r($_FILES[$nameImage]);
    if (!isset($_FILES[$nameImage])||$_FILES[$nameImage]["error"]==1) return null;
	$tmp_name = $_FILES[$nameImage]["tmp_name"]; //luu vao bo nho tam
	$filename = 'uploadImages\\'.$_FILES[$nameImage]["name"] . ".jpg";//luu vao o tren server
 
	move_uploaded_file($tmp_name,$filename ); //thuc hien luu
	return $filename;
	
}  