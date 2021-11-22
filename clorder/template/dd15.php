<?php require '../clconfig.php';?>
<!DOCTYPE HTML>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">

<meta content="telephone=no" name="format-detection">

<meta name="apple-touch-fullscreen" content="yes">

<meta name="apple-mobile-web-app-capable" content="yes">

<meta name="apple-mobile-web-app-status-bar-style" content="black">

<title>CLPHP订单系统2017 WEB、WAP自适应版官方正式版 - 样式15</title>

<script type="text/javascript" src="js/cldq.js" charset="utf-8"></script>

<script type="text/javascript" src="js/cldd05.js"></script>

<link href="css/cldd05.css" rel="stylesheet" type="text/css">

</head>

<body  style="width:100%;max-width:568px; margin:0px auto">

<div id="_alert_bg" style="display:none">

    <div id="_alert_content"></div>

</div>

<script type="text/javascript">

    function Malert(content) {

        $("#_alert_content").text(content);

        $("#_alert_bg").show();

        $("#_alert_content").show();

    }



    $("document").ready(function () {

        $("#_alert_bg").click(function () {

            $("#_alert_bg").hide();

            $("#_alert_content").hide();

        });





        $(".sku_ul a").click(function () {

            var o = $(this);

            if (!o.hasClass("sku_cur")) {//点击的不是当前已经选中的

                $(".sku_cur").removeClass("sku_cur");

                o.addClass("sku_cur");

                /*更新对应的选中尺码的数据*/

                $("#item_price").html("￥" + o.attr("data-price"));

                $("#item_num").val(1);

                $("#bdprice").val(o.attr("data-price"));

                $("#bdproducta").val(o.attr("data-xh"));

            }

        });

 $(".sku_ul_na a").click(function () {
            var o = $(this);
            if (!o.hasClass("skuna_cur")) {//点击的不是当前已经选中的
                $(".skuna_cur").removeClass("skuna_cur");
                o.addClass("skuna_cur");
                /*更新对应的选中尺码的数据*/
                $("#bdproductb").val(o.attr("data-sku"));
            }
        });
		
        $(".sku_ul_nb a").click(function () {
            var o = $(this);
            if (!o.hasClass("skunb_cur")) {//点击的不是当前已经选中的
                $(".skunb_cur").removeClass("skunb_cur");
                o.addClass("skunb_cur");
                /*更新对应的选中尺码的数据*/
                $("#bdproductc").val(o.attr("data-ys"));
            }
        });




    });

</script>

<form id="clform" name="clform" action="../clorder.php" method="post" onsubmit="return postcheck()" target="_parent">

         <input type="hidden" value="" name="referer" id="referer">
                <input type="hidden" value="" name="url" id="url">
                <input type="hidden" value="" name="purl" id="purl">


<input type="hidden" id="bdproduct" name="bdproduct" value="恭恭恭恭恭恭"> 

<input type="hidden" id="item_num" name="bdnum" value="1">

<input type="hidden" id="bdprice" name="bdprice" value="385">
<input type="hidden" id="bdproducta" name="bdproducta" value="型号一"> 
<input type="hidden" id="bdproductb" name="bdproductb" value="尺寸一"> 
<input type="hidden" id="bdproductc" name="bdproductc" value="黑色"> 
<section class="item_sec">

	<div class="item_wrap rel">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="100"><img src="cpimg/1501.jpg" height="80" width="80"></td>
      <td><p class="item_tle ellipsis">这里是产品名称</p>

		<p class="item_pay">货到付款并包邮</p></td>
    </tr>
    <tr>
    <td height="20"></td>
    </tr>
  </tbody>
</table>

		

		

		<ul class="sku_ul">
            <li>型号：</li>
            <li><a href="javascript:void(0);" class="sku_cur" data-price="385" data-xh="型号一">型号一</a></li>

            <li><a href="javascript:void(0);" class="" data-price="580" data-xh="型号二">型号二</a></li>

            <li><a href="javascript:void(0);" class="" data-price="785" data-xh="型号三">型号三</a></li>

            <li><a href="javascript:void(0);" class="" data-price="960" data-xh="型号四">型号四</a></li>

		</ul>
        <ul class="sku_ul_na">
        <li>尺寸：</li>
        <li><a href="javascript:void(0);" class="skuna_cur"  data-sku="尺寸一">尺寸一</a></li>
        <li><a href="javascript:void(0);" class="sku_cur"  data-sku="尺寸二">尺寸二</a></li>
        </ul>
		        
          
        		<ul class="sku_ul_nb">
                <li>颜色：</li>
                <li><a href="javascript:void(0);" class="skunb_cur" data-ys="黑色">黑色</a></li>
                <li><a href="javascript:void(0);" class="" data-ys="白色">白色</a></li>
                <li><a href="javascript:void(0);" class="" data-ys="土豪金">土豪金</a></li>
                </ul>


		<p class="row"><label>价　格 </label>

         <span class="i_pri" id="item_price">￥385.00</span></p>

	</div>

</section>

<section class="item_sec">

	<div class="item_wrap add">

		<p class="row">

			<label for="name">收货人</label>

			<input id="name" name="bdname" placeholder="请填写姓名" class="block input" value="" tabindex="1" type="text">

		</p>

		<p class="row">

			<label for="tel">联系手机</label>

			<input id="tel" name="bdmob" placeholder="请填写手机号码" maxlength="11" class="block input" value="" tabindex="2" type="tel">

		</p>

		<p class="row">

			<label for="province">选择地区</label>

			<select class="select" id="clprovince" name="bdprovince" tabindex="3"></select>

            <select class="select" id="clcity" name="bdcity" tabindex="4"></select>

            <select class="select" id="clarea" name="bdarea" tabindex="5" style="margin:0;"></select>

		</p>

		<p class="row row_area">

			<label for="address">详细地址</label>

			<input id="address" name="bdaddress" placeholder="请填写详细地址" class="block input" value="" tabindex="6" type="text">

		</p>

        <p class="row row_area">

			<label for="other">客户留言</label>

			<input id="other" name="bdother" placeholder="请填写留言或备注" class="block input" tabindex="7" type="text" value="">

		</p>
         <p class="row row_area">
<label for="address">付款方式</label> 
       <select id="bdpay" name="bdpay" class="block input">

                            <option selected value="cod" title="货到付款">货到付款</option>

                            <option value="alipay" title="支付宝付款">支付宝付款</option>
                            <option value="wx" title="微信付款">微信付款</option>

                            <option value="bank" title="联系客服索要打款账号">银行汇款</option>

                        </select>
</p>


 <?php if($clcodeon==1){?>	
              	<p class="row clcode">
<label >验证码</label>

                        <input name="wfcode" type="text" class="bdcode" size="6" /><img id="wfcode" src="../public/wfcode.php?wfaction=codeimg&imgw=70&imgh=29" alt="换一个！" title="换一个！" onClick="this.src=this.src+'?wfaction=codeimg&imgw=70&imgh=29&temp='+Math.random();" /><img src="images/wh.gif" /><a href='javascript:;' onclick="refreshCode()">换一个！</a>
                  
</p>		
                <?php }?>
                <?php if($clcodeon==2){?>	
	<p class="row clcode">
<label >验证码</label>

                         <input name="wfcode" type="text" class="bdcode" size="6" /><img id="bdcode" src="../public/bdcode.php?bdaction=codeimg&imgw=70&imgh=29" alt="换一个！" title="换一个！" onClick="this.src=this.src+'?bdaction=codeimg&imgw=70&imgh=29&temp='+Math.random();" /><a href='javascript:;' onclick="refreshCode1()">换一个！</a>
                  
</p>
                <?php }?>

		</div>

</section>



<footer>

	<input type="submit" name="bdsubmit" class="c_txt orange_bg" value="立即提交订单" id="buy_now">

</footer>

</form>
<section class="item_sec">

	<div class="item_wrap add">
  <div class="cltitle">发货通知</div>
  <div id="clfahuo" class="clfahuo">
    <div id="clfahuo" style="overflow:hidden;">
      <div id="clfahuo1" style="overflow:hidden;"><script type="text/javascript" src="js/clfh.js"></script></div>
      <div id="clfahuo2"></div>
    </div>
  </div>
  </div>
  </section>

<script type="text/javascript" src="js/clgd.js"></script> 

<script type="text/javascript">

function postcheck(){

	if (document.clform.bdname.value==""){

		alert('请填写姓名！');

		document.clform.bdname.focus();

		return false;

	}

	var bdname = /^[\u4e00-\u9fa5]{2,6}$/;

	if (!bdname.test(document.clform.bdname.value)){

		alert('姓名格式不正确，请重新填写！');

		document.clform.bdname.focus();

		return false;

	}

	if (document.clform.bdmob.value==""){

		alert('请填写手机号码！');

		document.clform.bdmob.focus();

		return false;

	}

	var clform = /^1[3,4,5,7,8]\d{9}$/;

	if (!clform.test(document.clform.bdmob.value)){

		alert('手机号码格式不正确，请重新填写！');

		document.clform.bdmob.focus();

		return false;

	}

	if (document.clform.bdprovince.value==""){

		alert('请选择所在地区！');

		document.clform.bdprovince.focus();

		return false;

	}

	if (document.clform.bdaddress.value==""){

		alert('请填写详细地址！');

		document.clform.bdaddress.focus();

		return false;

	}


    document.clform.bdsubmit.value="正在提交，请稍等 >>";

    return true;

}

new PCAS("bdprovince","bdcity","bdarea");

try{	
	var thissrc = document.getElementById("bdcode").src;
	function refreshCode1(){
		document.getElementById("bdcode").src=thissrc+"?bdaction=codeimg&imgw=70&imgh=29&temp="+Math.random(); 
	}
}
catch(ex){
} 
try{

	var thissrc=document.getElementById("wfcode").src;

	function refreshCode(){

		document.getElementById("wfcode").src=thissrc+"temp="+Math.random(); 

	}

}catch(ex){}

/*//////////////////////////// WFORDERJSFGX ////////////////////////////*/

document.getElementById("referer").value = opener?opener.location.href:(top.document.referrer?top.document.referrer:top.location.href);
document.getElementById("url").value = top.location.href;
document.getElementById("purl").value = document.location;

</script>

</body>

</html>