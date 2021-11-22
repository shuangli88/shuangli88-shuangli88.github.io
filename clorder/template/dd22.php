<?php require '../clconfig.php';?>
<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>CLPHP订单系统2017 WEB、WAP自适应版官方正式版 - 样式22</title>
<meta content="yes" name="apple-mobile-web-app-capable"/>
<meta content="yes" name="apple-touch-fullscreen"/>
<meta content="telephone=no" name="format-detection"/>
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0, user-scalable=no" name="viewport">
<meta name="MobileOptimized" content="640">
<link href="css/style1.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.lazyload.js"></script>
</head>

<body class="cyan">
<script type="text/javascript" src="js/cl.min.js"></script> 
<script type="text/javascript" src="js/layer.js"></script>
<div class="newmain background" id="tab_box">
  <div class="content">
    <div class="item-content">
      <div class="alizi-booking clearfix" id="aliziOrder">
        <div class="alizi-main" >
          <div class="order-title main-title ellipsis">这里输入产品名称</div>
          <div class="order-content">
            <form id="clform" name="clform" action="../clorder.php" method="post" onsubmit="return postcheck()" target="_parent" class="ajaxForm">
              <input type="hidden" value="" name="referer" id="referer">
              <input type="hidden" value="" name="url" id="url">
              <input type="hidden" value="" name="purl" id="purl">
              <input type="hidden" name="item_id" value="1">
              <input type="hidden" name="bdproduct" value="恭恭恭恭恭恭">
              <input type="hidden" name="bdprice"  value="385">
              <input type="hidden" name="bdproducta" value="型号一">
              <input type="hidden" name="item_price" value="385">
              <div class="rows clearfix">
                <div class="rows clearfix">
                  <label class="head left">选择型号</label>
                  <div class="rows-params left">
                    <div class="clearfix">
                     <a alizi-price="385" alizi-title="型号一" class="left badge ellipsis alizi-product-params active" href="javascript:;"><img src='cpimg/2201.jpg' width="90"/><br>  <center>型号一</center> </a>
                      <a alizi-price="580" alizi-title="型号二" class="left badge ellipsis alizi-product-params " href="javascript:;"><img src='cpimg/2202.jpg' width="90"/><br><center>型号二</center></a>
                      <a alizi-price="785" alizi-title="型号三" class="left badge ellipsis alizi-product-params " href="javascript:;"><img src='cpimg/2203.jpg' width="90"/><br><center>型号三</center></a> 
                      <a alizi-price="960" alizi-title="型号四" class="left badge ellipsis alizi-product-params " href="javascript:;"><img src='cpimg/2204.jpg' width="90"/><br><center>型号四</center></a> 
                      </div>
                  </div>
                </div>
              </div>
              <div class="rows clearfix">
                <div class="rows clearfix">
                  <label class="head left">选择尺寸</label>
                  <div class="rows-params left"> <span class="alizi-radio-group"> <span class="alizi-radio">
                    <input id="选择尺寸0" name="bdproductb" type="radio" value="S" checked>
                    <label for="选择尺寸0"></label>
                    </span> S </span><span class="alizi-radio-group"> <span class="alizi-radio">
                    <input id="选择尺寸1" name="bdproductb" type="radio" value="M" >
                    <label for="选择尺寸1"></label>
                    </span> M </span><span class="alizi-radio-group"> <span class="alizi-radio">
                    <input id="选择尺寸2" name="bdproductb" type="radio" value="L" >
                    <label for="选择尺寸2"></label>
                    </span> L </span> 
                    <span class="alizi-radio-group"> <span class="alizi-radio">
                    <input id="选择尺寸3" name="bdproductb" type="radio" value="XL" >
                    <label for="选择尺寸3"></label>
                    </span> XL </span>
                    <span class="alizi-radio-group"> <span class="alizi-radio">
                    <input id="选择尺寸4" name="bdproductb" type="radio" value="XXL" >
                    <label for="选择尺寸4"></label>
                    </span> XXL </span>
                    </div>
                </div>
              </div>
              <div class="rows clearfix">
                <label class="head left">订购数量</label>
                <div class="rows-params">
                  <div class="left"> <a class="bdnum-dec" href="javascript:alizibdnum(-1)">-</a>
                    <input type="tel" class="quantity" size="4" value="1" name="bdnum" onkeyup="alizibdnum(0)">
                    <a class="bdnum-inc" href="javascript:alizibdnum(1)">+</a> </div>
                </div>
              </div>
              <div class="rows clearfix">
                <label class="head left">产品价格</label>
                <div class="rows-params"> <span><i class="alizi-total-price bright">385</i>元</span> </div>
              </div>
              <div class="rows clearfix">
                <label class="head left">客户姓名</label>
                <div class="rows-params">
                  <input type="text" name="bdname" placeholder="请填写姓名" value="" autocomplete="off" class="input-text left">
                </div>
              </div>
              <div class="rows clearfix">
                <label class="head left">客户手机</label>
                <div class="rows-params">
                  <input type="tel" name="bdmob" placeholder="请填写手机号码" value="" autocomplete="off" class="input-text left">
                </div>
              </div>
              <div class="rows clearfix">
                <label class="head left">选择地区</label>
                <div class="rows-params">
                  <select name="bdprovince" id="province-0" class="select1">
                  </select>
                  <select name="bdcity" id="city-0" class="select1">
                  </select>
                  <select name="bdarea" id="area-0" class="select1">
                  </select>
                  <script type="text/javascript" src="js/cldq.js" charset="utf-8"></script>
                </div>
              </div>
              <div class="rows clearfix">
                <label class="head left">详细地址</label>
                <div class="rows-params">
                  <input type="text" name="bdaddress" placeholder="请填写详细地址" value="" autocomplete="off" class="input-text left">
                </div>
              </div>
              <div class="rows clearfix">
                <label class="head left">留言备注</label>
                <div class="rows-params">
                  <textarea name="bdother" class="input-text" rows="2" placeholder="请填写留言或备注"></textarea>
                </div>
              </div>
               <?php if($clcodeon==1){?>	
               		 <div class="rows clearfix">

						<label class="head left">验 证 码</label>

						<div class="rows-params">

						  <input name="wfcode" type="text" class="input-text left" size="6" style="width:30%;" /><img id="wfcode" src="../public/wfcode.php?wfaction=codeimg&imgw=70&imgh=29" alt="换一个！" title="换一个！" onClick="this.src=this.src+'?wfaction=codeimg&imgw=70&imgh=29&temp='+Math.random();" /><img src="images/wh.gif" /><a href='javascript:;' onclick="refreshCode()">换一个！</a>
					   </div>

					</div>
                <?php }?>
                <?php if($clcodeon==2){?>	
	 <div class="rows clearfix">

						<label class="head left">验 证 码</label>

						<div class="rows-params">

						<input name="wfcode" type="text" class="input-text left"  size="6" style="width:30%;" /><img id="bdcode" src="../public/bdcode.php?bdaction=codeimg&imgw=70&imgh=29" alt="换一个！" title="换一个！" onClick="this.src=this.src+'?bdaction=codeimg&imgw=70&imgh=29&temp='+Math.random();" /><a href='javascript:;' onclick="refreshCode1()">换一个！</a>
				</div>

			  </div>	
                <?php }?>
              <div class="rows clearfix">
                <label class="head left">支付方式</label>
                <div class="rows-params"> <a class="alizi-radio-group"> <span class="alizi-radio">
                  <input class="payments" alizi-key="1" id="pay1" name="bdpay" type="radio" value="cod" checked>
                  <label for="pay1"></label>
                  </span> <img src="images/fka.gif" /> </a> <a class="alizi-radio-group"> <span class="alizi-radio">
                  <input class="payments" alizi-key="3" id="pay3" name="bdpay" type="radio" value="alipay" >
                  <label for="pay3"></label>
                  </span> <img src="images/fkb.gif" style="max-width: 97px; min-width: 88px; width: 23%;" /> </a> <br>
                  <a class="alizi-radio-group"> <span class="alizi-radio">
                  <input class="payments" alizi-key="2" id="pay2" name="bdpay" type="radio" value="wx" >
                  <label for="pay2"></label>
                  </span> <img src="images/fkd.gif"/> </a> <a class="alizi-radio-group"> <span class="alizi-radio">
                  <input class="payments" alizi-key="5" id="pay5" name="bdpay" type="radio" value="bank" >
                  <label for="pay5"></label>
                  </span> <img src="images/fkc.gif" /> </a> </div>
              </div>
              <div id="payment-info" class="rows clearfix">
                <div class="payment-info"></div>
                <input type="hidden" name="shipping_price" value="0">
              </div>
              <div class="rows mtop">
                <button type="bumit" name="bdsubmit" class="btn-submit btn btn-cyan" >确认提交</button>
              </div>
            </form>
          </div>
        </div>
        <div class="alizi-side">
          <div class="order-title side-title">最新通知</div>
          <div class="content delivery order-content">
            <ul>
              <li > 
                <script type="text/javascript" src="js/clfh.js"></script></li>
              <li class="even"> 
                <script type="text/javascript" src="js/clfh.js"></script></li>
              <li > 
                <script type="text/javascript" src="js/clfh.js"></script></li>
              <li class="even"> 
                <script type="text/javascript" src="js/clfh.js"></script></li>
              <li > 
                <script type="text/javascript" src="js/clfh.js"></script></li>
              <li class="even"> 
                <script type="text/javascript" src="js/clfh.js"></script></li>
              <li > 
                <script type="text/javascript" src="js/clfh.js"></script></li>
              <li class="even"> 
                <script type="text/javascript" src="js/clfh.js"></script></li>
              <li > 
                <script type="text/javascript" src="js/clfh.js"></script></li>
              <li class="even"> 
                <script type="text/javascript" src="js/clfh.js"></script></li>
              <li > 
                <script type="text/javascript" src="js/clfh.js"></script></li>
              <li class="even"> 
                <script type="text/javascript" src="js/clfh.js"></script></li>
              <li > 
                <script type="text/javascript" src="js/clfh.js"></script></li>
              <li class="even"> 
                <script type="text/javascript" src="js/clfh.js"></script></li>
              <li > 
                <script type="text/javascript" src="js/clfh.js"></script></li>
              <li class="even"> 
                <script type="text/javascript" src="js/clfh.js"></script></li>
              <li > 
                <script type="text/javascript" src="js/clfh.js"></script></li>
            </ul>
          </div>
        </div>
        <script type="text/javascript">

$(function(){ 

	resize();

	$(".delivery").aliziScroll({speed:100,rowHeight:600});

})

$(window).resize(function() { resize();});

function resize(){

	var width = $('.alizi-booking').width();

	var height = width>600?$('.alizi-main').height():260;

	$(".delivery").height(height-60);

}

</script></div>

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


document.getElementById("referer").value = opener?opener.location.href:(top.document.referrer?top.document.referrer:top.location.href);
document.getElementById("url").value = top.location.href;
document.getElementById("purl").value = document.location;

</script> 
    </div>
  </div>
</div>
</body>
</html>