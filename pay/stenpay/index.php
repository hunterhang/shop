<?php
//---------------------------------------------------------
//�Ƹ�ͨ��ʱ����֧������ʾ�����̻����մ��ĵ����п�������
//---------------------------------------------------------

require_once ("classes/RequestHandler.class.php");
require_once ("tenpay_config.php");







//�����ţ��˴���ʱ�����������ɣ��̻������Լ����������ֻҪ����ȫ��Ψһ����
$out_trade_no = $_REQUEST['ordernum'];
$total_fee = $_REQUEST['price']*100;
$total_fee2 = $_REQUEST['price'];


/* ����֧��������� */
$reqHandler = new RequestHandler();
$reqHandler->init();
$reqHandler->setKey($key);
$reqHandler->setGateUrl("https://gw.tenpay.com/gateway/pay.htm");

//----------------------------------------
//����֧������ 
//----------------------------------------
$reqHandler->setParameter("partner", $partner);
$reqHandler->setParameter("out_trade_no", $out_trade_no);
$reqHandler->setParameter("total_fee", $total_fee);  //�ܽ��
$reqHandler->setParameter("return_url",  $return_url);
$reqHandler->setParameter("notify_url", $notify_url);
$reqHandler->setParameter("body", "����֧��");
$reqHandler->setParameter("bank_type", "DEFAULT");  	  //�������ͣ�Ĭ��Ϊ�Ƹ�ͨ
//�û�ip
$reqHandler->setParameter("spbill_create_ip", $_SERVER['REMOTE_ADDR']);//�ͻ���IP
$reqHandler->setParameter("fee_type", "1");               //����
$reqHandler->setParameter("subject","��Ʒ����");          //��Ʒ���ƣ����н齻��ʱ���

//ϵͳ��ѡ����
$reqHandler->setParameter("sign_type", "MD5");  	 	  //ǩ����ʽ��Ĭ��ΪMD5����ѡRSA
$reqHandler->setParameter("service_version", "1.0"); 	  //�ӿڰ汾��
$reqHandler->setParameter("input_charset", "GBK");   	  //�ַ���
$reqHandler->setParameter("sign_key_index", "1");    	  //��Կ���

//ҵ���ѡ����
$reqHandler->setParameter("attach", "");             	  //�������ݣ�ԭ�����ؾͿ�����
$reqHandler->setParameter("product_fee", "");        	  //��Ʒ����
$reqHandler->setParameter("transport_fee", "0");      	  //��������
$reqHandler->setParameter("time_start", date("YmdHis"));  //��������ʱ��
$reqHandler->setParameter("time_expire", "");             //����ʧЧʱ��
$reqHandler->setParameter("buyer_id", "");                //�򷽲Ƹ�ͨ�ʺ�
$reqHandler->setParameter("goods_tag", "");               //��Ʒ���
$reqHandler->setParameter("trade_mode","1");              //����ģʽ��1.��ʱ����ģʽ��2.�н鵣��ģʽ��3.��̨ѡ�����ҽ���֧�������б�ѡ�񣩣�
$reqHandler->setParameter("transport_desc","");              //����˵��
$reqHandler->setParameter("trans_type","1");              //��������
$reqHandler->setParameter("agentid","");                  //ƽ̨ID
$reqHandler->setParameter("agent_type","");               //����ģʽ��0.�޴���1.��ʾ������ģʽ��2.��ʾ����ģʽ��
$reqHandler->setParameter("seller_id","");                //���ҵ��̻���



//�����URL
$reqUrl = $reqHandler->getRequestURL();

//��ȡdebug��Ϣ,����������debug��Ϣд����־�����㶨λ����
/**/
$debugInfo = $reqHandler->getDebugInfo();
//echo "<br/>" . $reqUrl . "<br/>";
//echo "<br/>" . $debugInfo . "<br/>";


?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gbk">
	<title>�Ƹ�ͨ��ʱ����</title>
</head>
<body>
<br/>
<table width="500" border="1" align="center" cellpadding="0" cellspacing="0" style="border-collapse:collapse" bordercolor="#c6c6c6">
  <tr>
    <td height="25" colspan="2" align="center" bgcolor="#f2f2f2"><strong>����ȷ��</strong></td>
  </tr>
  <tr>
    <td width="112" height="25" align="right">������ţ�</td>
    <td width="382" align="left">&nbsp;<?=$out_trade_no?></td>
  </tr>
  <tr>
    <td height="25" align="right">��Ʒ���ƣ�</td>
    <td align="left">&nbsp;<?=$_REQUEST[pname]?></td>
  </tr>
  <tr>
    <td height="25" align="right">������</td>
    <td align="left">&nbsp;<?=$_REQUEST[price]?>Ԫ</td>
  </tr>
  <tr>
    <td height="25" align="right">�ջ���������</td>
    <td align="left">&nbsp;<?=$_REQUEST[user]?></td>
  </tr>
  <tr>
    <td height="25" align="right">�ջ��˵绰��</td>
    <td align="left">&nbsp;<?=$_REQUEST[mob]?></td>
  </tr>
  <tr>
    <td height="25" align="right">�ջ��˵�ַ��</td>
    <td align="left">&nbsp;<?=$_REQUEST[addr]?></td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center">
<form action="<?php echo $reqHandler->getGateUrl() ?>" method="post" target="_blank">
<?php
$params = $reqHandler->getAllParameters();
foreach($params as $k => $v) {
	echo "<input type=\"hidden\" name=\"{$k}\" value=\"{$v}\" />\n";
}
?>
<input type="submit" value="ǰ����������֧��">
</form>
</td>
  </tr>
</table>
</body>
</html>
