<?php
/* * 
 * ���ܣ�֧����ҳ����תͬ��֪ͨҳ��
 * �汾��3.3
 * ���ڣ�2012-07-23
 * ˵����
 * ���´���ֻ��Ϊ�˷����̻����Զ��ṩ���������룬�̻����Ը����Լ���վ����Ҫ�����ռ����ĵ���д,����һ��Ҫʹ�øô��롣
 * �ô������ѧϰ���о�֧�����ӿ�ʹ�ã�ֻ���ṩһ���ο���

 *************************ҳ�湦��˵��*************************
 * ��ҳ����ڱ������Բ���
 * �ɷ���HTML������ҳ��Ĵ��롢�̻�ҵ���߼��������
 * ��ҳ�����ʹ��PHP�������ߵ��ԣ�Ҳ����ʹ��д�ı�����logResult���ú����ѱ�Ĭ�Ϲرգ���alipay_notify_class.php�еĺ���verifyReturn
 */

require_once("../../clconfig.php");
require_once("lib/alipay_notify.class.php");
?>
<!DOCTYPE HTML>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
    <style type="text/css">
        <!--
         *{margin:0;padding:0;}
    body{font:14px Microsoft YaHei,\5FAE\8F6F\96C5\9ED1,SimSun,\5B8B\4F53,Arial,Verdana;color:#000;text-align:left;padding-top:60px;background:#FFF;} 
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
	padding-top: 90px;
	padding-right: 0;
	padding-left: 0;
	padding-bottom: 0;
	text-align: center;
	border-top: 2px dotted #DDD;
}
    #foot p.go{font:12px SimSun,\5B8B\4F53,Arial,Verdana;color:#090;margin-bottom:20px;}
    #time{font:14px Arial,Verdana;color:#F90;font-weight:bold;}
        -->
    </style>
<?php
//����ó�֪ͨ��֤���
$alipayNotify = new AlipayNotify($alipay_config);
$verify_result = $alipayNotify->verifyReturn();
if($verify_result) {//��֤�ɹ�
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//������������̻���ҵ���߼��������
	
	//�������������ҵ���߼�����д�������´�������ο�������
    //��ȡ֧������֪ͨ���ز������ɲο������ĵ���ҳ����תͬ��֪ͨ�����б�

	//�̻�������

	$out_trade_no = $_GET['out_trade_no'];

	//֧�������׺�

	$trade_no = $_GET['trade_no'];

	//����״̬
	$trade_status = $_GET['trade_status'];


    if($_GET['trade_status'] == 'WAIT_SELLER_SEND_GOODS') {
		//�жϸñʶ����Ƿ����̻���վ���Ѿ���������
			//���û�������������ݶ����ţ�out_trade_no�����̻���վ�Ķ���ϵͳ�в鵽�ñʶ�������ϸ����ִ���̻���ҵ�����
			//���������������ִ���̻���ҵ�����
    }
    else {
      echo "trade_status=".$_GET['trade_status'];
    }
		
	echo "<p style='height:40px;line-height:40px;font-size:14px;color:#BD0000;text-align:center;'>��ϲ������֧���ɹ���</p>";

	//�������������ҵ���߼�����д�������ϴ�������ο�������
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}
else {
    //��֤ʧ��
    //��Ҫ���ԣ��뿴alipay_notify.phpҳ���verifyReturn����
    echo "<p style='height:40px;line-height:40px;font-size:14px;color:#009900;text-align:center;'>֧��ʧ�ܣ�</p>";
}
?>
        <title>֧�������������׽ӿ�</title>
	</head>
    <body>
        <div id="bdok">
            <ul>
                <li>
                    <span class="l">�����ţ�</span>
                    <span class="r"><?php echo $_GET['out_trade_no']; ?></span>
                </li>
                <li>
                    <span class="l">֧�������׺ţ�</span>
                    <span class="r"><?php echo $_GET['trade_no']; ?></span>
                </li>
                <li>
                    <span class="l">�����</span>
                    <span class="r"><?php echo $_GET['price']; ?></span>
                </li>
                <li>
                    <span class="l">����״̬��</span>
                    <span class="r"><?php echo $_GET['trade_status']; ?></span>
                </li>
            </ul>
        </div>
    </body>
</html>