<!doctype html>
<?php require '../clconfig.php';?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>CLPHP订单系统2017 WEB、WAP自适应版官方正式版 - 样式11</title>
<script type="text/javascript" src="js/cldq.js" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<link href="css/style17.css" rel="stylesheet" type="text/css">
<style type="text/css">
.clorder {
	max-width: 100%;
}
.cltitle {
	background: #FF6700;
}
</style>
</head>
<body>
<script type="text/javascript">
   $("document").ready(function(){

		$(".size a").click(function(){

            var o=$(this);

            if(!o.hasClass("cursize")){

				$(".cursize").removeClass("cursize");

				o.addClass("cursize");

				$("#bdproductb").val(o.attr("data-size"));

			}

		});

		$(".colour a").click(function(){

			var o=$(this);

			if(!o.hasClass("curcolour")){

				$(".curcolour").removeClass("curcolour");

				o.addClass("curcolour");

				$("#bdproductc").val(o.attr("data-ys"));

            }

		});

	});


</script>
<div class="clorder">
  <form id="clform" name="clform" action="../clorder.php" method="post" onsubmit="return postcheck()" target="_parent">
    <input type="hidden" value="" name="referer" id="referer">
    <input type="hidden" value="" name="url" id="url">
    <input type="hidden" value="" name="purl" id="purl">
    <input type="hidden" id="bdproductc" name="bdproductc" value="金色">
    <input type="hidden" name="bdprice" value="580">
    <div class="cltitle">在线快速订购</div>
    <div class="clwrap">
      <div class="clwrapbox"> 
        
        <!---------- 产品套餐 ---------->
        
        <div class="clform-box">
          <label class="clform-label">订购产品</label>
          <div class="clform-pro radio"> <span class="down">
            <input type="radio" name="bdproduct" id="bdproduct1" onclick="cltotal('ok','dx')" value="恭恭恭恭恭恭 385元" alt="385" class="input-radio">
            <label for="bdproduct1">恭恭恭恭恭恭 385元</label>
            </span><span class="down">
            <input type="radio" name="bdproduct" id="bdproduct2" checked="checked" onclick="cltotal('ok','dx')" value="喜喜喜喜喜喜 580元" alt="580" class="input-radio">
            <label for="bdproduct2">喜喜喜喜喜喜 580元<img src="images/tj.gif"></label>
            </span><span class="down">
            <input type="radio" name="bdproduct" id="bdproduct3" onclick="cltotal('ok','dx')" value="发发发发发发 785元" alt="785" class="input-radio">
            <label for="bdproduct3">发发发发发发 785元</label>
            </span> </div>
        </div>
        
        <!---------- 产品套餐 ----------> 
        
        <!---------- 产品颜色 ---------->
        
        <div class="clform-box">
          <label class="clform-label">颜色</label>
          <div class="clform-pro frame">
            <ul class="colour">
              <li><a href="javascript:void(0);" class="curcolour" data-ys="金色"><img src="cpimg/1101.jpg" alt="金色" title="金色"></a></li>
              <li><a href="javascript:void(0);" class="" data-ys="银色"><img src="cpimg/1102.jpg" alt="银色" title="银色"></a></li>
            </ul>
          </div>
        </div>
        <!---------- 产品颜色 ----------> 
        
        <!---------- 数量价格 ---------->
        
        <div class="clform-box">
          <label class="clform-label">数量</label>
          <div class="clform-opt clnums"> <a onclick="cltotal(0,'dx')" title="减1" class="dec"></a>
            <input type="text" id="item_num" name="bdnum" value="1" readonly>
            <a onclick="cltotal(1,'dx')" title="加1" class="lnc"></a> </div>
        </div>
        <div class="clform-box">
          <label class="clform-label">总价</label>
          <div class="clform-opt radio"> <em id="showprice">580</em>元 </div>
        </div>
        
        <!---------- 数量价格 ----------> 
        
      </div>
    </div>
   
    <!---------- 表单主体 ---------->
    
    <div class="clwrap">
      <div class="clwrapbox pt15"> 
        
        <!---------- 表单选项 ---------->
        
        <div class="clform-box">
          <label class="clform-label">姓名</label>
          <div class="clform-opt">
            <input type="text" name="bdname" lay-verify="name" placeholder="请填写姓名" class="input-text">
          </div>
        </div>
        <div class="clform-box">
          <label class="clform-label">手机号码</label>
          <div class="clform-opt">
            <input type="text" name="bdmob" id="bdmob" lay-verify="mob" placeholder="请填写手机号码" class="input-text">
          </div>
        </div>
        <div class="clform-box">
          <label class="clform-label">所在地区</label>
          <div class="clform-opt area"> <span class="clprovince">
            <select id="bdprovince" name="bdprovince" lay-verify="province" class="select">
            </select>
            </span> <span class="clcity">
            <select id="bdcity" name="bdcity" lay-verify="city" class="select">
            </select>
            </span> <span class="clarea">
            <select id="bdarea" name="bdarea" class="select">
            </select>
            </span> </div>
        </div>
        <div class="clform-box">
          <label class="clform-label">详细地址</label>
          <div class="clform-opt">
            <input type="text" name="bdaddress" lay-verify="address" placeholder="请填写详细地址" class="input-text">
          </div>
        </div>
        <div class="clform-box">
          <label class="clform-label">留言</label>
          <div class="clform-opt">
            <textarea name="bdother" placeholder="请填写留言或备注" class="textarea"></textarea>
          </div>
        </div>
        
        <!---------- 表单选项 ----------> 
        
        <!---------- 付款方式 ---------->
        
        <div class="clform-box">
          <label class="clform-label"><em>*</em>付款方式</label>
          <div class="clform-pro radio">
           <span class="auto"> <input type="radio" checked="checked" name="bdpay" id="b1" value="cod" onClick="opay();return changeItem(0);" class="input-radio">
            <label for="b1"><img src="images/fka.gif"></label></span>
            <span class="auto"><input type="radio" name="bdpay" id="b2" value="alipay" onClick="opay2();return changeItem(1);" class="input-radio">
            <label for="b2"><img src="images/fkb.gif" style="max-width: 97px; min-width: 88px; width: 23%;"></label></span>
           <span class="auto"> <input type="radio" name="bdpay" id="b3" value="wx" onClick="opay2();return changeItem(2);" class="input-radio">
            <label for="b3"><img src="images/fkd.gif"></label></span>
            <span class="auto"><input type="radio" name="bdpay" id="b4" value="bank" onClick="opay();return changeItem(3);" class="input-radio">
            <label for="b4"><img src="images/fkc.gif"></label></span>
          </div>
        </div>
        <div class="clform-box">
          <div id="paydiv0" class="clpayps">
            <p><span class="green">温馨提示：</span>选择货到付款在家等快递公司送货上门，先验货后付款！</p>
          </div>
          <div id="paydiv1" class="clpayps" style="display:none;">
            <p><span class="green">温馨提示：</span>全球领先的第三方支付平台，在线支付，安全可靠！</p>
          </div>
          <div id="paydiv2" class="clpayps" style="display:none;">
            <p><span class="green">温馨提示：</span>全球领先的第三方支付平台，在线支付，安全可靠！</p>
          </div>
          <div id="paydiv3" class="clpayps" style="display:none;">
            <p><span class="green">温馨提示：</span>请拨打我们网站上的免费客服电话，索要银行汇款帐号。</p>
          </div>
        </div>
        <!---------- 付款方式 ----------> 

             <?php if($clcodeon==1){?>	
<div class="clform-box">
				<label class="clform-label">验证码</label>
				<div class="clform-opt vcode">
                        <input name="wfcode" type="text"  size="6"><img id="wfcode" src="../public/wfcode.php?wfaction=codeimg&imgw=70&imgh=29" alt="换一个！" title="换一个！" onClick="this.src=this.src+'?wfaction=codeimg&imgw=70&imgh=29&temp='+Math.random();"><img src="images/wh.gif"><a href='javascript:;' onclick="refreshCode()">换一个！</a>
          </div>
        </div>			
                <?php }?>
                <?php if($clcodeon==2){?>	
<div class="clform-box">
				<label class="clform-label">验证码</label>
				<div class="clform-opt vcode">
                        <input name="wfcode" type="text"  size="6"><img id="bdcode" src="../public/bdcode.php?bdaction=codeimg&imgw=70&imgh=29" alt="换一个！" title="换一个！" onClick="this.src=this.src+'?bdaction=codeimg&imgw=70&imgh=29&temp='+Math.random();"><a href='javascript:;' onclick="refreshCode1()">换一个！</a>
          </div>
        </div>		
                <?php }?>

            
      </div>
    </div>
    <!---------- 表单主体 ---------->
    <div class="clwrap">
      <div class="clform-box">
        <button id="bdsubmit" lay-submit="lay-submit" lay-filter="bdsubmit" class="clbtn btn-o">立即提交订单</button>
      </div>
    </div>
  </form>
  <div class="cltitle">发货通知</div>
  <div id="clfahuo" class="clfahuo">
    <div id="clfahuo" style="overflow:hidden;">
      <div id="clfahuo1" style="overflow:hidden;"><script type="text/javascript" src="js/clfh.js"></script></div>
      <div id="clfahuo2"></div>
    </div>
  </div>
  <div style="height:8px;"></div>
</div>
<script type="text/javascript" src="js/clgd.js"></script> 
<script type="text/javascript" src="js/clbd17.js"></script>
</body>
</html>
