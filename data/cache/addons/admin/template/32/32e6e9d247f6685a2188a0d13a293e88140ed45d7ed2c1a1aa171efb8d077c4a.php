<?php

/* setting/sms.html */
class __TwigTemplate_2db93f0f9c5a430b003f7b658cc27bcdb8592671ed748bfa9370df0fa14027d0 extends Twig_Template
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
        if (($this->getAttribute((isset($context["_GPC"]) ? $context["_GPC"] : null), "t", array(), "array") == "sms")) {
            echo " layui-show ";
        }
        echo "\">

    <form class=\"layui-form bform\" method=\"post\" action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "admin/setting/saveSms"), "method"), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">
        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">启用短信注册/登录</label>
            <div class=\"layui-input-block\">
                <input type=\"checkbox\" name=\"SMS_STATUS\"  lay-filter=\"SMS_STATUS\" lay-skin=\"switch\" lay-text=\"开启|关闭\"  ";
        // line 7
        if (($this->getAttribute((isset($context["sms"]) ? $context["sms"] : null), "SMS_STATUS", array()) == true)) {
            echo " checked ";
        }
        echo ">
            </div>
        </div>
        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">accessKeyId</label>
            <div class=\"layui-input-block\">
                <input type=\"text\" name=\"accessKeyId\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sms"]) ? $context["sms"] : null), "accessKeyId", array()), "html", null, true);
        echo "\" placeholder=\"必填内容\"  autocomplete=\"off\" class=\"layui-input\">
            </div>
        </div>        
        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">accessKeySecret</label>
            <div class=\"layui-input-block\">
                <input type=\"text\" name=\"accessKeySecret\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sms"]) ? $context["sms"] : null), "accessKeySecret", array()), "html", null, true);
        echo "\" placeholder=\"必填内容\"  autocomplete=\"off\" class=\"layui-input\">
            </div>
        </div>   
        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">SignName</label>
            <div class=\"layui-input-block\">
                <input type=\"text\" name=\"SignName\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sms"]) ? $context["sms"] : null), "SignName", array()), "html", null, true);
        echo "\" placeholder=\"必填内容\"  autocomplete=\"off\" class=\"layui-input\">
            </div>
        </div>   
        <div class=\"layui-form-item\">
            <label class=\"layui-form-label\">templateCode</label>
            <div class=\"layui-input-block\">
                <input type=\"text\" name=\"templateCode\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sms"]) ? $context["sms"] : null), "templateCode", array()), "html", null, true);
        echo "\" placeholder=\"必填内容\"  autocomplete=\"off\" class=\"layui-input\">
            </div>
        </div>   

        <div class=\"layui-form-item\">
            <div class=\"layui-input-block\">
                <div id=\"submitSms\" class=\"layui-btn\" >立即提交</div>
                <button class=\"layui-btn layui-hide\" id=\"smsSubmit\"  lay-submit=\"\" lay-filter=\"formDemo\">立即提交</button>
                <!-- <button class=\"layui-btn layui-btn-primary\" onclick=\"history.go(-1)\">返回</button>-->
            </div>
        </div>
    </form>

</div>
<script>
    layui.use('form', function(){
        \$(\"#submitSms\").click(function(){
            layer.confirm('您确定要修改吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                \$('#smsSubmit').click();
            }, function(){

            });

        })
    })
    

</script>";
    }

    public function getTemplateName()
    {
        return "setting/sms.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 31,  63 => 25,  54 => 19,  45 => 13,  34 => 7,  27 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "setting/sms.html", "/data/test/calfbbs/addons/admin/template/setting/sms.html");
    }
}
