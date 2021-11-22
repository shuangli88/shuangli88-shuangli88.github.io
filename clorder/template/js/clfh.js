    /**
  **************************************************************************************************
  **********  CLPHP订单系统2017 WEB、WAP自适应版官方正式版  *****  官方正版 *** 版权所有 *** 盗版必究  **********
  **********------------------------------------------------------------------------------**********
  * 官方网站：http://www.chunleinet.com/ 官方店铺：http://jxlcl.taobao.com/  *  官方店铺旺旺:chunlei2615 请认准再购买 *
  **************************************************************************************************
*/

function GetDateStr(AddDayCount){

	var dd = new Date();

	dd.setDate(dd.getDate()+AddDayCount);

	var y = dd.getFullYear();

	var m = dd.getMonth()+1;

	var d = dd.getDate();

	return y+"-"+m+"-"+d;

}

var i=0;

for(i=0;i<22;i++){
	document.write('<p>')

	var randdate=parseInt(Math.random()*4+1);	

	quotes=new Array 

	quotes[1]=GetDateStr(0) 

	quotes[2]=GetDateStr(-1)

	quotes[3]=GetDateStr(-2)

	quotes[4]=GetDateStr(-3)

	var quote=quotes[randdate]

	document.write(quote)	

	var rand1=parseInt(Math.random()*22+1);	

	quotes=new Array 

	quotes[1]=' 北京的' 

	quotes[2]=' 上海的'

	quotes[3]=' 天津的'

	quotes[4]=' 湖南的'

	quotes[5]=' 湖北的'

	quotes[6]=' 湖北的'

	quotes[7]=' 广东的'

	quotes[8]=' 广西的'

	quotes[9]=' 重庆的'

	quotes[10]=' 四川的'

	quotes[11]=' 山东的'

	quotes[12]=' 河南的'

	quotes[13]=' 河北的'

	quotes[14]=' 山西的'

	quotes[15]=' 贵州的'

	quotes[16]=' 黑龙江的'

	quotes[17]=' 福建的'

	quotes[18]=' 浙江的'

	quotes[19]=' 江苏的'

	quotes[20]=' 江西的'

	quotes[21]=' 海南的'

	quotes[22]=' 陕西的'

	var quote=quotes[rand1]

	document.write(quote)	

	var rand1=parseInt(Math.random()*22+1);	

	quotes=new Array

	quotes[1]='张小姐'

	quotes[2]='刘小姐'

	quotes[3]='周先生'

	quotes[4]='吴小姐'

	quotes[5]='朱先生'

	quotes[6]='陈小姐'

	quotes[7]='田小姐'

	quotes[8]='钟先生'

	quotes[9]='马小姐'

	quotes[10]='韩小姐'

	quotes[11]='顾小姐'

	quotes[12]='王小姐'

	quotes[13]='李先生'

	quotes[14]='卢小姐'

	quotes[15]='崔小姐'

	quotes[16]='段先生'

	quotes[17]='胡小姐'

	quotes[18]='潘小姐'

	quotes[19]='陈小姐'

	quotes[20]='林小姐'

	quotes[21]='代先生'

	quotes[22]='苏小姐'	

	var quote=quotes[rand1]

	document.write(quote)

	var rand1=parseInt(Math.random()*5+1)

	quotes=new Array

	quotes[1]='（13'+parseInt(Math.random()*10)+ '****'+ parseInt(Math.random()*10)+ parseInt(Math.random()*10)+parseInt(Math.random()*10)+parseInt(Math.random()*10)+'）' 

	quotes[2]='（15'+parseInt(Math.random()*10)+ '****'+ parseInt(Math.random()*10)+ parseInt(Math.random()*10)+parseInt(Math.random()*10)+parseInt(Math.random()*10)+'）' 

	quotes[3]='（13'+parseInt(Math.random()*10)+ '****'+ parseInt(Math.random()*10)+ parseInt(Math.random()*10)+parseInt(Math.random()*10)+parseInt(Math.random()*10)+'）' 

	quotes[4]='（18'+parseInt(Math.random()*10)+ '****'+ parseInt(Math.random()*10)+ parseInt(Math.random()*10)+parseInt(Math.random()*10)+parseInt(Math.random()*10)+'）' 

	quotes[5]='（13'+parseInt(Math.random()*10)+ '****'+ parseInt(Math.random()*10)+ parseInt(Math.random()*10)+parseInt(Math.random()*10)+parseInt(Math.random()*10)+'）' 

	var quote=quotes[rand1]

	document.write(quote)
	
    document.write('，')
	
	var rand1=parseInt(Math.random()*4+1)

	quotes=new Array

	quotes[1]='您订购的 <font color="#228B22">套餐2（增强版1套）</font>  已通过'

	quotes[2]='您订购的 <font color="#228B22">套餐1（特惠装1套）</font>  已通过 '

	quotes[3]='您订购的 <font color="#228B22">套餐2（增强版2套） </font>  已通过'

	quotes[4]='您订购的 <font color="#228B22">套餐1（特惠装1套）</font>  已通过 '

	var quote=quotes[rand1]

	document.write(quote)
	
    document.write('&nbsp;&nbsp;')
	
	var rand1=parseInt(Math.random()*8+1)

	quotes=new Array

	quotes[1]='<img src="images/kd/ems.jpg" width="50" />'

	quotes[2]='<img src="images/kd/st.jpg" width="50" />'

	quotes[3]='<img src="images/kd/sf.jpg" width="50" /> '

	quotes[4]='<img src="images/kd/yt.jpg" width="50" />'

    quotes[5]='<img src="images/kd/zt.jpg" width="50" />'

	quotes[6]='<img src="images/kd/yd.jpg" width="50" />'

	quotes[7]='<img src="images/kd/tt.jpg" width="50" /> '

	quotes[8]='<img src="images/kd/bs.jpg" width="50" />'
	
	var quote=quotes[rand1]

	document.write(quote)
	
	document.write('&nbsp;&nbsp;')
	
	document.write('发货，请注意收货</p>')
	
	document.write('<br>')
	

}

/*//////////////////////////// CLORDERJSEND ////////////////////////////*/