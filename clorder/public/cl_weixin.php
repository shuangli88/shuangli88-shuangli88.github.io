<!doctype html>
<?php
	require_once("../clconfig.php");
	$optEmail = $wxh;
	$payAmount = $_GET['payAmount'];
		$memo = "订单产品：".$_GET['bdproduct']."，姓名：".$_GET['bdname']."，手机：".$_GET['bdmob']."，订单编号：".$_GET['out_trade_no'];
	$smsNo = $_GET['bdmob'];
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0">
<meta http-equiv="Cache-Control" content="no-cache">
<title>扫二维码微信支付</title>
<style type="text/css">

     *{margin:0;padding:0;}
    body{font:14px Microsoft YaHei,\5FAE\8F6F\96C5\9ED1,SimSun,\5B8B\4F53,Arial,Verdana;color:#000;text-align:left;padding-top:60px;background:#FFF;} 
    a:link,a:visited{color:#F00;text-decoration:none;}a:hover{color:#090;text-decoration:underline;}
    ul,li{list-style:none;display:block;}
    img{border:0 none;vertical-align:middle;}
    #head{
	width: 100%;
	padding: 0 0 30px;
	text-align: center;
	border-bottom: 2px dotted #DDD;
	max-width: 650px;
}
    #bdok{
	width: 100%;
	background: #FFF;
	height: auto;
}
    #bdok ul{
	width: 100%;
	height: auto;
	margin: 20px auto;
	max-width: 650px;
}    
    #bdok li{
	width: 100%;
	height: 40px;
	line-height: 40px;
	border-bottom: 1px dotted #DDD;
	max-width: 650px;
}    
    #bdok li span.l{
	float: left;
	width: 33%;
	text-align: right;
	margin-right: 20px;
	max-width: 200px;
}    
    #bdok li span.r{
	float: left;
	width: 60%;
	color: #BD0000;
	max-width: 430px;
} 
    #foot{
	width: 100%;
	padding-top: 30px;
	padding-right: 0;
	padding-left: 0;
	padding-bottom: 0;
	text-align: center;
	border-top: 2px dotted #DDD;
}
    #foot p.go{font:12px SimSun,\5B8B\4F53,Arial,Verdana;color:#090;margin-bottom:20px;}

	*{margin:0;padding:0;}body{font:14px Microsoft YaHei,\5FAE\8F6F\96C5\9ED1,SimSun,\5B8B\4F53,Arial,Verdana;color:#000;text-align:left;padding-top:1%;background:#FFF;}a:link,a:visited{color:#F00;text-decoration:none;}a:hover{color:#090;text-decoration:underline;}ul,li{list-style:none;display:block;}img{border:0 none;vertical-align:middle;}.wenxin{width:100%;height:auto;overflow:hidden;text-align:center;}.top{width:60%;height:auto;overflow:hidden;line-height:40px;margin:0 auto 20px;padding:5px 15px;text-align:left;border:2px solid #E6E6E6;background:#FFF;}.top span{float:left;}.top span.a{color:#390;font-size:20px;font-weight:bold;margin-right:10px;}.top span.b{color:#999;}.top span.c{float:right;}.codeimg{height:auto;overflow:hidden;margin-bottom:10px;text-align:center;}.bottom{padding:5px 10px;color:#090;}.codeimg img{width:220px;padding:8px;border:8px solid #F2F2F2;}@media(max-width:500px){.top{width:90%;line-height:25px;padding:5px 3%;}.top span{float:left;display:block;}}

</style>
</head>

<body style="width: 100%; margin: 0px auto;">
<div class="wenxin">
    <div class="top">        
        <span class="a"><img src="wx.png"> <strong>微信扫码支付</strong></span> 
        <span class="b">亿万用户选择，更快更安全！</span>
        <span class="c">支付：<strong style="font-size:18px;color:#F60;"><?php echo $payAmount ?></strong>元</span>
    </div>
    <div class="codeimg"><img src="smimg/wx<?php echo $payAmount ?>.png" style="width: 90%; margin: 0px auto; max-width: 320px;"></div>
</div>
<div align="center" style="font-family: '微软雅黑'; font-size: 18px; color: #071BF5; max-width: 580px; width: 100%; margin: 0px auto;" >请用手机打开微信APP，扫一扫上面的二维码图案（本机的话请长按二维码图片，保存到手机相册，再运行微信APP，扫码刚刚保存的二维码图片），<br>免加好友向本站付款<span style="color: #F50707"><?php echo $payAmount ?></span>元。<br>付款前请确保收款微信号是<span style="color: #F50707"><?php echo $optEmail ?></span>，建议付款说明中填写亲提交订单时填写的手机号码“<span style="color: #F50707"><?php echo $smsNo ?></span>”，方便核对订单信息，谢谢！<br>
  <span style="color: #0DA406">附亲提交的部分订单信息：</span></div>

<div id="bdok">
    <ul>
        <li>
            <span class="l">订单号：</span>
          <span class="r"><?php echo $_GET['out_trade_no']; ?></span>
        </li>
        <li>
            <span class="l">订购产品：</span>
            <span class="r"><?php echo $_GET['bdproduct']; ?></span>
        </li>
         <?php if(!empty($_GET['bdproducta'])){echo "
        <li>
            <span class='l'>产品型号：</span>
            <span class='r'>".$_GET['bdproducta']."</span>
        </li>";}?>
         <?php if(!empty($_GET['bdproductb'])){echo "
        <li>
            <span class='l'>产品尺寸：</span>
            <span class='r'>".$_GET['bdproductb']."</span>
        </li>";}?>
         <?php if(!empty($_GET['bdproductc'])){echo "
        <li>
            <span class='l'>产品颜色：</span>
            <span class='r'>".$_GET['bdproductc']."</span>
        </li>";}?>
        <li>
            <span class="l">收货人姓名：</span>
            <span class="r"><?php echo $_GET['bdname']; ?></span>
        </li>
        <li>
            <span class="l">手机号码：</span>
            <span class="r"><?php echo $_GET['bdmob']; ?></span>
        </li> 
		  
    </ul>
</div>
<div id="foot">

    <p><a href='Javascript:window.history.go(-1)' title="返回"><img src="../template/images/bdgo.gif" style="width:100%;max-width:650px;" alt="返回"></a></p>
</div>
</body>
</html>