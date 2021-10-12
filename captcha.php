<?php
session_start();
$rand_num=rand(10000,99999);  // taking random number
$_SESSION['CODE']=$rand_num;  
$window=imagecreatetruecolor(60,30);    // making window using GD library
$captcha_bg=imagecolorallocate($window, 135, 206, 235);   // bg color of captcha
imagefill($window,0,0,$captcha_bg);
$captcha_text_color=imagecolorallocate($window,0,0,0);
imagestring($window,5,5,5,$rand_num,$captcha_text_color);  // merge to making photo
header('Content-Type:image/jpeg');
imagejpeg($window);
?>