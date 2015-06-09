<?php 
	$flag=isset($_POST["flag"])?$_POST["flag"]:""; 
	$content=isset($_POST["content"])?$_POST["content"]:""; 
	$deleid=isset($_POST["deleid"])?$_POST["deleid"]:"";
	if($flag=="addcontent"){
		$hkmconf = mysql_connect("localhost","root","123456",true);
		if(!$hkmconf){
		    die('Could not connect hkm : ' . mysql_error());
		}
		mysql_select_db("liuyanban",$hkmconf);
		mysql_query("set names utf8",$hkmconf);
		$sql="insert into words(content,is_active,create_time) values('".$content."',1,now())";
		$res = mysql_query($sql);
		echo json_encode("success");
	}

	if($flag=="delecontent"){
		$hkmconf = mysql_connect("localhost","root","123456",true);
		if(!$hkmconf){
		    die('Could not connect hkm : ' . mysql_error());
		}
		mysql_select_db("liuyanban",$hkmconf);
		mysql_query("set names utf8",$hkmconf);
		$sql="update `words` set is_active = 0 where id ='".$deleid."'";
		$res = mysql_query($sql);
		echo json_encode("success");
	}
?>