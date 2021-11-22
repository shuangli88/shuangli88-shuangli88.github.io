<?php require '../clconfig.php';?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
<title>CLPHP订单系统2017 WEB、WAP自适应版官方正式版 - 样式14</title>
<script type="text/javascript" src="js/cldq.js" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<link href="css/clwap1style.css" rel="stylesheet" type="text/css">
<style type="text/css">
    /**
  **************************************************************************************************
  **********  CLPHP订单系统2017 WEB、WAP自适应版官方正式版  *****  官方正版 *** 版权所有 *** 盗版必究  **********
  **********------------------------------------------------------------------------------**********
  * 官方网站：http://www.chunleinet.com/ 官方店铺：http://jxlcl.taobao.com/  *  官方店铺旺旺:chunlei2615 请认准再购买 *
  **************************************************************************************************
*/
#clorder{width:100%;background:#FFFFFF;}
.clwarp{border:0px solid #999966;}
.cltitle,.cltitlefh{background:#999966;}
.clsubbox input{background:#FF6633;}
.clsubbox input:hover{background:#FF8C66;}
.clfahuo{background:#FFFFFF;}
.clfahuo ul li{background:#FFFFFF;}
</style>
</head>
<body>
<div id="clorder">
    <div class="clwarp">
        <form id="clform" name="clform" action="../clorder.php" method="post" onsubmit="return postcheck()" target="_parent">
      <input type="hidden" value="" name="referer" id="referer">
      <input type="hidden" value="" name="url" id="url">
      <input type="hidden" value="" name="purl" id="purl">
      <input type="hidden" id="bdprice" name="bdprice" value="385" >
              <div class="cltitle">在线快速订购</div>
                <div class="clbdbox">
            <label class="clbdxx"><em>*</em>选择产品</label>
            <div class="cldxbox red">
                <input type="radio" name="bdproduct" id="bdproduct0" checked alt="385" value="恭恭恭恭恭恭恭恭恭恭 385元" onclick="cltotal('ok','dx')"><label for="bdproduct0">恭恭恭恭恭恭恭恭恭恭 385元</label><br>    
                <input type="radio" name="bdproduct" id="bdproduct1" alt="580" value="喜喜喜喜喜喜喜喜喜喜 580元" onclick="cltotal('ok','dx')"><label for="bdproduct1">喜喜喜喜喜喜喜喜喜喜 580元</label><img src="images/tj.gif"><br>     
                <input type="radio" name="bdproduct" id="bdproduct2" alt="785" value="发发发发发发发发发发 785元" onclick="cltotal('ok','dx')"><label for="bdproduct2">发发发发发发发发发发 785元</label><br>         </div>
        </div>
               
        	
        <div class="clbdbox">
            <label class="clbdxx"><em>*</em>产品规格</label>
            <div class="cldxbox">                        
                <p><input type="radio" name="bdproductb" checked id="bdproductb0" value="38码"><label for="bdproductb0">38码</label></p><p><input type="radio" name="bdproductb" id="bdproductb1" value="39码"><label for="bdproductb1">39码</label></p><p><input type="radio" name="bdproductb" id="bdproductb2" value="40码"><label for="bdproductb2">40码</label></p><p><input type="radio" name="bdproductb" id="bdproductb3" value="41码"><label for="bdproductb3">41码</label></p><p><input type="radio" name="bdproductb" id="bdproductb4" value="42码"><label for="bdproductb4">42码</label></p><p><input type="radio" name="bdproductb" id="bdproductb5" value="43码"><label for="bdproductb5">43码</label></p><p><input type="radio" name="bdproductb" id="bdproductb6" value="44码"><label for="bdproductb6">44码</label></p>            </div>
        </div>
                	
        <div class="clbdbox">
            <label class="clbdxx"><em>*</em>产品颜色</label>
            <div class="cldxbox">                        
                <p><input type="radio" name="bdproductc" checked id="bdproductc0" value="桔黄色"><label for="bdproductc0">桔黄色</label></p><p><input type="radio" name="bdproductc" id="bdproductc1" value="蓝色"><label for="bdproductc1">蓝色</label></p><p><input type="radio" name="bdproductc" id="bdproductc2" value="黑色"><label for="bdproductc2">黑色</label></p><p><input type="radio" name="bdproductc" id="bdproductc3" value="白色"><label for="bdproductc3">白色</label></p>            </div>
        </div>
        		                <div class="clbdbox">
            <label class="clbdxx"><em>*</em>数量</label>
            <div class="cltextmun">
                <a onclick="cltotal(0,'dx')" title="减1" class="setmun jian"></a><div class="cltextmi"><input type="text" name="bdnum" value="1" onChange="cltotal('ok','dx')"></div><a onclick="cltotal(1,'dx')" title="加1" class="setmun jia"></a>
            </div>
        </div>
        <div class="clbdbox">
            <label class="clbdxx"><em>*</em>价格</label>
            <div class="cltextmun">
                <em class="clrmb">&yen;</em><em id="showprice">385.00</em>
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
                <input type="text" name="bdmob" placeholder="请填写手机号码" id="bdmob">
            </div>
        </div>        
		        <div class="clbdbox">
            <label class="clbdxx"><em>*</em>所在地区</label>
            <div class="clxlbox">
                <select id="clprovince" name="bdprovince" class="cldqxl"></select><select id="clcity" name="bdcity" class="cldqxl"></select><select id="clarea" name="bdarea" class="cldqxl nomar"></select>
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
<input type="radio" checked="checked" name="bdpay" id="b1" value="cod" onClick="opay();return changeItem(0);" /><label for="b1"><img src="images/fka.gif" /></label>
                        <input type="radio" name="bdpay" id="b2" value="alipay" onClick="opay2();return changeItem(1);" /><label for="b2"><img src="images/fkb.gif" style="max-width: 97px; min-width: 88px; width: 23%;" /></label><br>
                        <input type="radio" name="bdpay" id="b3" value="wx" onClick="opay2();return changeItem(2);" /><label for="b3"><img src="images/fkd.gif" /></label>
                        <input type="radio" name="bdpay" id="b4" value="bank" onClick="opay();return changeItem(3);" /><label for="b4"><img src="images/fkc.gif" /></label>
               

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
            <label class="clbdxx">客户留言</label>
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
                <div class="cltitlefh">近期发货通知</div>
<div id="clfahuo" class="clfahuo">
  <div id="clfahuo" style="overflow: hidden; padding-left: 20px; padding-right: 0px;">
    <div id="clfahuo1" style="overflow:hidden;"><script type="text/javascript" src="js/clfh.js"></script></div>
    <div id="clfahuo2"></div>
  </div>
</div>
        <div style="height:10px;"></div>
            </div>
</div>
<script type="text/javascript" src="js/clgd.js"></script> 
<script type="text/javascript" src="js/clbd.js"></script>
</body>
</html>