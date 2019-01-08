<?php

/* setting/password.html */
class __TwigTemplate_12549cc98762837944ecf4321313992021b5352c8073128da154a9418ad057d6 extends Twig_Template
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
    <div class=\"aright\"  style=\"margin-top: 0px;\">

        <fieldset class=\"layui-elem-field layui-field-title\" style=\"margin: 20px 30px 20px 20px;\">
            <legend>密码修改</legend>
        </fieldset>

        <form class=\"layui-form bform\" method=\"post\">
            <input type=\"hidden\" name=\"uid\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userinfo"]) ? $context["userinfo"] : null), "uid", array(), "array"), "html", null, true);
        echo "\">
            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">原始密码</label>
                <div class=\"layui-input-block\">
                    <input type=\"password\" name=\"old_password\" required=\"\" lay-verify=\"required\" placeholder=\"必填内容\" autocomplete=\"off\" class=\"layui-input\">
                </div>
            </div>
            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">输入密码</label>
                <div class=\"layui-input-block\">
                    <input type=\"password\" name=\"password\" required=\"\" lay-verify=\"required\" placeholder=\"必填内容\" autocomplete=\"off\" class=\"layui-input\">
                </div>
            </div>

            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">重复密码</label>
                <div class=\"layui-input-block\">
                    <input type=\"password\" name=\"repass\" required=\"\" lay-verify=\"required\" placeholder=\"必填内容\" autocomplete=\"off\" class=\"layui-input\">
                </div>
            </div>

            <div class=\"layui-form-item\">
                <div class=\"layui-input-block\">
                    <button class=\"layui-btn\" lay-submit=\"\" lay-filter=\"formDemo\">立即提交</button>
                    <button class=\"layui-btn layui-btn-primary\" onclick=\"history.go(-1)\">返回</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    //Demo
    layui.use(['layer', 'form'], function () {
        var form = layui.form;
        //监听提交
        form.on('submit(formDemo)', function (data) {
            var field = data.field;
            \$.ajax({
                url: \"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "admin/setting/password"), "method"), "html", null, true);
        echo "\",
                type: 'post',//请求的方式
                async: true,//是否异步  默认为异步
                data: field,//当前ajax请求的参数  
                dataType: \"json\",
                success: function (data) {//发送成功时的代码执行
                    if (data.code == 2001) {

                        if(data.data.repass)
                        {
                            layer.msg(data.data.repass,{icon:5});
                        }else if(data.data.old_password)
                        {
                            layer.msg(data.data.old_password,{icon:5});
                        }else if(data.data.password)
                        {
                            layer.msg(data.data.password,{icon:5});
                        }else{
                            layer.msg(data.data,{icon:5});
                        }

                        return false;
                    }

                    if (data.code == 1001) {
                        layer.msg(data.data);
                    }

                },
                error: function () {//失败时的代码执行
                    layer.msg(\"修改密码失败\",{icon:5});
                    re_captcha();
                }

            });
            return false;
        });
    });
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "setting/password.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 53,  50 => 15,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "setting/password.html", "/data/test/calfbbs/addons/admin/template/setting/password.html");
    }
}
