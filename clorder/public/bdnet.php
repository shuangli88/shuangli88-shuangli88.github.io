<?php
error_reporting(0);
/**
  **************************************************************************************************
  **********   CLPHP����ϵͳ2016 WEB��WAP����Ӧ��ٷ���ʽ��   *****  �ٷ����� *** ��Ȩ���� *** ����ؾ�  **********
  **********------------------------------------------------------------------------------**********
  * �ٷ���վ��http://www.chunleinet.com/ �ٷ����̣�http://jxlcl.taobao.com/  *  �ٷ���������:chunlei2615 ����׼�ٹ��� *
  **************************************************************************************************
*/
$BDPHP2014='implode';$bdphpjj20148888='date';
require_once 'clconfig.php';
require_once 'public/bdsend.php';
$out_trade_no = $GLOBALS['bdphpjj20148888'](base64_decode('WW1kSGlz'));
$dddate = $GLOBALS['bdphpjj20148888'](base64_decode('WS1tLWQgSDpp'));
$bdproduct = $_POST['bdproduct'];
$bdproducta = $_POST['bdproducta'];
$bdproductb = $_POST['bdproductb'];
$bdproductc = $_POST['bdproductc'];
$bdproxh = $_POST['bdproxh'];
$bdnum = $_POST['bdnum'];
$bdprice = $_POST['bdprice'];
$bdzfbjg = $bdprice * $alipayzk;
$bdname = $_POST['bdname'];
$bdprovince = $_POST['bdprovince'];
$bdcity = $_POST['bdcity'];
$bdarea = $_POST['bdarea'];
$bdaddress = $_POST['bdaddress'];
$bdmob = $_POST['bdmob'];
$bdpay = $_POST['bdpay'];
$bdother = $_POST['bdother'];
$bdqq = $_POST['bdqq'];
$bdemail = $_POST['bdemail'];
$referer = $_POST['referer'];
$bdpost = $_POST['bdpost'];
$url = $_POST['url'];
$purl = $_POST['purl'];

/**
  **************************************************************************************************
  **********  ���ο����ڴ˴����Ӷ�Ӧ�ı������� *****  �ٷ����� *** ��Ȩ���� *** ����ؾ�  **********
  **********------------------------------------------------------------------------------**********
  * �ٷ���վ��http://www.chunleinet.com/ �ٷ����̣�http://jxlcl.taobao.com/  *  �ٷ���������:chunlei2615 ����׼�ٹ��� *
  **************************************************************************************************
*/

$mail = new PHPMailer();
$mail->CharSet = 'utf-8';
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 25;
$mail->Host = $Mailhost;
$mail->Username = $MailUsername;
$mail->Password = $MailPassword;
$mail->From = $MailFrom;
$mail->FromName = $FromName;
$mail->AddAddress($MailTo, $FromName);
$mail->AddAddress($MailTob, $FromName);
$mail->WordWrap = 50;
$mail->IsHTML(true);
?>