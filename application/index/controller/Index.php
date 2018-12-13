<?php
namespace app\index\controller;

class Index extends Base
{

    public function index()
	{
		//如果role超过1 每一页给一个权限值  ，小于便有权限访问
		//   0超级管理员   1管理员  2部门 3普通员工 4未登录
		// if (session('role')<4) {
		// 	$this->success('您已经登录过了， 转往首页','index');
		// }
		// echo \think\session::get('role');

		return view();
	}

}
