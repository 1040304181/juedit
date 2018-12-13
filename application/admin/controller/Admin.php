<?php
namespace app\admin\controller;
use think\View;
// use think\Controller;
use app\admin\model\Admin as AdminModel;
class Admin extends Base
{
    public function index()
    {

        return $this->fetch();
    }
    public function admin_role()
    {

        return $this->fetch();
    }
    public function admin_stop()
    {
        if (request()->isGet()) {

            $id =input('id');
            $res=\think\Db::name("Admin")->where('id',$id)->update(['is_del'=>0]);
        }
        if ($res) {
            return $this->success('停用成功','admin_list');
        } else {
            return $this->error('停用失败','admin_list');
        }
    }

    public function admin_start()
    {
        if (request()->isGet()) {

            $id =input('id');
            $res=\think\Db::name("Admin")->where('id',$id)->update(['is_del'=>1]);
        }
        if ($res) {
            return $this->success('启用成功','admin_list');
        } else {
            return $this->error('启用失败','admin_list');
        }
    }
    // 新增数据
    public function admin_add()
    {
         if(request()->post()){


                //接受请求
            $datares = request()->post();
            $data = [
            'admin_name'  => $datares['admin_name'],
            'admin_phone' => $datares['admin_phone'],
            'admin_email' => $datares['admin_email'],
            'admin_role'  => $datares['admin_role'],
            'admin_join_time' => $datares['admin_join_time'],
            'is_del'      => $datares['is_del'],
            'pwd'         => $datares['pwd'],
            'pwd_confirm' => $datares['pwd_confirm'],
            'note' => $datares['note'],
            ];
            // dump($data) ;

            // 验证
            $validate = \think\Loader::validate('Admin');
            $data1 = [
            'admin_name'  => $data['admin_name'],
            'admin_phone' => $data['admin_phone'],
            'admin_email' => $data['admin_email'],
            'admin_role'  => $data['admin_role'],
            'admin_join_time' => $data['admin_join_time'],
            'is_del'      => $data['is_del'],
            'pwd'         => md5($data['pwd']),
            // 'pwd_confirm' => $data['pwd_confirm'],
            'note' => $data['note'],
            ];
// 插入
            if($validate->check($data)){
                $db=\think\Db::name("Admin")->insert($data1);
                if ($db) {
                    return $this->success('增加管理员成功','admin_list');
                } else {
                    return $this->error('增加管理员失败');
                }
            }else{
             return $this->error($validate->getError());
             // return $validate->getError();
            }
         }
        return $this->fetch();
    }

    public function admin_edit()
    {
        $id=input('id');
        $adminres=db('admin')->where('id',$id)->find();
        // dump($adminres );
        $this->assign('adminres',$adminres);
        if(request()->post()){


                //接受请求
            $datares = request()->post();
            $data = [
            'admin_name'  => $datares['admin_name'],
            'admin_phone' => $datares['admin_phone'],
            'admin_email' => $datares['admin_email'],
            'admin_role'  => $datares['admin_role'],
            'admin_join_time' => $datares['admin_join_time'],
            'is_del'      => $datares['is_del'],
            'pwd'         => $datares['pwd'],
            'pwd_confirm' => $datares['pwd_confirm'],
            'note' => $datares['note'],
            ];
            // dump($data) ;

            // 验证
            $validate = \think\Loader::validate('Admin');
            $data1 = [
            'admin_name'  => $data['admin_name'],
            'admin_phone' => $data['admin_phone'],
            'admin_email' => $data['admin_email'],
            'admin_role'  => $data['admin_role'],
            'admin_join_time' => $data['admin_join_time'],
            'is_del'      => $data['is_del'],
            'pwd'         => md5($data['pwd']),
            // 'pwd_confirm' => $data['pwd_confirm'],
            'note' => $data['note'],
            ];
// 插入
            if($validate->check($data)){
                $db=\think\Db::name("Admin")->where('id',$id)->update($data1);
                if ($db) {
                    return $this->success('编辑管理员成功',url('admin/admin/admin_list'));
                } else {
                    return $this->error('增加管理员失败');
                }
            }else{

                $edata=$validate->getError();
                // $edata['token']=request()->token();
             return $this->error($edata);
             // return $validate->getError();
            }
         }

        return $this->fetch();
    }
    public function admin_list()
    {

    // $adminres = AdminModel::paginate(2);
    //     // $adminres=\think\Db::name('admin_list')->paginate(2);
    //     // 获取分页显示
    //     $page = $adminres->render();
    //     // 模板变量赋值
    //     $this->assign('adminres', $adminres);
    //     $this->assign('page', $page);

    //     // 渲染模板输出

        return $this->fetch();
    }

    public function getData(){
        if(request()->isAjax()){
                //实例化User模型，注意要在上面use
                $AdminModel = new AdminModel;
                //这里是查询未被标记为删除的所有用户（可选）
                // $info = AdminModel::where('is_del','0') -> select();
                //接受请求
                $datatables = request()->post();
//                var_dump($datatables);
                //得到排序的方式
                $order = $datatables['order'][0]['dir'];
                //得到排序字段的下标
                $order_column = $datatables['order'][0]['column'];
                //根据排序字段的下标得到排序字段
                $order_field = $datatables['columns'][$order_column]['data'];
                //得到limit参数
                $limit_start = $datatables['start'];
                $limit_length = $datatables['length'];
                //得到搜索的关键词
                $search = $datatables['search']['value'];

                //查询出所有用户数据
                //如有搜索行为，则按照姓名进行模糊查询
                if ($search){
                    $data = $AdminModel
                           ->order("$order_field $order")
                            ->limit($limit_start,$limit_length)
                            ->where('admin_name|admin_role|admin_join_time|admin_phone|admin_email','LIKE',"%$search%")
                            ->select();
                    $keyword_all_data = $AdminModel
                                    ->where('admin_name','LIKE',"%$search%")
                                    ->select();
                    $total = count($keyword_all_data);   //获取满足关键词的总记录数
                }else{

                    //没有关键词，则查询全部
                    $data = $AdminModel
                    // ->where("is_del","=",0)   //查询未被标记为删除的数据，可选
//                     ->field('id,admin_name')
                    ->order("id $order")
                    ->limit($limit_start,$limit_length)
                    ->select();

                    $total = $AdminModel
                            // ->where("is_del","=",0)
                            ->count(); // 数据总数
                }

                if($data){
                    $data = collection($data)->toArray();
                }
                // print($data);
                $draw = request()->post('draw');
                $AllData = [
                    // ajax的请求次数，创建唯一标识
                    'draw' => $draw,
                    // 结果数
                    'recordsTotal' => count($data),
                    // 总数据量
                    'recordsFiltered' => $total,
                    // 总数据
                    'data' => $data,
                ];
                return json($AllData);
        }else{
                //如果不是ajax请求，自行处理
        }
    }


    public function admin_permission()
    {

        return $this->fetch();
    }
    public function admin_role_add()
    {

        return $this->fetch();
    }

    public function member_list()
    {

        return $this->fetch();
    }

    // public function test()
    // {
    //     $view = new View();
    //     // $view->name = 'test';
    //     return $view->fetch('admin_add',['id'=>2]);
    // }


    public function test1()
    {
        $adminres = AdminModel::all();
        var_dump($adminres);
        print("12");
    }
}
