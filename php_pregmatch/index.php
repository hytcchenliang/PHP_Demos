
<!DOCTYPE html><html lang='zh'><head><<meta content="text/html ; charset=utf-8" /></head><body></body></html>;
<?php
	$string="��������ʷ�ϵ�һ��ϵͳ��Ϣ��hello��Һ�(�ٶ�)[http://www.baidu.com]������ʨ��������������(�ٶ�1)[http://www.baidu.com]��ֻΪ�����õ����õ���װ�������飬������������һ�������ӡ�";
	//ȡ���ַ���
	$p='/(\([^\s]+\)\[[^\s]+\]+)/';
	preg_match($p,$string,$matches);
	echo $matches[0];
	echo "<br></br>";
	//ɾ���ַ���
	$pA='/(\([^\s]+\)\[[^\s]+\]+)/';
	$string=preg_replace($pA,"",$string);
    echo $string;
	
	
	// $subject = "my email is spark@imooc.com";
	//$pattern = '/[\w\-]+@\w+\.\w+/';
	// preg_match($pattern, $subject, $matches);
	// echo $matches[0];
	
?>