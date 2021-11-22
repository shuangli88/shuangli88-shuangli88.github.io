<?php require '../clconfig.php';?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<title>CLPHP订单系统2017 WEB、WAP自适应版官方正式版 - 样式13</title>
<script type="text/javascript" src="js/cldq.js" charset="utf-8"></script>
<link href="style/bdstyle.css" rel="stylesheet" type="text/css" />
<style type="text/css">
    /**
  **************************************************************************************************
  **********  CLPHP订单系统2017 WEB、WAP自适应版官方正式版  *****  官方正版 *** 版权所有 *** 盗版必究  **********
  **********------------------------------------------------------------------------------**********
  * 官方网站：http://www.chunleinet.com/ 官方店铺：http://jxlcl.taobao.com/  *  官方店铺旺旺:chunlei2615 请认准再购买 *
  **************************************************************************************************
*/
    body, a {

    color: #444;

	margin:0px;

}

.block {

    border: 1px solid #cccccc;

    border-radius: 9px;

    box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);

    margin: 5px;

    overflow: hidden;

}



#book .text, #book .btnn, #book .list, #book h3 {

    display: block;

    margin: auto auto 5px;

    width: 95%;

}

#book h3 {

    line-height: 1.1em;

}

#book .list {

    border-top: 1px solid #e0e0e0;

}

#book .list a {

    display: block;

    padding: 1%;

}

.t1 {
	font-size: 30px;
	padding-top: 0.2em;
	padding-right: 0;
	padding-left: 0;
	padding-bottom: 0.2em;
}

.tc {

    text-align: center;

}





#book .text, #book .btnn, #book .list, #book h3 {
	display: block;
	margin-top: auto;
	margin-right: auto;
	margin-left: auto;
	margin-bottom: 5px;
	width: 95%;
}

input.text, textarea.text,select.text {

    border: 1px solid #cccccc;

    border-radius: 0.5em;

    display: block;

    font-size: 16px;

    padding: 0.4em 0;

}



.bar_b {
display:block;
    background: linear-gradient(#ff8800, #ff8800) repeat scroll 0 0 #ff4400;

    color: #ffffff;
filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff8800', endColorstr='#ff8800',GradientType=1); 
}

.btn_4 {

    border: 1px solid #ff4400;

    font-size: 20px;

}

.btnn, .btn_group {

    display: inline-block;

    overflow: hidden;

    vertical-align: middle;

}

.btnn {

    border-radius: 0.3em;

    cursor: pointer;

    height: 2em;

    line-height: 2em;

    padding: 0 1em;

    text-align: center;

    text-decoration: none !important;

}

.t4 {

    font-size: 16px;

}



.butzxdg {

    background:#ff8800;

    border: 1px solid #ff4400;

    border-radius: 0.3em;

    color: #ffffff;

    cursor: pointer;

    display: inline-block;

    font-size: 16px;

    height: 2em;

    line-height: 2em;

    overflow: hidden;

    padding: 0 1em;

    text-align: center;

    text-decoration: none !important;

    vertical-align: middle;

}

.butmfzx {

    background:#0c8502;

    border: 1px solid #4eb810;

    border-radius: 0.3em;

    color: #ffffff;

    cursor: pointer;

    display: inline-block;

    font-size: 16px;

    height: 2em;

    line-height: 2em;

    overflow: hidden;

    padding: 0 1em;

    text-align: center;

    text-decoration: none !important;

    vertical-align: middle;

}
.bddqxl{
	width: 32.5%;
	height: 36px;

	
	 border: 1px solid #cccccc;

    border-radius: 0.5em;



    font-size: 16px;

    padding: 0.4em 0;
}
.text:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6)}
</style>
</head>
<body>
<div id="bdorder">
    <div class="bdwarp">
    
        <form id="clform" name="clform" action="../clorder.php" method="post" onSubmit="return postcheck()" target="_parent">
         <input type="hidden" value="" name="referer" id="referer">
                <input type="hidden" value="" name="url" id="url">
                <input type="hidden" value="" name="purl" id="purl">
        <input type="hidden" id="item_num" name="bdnum" value="1">
        <input type="hidden" name="bdprice" value="580" />
        <div id="book" class="clearfix bar_a block">
        <h3 class="t1 tc">
           在线快速订购</h3>
		       <h3 class="t4">
            选择产品：</h3>
		        
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="3%" height="35">&nbsp;</td>
      <td width="97%"><input type="radio" name="bdproduct" id="a1" value="恭恭恭恭恭恭 2盒 385元" alt="385" onclick="pricea()" /><label for="a1" style="font-size: 16px">恭恭恭恭恭恭 2盒 <span style="color: #FB080C">385</span>元</label></td>
    </tr>
    <tr>
      <td width="3%" height="35">&nbsp;</td>
      <td width="97%"><input type="radio" checked name="bdproduct" c id="a2" value="喜喜喜喜喜喜 4盒 580元" alt="580" onclick="pricea()" /><label for="a2"><span style="font-size: 16px">喜喜喜喜喜喜 4盒 <span style="color: #F4060A">580</span>元</span><img src="images/hot.gif" /></label></td>
    </tr>
    <tr>
      <td width="3%" height="35">&nbsp;</td>
      <td width="97%"><input type="radio" name="bdproduct" id="a3" value="发发发发发发 6盒 785元" alt="785" onclick="pricea()" /><label for="a3" style="font-size: 16px">发发发发发发 6盒 <span style="color: #F7070B">785</span>元</label></td>
    </tr>
    <tr>
      <td width="3%" height="35">&nbsp;</td>
      <td width="97%"><input type="radio" name="bdproduct" id="a4" value="财财财财财财 8盒 960元" alt="960" onclick="pricea()" /><label for="a4" style="font-size: 16px">财财财财财财 8盒 <span style="color: #F90409">960</span>元</label></td>
    </tr>
    
  </tbody>
</table>
<br>
    <h3 class="t4">产品型号：</h3>	
                     
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="3%" height="35">&nbsp;</td>
      <td width="97%">
           <input type="radio" name="bdproducta" id="bdproductb1" value="型号一" ><label for="bdproductb1" style="font-size: 16px">型号一</label>&nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="radio" checked name="bdproducta" id="bdproductb2" value="型号二" ><label for="bdproductb2" style="font-size: 16px">型号二</label>&nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="radio" name="bdproducta" id="bdproductb3" value="型号三" ><label for="bdproductb3" style="font-size: 16px">型号三</label>&nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="radio" name="bdproducta" id="bdproductb4" value="型号四" ><label for="bdproductb4" style="font-size: 16px">型号四</label>      
			</td>
    </tr>
   </tbody>
   </table>    
   <h3 class="t4">产品颜色：</h3>	
                     
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="3%" height="35">&nbsp;</td>
      <td width="97%">
             <input type="radio" name="bdproductc" id="bdproductc1" value="颜色一" ><label for="bdproductc1" style="font-size: 16px">颜色一</label>&nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="radio" checked name="bdproductc" id="bdproductc2" value="颜色二" ><label for="bdproductc2" style="font-size: 16px">颜色二</label>&nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="radio" name="bdproductc" id="bdproductc3" value="颜色三" ><label for="bdproductc3" style="font-size: 16px">颜色三</label>&nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="radio" name="bdproductc" id="bdproductc4" value="颜色四" ><label for="bdproductc4" style="font-size: 16px">颜色四</label>  
			</td>
    </tr>
   </tbody>
   </table>          
        

 <h3 class="t4">收件人姓名：</h3>
 <input name="bdname" placeholder="请填写姓名" id="name" size=30  class="text" >
 <h3 class="t4">联系电话：</h3>	
                <input name="bdmob" placeholder="请填写手机号码" id="mob" size="30"  class="text" >
                <h3 class="t4">所在地区：</h3>	
                     
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="3%" height="35">&nbsp;</td>
      <td width="97%">
                 
			<select name="bdprovince" class="bddqxl"></select><select name="bdcity" class="bddqxl"></select><select name="bdarea" class="bddqxl"></select></td>
    </tr>
   </tbody>
   </table>        
    <br>            

 <h3 class="t4">收货地址：</h3>	
                <input name="bdaddress" placeholder="请填写详细地址" id="address" size="30"  class="text" >  
 <h3 class="t4">备注留言：</h3>	                    
                <textarea name="bdother" cols="48" rows="2" placeholder="请填写留言或备注" class="text"></textarea>
                            <h3 class="t4">付款方式：</h3>	                    
                <select name="bdpay" id="bdpay" class="text" >
  <option selected value="cod" title="货到付款">货到付款</option>

                            <option value="alipay" title="支付宝付款">支付宝付款</option>
                            <option value="wx" title="微信付款">微信付款</option>

                            <option value="bank" title="联系客服索要打款账号">银行汇款</option> </select> 
                            
                                   
                            
      <?php if($clcodeon==1){?>	
              <h3 class="t4">验证码：</h3>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="3%" height="35">&nbsp;</td>
      <td width="97%">
            <input type="text" name="wfcode" class="phpyzm" /><img id="wfcode" src="../public/wfcode.php?wfaction=codeimg&imgw=70&imgh=29" alt="换一个！" title="换一个！" onClick="this.src=this.src+'?wfaction=codeimg&imgw=70&imgh=29&temp='+Math.random();" /><img src="images/wh.gif" /><a href='javascript:;' onclick="refreshCode()">换一个！</a>   
			</td>
    </tr>
   </tbody>
   </table>                      			
                <?php }?>
                <?php if($clcodeon==2){?>	
 <h3 class="t4">验证码：</h3>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="3%" height="35">&nbsp;</td>
      <td width="97%">
            <input type="text" name="wfcode" class="phpyzm" /><img id="bdcode" src="../public/bdcode.php?bdaction=codeimg&imgw=70&imgh=29" alt="换一个！" title="换一个！" onClick="this.src=this.src+'?bdaction=codeimg&imgw=70&imgh=29&temp='+Math.random();" /><a href='javascript:;' onclick="refreshCode1()">换一个！</a>     
			</td>
    </tr>
   </tbody>
   </table> 
                <?php }?>                        
                <input type="submit" name="bdsubmit" value='提交订单' class="btnn btn_4 bar_b" >
 
<h3 class="t4 tc warn">正品保障！7天包退换！</h3>
</div>

        <div style="clear:both;"></div></form>
    </div>
</div>
<script type="text/javascript" src="js/clbd.js"></script>



</body>
</html>