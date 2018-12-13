<?php
namespace app\admin\controller;
use think\View;
use think\Controller;

class Login extends Controller
{
    public function index()
    {
    	$this->assign(
			['title'=>'管理系统登录']
		);
         return $this->fetch();
    }
/**
 * [login description]
 * @return [type] [description]
 */
    	public function login()
	{	
		$username=input('username');
		$password=input('password');
		$user=\think\Db::name('admin')
				->where('admin_name','=',$username)
				->where('pwd','=',md5($password))
				->find();
		if ($user) {
			// 清空
			session(null);
			// 赋值
			session('admin_role',$user['admin_role']);		
			session('admin_name',$user['admin_name']);	
			session('admin_phone',$user['admin_phone']);	
			session('admin_email',$user['admin_email']);	
			
			// 不起作用
			// session([
			// 	'admin_role'=>$user['admin_role'],
			// 	'admin_name'=>$user['admin_name'],
			// ]);
			return $this->success('登陆成功',url('admin/admin/index'));
		} else {
			return $this->error('用户不存在或者密码错误','admin/login/index');
		}
	}
	/**
	 * 退出
	 * @return [type] [description]
	 */
	public function logout()
	{
		session(null);
		$this->success('退出成功','index');
	}
}
