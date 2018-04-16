<?php

function UserReturn($error, $message, $data)
{
	$data = array("error"=>$error,"message"=>$message, "data"=>$data);
	die(json_encode($data)); //chuyen mang thanh chuoi Json
} 