<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
	<title>֧������׼˫�ӿڽӿ�</title>
</head>
<?php
/* *
 * ���ܣ���׼˫�ӿڽ���ҳ
 * �汾��3.3
 * �޸����ڣ�2012-07-23
 * ˵����
 * ���´���ֻ��Ϊ�˷����̻����Զ��ṩ���������룬�̻����Ը����Լ���վ����Ҫ�����ռ����ĵ���д,����һ��Ҫʹ�øô��롣
 * �ô������ѧϰ���о�֧�����ӿ�ʹ�ã�ֻ���ṩһ���ο���

 *************************ע��*************************
 * ������ڽӿڼ��ɹ������������⣬���԰��������;�������
 * 1���̻��������ģ�https://b.alipay.com/support/helperApply.htm?action=consultationApply�����ύ���뼯��Э�������ǻ���רҵ�ļ�������ʦ������ϵ��Э�����
 * 2���̻��������ģ�http://help.alipay.com/support/232511-16307/0-16307.htm?sh=Y&info_type=9��
 * 3��֧������̳��http://club.alipay.com/read-htm-tid-8681712.html��
 * �������ʹ����չ���������չ���ܲ�������ֵ��
 */

require_once("../../clconfig.php");
require_once("lib/alipay_submit.class.php");
$urla = $_SERVER['PHP_SELF'];
$urlb = str_replace('alipayapi.php','',$urla);
$urlc = "http://".$_SERVER['HTTP_HOST'].$urlb;
/**************************�������**************************/

        //֧������
        $payment_type = "1";
        //��������޸�
        //�������첽֪ͨҳ��·��
        $notify_url = $urlc.'notify_url.php';
        //��http://��ʽ������·�������ܼ�?id=123�����Զ������

        //ҳ����תͬ��֪ͨҳ��·��
        $return_url = $urlc.'return_url.php';
        //��http://��ʽ������·�������ܼ�?id=123�����Զ������������д��http://localhost/

        //�̻�������
        $out_trade_no = $_GET['wfno'];
        //�̻���վ����ϵͳ��Ψһ�����ţ�����

        //��������
        $subject = $_GET['wfproduct'];
        //����

        //������
        $price = $_GET['wfzfbjg'];
        //����

        //��Ʒ����
        $quantity = "1";
        //�������Ĭ��Ϊ1�����ı�ֵ����һ�ν��׿�����һ���¶������ǹ���һ����Ʒ
        //��������
        $logistics_fee = "0.00";
        //������˷�
        //��������
        $logistics_type = "EXPRESS";
        //�������ֵ��ѡ��EXPRESS����ݣ���POST��ƽ�ʣ���EMS��EMS��
        //����֧����ʽ
        $logistics_payment = "SELLER_PAY";
        //�������ֵ��ѡ��SELLER_PAY�����ҳе��˷ѣ���BUYER_PAY����ҳе��˷ѣ�
        
		//��������
        $body = $_GET['wfguest'];
		
        //��Ʒչʾ��ַ
        $show_url = 'http://www.alipay.com/';
        //����http://��ͷ������·�����磺http://www.xxx.com/myorder.html

        //�ջ�������
        $receive_name = $_GET['wfname'];
        //�磺����

        //�ջ��˵�ַ
        $receive_address = $_GET['wfaddress'];
        //�磺XXʡXXX��XXX��XXX·XXXС��XXX��XXX��ԪXXX��

        //�ջ����ʱ�
        $receive_zip = $_GET['wfpost'];
        //�磺123456

        //�ջ��˵绰����
        $receive_phone = $_GET['wftel'];
        //�磺0571-88158090

        //�ջ����ֻ�����
        $receive_mobile = $_GET['wfmob'];
        //�磺13312341234


/************************************************************/

//����Ҫ����Ĳ������飬����Ķ�
$parameter = array(
		"service" => "trade_create_by_buyer",
		"partner" => trim($alipay_config['partner']),
		"payment_type"	=> $payment_type,
		"notify_url"	=> $notify_url,
		"return_url"	=> $return_url,
		"seller_email"	=> $seller_email,
		"out_trade_no"	=> $out_trade_no,
		"subject"	=> $subject,
		"price"	=> $price,
		"quantity"	=> $quantity,
		"logistics_fee"	=> $logistics_fee,
		"logistics_type"	=> $logistics_type,
		"logistics_payment"	=> $logistics_payment,
		"body"	=> $body,
		"show_url"	=> $show_url,
		"receive_name"	=> $receive_name,
		"receive_address"	=> $receive_address,
		"receive_zip"	=> $receive_zip,
		"receive_phone"	=> $receive_phone,
		"receive_mobile"	=> $receive_mobile,
		"_input_charset"	=> trim(strtolower($alipay_config['input_charset']))
);

//��������
$alipaySubmit = new AlipaySubmit($alipay_config);
$html_text = $alipaySubmit->buildRequestForm($parameter,"get", "ȷ��");
echo $html_text;

?>
</body>
</html>