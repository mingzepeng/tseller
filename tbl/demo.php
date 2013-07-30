<?php include "config.php" ?>
<!doctype html>
<head>
<title>添加购物车组件Demo</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<script src="http://a.tbcdn.cn/apps/top/x/sdk.js?t=120525.js"></script>
<script>
//配置系统参数
TOP.init({
            appKey :<?php echo $app_key;?>,/*appkey */
			channelUrl :'<?php echo $channel_url;?>'/* channel页面的URL */
      });
</script>
<style>
#taobao-login{	font-size:12px;}
</style>
</head>

<body>
<h1>淘宝JSSDK组件Demo</h1>


<div id="taobao-login"> </div>
<script> 

  TOP.ui("login-btn", {
    container: "#taobao-login", 
	type: "4,4", callback:{
      login: function(){},
	  logout: function(){}
    }
  });
</script>
<br><br>
<!-- 添加购物车按钮组件 开始 -->
<div class="S_Widget1"></div> 
<script>
//配置组件参数

TOP.ui('sku', { 
		container : '.S_Widget1', 
		text : '加入购物车', 
		itemId : '13480996566' ,
		 
		 
});
</script>

<!-- 添加购物车按钮组件 结束-->

<br><br>

<!-- 添加购物车按钮组件 开始 -->
<div class="S_Widget2"></div> 
<script>
//配置组件参数
TOP.ui('sku', { 
		container : '.S_Widget2', 
		text : '加入购物车', 
		itemId : '14535781284' ,
		type:"mini"
	});
</script>

<!-- 添加购物车按钮组件 结束-->
 

<!-- 购物车展示组件 开始 -->
<div class="mini-cart"  ></div> 
<script>
//配置组件参数
TOP.ui('minicart',{
	   container:'.mini-cart',
	   position:'right'//默认为top; top为横向购物车，right为纵向购物车
	   });
</script>
<!-- 购物车展示组件 结束 -->

</body>
</html>