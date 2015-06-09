$(function(){
	$(".liuyan_btn").click(function(){
		var content=$(".shuru").val();
        $.ajax({
            url:"ajax.php",
            type:"POST",
            data:{flag:"addcontent","content":content},
            success:function(res){
                alert("您已成功留言！");
                window.location = "http://localhost/liuyanban/index.php";
            }
        });

	});


	$(".dele_btn").click(function(){
		var itemId=$(this).parent().find(".word_id").html();;
        $.ajax({
            url:"ajax.php",
            type:"POST",
            data:{flag:"delecontent","deleid":itemId},
            success:function(res){
                alert("删除成功");
                window.location = "http://localhost/liuyanban/index.php";
            }
        });

	});
});