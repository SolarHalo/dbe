<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="JS代码,{keyword},JS广告代码,JS特效代码" />
<meta name="description" content="此代码内容为{title}，属于站长常用代码，更多{keyword}代码请访问破洛洛JS代码频道。" />
<title>{title}_破洛洛</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<style type="text/css">
body{width:500px;margin:0 auto}
.footer{margin-top:50px;text-align:center;color:#666;font:bold 14px Arial}
.footer a{color:#999;text-decoration:none}
#wrapper-250{width:250px;margin:0 auto;}
</style>
<meta name="robots" content="noindex,follow" />
</head>
<body>
<div id="wrapper-250">
  <ul class="accordion">
    <li id="one" class="files"> <a href="#one">My Files<span>495</span></a>
      <ul class="sub-menu">
        <li><a href="#"><em>01</em>Dropbox<span>42</span></a></li>
        <li><a href="#"><em>02</em>Skydrive<span>87</span></a></li>
        <li><a href="#"><em>03</em>FTP Server<span>366</span></a></li>
        <li><a href="#"><em>04</em>Dropbox<span>1</span></a></li>
        <li><a href="#"><em>05</em>Skydrive<span>10</span></a></li>
      </ul>
    </li>
    <li id="two" class="mail"> <a href="#two">Mail<span>26</span></a>
      <ul class="sub-menu">
        <li><a href="#"><em>01</em>Hotmail<span>9</span></a></li>
        <li><a href="#"><em>02</em>Yahoo<span>14</span></a></li>
      </ul>
    </li>
    <li id="three" class="cloud"> <a href="#three">Cloud<span>58</span></a>
      <ul class="sub-menu">
        <li><a href="#"><em>01</em>Connect<span>12</span></a></li>
        <li><a href="#"><em>02</em>Profiles<span>19</span></a></li>
        <li><a href="#"><em>03</em>Options<span>27</span></a></li>
        <li><a href="#"><em>04</em>Connect<span>12</span></a></li>
        <li><a href="#"><em>05</em>Profiles<span>19</span></a></li>
        <li><a href="#"><em>06</em>Options<span>27</span></a></li>
      </ul>
    </li>
    <li id="four" class="sign"> <a href="#four">Sign Out</a>
      <ul class="sub-menu">
        <li><a href="#"><em>01</em>Log Out</a></li>
        <li><a href="#"><em>02</em>Delete Account</a></li>
        <li><a href="#"><em>03</em>Freeze Account</a></li>
      </ul>
    </li>
  </ul>
</div>

<script type="text/javascript"  src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
			// Store variables
			var accordion_head = $('.accordion > li > a'),
				accordion_body = $('.accordion li > .sub-menu');
			// Open the first tab on load
			accordion_head.first().addClass('active').next().slideDown('normal');
			// Click function
			accordion_head.on('click', function(event) {
				// Disable header links
				event.preventDefault();
				// Show and hide the tabs on click
				if ($(this).attr('class') != 'active'){
					accordion_body.slideUp('normal');
					$(this).next().stop(true,true).slideToggle('normal');
					accordion_head.removeClass('active');
					$(this).addClass('active');
				}
			});
		});
	</script>
</body>
</html>