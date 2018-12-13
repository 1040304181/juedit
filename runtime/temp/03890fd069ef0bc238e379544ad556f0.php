<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"F:\WWW\bick\public/../application/formdesign\view\formdesign\index.html";i:1544683708;s:56:"F:\WWW\bick\application\formdesign\view\Public\base.html";i:1544698242;}*/ ?>

<!DOCTYPE HTML>
<html>
 <head>
    <block name="title">
        <title>表单设计器 </title>
    
    </block>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="leipi.org">
    <link href="/static/h-ui.admin/css/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 6]>
    <link rel="stylesheet" type="text/css" href="/static/h-ui.admin/css/bootstrap/css/bootstrap-ie6.css">
    <![endif]-->
    <!--[if lte IE 7]>
    <link rel="stylesheet" type="text/css" href="/static/h-ui.admin/css/bootstrap/css/ie.css">
    <![endif]-->
    <link href="/static/h-ui.admin/css/site.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/static/h-ui.admin/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/static/h-ui.admin/js/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/static/h-ui.admin/js/ueditor/ueditor.all.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/static/h-ui.admin/js/ueditor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript" charset="utf-8" src="/static/h-ui.admin/js/ueditor/formdesign/leipi.formdesign.v4.js"></script>
    <script type="text/javascript">
        
    </script>
    <block name="head"><!--head  style or js --></block>
 </head>
<body>




	<block name="body"><!--主体内容--></block>
    

    <block name="footer_js"><!--footer js --></block>


</body>
</html>


<block name="title">
    <title>实例演示 Ueditor FormDesign Plugins -leipi.org</title>
    <meta name="keyword" content="ueditor formdesign plugins,ueditor扩展,web表单设计器,高级表单设计器,Leipi Form Design,web form设计器,web form designer">
    <meta name="description" content="javascript jquery ueditor php表单设计器实例演示与下载！">
</block>
<block name="head">

<script type="text/javascript" src="/static/h-ui.admin/js/jquery-1.7.2.min.js"></script>
</block><!--end head-->

<block name="body">




<div class="container">

<div class="row">
    <ol class="breadcrumb">
        <li><a href="/">表单设计器</a> <span class="divider">/</span></li>
        <li><a href="">实例</a> <span class="divider">/</span></li>
        <li class="active">设计表单 </li>
    </ol>
</div>


<form method="post" id="saveform" name="saveform" action="<?php echo url('/formdesign/formdesign/formdesign'); ?>" method="post">
<!-- <input type="hidden" name="form_id" value=""> -->
<input type="hidden" name="fields" id="fields" value="0">
<div class="row">
    <div class="well well-small">
<span class="pull-right">
    <a href="javascript:void(0);" class="btn btn-primary btn-small" onclick="leipiFormDesign.fnReview();">预览效果</a>
    <a href="javascript:void(0);" class="btn btn-success btn-small" id="button_save" onclick="leipiFormDesign.fnCheckForm('save');">确定保存</a>
</span>

<p>
 一栏布局：<br /><br />
        <button type="button" onclick="leipiFormDesign.exec('text');" class="btn btn-info">文本框</button>
        <button type="button" onclick="leipiFormDesign.exec('textarea');" class="btn btn-info">多行文本</button>
        <button type="button" onclick="leipiFormDesign.exec('select');" class="btn btn-info">下拉菜单</button>
        <button type="button" onclick="leipiFormDesign.exec('radios');" class="btn btn-info">单选框</button>
        <button type="button" onclick="leipiFormDesign.exec('checkboxs');" class="btn btn-info">复选框</button>
        <button type="button" onclick="leipiFormDesign.exec('macros');" class="btn btn-info">宏控件</button>
        <button type="button" onclick="leipiFormDesign.exec('progressbar');" class="btn btn-info">进度条</button>
        <button type="button" onclick="leipiFormDesign.exec('qrcode');" class="btn btn-info">二维码</button>
        <button type="button" onclick="leipiFormDesign.exec('listctrl');" class="btn btn-info">列表控件</button>
        <button type="button" onclick="leipiFormDesign.exec('more');" class="btn btn-primary">一起参与...</button>
</p>

     </div>
    <div class="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>提醒：</strong>单选框和复选框，如：<code>{|-</code>选项<code>-|}</code>两边边界是防止误删除控件，程序会把它们替换为空，请不要手动删除！
    </div>

</div><!--end row-->   
<div class="row">
    <script id="myFormDesign" type="text/plain" style="width:100%;">
         
    </script>
</div><!--end row-->

</form>


</div><!--end container-->


<block name="footer_js">
<script type="text/javascript" charset="utf-8" src="/static/h-ui.admin/js/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/static/h-ui.admin/js/ueditor/ueditor.all.js"> </script>
<script type="text/javascript" charset="utf-8" src="/static/h-ui.admin/js/ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" charset="utf-8" src="/static/h-ui.admin/js/ueditor/formdesign/leipi.formdesign.v4.js"></script>
<!-- script start-->  
<script type="text/javascript">
var leipiEditor = UE.getEditor('myFormDesign',{
            //allowDivTransToP: false,//阻止转换div 为p
            toolleipi:true,//是否显示，设计器的 toolbars
            textarea: 'design_content',   
            //这里可以选择自己需要的工具按钮名称,此处仅选择如下五个
           toolbars:[[
            'fullscreen', 'source', '|', 'undo', 'redo', '|','bold', 'italic', 'underline', 'fontborder', 'strikethrough',  'removeformat', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist','|', 'fontfamily', 'fontsize', '|', 'indent', '|', 'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|',  'link', 'unlink',  '|',  'horizontal',  'spechars',  'wordimage', '|', 'inserttable', 'deletetable',  'mergecells',  'splittocells']],
            //focus时自动清空初始化时的内容
            //autoClearinitialContent:true,
            //关闭字数统计
            wordCount:false,
            //关闭elementPath
            elementPathEnabled:false,
            //默认的编辑区域高度
            initialFrameHeight:300
            //,iframeCssUrl:"/public//css/bootstrap/css/bootstrap.css" //引入自身 css使编辑器兼容你网站css
            //更多其他参数，请参考ueditor.config.js中的配置项
        });

 var leipiFormDesign = {
    /*执行控件*/
    exec : function (method) {
        leipiEditor.execCommand(method);
    },
    /*
        Javascript 解析表单
        template 表单设计器里的Html内容
        fields 字段总数
    */
   parse_form:function(template,fields)
    {
        //正则  radios|checkboxs|select 匹配的边界 |--|  因为当使用 {} 时js报错
        var preg =  /(\|-<span(((?!<span).)*leipiplugins=\"(radios|checkboxs|select)\".*?)>(.*?)<\/span>-\||<(img|input|textarea|select).*?(<\/select>|<\/textarea>|\/>))/gi,preg_attr =/(\w+)=\"(.?|.+?)\"/gi,preg_group =/<input.*?\/>/gi;
        if(!fields) fields = 0;

        var template_parse = template,template_data = new Array(),add_fields=new Object(),checkboxs=0;

        var pno = 0;
        template.replace(preg, function(plugin,p1,p2,p3,p4,p5,p6){
            var parse_attr = new Array(),attr_arr_all = new Object(),name = '', select_dot = '' , is_new=false;
            var p0 = plugin;
            var tag = p6 ? p6 : p4;
            //alert(tag + " \n- t1 - "+p1 +" \n-2- " +p2+" \n-3- " +p3+" \n-4- " +p4+" \n-5- " +p5+" \n-6- " +p6);

            if(tag == 'radios' || tag == 'checkboxs')
            {
                plugin = p2;
            }else if(tag == 'select')
            {
                plugin = plugin.replace('|-','');
                plugin = plugin.replace('-|','');
            }
            plugin.replace(preg_attr, function(str0,attr,val) {
                    if(attr=='name')
                    {
                        if(val=='leipiNewField')
                        {
                            is_new=true;
                            fields++;
                            val = 'data_'+fields;
                        }
                        name = val;
                    }
                    
                    if(tag=='select' && attr=='value')
                    {
                        if(!attr_arr_all[attr]) attr_arr_all[attr] = '';
                        attr_arr_all[attr] += select_dot + val;
                        select_dot = ',';
                    }else
                    {
                        attr_arr_all[attr] = val;
                    }
                    var oField = new Object();
                    oField[attr] = val;
                    parse_attr.push(oField);
            }) 
            /*alert(JSON.stringify(parse_attr));return;*/
             if(tag =='checkboxs') /*复选组  多个字段 */
             {
                plugin = p0;
                plugin = plugin.replace('|-','');
                plugin = plugin.replace('-|','');
                var name = 'checkboxs_'+checkboxs;
                attr_arr_all['parse_name'] = name;
                attr_arr_all['name'] = '';
                attr_arr_all['value'] = '';
                
                attr_arr_all['content'] = '<span leipiplugins="checkboxs"  title="'+attr_arr_all['title']+'">';
                var dot_name ='', dot_value = '';
                p5.replace(preg_group, function(parse_group) {
                    var is_new=false,option = new Object();
                    parse_group.replace(preg_attr, function(str0,k,val) {
                        if(k=='name')
                        {
                            if(val=='leipiNewField')
                            {
                                is_new=true;
                                fields++;
                                val = 'data_'+fields;
                            }

                            attr_arr_all['name'] += dot_name + val;
                            dot_name = ',';

                        }
                        else if(k=='value')
                        {
                            attr_arr_all['value'] += dot_value + val;
                            dot_value = ',';

                        }
                        option[k] = val;    
                    });
                    
                    if(!attr_arr_all['options']) attr_arr_all['options'] = new Array();
                    attr_arr_all['options'].push(option);
                    //if(!option['checked']) option['checked'] = '';
                    var checked = option['checked'] !=undefined ? 'checked="checked"' : '';
                    attr_arr_all['content'] +='<input type="checkbox" name="'+option['name']+'" value="'+option['value']+'"  '+checked+'/>'+option['value']+'&nbsp;';

                    if(is_new)
                    {
                        var arr = new Object();
                        arr['name'] = option['name'];
                        arr['leipiplugins'] = attr_arr_all['leipiplugins'];
                        add_fields[option['name']] = arr;

                    }

                });
                attr_arr_all['content'] += '</span>';

                //parse
                template = template.replace(plugin,attr_arr_all['content']);
                template_parse = template_parse.replace(plugin,'{'+name+'}');
                template_parse = template_parse.replace('{|-','');
                template_parse = template_parse.replace('-|}','');
                template_data[pno] = attr_arr_all;
                checkboxs++;

             }else if(name)
            {
                if(tag =='radios') /*单选组  一个字段*/
                {
                    plugin = p0;
                    plugin = plugin.replace('|-','');
                    plugin = plugin.replace('-|','');
                    attr_arr_all['value'] = '';
                    attr_arr_all['content'] = '<span leipiplugins="radios" name="'+attr_arr_all['name']+'" title="'+attr_arr_all['title']+'">';
                    var dot='';
                    p5.replace(preg_group, function(parse_group) {
                        var option = new Object();
                        parse_group.replace(preg_attr, function(str0,k,val) {
                            if(k=='value')
                            {
                                attr_arr_all['value'] += dot + val;
                                dot = ',';
                            }
                            option[k] = val;    
                        });
                        option['name'] = attr_arr_all['name'];
                        if(!attr_arr_all['options']) attr_arr_all['options'] = new Array();
                        attr_arr_all['options'].push(option);
                        //if(!option['checked']) option['checked'] = '';
                        var checked = option['checked'] !=undefined ? 'checked="checked"' : '';
                        attr_arr_all['content'] +='<input type="radio" name="'+attr_arr_all['name']+'" value="'+option['value']+'"  '+checked+'/>'+option['value']+'&nbsp;';

                    });
                    attr_arr_all['content'] += '</span>';

                }else
                {
                    attr_arr_all['content'] = is_new ? plugin.replace(/leipiNewField/,name) : plugin;
                }
                //attr_arr_all['itemid'] = fields;
                //attr_arr_all['tag'] = tag;
                template = template.replace(plugin,attr_arr_all['content']);
                template_parse = template_parse.replace(plugin,'{'+name+'}');
                template_parse = template_parse.replace('{|-','');
                template_parse = template_parse.replace('-|}','');
                if(is_new)
                {
                    var arr = new Object();
                    arr['name'] = name;
                    arr['leipiplugins'] = attr_arr_all['leipiplugins'];
                    add_fields[arr['name']] = arr;
                }
                template_data[pno] = attr_arr_all;

               
            }
            pno++;
        })
        var parse_form = new Object({
            'fields':fields,//总字段数
            'template':template,//完整html
            'parse':template_parse,//控件替换为{data_1}的html
            'data':template_data,//控件属性
            'add_fields':add_fields//新增控件
        });
        console.log(parse_form)
        return JSON.stringify(parse_form);
    },
    /*type  =  save 保存设计 versions 保存版本  close关闭 */
    fnCheckForm : function ( type ) {
        if(leipiEditor.queryCommandState( 'source' ))
            leipiEditor.execCommand('source');//切换到编辑模式才提交，否则有bug
            
        if(leipiEditor.hasContents()){
            leipiEditor.sync();/*同步内容*/
            
           // alert("你点击了保存,这里可以异步提交....");
            //return false;
            
            var type_value='',formid=0,fields=$("#fields").val(),formeditor='';

            if( typeof type!=='undefined' ){
                type_value = type;
            }
            //获取表单设计器里的内容
            formeditor=leipiEditor.getContent();
            //解析表单设计器控件
            var parse_form = this.parse_form(formeditor,fields);
            console.log(parse_form);
            
             //异步提交数据
             $.ajax({
                type: 'POST',
                url : '<?php echo url("formdesign/formdesign/parse"); ?>',
                //dataType : 'json',
                data : {'type' : type_value,'formid':formid,'parse_form':parse_form},
                success : function(data){
                    if(confirm('查看js解析后，提交到服务器的数据，请临时允许弹窗'))
                    {
                        win_parse=window.open('','','width=800,height=600');
                        //这里临时查看，所以替换一下，实际情况下不需要替换  
                        data  = data.replace(/<\/+textarea/,'&lt;textarea');
                        win_parse.document.write('<textarea style="width:100%;height:100%">'+data+'</textarea>');
                        win_parse.focus();
                    }
                    
                    
                  if(data.success==1){
                      alert('保存成功');
                      $('#submitbtn').button('reset');
                  }else{
                      alert('保存失败！');
                  }
                }
            });
            
        } else {
            alert('表单内容不能为空！')
            $('#submitbtn').button('reset');
            return false;
        }
    } ,
    /*预览表单*/
    fnReview : function (){
        if(leipiEditor.queryCommandState( 'source' ))
            leipiEditor.execCommand('source');/*切换到编辑模式才提交，否则部分浏览器有bug*/
            
        if(leipiEditor.hasContents()){
            leipiEditor.sync();       /*同步内容*/
            
            /*设计form的target 然后提交至一个新的窗口进行预览*/
            document.saveform.target="mywin";
            window.open('','mywin',"menubar=0,toolbar=0,status=0,resizable=1,left=0,top=0,scrollbars=1,width=" +(screen.availWidth-10) + ",height=" + (screen.availHeight-50) + "\"");

            document.saveform.action="<?php echo url('formdesign/formdesign/preview'); ?>";
            document.saveform.submit(); //提交表单
        } else {
            alert('表单内容不能为空！');
            return false;
        }
    }
};

</script>
<!-- script end -->


</block><!--end footer_js-->