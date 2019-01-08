<?php

/* common/nav.html */
class __TwigTemplate_b38d23c648046c2dc27731b8d52a3c06e1b86d731353204eff96d8061315cc50 extends Twig_Template
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
        echo "<div class=\"aleft\">
    <h3><i class=\"layui-icon\" style=\"position: relative;right: 3px;top: 1px;font-size: 18px;color: #009688;\">&#xe643;</i>基础操作</h3>
    <ul class=\"cl\">
        <li><i class=\"layui-icon\">&#xe63c;</i><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "admin/posts/postList"), "method"), "html", null, true);
        echo "\">帖子管理</a></li>
        <li><i class=\"layui-icon\">&#xe61f;</i><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "admin/classify/classifyList"), "method"), "html", null, true);
        echo "\">分类管理</a></li>
        <li><i class=\"layui-icon\">&#xe601;</i><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "admin/nav/navList"), "method"), "html", null, true);
        echo "\">导航管理</a></li>
        <!--<li><i class=\"layui-icon\">&#xe61f;</i><a href=\"/blog/admin.php?m=Admin&c=category&a=index\">栏目管理</a></li>-->
        <!--<li><i class=\"layui-icon\">&#xe63c;</i><a href=\"/blog/admin.php?m=Admin&c=article&a=index\">文章管理</a></li>-->
        <li><i class=\"layui-icon\" style=\"font-size: 12px;\" >&#xe613;</i><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "admin/users/userList"), "method"), "html", null, true);
        echo "\">用户管理</a></li>
        <li><i class=\"layui-icon\">&#xe638;</i><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "admin/advertisement/advertisementList"), "method"), "html", null, true);
        echo "\">广告管理</a></li>
    </ul>
    <!-- <h3><i class=\"layui-icon\" style=\"position: relative;right: 3px;top: 1px;font-size: 18px;color: #009688;\">&#xe614;</i>系统管理</h3>
  <ul class=\"cl\">
       <li><i class=\"layui-icon\">&#xe62c;</i><a href=\"/blog/admin.php?m=Admin&c=conf&a=index\">网站配置</a></li>
       <li><i class=\"layui-icon\">&#xe631;</i><a href=\"/blog/admin.php?m=Admin&c=member&a=index\">密码修改</a></li>
       <li><i class=\"layui-icon\">&#xe640;</i><a href=\"/blog/admin.php?m=Admin&c=runtime&a=index\">清理缓存</a></li>
       <li><i class=\"layui-icon\">&#x1006;</i><a href=\"/blog/admin.php?m=Admin&c=Login&a=logout\">立即退出</a></li>
   </ul>
    <h3><i class=\"layui-icon\" style=\"position: relative;right: 3px;top: 1px;font-size: 18px;color: #009688;\">&#xe612;</i>帮助中心</h3>
    <ul class=\"cl\">
        <li><i class=\"layui-icon\">&#xe63a;</i><a target=\"_blank\" href=\"http://www.tpt360.com/\">官方网站</a></li>
    </ul>-->
</div>";
    }

    public function getTemplateName()
    {
        return "common/nav.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  38 => 9,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/nav.html", "/data/test/calfbbs/addons/admin/template/common/nav.html");
    }
}
