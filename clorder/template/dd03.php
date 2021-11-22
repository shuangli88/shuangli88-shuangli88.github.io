<?php require '../clconfig.php';?>

<!DOCTYPE HTML>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<title>CLPHP订单系统2017 WEB、WAP自适应版官方正式版 - 样式03</title>
<script type="text/javascript" src="js/cldq.js" charset="utf-8"></script>
<link href="css/clwebapstyle.css" rel="stylesheet" type="text/css">
<style type="text/css">
/**
  **************************************************************************************************
  **********  CLPHP订单系统2017 WEB、WAP自适应版官方正式版  *****  官方正版 *** 版权所有 *** 盗版必究  **********
  **********------------------------------------------------------------------------------**********
  * 官方网站：http://www.chunleinet.com/ 官方店铺：http://jxlcl.taobao.com/  *  官方店铺旺旺:chunlei2615 请认准再购买 *
  **************************************************************************************************
*/

#clorder {
	width: 100%;
	max-width: 950px;
	min-width: 320px;
	background: #FFF;
}
.clwarp {
	border: 5px solid #F90;
}
.cltitlea, .cltitleb {
	border-bottom: 1px solid #F90;
}
.clrxian {
	border-right: 1px solid #F90;
}
.clsubbox input {
	background: #F90;
}
</style>
<link href="css/clrespond.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="clorder">
  <div class="clwarp">
    <div class="clorderl">
      <div class="clforml" id="clforml">
        <div class="clrxian">
          <form id="clform" name="clform" action="../clorder.php" method="post" onsubmit="return postcheck()" target="_parent">
            <input type="hidden" value="" name="referer" id="referer">
            <input type="hidden" value="" name="url" id="url">
            <input type="hidden" value="" name="purl" id="purl">
            <input type="hidden" name="bdnum" value="1">
            <input type="hidden" name="bdprice" value="385">
            <div class="cltitlea"></div>
            <div class="clbdbox">
              <label class="clbdxx"><em>*</em>选择产品</label>
              <div class="clxlbox">
                <select id="bdproduct" name="bdproduct" onChange="priceb()" class="clcpxl red">
                  <option selected value="恭恭恭恭恭恭 2盒 385元" title="385">恭恭恭恭恭恭 2盒 385元</option>
                  <option value="喜喜喜喜喜喜 4盒 580元" title="580">喜喜喜喜喜喜 4盒 580元</option>
                  <option value="发发发发发发 6盒 785元" title="785">发发发发发发 6盒 785元</option>
                  <option value="财财财财财财 8盒 960元" title="960">财财财财财财 8盒 960元</option>
                </select>
              </div>
            </div>
            <div class="clbdbox">
              <label class="clbdxx"><em>*</em>选择型号</label>
              <div class="cldxbox red">
                <input type="radio" name="bdproducta" id="bdproductb1" value="型号一" >
                <label for="bdproductb1">型号一</label>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" checked name="bdproducta" id="bdproductb2" value="型号二" >
                <label for="bdproductb2">型号二</label>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="bdproducta" id="bdproductb3" value="型号三" >
                <label for="bdproductb3">型号三</label>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="bdproducta" id="bdproductb4" value="型号四" >
                <label for="bdproductb4">型号四</label>
              </div>
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
                <input type="text" name="bdmob" placeholder="请填写手机号码">
              </div>
            </div>
            <div class="clbdbox">
              <label class="clbdxx"><em>*</em>所在地区</label>
              <div class="clxlbox">
                <select name="bdprovince" class="cldqxl">
                </select>
                <select name="bdcity" class="cldqxl">
                </select>
                <select name="bdarea" class="cldqxl">
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
                <input type="radio" checked="checked" name="bdpay" id="b1" value="cod" onClick="opay();return changeItem(0);" />
                <label for="b1"><img src="images/fka.gif"  /></label>
                <input type="radio" name="bdpay" id="b2" value="alipay" onClick="opay2();return changeItem(1);" />
                <label for="b2"><img src="images/fkb.gif" style="max-width: 97px; min-width: 88px; width: 23%;" /></label>
                <br>
                <input type="radio" name="bdpay" id="b3" value="wx" onClick="opay2();return changeItem(2);" />
                <label for="b3"><img src="images/fkd.gif"/></label>
                <input type="radio" name="bdpay" id="b4" value="bank" onClick="opay();return changeItem(3);" />
                <label for="b4"><img src="images/fkc.gif"  /></label>
              </div>
            </div>
            <div class="clbdbox">
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
            <div class="clbdbox">
              <label class="clbdxx">留言</label>
              <div class="cltext2box">
                <textarea name="bdother" placeholder="请填写留言或备注"></textarea>
              </div>
            </div>
               <?php if($clcodeon==1){?>	
               <div class="clbdbox">
                    <label class="clbdxx"><em>*</em>验证码</label>
                    <div class="cltext3box">
                        <input name="wfcode" type="text" class="bdcode" size="6" /><img id="wfcode" src="../public/wfcode.php?wfaction=codeimg&imgw=70&imgh=29" alt="换一个！" title="换一个！" onClick="this.src=this.src+'?wfaction=codeimg&imgw=70&imgh=29&temp='+Math.random();" /><img src="images/wh.gif" /><a href='javascript:;' onclick="refreshCode()">换一个！</a>
                    </div>
                </div>			
                <?php }?>
                <?php if($clcodeon==2){?>	
<div class="clbdbox">
                    <label class="clbdxx"><em>*</em>验证码</label>
                    <div class="cltext3box">
                        <input name="wfcode" type="text" class="bdcode" size="6" /><img id="bdcode" src="../public/bdcode.php?bdaction=codeimg&imgw=70&imgh=29" alt="换一个！" title="换一个！" onClick="this.src=this.src+'?bdaction=codeimg&imgw=70&imgh=29&temp='+Math.random();" /><a href='javascript:;' onclick="refreshCode1()">换一个！</a>
                    </div>
                </div>		
                <?php }?>
            <div class="clform-box btnbox">
              <input type="submit" name="bdsubmit" value="立即提交订单" class="clbtn btn-o">
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="clorderr">
      <div class="clformr">
        <div class="cltitleb"></div>
        <div id="clfahuo" style="overflow:hidden;">
          <div id="clfahuo1" style="overflow:hidden;"><script type="text/javascript" src="js/clfh.js"></script></div>
          <div id="clfahuo2"></div>
        </div>
      </div>
    </div>
    <div style="clear:both;"></div>
  </div>
</div>
<script type="text/javascript" src="js/clbd.js"></script> 
<script type="text/javascript" src="js/clgd.js"></script>
</body>
</html>