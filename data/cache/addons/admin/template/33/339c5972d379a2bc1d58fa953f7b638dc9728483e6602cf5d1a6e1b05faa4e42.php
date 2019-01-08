<?php

/* setting/email.html */
class __TwigTemplate_a41e6d81943cc753bf209232cde990b676c3bf5d6397821d0323ab3acc0bd779 extends Twig_Template
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
        echo "<div class=\"layui-tab-item  ";
        if (($this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "t", array(), "array") == "email")) {
            echo " layui-show ";
        }
        echo "\">

    <form class=\"layui-form bform\" method=\"post\" action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "admin/setting/saveEmail"), "method"), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">
        <div class=\"layui-form-item\" style=\"width: 300px;\">
            <label class=\"layui-form-label\">邮件服务器分类</label>
            <div class=\"layui-input-block\">
                <select name=\"email_class\">
                    <option value=\"0\">请选择</option>
                    <option value=1 ";
        // line 9
        if (($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "email_class", array()) == 1)) {
            echo "selected";
        }
        echo ">163邮箱</option>
                    <option value=2 ";
        // line 10
        if (($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "email_class", array()) == 2)) {
            echo "selected";
        }
        echo ">qq邮箱</option>

                    <!--";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["vo"]) {
            echo "-->
                    <!--<option value=";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["vo"], "id", array()), "html", null, true);
            echo " ";
            if (($this->getAttribute($context["vo"], "id", array()) == $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "pid", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["vo"], "name", array()), "html", null, true);
            echo "</option>-->
                    <!--";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "-->
                </select>
            </div>
        </div>
        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">邮箱服务器</label>
            <div class=\"layui-input-block\">
                <input type=\"text\" name=\"email_server\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "email_server", array()), "html", null, true);
        echo "\" placeholder=\"请设置邮箱服务器（smtp.163.com）\" autocomplete=\"off\" class=\"layui-input\">
            </div>
        </div>

        <div class=\"layui-form-item layui-form-text\">
            <label class=\"layui-form-label\">发送邮箱</label>
            <div class=\"layui-input-block\">
                <input type=\"text\" name=\"email_url\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "email_url", array()), "html", null, true);
        echo "\" placeholder=\"请设置发送邮箱（xxx@163.com）\" autocomplete=\"off\" class=\"layui-input\">
            </div>
        </div>

        <div class=\"layui-form-item layui-form-text\">
            <label class=\"layui-form-label\">授权密码</label>
            <div class=\"layui-input-block\">
                <input type=\"text\" name=\"email_pass\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "email_pass", array()), "html", null, true);
        echo "\" placeholder=\"请设置授权密码\" autocomplete=\"off\" class=\"layui-input\">
            </div>
        </div>
        <div class=\"layui-form-item layui-form-text\">
            <label class=\"layui-form-label\">邮件发送端口</label>
            <div class=\"layui-input-block\">
                <input type=\"text\" name=\"email_port\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "email_port", array()), "html", null, true);
        echo "\" placeholder=\"请填写邮件发送端口\" autocomplete=\"off\" class=\"layui-input\">
            </div>
        </div>

        <div class=\"layui-form-item\">
            <div class=\"layui-input-block\">
                <div id=\"submitEmail\" class=\"layui-btn\" >立即提交</div>
                <button class=\"layui-btn layui-hide\" id=\"submit\"  lay-submit=\"\" lay-filter=\"formDemo\">立即提交</button>
                <!-- <button class=\"layui-btn layui-btn-primary\" onclick=\"history.go(-1)\">返回</button>-->
            </div>
        </div>
    </form>

</div>
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

        \$(\"#submitEmail\").click(function(){
            layer.confirm('您确定要修改吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                \$('#submit').click();
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

</script>";
    }

    public function getTemplateName()
    {
        return "setting/email.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 41,  98 => 35,  88 => 28,  78 => 21,  69 => 14,  55 => 13,  49 => 12,  42 => 10,  36 => 9,  27 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "setting/email.html", "/data/test/calfbbs/addons/admin/template/setting/email.html");
    }
}
