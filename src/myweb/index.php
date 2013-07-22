<?php
$con=mysql_connect('127.0.0.1:3038','root','binyao02123202'); // 这里的user为mysql的用户名，password为密码
if(!$con)
{
	echo "fail";
}
else
{
	echo "success";
}
?>