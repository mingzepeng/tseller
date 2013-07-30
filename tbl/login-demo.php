<?php 
include "config.php"; 
//var_dump($_REQUEST);
?>
<!doctype html>
<head>
<title>淘宝登录按钮Demo(PHP)</title>
<script src="http://a.tbcdn.cn/apps/top/x/sdk.js?appkey=21572275"></script>
<script>
//配置系统参数
TOP.init({
            appKey :<?php echo $app_key;?>,/*appkey */
			channelUrl :'<?php echo $channel_url;?>'/* channel页面的URL */
      });
</script>
</head>

<body>
<h1>淘宝登录按钮DEMO(PHP)</h1>

<div id="taobao-login"> </div>
<script> 

  TOP.ui("login-btn", {
    container: "#taobao-login", 
	type: "4,4", callback:{
      login: function(user){alert(user)},
	  logout: function(){}
    }
  });
</script>
                       
</body>
</html>