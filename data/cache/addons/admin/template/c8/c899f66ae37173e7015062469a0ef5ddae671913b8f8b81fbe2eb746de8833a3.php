<?php

/* setting/configure.html */
class __TwigTemplate_818a16b438d92521c32a4156c985f0d0137314bae8354b3b9097586a110b42b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        echo twig_include($this->env, $context, "common/header.html");
        echo "
<div class=\"admin\">
    ";
        // line 4
        echo twig_include($this->env, $context, "common/settingNav.html");
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP", array(), "array"), "html", null, true);
        echo "/resource/wangEditor/css/wangEditor.min.css\">
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP", array(), "array"), "html", null, true);
        echo "/resource/js/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP", array(), "array"), "html", null, true);
        echo "/resource/wangEditor/js/wangEditor.min.js\"></script>

    <div class=\"aright\" >
        <style type=\"text/css\">
            .tpt_sels a{padding-right:15px;position:relative}
            .tpt_sels a{padding:0 20px 0 8px;color:#3B6268;background:#FFFFBA;border:1px #F8E06E solid;margin-right:5px;margin-bottom:5px;font-size:14px;height:26px;line-height:26px;display:block;float:left}
            .tpt_sels a em{width: 12px;height: 12px;font-style: normal;display: block;position: absolute;top: 7px;right: 4px;z-index: 2;background: url(/blog/Public/img/sx.png) no-repeat 0 0;}
        </style>
        <div class=\"layui-tab\" lay-filter=\"demo\" style=\"margin: 20px 30px 20px 20px;\">
            <ul class=\"layui-tab-title\">
                <li class=\" ";
        // line 17
        if (($this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "t", array(), "array") == "configure")) {
            echo " layui-this ";
        }
        echo "\">基础设置</li>
                <li class=\" ";
        // line 18
        if (($this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "t", array(), "array") == "route")) {
            echo " layui-this ";
        }
        echo "\">系统设置</li>
                <li class=\" ";
        // line 19
        if (($this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "t", array(), "array") == "email")) {
            echo " layui-this ";
        }
        echo "\">邮件设置</li>
                <li class=\" ";
        // line 20
        if (($this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "t", array(), "array") == "sms")) {
            echo " layui-this ";
        }
        echo "\">短信设置</li>
            </ul>
            <div class=\"layui-tab-content\">
                <div class=\"layui-tab-item  ";
        // line 23
        if (($this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "t", array(), "array") == "configure")) {
            echo " layui-show ";
        }
        echo "\">

                    <form class=\"layui-form bform\" method=\"post\" action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "admin/setting/saveconfigure"), "method"), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">

                        <div class=\"layui-form-item\">
                            <label class=\"layui-form-label\">网站标题</label>
                            <div class=\"layui-input-block\">
                                <input type=\"text\" name=\"TITLE\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["calfbbs"]) ? $context["calfbbs"] : null), "TITLE", array()), "html", null, true);
        echo "\" placeholder=\"必填内容\" required=\"\" lay-verify=\"required\" autocomplete=\"off\" class=\"layui-input\">
                            </div>
                        </div>

                        <div class=\"layui-form-item layui-form-text\">
                            <label class=\"layui-form-label\">关键字</label>
                            <div class=\"layui-input-block\">
                                <textarea name=\"KEYWORDS\" placeholder=\"请输入内容\" class=\"layui-textarea\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["calfbbs"]) ? $context["calfbbs"] : null), "KEYWORDS", array()), "html", null, true);
        echo "</textarea>
                            </div>
                        </div>

                        <div class=\"layui-form-item layui-form-text\">
                            <label class=\"layui-form-label\">网站描述</label>
                            <div class=\"layui-input-block\">
                                <textarea name=\"DESCRIPTION\" placeholder=\"请输入内容\" class=\"layui-textarea\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["calfbbs"]) ? $context["calfbbs"] : null), "DESCRIPTION", array()), "html", null, true);
        echo "</textarea>
                            </div>
                        </div>

                        <div class=\"layui-form-item\">
                            <label class=\"layui-form-label\">备案号</label>
                            <div class=\"layui-input-block\">
                                <input type=\"text\" name=\"ICP\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["calfbbs"]) ? $context["calfbbs"] : null), "ICP", array()), "html", null, true);
        echo "\" placeholder=\"请输入内容\" autocomplete=\"off\" class=\"layui-input\">
                            </div>
                        </div>
                        <div class=\"layui-form-item\">
                            <label class=\"layui-form-label\">版权声明</label>
                            <div class=\"layui-input-block\">
                                <input type=\"text\" name=\"COPYRIGHT\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["calfbbs"]) ? $context["calfbbs"] : null), "COPYRIGHT", array()), "html", null, true);
        echo "\" placeholder=\"请输入内容\" autocomplete=\"off\" class=\"layui-input\">
                            </div>
                        </div>


                        <div class=\"layui-form-item\">
                            <label class=\"layui-form-label\">广告LOGO</label>
                            <div class=\"layui-input-block\">
                                <div class=\"file-box\">

                                    <button type=\"button\" class=\"layui-btn\" id=\"upload\">
                                        上传图片
                                    </button>&nbsp;&nbsp;图片尺寸160X50
                                    <input type=\"hidden\" name=\"LOGO\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["calfbbs"]) ? $context["calfbbs"] : null), "LOGO", array()), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                        </div>
                        <div class=\"layui-form-item\">
                            <label class=\"layui-form-label\"></label>
                            <div class=\"layui-input-block\">
                                <img width=\"115\" id=\"LOGO\" height=\"40\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "ATTACHMENT_ROOT", array(), "array"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["calfbbs"]) ? $context["calfbbs"] : null), "LOGO", array()), "html", null, true);
        echo "\" alt=\"\"/>


                            </div>
                        </div>



                        <div class=\"layui-form-item\">
                            <div class=\"layui-input-block\">
                                <button class=\"layui-btn\" lay-submit=\"\" lay-filter=\"formDemo\">立即提交</button>
                              <!--  <button class=\"layui-btn layui-btn-primary\" onclick=\"history.go(-1)\">返回</button>-->
                            </div>
                        </div>

                    </form>

                </div>
                <div class=\"layui-tab-item ";
        // line 95
        if (($this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "t", array(), "array") == "route")) {
            echo " layui-show ";
        }
        echo "\">


                    <form class=\"layui-form bform\" method=\"post\" action=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "admin/setting/saveRoute"), "method"), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">
                        <div class=\"layui-form-item\">
                            <label class=\"layui-form-label\">启用模版</label>
                            <div class=\"layui-input-block\">
                                <input type=\"checkbox\" name=\"TPL_STATUS\"  lay-filter=\"TPL_STATUS\" lay-skin=\"switch\" lay-text=\"开启|关闭\"  ";
        // line 102
        if (($this->getAttribute($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "TPL_APP", array()), "TPL_STATUS", array()) == true)) {
            echo " checked ";
        }
        echo ">
                            </div>
                        </div>
                        <div id=\"TPL_DEFAULT\" class=\"layui-form-item ";
        // line 105
        if (($this->getAttribute($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "TPL_APP", array()), "TPL_STATUS", array()) == true)) {
            echo "  layui-show ";
        } else {
            echo "  layui-hide ";
        }
        echo " \">
                            <label class=\"layui-form-label\">模板名称</label>
                            <div class=\"layui-input-block\">
                                <select name=\"TPL_DEFAULT\" >
                                    <option value=\" \">系统默认</option>
                                    ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tplList"]) ? $context["tplList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 111
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "TPL_APP", array()), "TPL_DEFAULT", array()) == $context["v"])) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "

                                </select>
                            </div>
                        </div>
                        <div class=\"layui-form-item\">
                            <label class=\"layui-form-label\">伪静态后缀</label>
                            <div class=\"layui-input-block\">
                                <input type=\"checkbox\" name=\"SUFFIX_STATUS\" lay-filter=\"SUFFIX_STATUS\" lay-skin=\"switch\" lay-text=\"开启|关闭\"  ";
        // line 121
        if (($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "SUFFIX_STATUS", array()) == true)) {
            echo " checked ";
        }
        echo ">
                            </div>开启后将自动在url末尾加上后缀，如：http://test.calfbbs.com/app/detail/index.html
                        </div>

                        <div id=\"SUFFIX_STATUS\" class=\"layui-form-item  ";
        // line 125
        if (($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "SUFFIX_STATUS", array()) == false)) {
            echo " layui-hide ";
        }
        echo "\">
                            <label class=\"layui-form-label\">后缀名</label>
                            <div class=\"layui-input-block\">
                                <input type=\"text\" name=\"SUFFIX\" value=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["route"]) ? $context["route"] : null), "SUFFIX", array()), "html", null, true);
        echo "\" placeholder=\"请输入内容\" autocomplete=\"off\" class=\"layui-input\">
                            </div>
                        </div>

                        <div class=\"layui-form-item\">
                            <label class=\"layui-form-label\">隐藏url中的index.php</label>
                            <div class=\"layui-input-block\">
                                <input type=\"checkbox\" name=\"IDENX_SUFFIX\" lay-skin=\"switch\" lay-text=\"开启|关闭\"  ";
        // line 135
        if (($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "IDENX_SUFFIX", array()) == true)) {
            echo " checked ";
        }
        echo ">
                            </div><br />用于支持伪静态,网站不可配置在二级目录中 如http://test.calfbb.com/calfbb/index.php
                        </div>


                        <div class=\"layui-form-item\">
                            <label class=\"layui-form-label\">路由模式</label>
                            <div class=\"layui-input-block\">
                                <input type=\"radio\" name=\"PATH_INFO\" value=\"1\" title=\"普通模式\" ";
        // line 143
        if (($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "PATH_INFO", array()) == 1)) {
            echo " checked ";
        }
        echo "><div class=\"layui-unselect layui-form-radio layui-form-radioed\"><i class=\"layui-anim layui-icon\"></i><span>普通模式</span></div>

                                <input type=\"radio\" name=\"PATH_INFO\" value=\"2\" title=\"伪静态模式\"  ";
        // line 145
        if (($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "PATH_INFO", array()) == 2)) {
            echo " checked ";
        }
        echo "><div class=\"layui-unselect layui-form-radio\"><i class=\"layui-anim layui-icon\"></i><span>伪静态模式</span></div>

                                <input type=\"radio\" name=\"PATH_INFO\" value=\"3\" title=\"兼容模式\"  ";
        // line 147
        if (($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "PATH_INFO", array()) == 3)) {
            echo " checked ";
        }
        echo "><div class=\"layui-unselect layui-form-radio\"><i class=\"layui-anim layui-icon\"></i><span>兼容模式</span></div>
                            </div>
                        </div>

                        <blockquote style=\"padding: 10px;border-left: 5px solid #FF5722;margin: 10px 0 20px 40px;\" class=\"layui-elem-quote\">想了解路由模式的区别：<a href=\"https://www.kancloud.cn/calfbaby/calfbb/422590\" style=\"color:#FF5722;\" target=\"_blank\">路由文档</a></blockquote>

                        <div class=\"layui-form-item\">
                            <div class=\"layui-input-block\">
                                <button class=\"layui-btn\" lay-submit=\"\" lay-filter=\"formDemo\">立即提交</button>
                               <!-- <button class=\"layui-btn layui-btn-primary\" onclick=\"history.go(-1)\">返回</button>-->
                            </div>
                        </div>

                    </form>


                </div>
                ";
        // line 164
        echo twig_include($this->env, $context, "setting/email.html");
        echo "
                ";
        // line 165
        echo twig_include($this->env, $context, "setting/sms.html");
        echo "
            </div>
        </div>


    </div>
</div>

<script>

    layui.use(['form','upload'], function(){
        var upload = layui.upload;
        /**
         * 图片上传
         */
        var uploadInst = upload.render({
            elem: '#upload' //绑定元素
            ,url: escapeUrl(\"";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "admin/files/uploadFile"), "method"), "html", null, true);
        echo "\") //上传接口
            ,method:\"post\"
            ,data:{width:160}
            ,done: function(res){
                if(res.code==1001 && res.data){
                    \$('#LOGO').attr('src',\"";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "ATTACHMENT_ROOT", array(), "array"), "html", null, true);
        echo "/\"+res.data);
                    \$('input[name=LOGO]').val(res.data);
                }
            }
            ,error: function(res){

            }
        });
    });


</script>
<script>

    layui.use('form', function(){
        var form = layui.form;
        //监听启用模版
        form.on(\"switch(TPL_STATUS)\", function(data){

            if(data.elem.checked==true){
                \$('#TPL_DEFAULT').attr(\"class\",\"layui-form-item layui-show\");
            }else{
                \$('#TPL_DEFAULT').attr(\"class\",\"layui-form-item layui-hide\");
            }

        });


        //监听启用模版
        form.on(\"switch(SUFFIX_STATUS)\", function(data){

            if(data.elem.checked==true){
                \$('#SUFFIX_STATUS').attr(\"class\",\"layui-form-item layui-show\");
            }else{
                \$('#SUFFIX_STATUS').attr(\"class\",\"layui-form-item layui-hide\");
            }

        });

        \$(\"#submitRoute\").click(function(){
            layer.confirm('修改系统参数，有可能会导致系统不可用,您确定要修改吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                \$('#routeSubmit').click();
            }, function(){

            });

        })

        //监听启用模版
        /*form.on(\"submit(route)\", function(data){
            //询问框

            layer.confirm('修改系统参数，有可能会导致系统不可用,您确定要修改吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                return true;
            }, function(){
                return false;
            });
            return false;


        });*/


    });

</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "setting/configure.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 187,  345 => 182,  325 => 165,  321 => 164,  299 => 147,  292 => 145,  285 => 143,  272 => 135,  262 => 128,  254 => 125,  245 => 121,  235 => 113,  220 => 111,  216 => 110,  204 => 105,  196 => 102,  189 => 98,  181 => 95,  158 => 77,  148 => 70,  132 => 57,  123 => 51,  113 => 44,  103 => 37,  93 => 30,  85 => 25,  78 => 23,  70 => 20,  64 => 19,  58 => 18,  52 => 17,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "setting/configure.html", "/data/test/calfbbs/addons/admin/template/setting/configure.html");
    }
}
