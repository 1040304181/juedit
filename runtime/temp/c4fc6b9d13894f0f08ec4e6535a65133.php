<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:65:"F:\WWW\bick\public/../application/admin\view\admin\admin_add.html";i:1544385391;s:51:"F:\WWW\bick\application\admin\view\Public\meta.html";i:1544700015;s:59:"F:\WWW\bick\application\admin\view\Public\admin_header.html";i:1544509529;s:57:"F:\WWW\bick\application\admin\view\Public\admin_left.html";i:1544509777;s:57:"F:\WWW\bick\application\admin\view\Public\admin_foot.html";i:1544698006;}*/ ?>
<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="favicon.ico" >
<link rel="Shortcut Icon" href="favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/lib/html5.js"></script>
<script type="text/javascript" src="/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="http://192.168.1.2/bick/public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="http://192.168.1.2/bick/public/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="http://192.168.1.2/bick/public/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="http://192.168.1.2/bick/public/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="http://192.168.1.2/bick/public/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>华能新能源管理系统</title>
</head>
<body>
<!--_header 作为公共模版分离出去-->
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">华能新能源管理系统</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">jkz</a> 
			<span class="logo navbar-slogan f-l mr-10 hidden-xs">v1.0</span> 
			<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav">
				<ul class="cl">
					<li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onclick="article_add('添加资讯','article-add.html')"><i class="Hui-iconfont">&#xe616;</i> 资讯</a></li>
							<li><a href="javascript:;" onclick="picture_add('添加资讯','picture-add.html')"><i class="Hui-iconfont">&#xe613;</i> 图片</a></li>
							<li><a href="javascript:;" onclick="product_add('添加资讯','product-add.html')"><i class="Hui-iconfont">&#xe620;</i> 产品</a></li>
							<li><a href="javascript:;" onclick="member_add('添加用户','member-add.html','','510')"><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
				</ul>
			</li>
		</ul>
	</nav>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li>超级管理员 </li>
					<li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A"><?php echo(session('admin_name')); ?><i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onClick="layer.open({
									type: 1,
									area: ['300px','200px'],
									fix: false, //不固定
									maxmin: true,
									shade:0.4,
									title: '查看信息',
									content: '<div><?php echo('用户名：'.session('admin_name')); ?></div><div><?php echo('用户名：'.session('admin_email')); ?></div>'
								})">个人信息</a></li>
							
							<li><a href="<?php echo url('admin/login/logout'); ?>">退出</a></li>
				</ul>
			</li>
					<li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
					<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
							<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
							<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
				</ul>
			</li>
		</ul>
	</nav>
</div>
</div>
</header>
<!--/_header 作为公共模版分离出去-->
<!--消息框 -->
    <div id="modal-demo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    	<div class="modal-dialog">
    		<div class="modal-content radius">
    			<div class="modal-header">
    				<h3 class="modal-title">对话框标题</h3>
    				<a class="close" data-dismiss="modal" aria-hidden="true" href="javascript:void();">×</a>
    			</div>
    			<div class="modal-body">
    				<p>对话框内容…</p>
    			</div>
    			<div class="modal-footer">
    				<button class="btn btn-primary">确定</button>
    				<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
    			</div>
    		</div>
    	</div>
    </div>
<!--消息框 -->


<!--_menu 作为公共模版分离出去-->
<aside class="Hui-aside">

	<div class="menu_dropdown bk_2">
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 表单创建<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="frombuilder.html" title="资讯管理">表单创建</a></li>
		</ul>
	</dd>
</dl>



		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="admin_role.html" title="角色管理">角色管理</a></li>					
					<li><a href="admin_permission.html" title="权限管理">权限管理</a></li>
					<li><a href="admin_list.html" title="管理员列表">管理员列表</a></li>
		</ul>
	</dd>
</dl>
		<dl id="menu-tongji">
			<dt><i class="Hui-iconfont">&#xe61a;</i> 系统统计<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a href="charts-1.html" title="折线图">折线图</a></li>
					<li><a href="charts-2.html" title="时间轴折线图">时间轴折线图</a></li>
					<li><a href="charts-3.html" title="区域图">区域图</a></li>
					<li><a href="charts-4.html" title="柱状图">柱状图</a></li>
					<li><a href="charts-5.html" title="饼状图">饼状图</a></li>
					<li><a href="charts-6.html" title="3D柱状图">3D柱状图</a></li>
					<li><a href="charts-7.html" title="3D饼状图">3D饼状图</a></li>
		</ul>
	</dd>
</dl>

</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<!--/_menu 作为公共模版分离出去-->

<section class="Hui-article-box">
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i><a href="<?php echo url('admin/admin/index'); ?>">首页</a> 
		<span class="c-gray en">&gt;</span>
		<a href="<?php echo url('admin/admin/index'); ?>">管理员管理</a>
		<span class="c-gray en">&gt;</span>
		<a href="<?php echo url('admin/admin/admin_list'); ?>">管理员列表</a>
		<span class="c-gray en">&gt;</span>
		<a href="">添加管理员</a> 
		
	</nav>
	<div class="Hui-article">
<article class="cl pd-20">
	<form action="" method="post" class="form form-horizontal" id="form-admin-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>管理员：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="adminName" name="admin_name">
				<input type="hidden" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" />
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>初始密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="password" class="input-text" autocomplete="off" value="" placeholder="密码" id="password" name="pwd">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>确认密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="password" class="input-text" autocomplete="off"  placeholder="确认新密码" id="password2" name="pwd_confirm">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="phone" name="admin_phone">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>邮箱：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" placeholder="@" name="admin_email" id="email">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">角色：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">
				<select class="select" name="admin_role" size="1">
					<option value="0">超级管理员</option>
					<option value="1">总编</option>
					<option value="2">栏目主辑</option>
					<option value="3">栏目编辑</option>
				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">备注：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="note" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true" onKeyUp="textarealength(this,100)"></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
			</div>
		</div>
		<div><input type="hidden" name="is_del" value=1><input type="hidden" name="admin_join_time" value="<?php echo date('Y-m-d H:i:s', strtotime('now'));?>"></div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</article>


<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="http://192.168.1.2/bick/public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="http://192.168.1.2/bick/public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="http://192.168.1.2/bick/public/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="http://192.168.1.2/bick/public/static/h-ui.admin/js/H-ui.admin.page.js"></script> 
<script type="text/javascript" src="http://192.168.1.2/bick/public/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="http://192.168.1.2/bick/public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://192.168.1.2/bick/public/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript" src="http://192.168.1.2/bick/public/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="http://192.168.1.2/bick/public/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="http://192.168.1.2/bick/public/lib/jquery.validation/1.14.0/messages_zh.js"></script> 

<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-admin-add").validate({
		rules:{
			admin_name:{
				required:true,
				minlength:4,
				maxlength:16
			},
			pwd:{
				required:true,
				minlength:4,
				maxlength:10
			},
			pwd_confirm:{
				required:true,
				equalTo: "#password"
			},
			admin_phone:{
				required:true,
				isPhone:true,
			},
			admin_email:{
				required:true,
				email:true,
			},
			admin_role:{
				required:true,
				number:true,
			},
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		// submitHandler:function(form){
		// 	$(form).ajaxSubmit({ 
		// 		dataType:"json",
		// 		success:function(jsondata){ 
		// 			// alert(jsondata.msg)
		// 			$.Huimodalalert(jsondata.msg,2000)
		// 		} 
		// 	});
		// 	var index = parent.layer.getFrameIndex(window.name);
		// 	parent.$('.btn-refresh').click();
		// 	parent.layer.close(index);
		// }
	});
});
</script>
<!--/请在上方写此页面业务相关的脚本-->
