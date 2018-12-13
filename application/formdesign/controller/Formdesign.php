<?php
namespace app\formdesign\controller;
use think\View;
use think\Controller;
use think\Db;
use think\Loader;
use Org\My as My;
use Org\Page as Page;
use Org\Formdesigner as Formdesigner;
class Formdesign extends Controller
{
    public function preview()
    {

        $formdesign = new Formdesigner;


        $parse_content = $formdesign->parse_form($_POST['design_content'],$_POST['fields']);
         // dump('parse_content');
         // dump($parse_content);
        // print_R($parse_content);exit;

        $design_content = $formdesign->unparse_form(array(
            'content_parse'=>$parse_content['parse'],
            'content_data'=>serialize($parse_content['data']),//保存后是 serialize，所以这里也一样
        ),array( ),array('action'=>'preview'));

        $file_out_path = "../application/formdesign/view/formdesign/temp_preview.html";
        $file_in_path  = "../application/formdesign/view/formdesign/formdesign_temp.html";


        //导入并替换模板
        $formdesign_temp=file_get_contents($file_in_path);
        $formdesign_temp=str_replace('{$design_content}',$design_content,$formdesign_temp);

        file_put_contents($file_out_path, $formdesign_temp);
        $this->assign('design_content',$design_content);
        //
        //保存模数据
        //生产数据库
        //
        return $this->fetch();
    }

     public function index(){
// echo "1";
        $map = array(
            'is_del'=>0,
        );
        $page='';
        $list = array();

        $cache = array();
        if(empty($_GET) or $_GET['p']==1)//仅缓存第一页就好了
        {
            $cache = cache(request()->controller().'pageone');
        }
        // echo "2";
        // dump($cache);
        if($cache)
        {
            $count = $cache['count'];
            $page = $cache['page'];
            $list = $cache['list'];
        }else
        {
            $count = Db::name('form')->where($map)->count('id');
// echo "3";
//         dump($count);
            if ($count > 0)
            {

                $p = new Page($count, 5);
                //分页跳转的时候保证查询条件
                foreach ($_GET as $key => $val) {
                    if (!is_array($val)) {
                        $p->parameter .= $key.'=' . urlencode($val) . '&';
                    }
                }
                 //分页显示
                $page = $p->show();

                $list = Db::name('form')->field('id,form_name,form_desc,fields,updatetime,dateline')->where($map)->order('id desc')->limit($p->firstRow . ',' . $p->listRows)->select();
                if(empty($_GET))
                {
                    cache(request()->controller().'pageone',array(
                        'count'=>$count,
                        'page'=>$page,
                        'list'=>$list,
                    ));
                   // //dump(array(
                   //      'count'=>$count,
                   //      'page'=>$page,
                   //      'list'=>$list,
                   //  ));
                }
            }
        }
        //dump('4');
        $this->assign('page', $page);
        $this->assign('list', $list);
        return $this->fetch();

    }
    public function parse()
    {
        print_R($_POST);
    }
}