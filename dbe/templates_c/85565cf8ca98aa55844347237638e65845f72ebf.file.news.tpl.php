<?php /* Smarty version Smarty-3.1.13, created on 2013-03-13 21:27:51
         compiled from "D:\workspace4php\dbe\dbe\templates\news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3066651407ed77786d5-96761353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85565cf8ca98aa55844347237638e65845f72ebf' => 
    array (
      0 => 'D:\\workspace4php\\dbe\\dbe\\templates\\news.tpl',
      1 => 1363181260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3066651407ed77786d5-96761353',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allnews' => 0,
    'new' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51407ed783a565_10273614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51407ed783a565_10273614')) {function content_51407ed783a565_10273614($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
<link href="style/dbe-style.css" type="text/css" rel="stylesheet" />
<link href="style/jquery.mCustomScrollbar.css" rel="stylesheet" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"type="text/javascript"></script>
<script type="text/javascript">  
$(window).resize(function() {
   if($(window).width()<1180){
	$("#conter") .css ({"margin-left":"0","left":"0"});
}else{
$("#conter") .css ({"margin-left":"-590px","left":"50%"}); 
}
 if($(window).height()<700){
	$("#conter") .css ({"margin-top":"0","top":"0"});
}else{
$("#conter") .css ({"margin-top":"-361px","top":"50%"}); 
}
}); 
 $(function(){
          $('#wrapper').hide();
          $('.xiaogu').mouseenter(function(){
          	
          	 $('#wrapper').slideDown("slow");
          	  
           });
          $('#head').mouseleave(function(){
          	  $('#wrapper').slideUp();
          	  
           });
  	});
function switchmodTag(modtag,modcontent,modk) {
	 for(i=1; i <4; i++) {
		 if (i==modk) {
			 document.getElementById(modtag+i).className="menuOn";document.getElementById(modcontent+i).
			 className="slidingList";}
		 else {
			 document.getElementById(modtag+i).className="menuNo";document.getElementById(modcontent+i).
			 className="slidingList_none";}
		 }
 }
</script>
 
</head>

<body>
	<div id="conter">
    	<div class="login"><a href="#">登录</a>&nbsp;&nbsp;<a href="#">注册</a></div>
    	<div class="head" id="head">
        	<a href="#"><img src="images/logo.jpg"  class="fl"/></a>
            <span class="kslj">
            	<a href="#" class="xiaogu" onmouseover="switchmodTag('mod','slidingList','1');this.blur();">快速连接</a>
            </span>
            <span class="lianxwm">
            	<a href="#" class="xiaogu" onmouseover="switchmodTag('mod','slidingList','3');this.blur();">联系我们</a>
            </span>
            <div id="wrapper">
                <div id="lianxiwm"> 
                	<div id="slidingBlock"> 
                        <div>
                            <ul id="abc">
                                <h4 class="menuOn" id="mod1" onmouseover="switchmodTag('mod','slidingList','1');this.blur();">
                                <a href="#" class="guanynav">关于我们</a></h4>
                                <h4 class="menuNo" id="mod2" onmouseover="switchmodTag('mod','slidingList','2');this.blur();">
                                <a href="#" class="chnapnav">我们的产品</a></h4> 
                                <h4 class="menuNo" id="mod3" onmouseover="switchmodTag('mod','slidingList','3');this.blur();">
                                <a href="#" class="lanxinav">联系我们</a></h4> 
                            </ul>
                        </div>
                        <div class="slidingList" id="slidingList1">
                            <img src="images/jianpimg.jpg" border="0" usemap="#Mapjieshao" style="padding-left:5px;" />
                            <map name="Mapjieshao" id="Mapjieshao">
                              <area shape="rect" coords="16,217,107,262" href="#" title="公司介绍" />
                              <area shape="rect" coords="134,215,288,262" href="#" title="设计、研发、生产" />
                              <area shape="rect" coords="310,214,424,263" href="#"  title="全球合作网络"/>
                            </map>
                      </div>
                        <div class="slidingList_none" id="slidingList2">
                            <span class="dis-y" style="border-right:1px dashed #ccc; padding-right:50px;">
                                <a href="#" class="chanp1 nav-li"><img src="images/home2.png" /></a> 
                                <img src="images/pp1.png" style=" right:45px;position: absolute; bottom:30px;width: 120px;" /> 
                            </span>  
                            <span class="dis-y">
                                <a href="#" class="chanp2 nav-li"><img src="images/home3.png" /></a>
                                <img src="images/pp2.png" style=" left:-43px;position: absolute; bottom:38px;width: 120px;" /> 
                            </span> 
                        </div> 
                        <div class="slidingList_none" id="slidingList3">
                          <img src="images/mapimg.jpg" style="padding-left:20px;" />
                        </div> 
                    </div>
            	</div> 
        	</div>
        </div>
  <div style=" background:url(images/bgwen.jpg); float:left; width:1180px; height:632px;">
    <div class="container" id="container">
      <div id="sub-nav">
        <ul>
          <li class="subnav-01"><a href="index.php">首页</a></li> 
          <li class="subnav-03"><a href="#">DBE新闻中心</a></li>
        </ul>
      </div>
    </div> 
    <div id="newpage">
        <div class="newlist">
            <span class="newlist-title">最新消息</span>
            <ul>
            <?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allnews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value){
$_smarty_tpl->tpl_vars['new']->_loop = true;
?>
            <li><a href="news.php?news_id=<?php echo $_smarty_tpl->tpl_vars['new']->value->id;?>
"><font size="3">&bull;</font>&nbsp;<?php echo $_smarty_tpl->tpl_vars['new']->value->news_title;?>
<br /><span><?php echo $_smarty_tpl->tpl_vars['new']->value->news_createtime;?>
</span></a></li>
            <?php } ?>
            </ul> 
        </div> 
        
         <div id="content_1" class="content">
            <h1><?php echo $_smarty_tpl->tpl_vars['news']->value->news_title;?>
</h1>
            <p>
              <?php echo $_smarty_tpl->tpl_vars['news']->value->news_body;?>
            
             </p>
             <p>     
                DF-712U的特点
             </p>
             <p> 
                 ● 采用色域宽广的Digital Best Engineering UV墨水，高精度打印技术配合高清晰度墨水，实现至高UV打印品质。<br />
                 ● CMYK配合LcLm六色，能呈现纤细白皙柔滑肌肤的打印效果。配合白色及透明墨水，实现表现力丰富的高附加价值的打印。<br />
                 ● 开放式宽幅平台W)730mm x D)1,200mm印刷，充分节省空间的设计，伸缩高度为100mm，为有厚度的打印材料专门设计。实现高效直喷/打样/量产。
                 ● 采用不含汞的低温UV-LED光源，安全环保，也适用于耐热性低的材料。
             </p>
             <p>    
                About DF-712U
             </p>
             <p>  
                高附加价值的方案应用<br />
                ●　高遮密性的白色墨水；透明墨水的立体打印。<br />
                ●　高精度的PLC程序控制，精确的重复打印。<br />
                ●　2Pt字体的精准清晰打印<br />
                ●　高伸缩性墨水，适合柔性材料打印。<br />
                ●  日本制造的打印引擎，动作安定，品质保证，价格合理。
            </p>
            <p>  
                高附加价值的方案应用<br />
                ●　高遮密性的白色墨水；透明墨水的立体打印。<br />
                ●　高精度的PLC程序控制，精确的重复打印。<br />
                ●　2Pt字体的精准清晰打印<br />
                ●　高伸缩性墨水，适合柔性材料打印。<br />
                ●  日本制造的打印引擎，动作安定，品质保证，价格合理。
            </p>
            <p>  
                高附加价值的方案应用<br />
                ●　高遮密性的白色墨水；透明墨水的立体打印。<br />
                ●　高精度的PLC程序控制，精确的重复打印。<br />
                ●　2Pt字体的精准清晰打印<br />
                ●　高伸缩性墨水，适合柔性材料打印。<br />
                ●  日本制造的打印引擎，动作安定，品质保证，价格合理。
            </p>
            <p>  
                高附加价值的方案应用<br />
                ●　高遮密性的白色墨水；透明墨水的立体打印。<br />
                ●　高精度的PLC程序控制，精确的重复打印。<br />
                ●　2Pt字体的精准清晰打印<br />
                ●　高伸缩性墨水，适合柔性材料打印。<br />
                ●  日本制造的打印引擎，动作安定，品质保证，价格合理。
            </p>
        </div> 
	<!-- Google CDN jQuery with fallback to local -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="js/minified/jquery-1.9.1.min.js"%3E%3C/script%3E'))</script>
	<!-- custom scrollbars plugin -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
	<script>
		(function($){
			$(window).load(function(){
				$("#content_1").mCustomScrollbar({
					scrollButtons:{
						enable:true
					}
				});
				//ajax demo fn
				$("a[rel='load-content']").click(function(e){
					e.preventDefault();
					var $this=$(this),
						url=$this.attr("href");
					$this.addClass("loading");
					$.get(url,function(data){
						$this.removeClass("loading");
						$("#content_1 .mCSB_container").html(data); //load new content inside .mCSB_container
						$("#content_1").mCustomScrollbar("update"); //update scrollbar according to newly loaded content
						$("#content_1").mCustomScrollbar("scrollTo","top",{scrollInertia:200}); //scroll to top
					});
				});
				$("a[rel='append-content']").click(function(e){
					e.preventDefault();
					var $this=$(this),
						url=$this.attr("href");
					$this.addClass("loading");
					$.get(url,function(data){
						$this.removeClass("loading");
						$("#content_1 .mCSB_container").append(data); //append new content inside .mCSB_container
						$("#content_1").mCustomScrollbar("update"); //update scrollbar according to newly appended content
						$("#content_1").mCustomScrollbar("scrollTo","h2:last",{scrollInertia:2500,scrollEasing:"easeInOutQuad"}); //scroll to appended content
					});
				});
			});
		})(jQuery);
	</script>
    </div>
    <div class="fotter2"> <a href="#" class="back">返回</a> <a href="#" class="link">友情连接</a> </div>
  </div>
</div>
</body>
</html>
<?php }} ?>