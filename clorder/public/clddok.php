<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<title>CLPHPORDER2017</title>
<style type="text/css">

    *{margin:0;padding:0;}
    body{font:14px Microsoft YaHei,\5FAE\8F6F\96C5\9ED1,SimSun,\5B8B\4F53,Arial,Verdana;color:#000;text-align:left;padding-top:20px;background:#FFF;} 
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
	padding-top: 40px;
	padding-right: 0;
	padding-left: 0;
	padding-bottom: 0;
	text-align: center;
	border-top: 2px dotted #DDD;
}
    #foot p.go{font:12px SimSun,\5B8B\4F53,Arial,Verdana;color:#090;margin-bottom:20px;}
    #time{font:14px Arial,Verdana;color:#F90;font-weight:bold;}
</style>
<script type="text/javascript">
setInterval("settime()",1000);
    var i=1500;
    function settime() {
       i--;
       time.innerHTML=i;
       if(i<=0) {
           window.history.go(-1);
       }
    }
</script>
</head>
<body  style="width:100%;max-width:650px;margin:0px auto">
<div id="head">
    <img src="../template/images/bdok.gif" style="width:100%;max-width:650px;" />
</div>
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
		  
        <?php if(!empty($_GET['bdprovince'])){echo "
        <li>
            <span class='l'>所在地区：</span>
            <span class='r'>".$_GET['bdprovince'].$_GET['bdcity'].$_GET['bdarea']."</span>
        </li>";}?>
        <li>
            <span class="l">详细地址：</span>
            <span class="r"><?php echo $_GET['bdaddress']; ?></span>
        </li>
        <li style="border:none;">
            <span class="l">付款方式：</span>
            <span class="r"><?php if($_GET['bdpay']=='alipay'){echo '<img src="../template/images/fkb.gif" />';}elseif($_GET['bdpay']=='bank'){echo '<img src="../template/images/fkc.gif" />';}else{echo '<img src="../template/images/fka.gif" />';} ?></span>
        </li>
    </ul>
</div>
<div id="foot">
    <p class="go">温馨提示：本页面将在 <span id="time">15</span> 秒后自动返回，或者您也可以点击下面的返回图标立即返回。</p>
    <p><a href='Javascript:window.history.go(-1)' title="返回"><img src="../template/images/bdgo.gif" style="width:100%;max-width:650px;" alt="返回" /></a></p>
</div>
<!-------------------------- 此处添加统计转化代码 -------------------------->

<!-------------------------- 此处添加统计转化代码 -------------------------->
</body>
</html>