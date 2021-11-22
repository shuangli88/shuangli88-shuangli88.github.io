<?php require '../clconfig.php';?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
<title>男性滋补养生十全大补中药材泡酒料</title>
<script type="text/javascript" src="js/cldq.js" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
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

            if (!o.hasClass("sku_cur")) {

                $(".sku_cur").removeClass("sku_cur");

                o.addClass("sku_cur");

				$("#item_num").val(1);

                $("#bdpricetemp").val(o.attr("data-price"));

                $("#bdprice").val(o.attr("data-price"));
				 $("#bdpricezj").val(o.attr("data-price"));

                $("#showprice").html(o.attr("data-price"));

                $("#bdproduct").val(o.attr("data-sku"));				

            }

        });		

        $(".sku_ul_na a").click(function () {

            var o = $(this);

            if (!o.hasClass("skuna_cur")) {

                $(".skuna_cur").removeClass("skuna_cur");

                o.addClass("skuna_cur");

                $("#bdproductb").val(o.attr("data-xh"));

            }

        });

        $(".sku_ul_nb a").click(function () {

            var o = $(this);

            if (!o.hasClass("skunb_cur")) {

                $(".skunb_cur").removeClass("skunb_cur");

                o.addClass("skunb_cur");

                $("#bdproductc").val(o.attr("data-yc"));

            }

        });		

        $(".sku_ul_nc a").click(function () {

            var o = $(this);

            if (!o.hasClass("skunc_cur")) {

                $(".skunc_cur").removeClass("skunc_cur");

                o.addClass("skunc_cur");

                $("#bdpay").val(o.attr("data-pay"));

            }

        });

    });

	function numAdd(){

		var num_add = parseInt($("#item_num").val())+1;

		if($("#item_num").val()==""){

			num_add = 1;

		}

		$("#item_num").val(num_add);

		var total = parseFloat($("#bdpricetemp").val())*parseInt($("#item_num").val());

		$("#showprice").html(total.toFixed(2));

		$("#bdprice").val(total.toFixed(2));
		$("#bdpricezj").val(total.toFixed(2));

	}

	function numDec(){

		var num_dec = parseInt($("#item_num").val())-1;

		if(num_dec<1){

			alert("数量不能小于1件！");

		}else{

			$("#item_num").val(num_dec);

			var total = parseFloat($("#bdpricetemp").val())*parseInt($("#item_num").val());

			$("#showprice").html(total.toFixed(2));

		    $("#bdpricezj").val(total.toFixed(2));

		}

	}	

	function cltgp2(zk){
		

		$("#clform").attr("target", "_parent");

		try{var bdprice=$("#bdpricezj").val()*zk;$("#showprice").html(bdprice.toFixed(2));$("#bdprice").val(bdprice)}catch(ex){}

	}

	function cltgb2(zk){

		$("#clform").attr("target", "_blank");

		try{var bdprice=$("#bdpricezj").val()*zk;$("#showprice").html(bdprice.toFixed(2));$("#bdprice").val(bdprice)}catch(ex){}

	}

</script>
<link href="css/clwebap1style.css" rel="stylesheet" type="text/css">
<style type="text/css">
body {
	background: #FFFFFF;
}
#clorder {
	width: 100%;
	max-width: 100%;
}
.clwarp {
	border: 5x solid #A98B44;
}
.cltitle span {
	background-color: #A98B44;
}
.clsubbox input {
	background: #FF5000;
}
.clsubbox input:hover {
	background: #FF7333;
}
</style>
<link href="css/clrespond.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="clorder">
  <div class="clwarp">
    <form id="clform" name="clform" action="../clorder.php" method="post" onsubmit="return postcheck()" target="_parent">
      <input type="hidden" value="" name="referer" id="referer">
      <input type="hidden" value="" name="url" id="url">
      <input type="hidden" value="" name="purl" id="purl">
      <input type="hidden" id="bdproduct" name="bdproduct" value="套餐1（特惠装）78元">
      <input type="hidden" id="bdproductb" name="bdproductb" >
      <input type="hidden" id="bdproductc" name="bdproductc" >
      <input type="hidden" id="bdpricetemp"  value="1">
      <input type="hidden" id="bdpricezj" value="1">
      <input type="hidden" id="bdprice" name="bdprice"  value="78">
      <input type="hidden" id="bdpay" name="bdpay" value="cod">
      <div class="cltitle"><span>在线快速订购</span></div>
      <div class="clbdbox">
        <label class="clbdxx"><em>*</em>选择产品</label>
        <div class="cldxbox">
          <ul class="sku_ul">
            <li><a href="javascript:void(0);" class="sku_cur" data-price="1" data-sku="套餐1（特惠装） 78元">套餐1（特惠装）</a></li>
            <li><a href="javascript:void(0);" class="" data-price="128" data-sku="套餐2（增强版） 128元">套餐2（增强版）</a></li>
          </ul>
        </div>
      </div>

      <div class="clbdbox">
        <label class="clbdxx"><em>*</em>数量</label>
        <div class="cltextmun"> <a onclick="numDec()" title="减1" class="setmun jian"></a>
          <input type="text" id="item_num" name="bdnum" value="1">
          <a onclick="numAdd()" title="加1" class="setmun jia"></a> </div>
      </div>
      <div class="clbdbox">
        <label class="clbdxx"><em>*</em>价格</label>
        <div class="cltextmun"> <em class="clrmb">&yen;</em><em id="showprice">78</em> </div>
      </div>
      <div class="clbdbox">
        <label class="clbdxx"><em>*</em>姓名</label>
        <div class="cltextbox">
          <input type="text" name="bdname" placeholder="请填写姓名">
        </div>
      </div>
      <div class="clbdbox">
        <label class="clbdxx"><em>*</em>手机号码</label>
        <div class="cltextbox">
          <input type="text" name="bdmob" placeholder="请填写手机号码" id="bdmob">
        </div>
      </div>
      <div class="clbdbox">
        <label class="clbdxx"><em>*</em>所在地区</label>
        <div class="clxlbox">
          <select id="bdprovince" name="bdprovince" class="cldqxl">
          </select>
          <select id="bdcity" name="bdcity" class="cldqxl">
          </select>
          <select id="bdarea" name="bdarea" class="cldqxl nomar">
          </select>
        </div>
      </div>
      <div class="clbdbox">
        <label class="clbdxx"><em>*</em>详细地址</label>
        <div class="cltextbox">
          <input type="text" name="bdaddress" placeholder="请填写详细地址">
        </div>
      </div>
      <div class="clbdbox">
        <label class="clbdxx"><em>*</em>付款方式</label>
        <div class="cldxbox">
          <ul class="sku_ul_nc">
		    <li><a href="javascript:void(0);" onClick="cltgb2(0.9)" class="" data-pay="wx">微信付款<font class="red">（9折优惠）</font></a></li>
            <li><a href="javascript:void(0);" onClick="cltgb2(0.85)" class="" data-pay="alipay">支付宝付款<font class="red">（8.5折优惠）</font></a></li>

          </ul>
        </div>
      </div>
      <div class="clbdbox">
        <label class="clbdxx">留言</label>
        <div class="cltextarea">
          <textarea name="bdother" placeholder="请填写留言或备注"></textarea>
        </div>
      </div>
                   <?php if($clcodeon==1){?>	
               <div class="clbdbox">
                    <label class="clbdxx"><em>*</em>验证码</label>
                    <div class="cltext3box">
                        <input name="wfcode" type="text" class="phpyzm" size="6" /><img id="wfcode" src="../public/wfcode.php?wfaction=codeimg&imgw=70&imgh=29" alt="换一个！" title="换一个！" onClick="this.src=this.src+'?wfaction=codeimg&imgw=70&imgh=29&temp='+Math.random();" /><img src="images/wh.gif" /><a href='javascript:;' onclick="refreshCode()">换一个！</a>
                    </div>
      </div>			
                <?php }?>
                <?php if($clcodeon==2){?>	
<div class="clbdbox">
                    <label class="clbdxx"><em>*</em>验证码</label>
                    <div class="cltext3box">
                        <input name="wfcode" type="text" class="phpyzm" size="6" /><img id="bdcode" src="../public/bdcode.php?bdaction=codeimg&imgw=70&imgh=29" alt="换一个！" title="换一个！" onClick="this.src=this.src+'?bdaction=codeimg&imgw=70&imgh=29&temp='+Math.random();" /><a href='javascript:;' onclick="refreshCode1()">换一个！</a>
                    </div>
      </div>		
                <?php }?>
      <div class="clsubbox">
        <input type="submit" name="bdsubmit" value="立即提交订单">
      </div>
    </form>
    <div style="clear:both;"></div>
  </div>
</div>
<div class="cltitle"><span>近期发货通知</span></div>
<div id="clfahuo" class="clfahuo">
  <div id="clfahuo" style="overflow:hidden;">
    <div id="clfahuo1" style="overflow:hidden;"><script type="text/javascript" src="js/clfh.js"></script></div>
    <div id="clfahuo2"></div>
  </div>
</div>
<div style="height:15px;"></div>
<script type="text/javascript" src="js/clgd.js"></script> 
<script type="text/javascript" src="js/clbd1.js"></script>
</body>
</html>