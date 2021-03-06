<?php defined('IN_TS') or die('Access Denied.'); ?><!-- Put IE into quirks mode -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title;?> - <?php echo $TS_SITE['site_title'];?></title>
<style type="text/css">
html {height:100%;max-height:100%;padding:0;margin:0;border:0;background:#fff;font-size:12px;font-family:Arial;
/* hide overflow:hidden from IE5/Mac */
/* \*/
overflow: hidden;
/* */
}

body{height:100%;max-height:100%;overflow:hidden;padding:0;margin:0; border:0;}

.midder{overflow:hidden; position:absolute; z-index:3; top:70px; width:100%;bottom:60px;}

*html .midder {top:0; height:100%; max-height:100%; width:100%; overflow:auto;position:absolute; z-index:3;border-bottom:60px solid #fff;padding-top:60px;}

.header{position:absolute;margin:0;top:0;display:block;width:100%;height:60px;background:#3A81C0;background-position:0 0; background-repeat:no-repeat;z-index:5;overflow:hidden;}
.header .logo{float:left;padding-top:10px;}

.header .right{margin-left:200px;overflow:hidden;}
.header .menu{overflow:hidden;padding-right:20px;}
.header .menu ul{margin:0;padding:0;overflow:hidden;}
.header .menu ul li{list-style:none;float:left;padding:5px;color:#FFFFFF;font-size:14px;text-align:center;padding:10px 20px;font-weight: bold;}
.header .menu ul li a{color:#FFFFFF;}
.header .menu ul .select{background:#FFFFFF;border-radius: 4px 4px 0px 0px;}
.header .menu ul .select a{color:#555555;}

.header .user{padding:5px;font-size:14px;text-align:right;color:#FFFFFF;margin:0px 20px 0 0;}
.header .user a{color:#FFFFFF;margin-left:20px;}

.footer{position:absolute; margin:0;bottom:0;display:block;width:100%;height:50px;line-height:50px;font-size:1em;z-index:5;overflow:hidden;text-align:center;background:#F0F0F0;color:#999999;}

a {color:#336699;text-decoration:none;}
img{border:none;}
</style>
<script src="<?php echo SITE_URL;?>public/js/jquery-1.8.0.min.js" type="text/javascript"></script>
<script>
$(function(){
   $(".menu li").click(function(){
		var index = $(this).index();
	   $(this).addClass("select").siblings().removeClass("select");
	})
})
</script>


</head>
<body>
<div class="header">
<div class="logo"><a href="index.php?app=system"><img src="app/<?php echo $app;?>/skins/<?php echo $skin;?>/logo.gif" alt="ThinkSAAS社区管理" width="177" height="40" /></a></div>

<div class="right">

<div class="user">
欢迎您，<?php echo $TS_USER['username'];?> 
<a href="index.php" target="_blank">返回前台</a> 
<a href="index.php?app=user&ac=login&ts=out">[退出]</a>
</div>

<div class="menu">
<ul>
<li class="select"><a href="index.php?app=system&ac=main"  target="main">首页</a></li>
<li><a href="index.php?app=system&ac=options"  target="main">系统管理</a></li>
<li><a href="index.php?app=system&ac=apps&ts=list"  target="main">APP管理</a></li>
<li><a href="index.php?app=system&ac=plugin&ts=list&apps=pubs"  target="main">插件管理</a></li>
<li><a href="index.php?app=system&ac=anti&ts=word"  target="main">安全中心</a></li>

<li><a href="index.php?app=system&ac=update"  target="main">系统升级</a></li>

</ul>
</div>
</div>

</div>

<div class="footer">
<p>Copyright (C) <?php echo $TS_CF['info'][year];?> <a href="<?php echo $TS_CF['info'][url];?>"><?php echo $TS_CF['info'][name];?></a> <?php echo $TS_CF['info'][version];?></p>
</div>

<div class="midder">
<iframe src="index.php?app=system&ac=main" id="main" name="main" width="100%" height="100%" frameborder="0" scrolling="yes" style="overflow: visible;margin:0;padding:0;"></iframe>
</div>
</body>
</html>
