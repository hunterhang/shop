<?php

/*
 * @Description �ױ�֧��B2C����֧���ӿڷ��� 
 * @V3.0
 * @Author rui.xin
 */
 
include 'yeepayCommon.php';	
require_once("../../config.php");
		$host=$spConfig['db']['host'];
		$logname=$spConfig['db']['login'];
		$logpass=$spConfig['db']['password'];
		$logdata=$spConfig['db']['database'];
		$prefix=$spConfig['db']['prefix'];
		mysql_connect($host,$logname,$logpass);
		mysql_select_db($logdata);

	
#	ֻ��֧���ɹ�ʱ�ױ�֧���Ż�֪ͨ�̻�.
##֧���ɹ��ص������Σ�����֪ͨ������֧����������е�p8_Url�ϣ�������ض���;��������Ե�ͨѶ.

#	�������ز���.
$return = getCallBackValue($r0_Cmd,$r1_Code,$r2_TrxId,$r3_Amt,$r4_Cur,$r5_Pid,$r6_Order,$r7_Uid,$r8_MP,$r9_BType,$hmac);

#	�жϷ���ǩ���Ƿ���ȷ��True/False��
$bRet = CheckHmac($r0_Cmd,$r1_Code,$r2_TrxId,$r3_Amt,$r4_Cur,$r5_Pid,$r6_Order,$r7_Uid,$r8_MP,$r9_BType,$hmac);
#	���ϴ���ͱ�������Ҫ�޸�.
	 	
#	У������ȷ.
if($bRet){
	if($r1_Code=="1"){
		
	#	��Ҫ�ȽϷ��صĽ�����̼����ݿ��ж����Ľ���Ƿ���ȣ�ֻ����ȵ�����²���Ϊ�ǽ��׳ɹ�.
	#	������Ҫ�Է��صĴ������������ƣ����м�¼�������Դ����ڽ��յ�֧�����֪ͨ���ж��Ƿ���й�ҵ���߼�������Ҫ�ظ�����ҵ���߼�������ֹ��ͬһ�������ظ��������������.      	  	
		
		if($r9_BType=="1"){
		mysql_query("update ".$prefix."orders set zt2=2 where ordernum='$r6_Order'");
			echo "<br/>" . "<center><img src='../success.jpg' width='300' height='78'></center>" . "<br/>";
		}elseif($r9_BType=="2"){
			#�����ҪӦ�����������д��,��success��ͷ,��Сд������.
			echo "success";
		mysql_query("update ".$prefix."orders set zt2=2 where ordernum='$r6_Order'");
			echo "<br/>" . "<center><img src='../success.jpg' width='300' height='78'></center>" . "<br/>";
		}
	}
	
}else{
	echo "������Ϣ���۸�";
}
   
?>
<html>
<head>
<title>Return from YeePay Page</title>
</head>
<body>
</body>
</html>