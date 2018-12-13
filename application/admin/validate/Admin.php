<?php
namespace app\admin\validate;
use think\Validate;
class Admin extends Validate
{
// 验证规则
protected $rule = [
'admin_name' => 'require|min:4|max:16',
'admin_phone' => 'require|checkPhone',
'admin_email' => 'require|email',
'admin_role' => 'require|number',
'admin_join_time' => 'require|dateFormat:Y-m-d H:i:s|before:0 day',
'is_del' => 'require',
'pwd' => 'require|alphaNum|length:4,10|confirm',
];
protected $message = [
'admin_name.require' => '名称必须',
'admin_name.min' => '名称不能少于4个字符',
'admin_name.max' => '名称最多不能超过16个字符',
'admin_name.unique' => '名称不能重复',
'admin_name.token' => '不能重复提交',
'admin_phone.require' => '电话必须',
'admin_phone.checkphone' => '手机号码格式错误',
'admin_role.require' => '角色必须',
'admin_role.number' => '角色格式错误',
'admin_mail.require' => '邮箱必须',
'admin_mail.email' => '邮箱错误',
'admin_join_time.require' => '时间必须填写',
'admin_join_time.dateFormat' => '时间格式错误',
'admin_join_time.before' => '时间须在今天之前',
'is_del.require' => '是否启用必填',
'pwd.require' => '密码必须',
'pwd.alphaNum' => '密码必须为字母和数字组合',
'pwd.confirm' => '两次密码输入不一致',
'pwd.length' => '密码4位到10位',


];

protected function checkPhone($value){
   //匹配正则表达式函数       
  	if(preg_match('/^((1[3,5,8][0-9])|(14[5,7])|(17[0,6,7,8])|(19[7]))\d{8}$/',$value)){
            return true;
       }else{
            return  '手机号码格式错误';
       }
 
   }

}