
<!DOCTYPE html><html lang='zh'><head><<meta content="text/html ; charset=utf-8" /></head><body></body></html>;
<?php
	$string="上线三月史上第一弹系统消息，hello大家好(百度)[http://www.baidu.com]，攻城狮正在玩命开发中(百度1)[http://www.baidu.com]，只为让您得到更好的男装购物体验，安安静静的做一个美男子。";
	//取出字符串
	$p='/(\([^\s]+\)\[[^\s]+\]+)/';
	preg_match($p,$string,$matches);
	echo $matches[0];
	echo "<br></br>";
	//删除字符串
	$pA='/(\([^\s]+\)\[[^\s]+\]+)/';
	$string=preg_replace($pA,"",$string);
    echo $string;
	
	
	// $subject = "my email is spark@imooc.com";
	//$pattern = '/[\w\-]+@\w+\.\w+/';
	// preg_match($pattern, $subject, $matches);
	// echo $matches[0];
	
?>