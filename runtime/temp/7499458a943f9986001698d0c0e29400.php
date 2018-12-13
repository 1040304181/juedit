<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:66:"F:\WWW\bick\public/../application/admin\view\admin\admin_list.html";i:1544445875;s:51:"F:\WWW\bick\application\admin\view\Public\meta.html";i:1544711512;s:59:"F:\WWW\bick\application\admin\view\Public\admin_header.html";i:1544509529;s:57:"F:\WWW\bick\application\admin\view\Public\admin_left.html";i:1544509777;s:57:"F:\WWW\bick\application\admin\view\Public\admin_foot.html";i:1544698006;}*/ ?>
﻿<!--_meta 作为公共模版分离出去-->
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
<script type="text/javascript" src="http://192.168.1.2/bick/public/lib/html5.js"></script>
<script type="text/javascript" src="http://192.168.1.2/bick/public/lib/respond.min.js"></script>
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
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
		<span class="c-gray en">&gt;</span>
		管理员管理
		<span class="c-gray en">&gt;</span>
		管理员列表 
		<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a> 
		<!-- <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius r" style="line-height:1.6em;margin-top:3px" title="批量删除" ><i class="Hui-iconfont">&#xe6e2;</i> </a> -->
		<a href="admin_add.html" onclick="" class="btn btn-primary radius r" style="line-height:1.6em;margin-top:3px" title="添加管理员"><i class="Hui-iconfont">&#xe600;</i> </a> 
		
	</nav>
	<div class="Hui-article">

		<article class="cl pd-20">
			
			<table class="table table-border table-bordered table-hover  XXL table-bg table-sort" cellspacing="0" width="100%" >
				<thead>
					<tr class="text-c ">
						<th  scope="col" colspan="9">管理员列表
										
	
		
						</th>
					</tr>
					<tr class="text-c">
						<th width="25">id</th>
						<th width="50">登录名</th>
						<th width="90">手机</th>
						<th width="150">邮箱</th>
						<th width="100">角色</th>
						<th width="130">加入时间</th>
						<th width="100">是否已启用</th>
						<th width="100">操作</th>
					</tr>
				</thead>

				</tbody>
			</table>
			
		</article>
	</div>
</section>

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
<script type="text/javascript">
$(document).ready(function(){
	$('.table-sort').dataTable({
		// 这里写一些基本配置，例如：
        // "processing": true,
        "serverSide": true,
        // "bDestroy":true,
     	// "scrollY": 200,
         // "scrollX": true,

		"order":[ [0,'asc'] ], // 设置默认排序的表格列[参数1是表格列的下标，从0开始]
		"ajax": {               
			"url": "<?php echo url('admin/admin/getData'); ?>", //请求数据的后台地址
			"type": "POST",     // ajax的请求方法
			  
		},
		"columns": [
            { "data": "id" },
            { "data": "admin_name" },
            { "data": "admin_phone" },
            { "data": "admin_email" },
            { "data": "admin_role" ,
				render : function(data, type,row) {
					// global data7
					// console.log(data)
					switch (data) {
						case 0: html = "超级管理员"
							break;
						case 1: html = "总编"
							break;
						case 2: html = "栏目主辑"
							break;
						case 3: html = "栏目编辑"
							break;						
					}
					return html;
				}

        	},
            { "data": "admin_join_time" },
			{ "data": "is_del" ,
				render : function(data, type,row) {
					// global data7
					data7=data
					row_id=row.id
					// console.log(data)
					if (data) {
						var html = "<span class='label label-success radius'>已启用</span>"
					}else{
						var html = "<span class='label radius'>已停用</span>"	
					}
					return html;
				}
			},
			{ "data": "" ,
				render : function(data, type,row) {
					
					if (data7) {
						var html = "<a style=\"text-decoration:none\" onClick=\"\" href=\"/index.php/admin/admin/admin_stop/id/"+row_id+"\" title=\"停用\"><i class=\"Hui-iconfont\">&#xe631;</i></a>"
					}else{
						var html = "<a style=\"text-decoration:none\" onClick=\"\" href=\"/index.php/admin/admin/admin_start/id/"+row_id+"\" title=\"启用\"><i class=\"Hui-iconfont\">&#xe615;</i></a>"	
					}
						html += "<a title='编辑' href='/index.php/admin/admin/admin_edit/id/"+row_id+".html' onclick=\"\" class=\"ml-5\" style=\"text-decoration:none\"><i class=\"Hui-iconfont\">&#xe6df;</i></a>"
						html += "<a title=\"删除\" href=\"javascript:;\" onclick=\"admin_del(this,"+row_id+")\" class=\"ml-5\" style=\"text-decoration:none\"><i class=\"Hui-iconfont\">&#xe6e2;</i></a>"
					
					return html;
				}
			},
        ],
	});

});

</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>