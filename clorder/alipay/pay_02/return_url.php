<?php
/* * 
 * 功能：支付宝页面跳转同步通知页面
 * 版本：3.3
 * 日期：2012-07-23
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究支付宝接口使用，只是提供一个参考。

 *************************页面功能说明*************************
 * 该页面可在本机电脑测试
 * 可放入HTML等美化页面的代码、商户业务逻辑程序代码
 * 该页面可以使用PHP开发工具调试，也可以使用写文本函数logResult，该函数已被默认关闭，见alipay_notify_class.php中的函数verifyReturn
 */

require_once("../../clconfig.php");
require_once("lib/alipay_notify.class.php");
?>
<!DOCTYPE HTML>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
    <style type="text/css">
        <!--
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
    #bdok{width:100%;background:#FFF;}
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
	padding-top: 90px;
	padding-right: 0;
	padding-left: 0;
	padding-bottom: 0;
	text-align: center;
	border-top: 2px dotted #DDD;
}
    #foot p.go{font:12px SimSun,\5B8B\4F53,Arial,Verdana;color:#090;margin-bottom:20px;}
    #time{font:14px Arial,Verdana;color:#F90;font-weight:bold;}
        -->
    </style>
<?php
//计算得出通知验证结果
$alipayNotify = new AlipayNotify($alipay_config);
$verify_result = $alipayNotify->verifyReturn();
if($verify_result) {//验证成功
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//请在这里加上商户的业务逻辑程序代码
	
	//——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
    //获取支付宝的通知返回参数，可参考技术文档中页面跳转同步通知参数列表

	//商户订单号

	$out_trade_no = $_GET['out_trade_no'];

	//支付宝交易号

	$trade_no = $_GET['trade_no'];

	//交易状态
	$trade_status = $_GET['trade_status'];


    if($_GET['trade_status'] == 'WAIT_SELLER_SEND_GOODS') {
		//判断该笔订单是否在商户网站中已经做过处理
			//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
			//如果有做过处理，不执行商户的业务程序
    }
    else {
      echo "trade_status=".$_GET['trade_status'];
    }
		
	echo "<p style='height:40px;line-height:40px;font-size:14px;color:#BD0000;text-align:center;'>恭喜！在线支付成功！</p>";

	//——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}
else {
    //验证失败
    //如要调试，请看alipay_notify.php页面的verifyReturn函数
    echo "<p style='height:40px;line-height:40px;font-size:14px;color:#009900;text-align:center;'>支付失败！</p>";
}
?>
        <title>支付宝纯担保交易接口</title>
	</head>
    <body>
        <div id="bdok">
            <ul>
                <li>
                    <span class="l">订单号：</span>
                    <span class="r"><?php echo $_GET['out_trade_no']; ?></span>
                </li>
                <li>
                    <span class="l">支付宝交易号：</span>
                    <span class="r"><?php echo $_GET['trade_no']; ?></span>
                </li>
                <li>
                    <span class="l">付款金额：</span>
                    <span class="r"><?php echo $_GET['price']; ?></span>
                </li>
                <li>
                    <span class="l">交易状态：</span>
                    <span class="r"><?php echo $_GET['trade_status']; ?></span>
                </li>
            </ul>
        </div>
    </body>
</html>