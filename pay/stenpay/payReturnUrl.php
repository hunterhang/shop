<?php

//---------------------------------------------------------
//�Ƹ�ͨ��ʱ����֧��ҳ��ص�ʾ�����̻����մ��ĵ����п�������
//---------------------------------------------------------
require_once ("./classes/ResponseHandler.class.php");
require_once ("./classes/function.php");
require_once ("./tenpay_config.php");
require_once("../../config.php");
		$host=$spConfig['db']['host'];
		$logname=$spConfig['db']['login'];
		$logpass=$spConfig['db']['password'];
		$logdata=$spConfig['db']['database'];
		$prefix=$spConfig['db']['prefix'];
		mysql_connect($host,$logname,$logpass);
		mysql_select_db($logdata);

log_result("����ǰ̨�ص�ҳ��");


/* ����֧��Ӧ����� */
$resHandler = new ResponseHandler();
$resHandler->setKey($key);

//�ж�ǩ��
if($resHandler->isTenpaySign()) {
	
	//֪ͨid
	$notify_id = $resHandler->getParameter("notify_id");
	//�̻�������
	$out_trade_no = $resHandler->getParameter("out_trade_no");
	//�Ƹ�ͨ������
	$transaction_id = $resHandler->getParameter("transaction_id");
	//���,�Է�Ϊ��λ
	$total_fee = $resHandler->getParameter("total_fee");
	//�����ʹ���ۿ�ȯ��discount��ֵ��total_fee+discount=ԭ�����total_fee
	$discount = $resHandler->getParameter("discount");
	//֧�����
	$trade_state = $resHandler->getParameter("trade_state");
	//����ģʽ,1��ʱ����
	$trade_mode = $resHandler->getParameter("trade_mode");
	
	
	if("1" == $trade_mode ) {
		if( "0" == $trade_state){ 
			//------------------------------
			//����ҵ��ʼ
			//------------------------------
		mysql_query("update ".$prefix."orders set zt2=2 where ordernum='$out_trade_no'");
			//ע�⽻�׵���Ҫ�ظ�����
			//ע���жϷ��ؽ��
			
			//------------------------------
			//����ҵ�����
			//------------------------------	
			
			echo "<br/>" . "<center><img src='../success.jpg' width='300' height='78'></center>" . "<br/>";
	
		} else {
			//�������ɹ�����
			echo "<br/>" . "��ʱ����֧��ʧ��" . "<br/>";
		}
	}elseif( "2" == $trade_mode  ) {
		if( "0" == $trade_state) {
		
			//------------------------------
			//����ҵ��ʼ
			//------------------------------
		mysql_query("update ".$prefix."orders set zt2=2 where ordernum='$out_trade_no'");
			//ע�⽻�׵���Ҫ�ظ�����
			//ע���жϷ��ؽ��
			
			//------------------------------
			//����ҵ�����
			//------------------------------	
			
			echo "<br/><br/><br/>" . "<center><img src='../success.jpg' width='300' height='78'></center>" . "<br/>";
		
		} else {
			//�������ɹ�����
			echo "<br/>" . "�н鵣��֧��ʧ��" . "<br/>";
		}
	}
	
} else {
	echo "<br/>" . "��֤ǩ��ʧ��" . "<br/>";
	echo $resHandler->getDebugInfo() . "<br>";
}

?>