{{if $loged=='Y'}}
<div id="loged" style="visibility:visible;">{{$username}}&nbsp;欢迎您&nbsp;|&nbsp;<a href="logout.php">退出</a></div>
<div id="login" style="visibility:hidden"><a href="login.php">登录</a>&nbsp;&nbsp;<a href="register.php">注册</a></div>
{{else}}
<div id="loged" style="visibility:hidden">欢迎您|<a href="logout.php">退出</a></div>
<div id="login" style="visibility:visible"><a href="login.php">登录</a>&nbsp;&nbsp;<a href="register.php">注册</a></div>
{{/if}}