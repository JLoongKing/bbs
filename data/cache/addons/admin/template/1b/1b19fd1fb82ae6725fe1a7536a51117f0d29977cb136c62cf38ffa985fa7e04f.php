<?php

/* common/header.html */
class __TwigTemplate_e711bd47cf769016867fdb9253f5f59cd08c318346e2444904c46586a0df575d extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <title>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
    <meta name=\"keywords\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["keywords"]) ? $context["keywords"] : null), "html", null, true);
        echo "\">
    <meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP", array(), "array"), "html", null, true);
        echo "/resource/css/admin.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP", array(), "array"), "html", null, true);
        echo "/resource/layui/css/layui.css\">
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP", array(), "array"), "html", null, true);
        echo "/resource/layui/layui.js\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP", array(), "array"), "html", null, true);
        echo "/resource/js/calfbbs.js\"></script>


    <style>
        .navleft-logo{line-height: 60px;padding-left:30px;color:#FFF;}
        .navleft-logo a{font-size: 1.7rem;font-weight: 400;}
        .navright .navBase{font-size: 1.05rem;font-family: \"微软雅黑\";font-weight: 300}
    </style>
</head>
<body>
<div class=\"header layui-row\">
    <div class=\"layui-col-md2 navleft-logo\" ><a  href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "admin/index/index"), "method"), "html", null, true);
        echo "\"> Calfbbs</a></div>
    <ul class=\"layui-nav layui-col-md9 layui-bg-green\">
        <li class=\"layui-nav-item navright \">
            <a  class=\"navBase\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "admin/index/index"), "method"), "html", null, true);
        echo "\" >基础</a>
        </li>
        <li class=\"layui-nav-item navright\">
            <a class=\"navBase\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "admin/index/setting"), "method"), "html", null, true);
        echo "\">设置</a>
        </li>
        <li class=\"layui-nav-item navright\" >
            <a class=\"navBase\" >扩展</a>
            <dl class=\"layui-nav-child\"> <!-- 二级菜单 -->
                <dd><a  href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "admin/modules/modulesList"), "method"), "html", null, true);
        echo "\">已安装扩展</a></dd>
                <dd><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "admin/modules/uninstallModulesList"), "method"), "html", null, true);
        echo "\">未安装扩展</a></dd>
            </dl>
        </li>

        <li class=\"layui-nav-item \" style=\"float:right;\">
            <a href=\"\"><img src=\"http://t.cn/RCzsdCq\" class=\"layui-nav-img\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userinfo"]) ? $context["userinfo"] : null), "username", array()), "html", null, true);
        echo "</a>
            <dl class=\"layui-nav-child\">
                <dd><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "admin/setting/password"), "method"), "html", null, true);
        echo "\">修改密码</a></dd>
                <!--<dd><a href=\"javascript:;\">安全管理</a></dd>-->
                <dd><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "admin/login/loginout"), "method"), "html", null, true);
        echo "\">退出</a></dd>
            </dl>
        </li>
        <li class=\"layui-nav-item\" style=\"float:right;\">
            <a id=\"clearcache\" href=\"javascript:clear()\">清除缓存<span class=\"-dot\"></span></a>
        </li>
        <li class=\"layui-nav-item\" style=\"float:right;\">
            <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "\" target=\"_blank\">社区主页<span class=\"layui-badge-dot\"></span></a
        </li>

    </ul>
</div>


<script>
    //注意：导航 依赖 element 模块，否则无法进行功能性操作
    layui.use('element', function(){
        var element = layui.element;

    });
    layui.use('form', function () {
        var form = layui.form;


    });

    //清除缓存";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "admin/files/dirName"), "method"), "html", null, true);
        echo "
        function clear() {

            var path = \"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "CALFBB", array(), "array"), "html", null, true);
        echo "./data/cache\";

            var xmlhttp;
            if (window.XMLHttpRequest)
            {
                //  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
                xmlhttp=new XMLHttpRequest();
            }
            else
            {
                // IE6, IE5 浏览器执行代码
                xmlhttp=new ActiveXObject(\"Microsoft.XMLHTTP\");
            }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    layer.msg(\"主人、缓存已全部干掉！\");


                }
            }
            xmlhttp.open(\"GET\",\"";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "admin/files/dirName"), "method"), "html", null, true);
        echo "\",true);
            xmlhttp.send();
        }
</script>";
    }

    public function getTemplateName()
    {
        return "common/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 95,  144 => 73,  138 => 70,  116 => 51,  106 => 44,  101 => 42,  96 => 40,  88 => 35,  84 => 34,  76 => 29,  70 => 26,  64 => 23,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/header.html", "/data/test/calfbbs/addons/admin/template/common/header.html");
    }
}
