<?php
namespace app\admin\controller;
use think\Controller;

class Base extends Controller
{
	public function _initialize()
	{	
		// var_dump(session('admin_role'));
		if (session('admin_role')) {
			
			$this->assign([
				'title'=>'管理系统登录',
				'admin_name'=>session('admin_name')
			]);
		} else {

				$this->assign([
				'title'=>'管理系统登录',
				'admin_name'=>'游客',
			]);
			return $this->error('请先登录',url('admin/login/index'));
		}
		
	}
}
?>