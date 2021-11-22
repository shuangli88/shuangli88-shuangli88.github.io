<?php require '../clconfig.php';?>
<!DOCTYPE html>
<html>
<head>
<title>CLPHP订单系统2017 WEB、WAP自适应版官方正式版 - 样式12</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
<script type="text/javascript" src="js/cldd05.js"></script>
<script type="text/javascript" src="js/cldq.js" charset="utf-8"></script>
<link rel="stylesheet" href="style/bootstrap.min.css" />
<style type="text/css">
body {
	margin: 10px 10px;
	background-image: none;
	background-color: #fff;
}
h5 {
	font-weight: bold;
	font-size: 12px;
}
.small {
	font-size: 12px;
	color: #808080
}
.lh40 {
	margin-top: 5px;
	margin-bottom: 5px;
}
.pl0 {
	padding-left: 0px;
}
.price {
	padding-left: 10px;
	height: 34px;
	line-height: 34px;
	font-size: 16px;
}
.price strong {
	color: #d02d1a;
	font-weight: normal;
}
.mt10 {
	margin-top: 4px;
}
.mt20 {
	margin-top: 20px;
}
.mt-20 {
	margin-top: -20px;
}
#order-btn {
	padding-top: 10px;
	padding-bottom: 10px;
	font-size: 20px;
	margin-top: 15px;
}
body,td,th {
	font-family: STHeiti, "Microsoft YaHei", "WenQuanYi Micro Hei", Arial, SimSun, sans-serif;
}
</style>
</head>
<body  style="width:100%;max-width:750px;margin:0px auto">
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
<form id="clform" name="clform" action="../clorder.php" method="post" onSubmit="return postcheck()" target="_parent" class="form parsley-form">
  <input type="hidden" value="" name="referer" id="referer">
  <input type="hidden" value="" name="url" id="url">
  <input type="hidden" value="" name="purl" id="purl">
  <input type="hidden" id="bdproduct" name="bdproduct" value="恭恭恭恭恭恭">
  <input type="hidden" id="item_num" name="bdnum" value="1">
  <input type="hidden" id="bdprice" name="bdprice" value="385">
  <input type="hidden" id="bdproducta" name="bdproducta" value="型号一">
  <input type="hidden" id="bdproductb" name="bdproductb" value="尺寸一">
  <input type="hidden" id="bdproductc" name="bdproductc" value="黑色">
  <div class="panel panel-info">
    <div class="panel-heading">
      <h4> <i class="fa fa-shopping-cart"></i> 商品信息 </h4>
    </div>
    <div class="panel-body">
      <table cellpadding="3">
        <tr>
          <td rowspan="2" valign="top"><div class="thumbnail"><img src="cpimg/1201.jpg" width="80" /></div></td>
          <td><h5>产品名称</h5></td>
        </tr>
        <tr>
          <td class="small"> 货到付款并包邮 </td>
        </tr>
      </table>
      <div class="form-group">
        
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
            <li><a href="javascript:void(0);" class=""  data-sku="尺寸二">尺寸二</a></li>
          </ul>
          <ul class="sku_ul_nb">
            <li>颜色：</li>
            <li><a href="javascript:void(0);" class="skunb_cur" data-ys="黑色">黑色</a></li>
            <li><a href="javascript:void(0);" class="" data-ys="白色">白色</a></li>
            <li><a href="javascript:void(0);" class="" data-ys="土豪金">土豪金</a></li>
          </ul>
          <p class="row">
            <label>价　格 </label>
            <span class="i_pri" id="item_price">￥385.00</span></p>
        
      </div>
    </div>
    <!-- /#portlet-content --> 
  </div>
  <!-- /#portlet-header -->
  <div class="panel panel-info mt10">
    <div class="panel-heading">
      <h4> <i class="fa fa-user"></i> 收货人信息 </h4>
    </div>
    <div class="panel-body">
      <div class="form-group">
        <input value="" autocomplete="off" data-required-message="请填写收货人" data-required="true" name="bdname" placeholder="请填写姓名" type="text" class="form-control" />
      </div>
      <div class="form-group">
        <input value="" autocomplete="off" data-required-message="请填写手机号" data-required="true" name="bdmob" placeholder="请填写手机号码" type="text" class="form-control" />
      </div>
      <div class="form-group">
        <select name="bdprovince" class="form-control ui-select2">
        </select>
      </div>
      <div class="form-group">
        <select name="bdcity" class="form-control ui-select2">
        </select>
      </div>
      <div class="form-group">
        <select name="bdarea" class="form-control ui-select2">
        </select>
      </div>
      
      <!-- /#region -->
      <div class="form-group">
        <input value="" autocomplete="off" data-required-message="请填写详细街道地址" data-required="true" name="bdaddress" placeholder="请填写详细地址" type="text" class="form-control" />
      </div>
      <div class="form-group">
        <input maxlength="30" data-maxlength-message="备注只能在30个字以内" value="" autocomplete="off" placeholder="请填写留言或备注" class="form-control" type="text" name="bdother" />
      </div>
      <div class="form-group">
        <select id="bdpay" name="bdpay" class="form-control">
          <option selected value="cod" title="货到付款">货到付款</option>
          <option value="alipay" title="支付宝付款">支付宝付款</option>
          <option value="wx" title="微信付款">微信付款</option>
          <option value="bank" title="联系客服索要打款账号">银行汇款</option>
        </select>
      </div>
    </div>
    <!-- /#portlet-content --> 
  </div>
   <?php if($clcodeon==1){?>	
   <div class="clwarp" align="center">
               <div class="clbdbox">
                    
                    <div class="cltext3box">
                      <span style="font-weight: bold">验证码&nbsp;&nbsp;</span>
                      <input name="wfcode" type="text"  size="6" class="phpyzm"  /><img id="wfcode" src="../public/wfcode.php?wfaction=codeimg&imgw=70&imgh=29" alt="换一个！" title="换一个！" onClick="this.src=this.src+'?wfaction=codeimg&imgw=70&imgh=29&temp='+Math.random();" /><img src="images/wh.gif" /><a href='javascript:;' onclick="refreshCode()">换一个！</a>
                 </div>
     </div>	
  </div>			
                <?php }?>
                <?php if($clcodeon==2){?>	
                 <div class="clwarp" align="center">
               <div class="clbdbox">
                    
                    <div class="cltext3box">
                      <span style="font-weight: bold">验证码&nbsp;&nbsp;</span>
                        <input name="wfcode" type="text"  size="6" class="phpyzm"/><img id="bdcode" src="../public/bdcode.php?bdaction=codeimg&imgw=70&imgh=29" alt="换一个！" title="换一个！" onClick="this.src=this.src+'?bdaction=codeimg&imgw=70&imgh=29&temp='+Math.random();" /><a href='javascript:;' onclick="refreshCode1()">换一个！</a>
                    </div>
                </div>	
                </div>		
                <?php }?>

  <button type="submit" id="order-btn" name="bdsubmit" class="btn btn-lg btn-block btn-primary">提交订单</button>
</form>
<br>
<div class="panel panel-info">
  <div class="panel-heading">
    <h4> <i class="fa fa-user"></i> 发货通知 </h4>
  </div>
  <div id="clfahuo" class="clfahuo">
    <div id="clfahuo" style="overflow:hidden;">
      <div id="clfahuo1" style="overflow:hidden;"><script type="text/javascript" src="js/clfh.js"></script></div>
      <div id="clfahuo2"></div>
    </div>
  </div>
  <div style="height:8px;"></div>
</div>
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
	if (document.clform.wfcode.value==""){

		alert('请填写验证码！');

		document.clform.wfcode.focus();

		return false;

	}

    document.clform.bdsubmit.value="正在提交，请稍等 >>";

    return true;

}

new PCAS("bdprovince","bdcity","bdarea");
try{

	var thissrc=document.getElementById("wfcode").src;

	function refreshCode(){

		document.getElementById("wfcode").src=thissrc+"temp="+Math.random(); 
	}
}
catch(ex){
} 	
try{	
	var thissrc = document.getElementById("bdcode").src;
	function refreshCode1(){
		document.getElementById("bdcode").src=thissrc+"?bdaction=codeimg&imgw=70&imgh=29&temp="+Math.random(); 
	}
}
catch(ex){
} 

/*//////////////////////////// WFORDERJSFGX ////////////////////////////*/

document.getElementById("referer").value = opener?opener.location.href:(top.document.referrer?top.document.referrer:top.location.href);
document.getElementById("url").value = top.location.href;
document.getElementById("purl").value = document.location;

</script>
<script type="text/javascript" src="js/clgd.js"></script> 
</body>
</html>
