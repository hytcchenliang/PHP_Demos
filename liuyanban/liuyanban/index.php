<html>
<title>留言板</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="index.js"></script>
<link rel="stylesheet" type="text/css" href="index.css">
<style></style>
<script>
</script>
<body>
	<div class="mainbody">
		<div class="top">留言板</div>
		<textarea type="text" class="shuru"></textarea>
		<button class="liuyan_btn">确定</button>
		<?php
			$contents=getcontents();
			foreach ($contents as $key => $value) {
		?>
		<div class="one_word">
			<div class="word_id"><?php echo $value['id']?></div>
			<div class="onecontent"><?php echo $value['content']?></div>
			<div class="create_time"><?php echo $value['create_time']?></div>
			<div class="dele_btn">删除</div>
		</div>
		<?php
			}
		?>
	</div>
</body>
</html>
<?php

	function getcontents(){
		$hkmconf = mysql_connect("localhost","root","123456",true);
		if(!$hkmconf){
		    die('Could not connect hkm : ' . mysql_error());
		}
		mysql_select_db("liuyanban",$hkmconf);
		mysql_query("set names utf8",$hkmconf);
		$sql="select  id,content,create_time  from words where is_active=1";
		$res = mysql_query($sql);
		$contents=array();
		while($ecsrow=mysql_fetch_array($res,MYSQL_ASSOC)){
		    array_push($contents,$ecsrow);
		}
		mysql_close($hkmconf);
		return $contents;
	}
?>