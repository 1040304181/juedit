<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"F:\WWW\bick\public/../application/admin\view\login\index.html";i:1544447532;}*/ ?>
<!DOCTYPE HTML>
<html dir="ltr" lang="en-US">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title><?php echo $title; ?></title>

	<!--- CSS --->
	<link rel="stylesheet" href="/static/h-ui/css/style.css" type="text/css" />


	</head>

	<body>
		<div id="container">
			<form action="<?php echo url('admin/login/login'); ?>">
				<div class="login">华能新能源管理系统</div>
				<div class="username-text">用户名:</div>
				<div class="password-text">密码:</div>
				<div class="username-field">
					<input type="text" name="username" value="edit1" />
				</div>
				<div class="password-field">
					<input type="password" name="password" value="123456" />
				</div>
				<input type="checkbox" name="remember-me" id="remember-me" /><label for="remember-me">记住</label>
				<div class="forgot-usr-pwd">忘记 <a href="#">用户名</a> 或者 <a href="#">密码</a>?</div>
				<input type="submit" name="submit" value="登录" />
			</form>
		</div>

	</body>
</html>
