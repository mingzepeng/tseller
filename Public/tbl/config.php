<?php 
$app_key = '21572275';/*填写appkey */
$secret='59871d7abc91e20fb9a5d28ca933a898 ';/* 填写secret */
$channel_url='http://www.zjut.in:11014/weike/Public/tbl/channel.html';/* 填写channel页面的URL */

$timestamp=time()."000";
$message = $secret.'app_key'.$app_key.'timestamp'.$timestamp.$secret;
$mysign=strtoupper(hash_hmac("md5",$message,$secret));
setcookie("timestamp",$timestamp);
setcookie("sign",$mysign);
?>