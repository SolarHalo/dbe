<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->
<!--<head>-->
<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
<!--<title>index</title>-->
<!--<link href="style/dbe-style.css" type="text/css" rel="stylesheet" />-->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"type="text/javascript"></script>-->
<!--<script type="text/javascript">  -->
<!--$(window).resize(function() {-->
<!--   if($(window).width()<1180){-->
<!--	$("#conter") .css ({"margin-left":"0","left":"0"});-->
<!--}else{-->
<!--$("#conter") .css ({"margin-left":"-590px","left":"50%"}); -->
<!--}-->
<!-- if($(window).height()<700){-->
<!--	$("#conter") .css ({"margin-top":"0","top":"0"});-->
<!--}else{-->
<!--$("#conter") .css ({"margin-top":"-361px","top":"50%"}); -->
<!--}-->
<!--}); -->
<!-- $(function(){-->
<!--          $('#wrapper').hide();-->
<!--          $('.xiaogu').mouseenter(function(){-->
<!--          	-->
<!--          	 $('#wrapper').slideDown("slow");-->
<!--          	  -->
<!--           });-->
<!--          $('#head').mouseleave(function(){-->
<!--          	  $('#wrapper').slideUp();-->
<!--          	  -->
<!--           });-->
<!--  	});-->
<!--function switchmodTag(modtag,modcontent,modk) {-->
<!--	 for(i=1; i <4; i++) {-->
<!--		 if (i==modk) {-->
<!--			 document.getElementById(modtag+i).className="menuOn";document.getElementById(modcontent+i).-->
<!--			 className="slidingList";}-->
<!--		 else {-->
<!--			 document.getElementById(modtag+i).className="menuNo";document.getElementById(modcontent+i).-->
<!--			 className="slidingList_none";}-->
<!--		 }-->
<!-- }-->
<!--</script>-->
<!---->
<!--</head>-->

{{include file='header1.tpl'}}

<body>
	<div id="conter">
    	{{include file='statusbar.tpl'}}
    	{{include file='header.tpl'}}
        <div class="container" id="container">
        	<div id="sub-nav">
            	 <ul>
                 	<li class="subnav-01"><a href="index.php">首页</a></li>
                    <li class="subnav-01"><a href="dbemessage.php?type=company">公司介绍</a></li>
                    <li class="subnav-01"><a href="dbemessage.php?type=design">设计、研发、生产</a></li>
                    <li class="subnav-03"><a href="dbemessage.php?type=operation">全球合作网络</a></li>
                 </ul>
            </div>
            <div class="jianjie">
            	<img src="images/gongsimingc.png" />
                <p>
                	董  事  长 : 鈴 木 渉<br /> 
                    总  经  理 : 呂 椬 境<br /> 
                    设立日期 : 2012年4月23日 <br /> 
                    开幕日期 : 2012年6月6日 <br /> 
                    公司地址 : 台湾新北市树林区东顺街16号<br />  
                    厂房空间 : 1,380平方米<br /> 
                    资  本  金 : 新台币6千万元 <br /> 
                    员工人数 : 26人(截止2013年2月8日止 )<br />  
                    主要产品 : 各类大型喷墨写真打印机  墨水     
                </p>
                <div class="linian">
                    <img src="images/linian.png" class="fl" style="padding-right:325px;" /><br />
                    <span>
                        <font size="2">&bull;</font>&nbsp;&nbsp;品质第一<br />
                        &nbsp;&nbsp;&nbsp;重视研发生产管理品质，提升品牌价值
                    </span>
                    <span>
                        <font size="2">&bull;</font>&nbsp;&nbsp;亲切至诚<br />
                        &nbsp;&nbsp;&nbsp;顾客至上，以诚相对
                    </span>
                    <span>
                        <font size="2">&bull;</font>&nbsp;&nbsp;和而不同<br />
                        &nbsp;&nbsp;&nbsp;尊重个性，团结合作
                    </span>
                    <span>
                        <font size="2">&bull;</font>&nbsp;&nbsp;匠心独创<br />
                       &nbsp;&nbsp;&nbsp;创新进取，追求产品独创性
                    </span>
                </div>
                <div class="dizhi">
                	<img src="images/dizhi.png" />
                	<span>
                        台湾新北市樹林區東順街16號<br />
                        T: +886-2-86840777<br />
                        F: +886-2-86842277
                    </span>
                </div>
                <img src="images/mapimg.png" class="mapimg" />
            </div> 
        </div>
<!--        <div class="fotter2" style="margin-top:25px;">-->
<!--        	<a href="index.php" class="back">返回</a>  -->
<!--            <a href="#" class="link">友情连接</a>-->
<!--        </div>-->
{{include file='footer.tpl'}}
    </div>
</body>
</html>
