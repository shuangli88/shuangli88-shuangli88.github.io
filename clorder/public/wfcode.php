<?php
/**
  **************************************************************************************************
  **********  CLPHP订单系统2017 WEB、WAP自适应版官方正式版  *****  官方正版 *** 版权所有 *** 盗版必究  **********
  **********------------------------------------------------------------------------------**********
  ****** 官方网站：http://jxlcl.taobao.com/  *****  官方店铺旺旺:chunlei2615 请认准再了购买 ********
  **************************************************************************************************
  **********------------------------------------------------------------------------------**********
  **********  CLPHP订单系统2017 WEB、WAP自适应版官方正式版完全开源无任何加密 杜绝倒卖 鄙视加密捣卖者   **********
  **************************************************************************************************
 */
header('P3P: CP="CAO PSA OUR"');session_start();ini_set('default_charset','utf-8');function createAuthNumImg($randStr,$imgw,$imgh,$fontName){header("content-type: image/png");$image=imagecreate($imgw,$imgh);$color_white=imagecolorallocate($image,255,255,255);$color_gray=imagecolorallocate($image,255,255,255);$color_black=imagecolorallocate($image,255,0,0);for($i=0;$i<1000;$i++){imagesetpixel($image,mt_rand(0,$imgw),mt_rand(0,$imgh),$color_gray);}imagerectangle($image,0,0,$imgw-1,$imgh-1,$color_gray);for($i=10;$i<$imgh;$i+=10)imageline($image,0,$i,$imgw,$i,$color_gray);imagettftext($image,14,0,8,20,$color_black,$fontName,$randStr);for($i=10;$i<$imgw;$i+=10)imagepng($image);imagedestroy($image);}function getCode($length){$str='0123456789';$result='';$l=strlen($str)-1;for($i=0;$i<$length;$i++){$num=rand(0,$l);$result.=$str[$num];}return $result;}$a=GetCode(1);$b=GetCode(1);$c=GetCode(1);$Passport=$a."+".$b."+".$c;$Total=$a+$b+$c;$_SESSION['wfaction']=$Total;createAuthNumImg($Passport,$_GET['imgw'],$_GET['imgh'],"fonts/opulent.ttf");?>