<?php

/* common/header.html */
class __TwigTemplate_c4ca5c8ffd7cd455d1d7415a3549df2513d984f53bf91548d36f7110d19775c9 extends Twig_Template
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
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <title>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <meta name=\"keywords\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["keywords"]) ? $context["keywords"] : null), "html", null, true);
        echo "\">
  <meta name=\"description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html_attr");
        echo "-Powered by Calfbbs\">
  <meta name=\"generator\" content=\"Calfbbs! V2.0\" />
  <meta name=\"author\" content=\"Calfbbs Team \" />
  <meta name=\"copyright\" content=\"2018-2028 Calfbbs Inc.\" />
    <!-- Favicon -->
  <link rel=\"shortcut icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP", array(), "array"), "html", null, true);
        echo "/resource/images/favicon.jpg\">

  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP", array(), "array"), "html", null, true);
        echo "/resource/layui/css/layui.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP", array(), "array"), "html", null, true);
        echo "/resource/css/global.css\">
  <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP", array(), "array"), "html", null, true);
        echo "/resource/js/jquery-1.4.2.min.js\"></script>
  <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP", array(), "array"), "html", null, true);
        echo "/resource/layui/layui.js\"></script>
  <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP", array(), "array"), "html", null, true);
        echo "/resource/js/calfbbs.js\"></script>

</head>
<body>
<div class=\"fly-header layui-bg-black\">
  <div class=\"layui-container\">
    <a class=\"fly-logo\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "\">
      <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP", array(), "array"), "html", null, true);
        echo "/resource/images/logo.png\" alt=\"layui\" style=\"width:137px;height:60px;\">
    </a>
    <ul class=\"layui-nav fly-nav layui-hide-xs \">

        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navList"]) ? $context["navList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 32
            echo "        <li class=\"layui-nav-item  ";
            if (($this->getAttribute($context["data"], "path", array()) == (isset($context["this_url"]) ? $context["this_url"] : null))) {
                echo " layui-this ";
            }
            echo "\">
            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "path", array()), "html", null, true);
            echo "\" target=\"_blank\"><!--<i class=\"iconfont icon-jiaoliu\"></i>-->";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
            echo "</a>
        </li>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "


      <!--<li class=\"layui-nav-item\">
        <a href=\"case/case.html\"><i class=\"iconfont icon-iconmingxinganli\"></i>案例</a>
      </li>
      <li class=\"layui-nav-item\">
        <a href=\"http://www.layui.com/\" target=\"_blank\"><i class=\"iconfont icon-ui\"></i>框架</a>
      </li>
        <li class=\"layui-nav-item\">
            <a href=\"http://www.layui.com/\" target=\"_blank\"><i class=\"iconfont icon-ui\"></i>框架</a>
        </li>
        <li class=\"layui-nav-item\">
            <a href=\"http://www.layui.com/\" target=\"_blank\"><i class=\"iconfont icon-ui\"></i>框架</a>
        </li>-->
    </ul>

    <ul class=\"layui-nav fly-nav-user\">


     <!-- <li class=\"layui-nav-item layui-hide-xs\">
        <a href=\"\" onclick=\"layer.msg('正在通过QQ登入', {icon:16, shade: 0.1, time:0})\" title=\"QQ登入\" class=\"iconfont icon-qq\"></a>
      </li>
      <li class=\"layui-nav-item layui-hide-xs\">
        <a href=\"\" onclick=\"layer.msg('正在通过微博登入', {icon:16, shade: 0.1, time:0})\" title=\"微博登入\" class=\"iconfont icon-weibo\"></a>
      </li>-->
      
      <!-- 登入后的状态 -->

      ";
        // line 66
        if (((isset($context["userinfo"]) ? $context["userinfo"] : null) == "")) {
            // line 67
            echo "      <li class=\"layui-nav-item\">
        <a class=\"iconfont icon-touxiang layui-hide-xs\" href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/login/index"), "method"), "html", null, true);
            echo "\"></a>
      </li>
      <li class=\"layui-nav-item\">
        <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/login/index"), "method"), "html", null, true);
            echo "\">登入</a>
      </li>
      <li class=\"layui-nav-item\">
        <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/login/signup"), "method"), "html", null, true);
            echo "\">注册</a>
      </li>
      <!-- <li class=\"layui-nav-item layui-hide-xs\">
        <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/registers/login", 1 => array("type" => "qq")), "method"), "html", null, true);
            echo "\" onclick=\"layer.msg('正在通过QQ登入', {icon:16, shade: 0.1, time:0})\" title=\"QQ登入\" class=\"iconfont icon-qq\"></a>
      </li>
      <li class=\"layui-nav-item layui-hide-xs\">
        <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/registers/login", 1 => array("type" => "weixin")), "method"), "html", null, true);
            echo "\" onclick=\"layer.msg('正在通过微信登入', {icon:16, shade: 0.1, time:0})\" title=\"微信登入\" class=\"mine-icon\"><i class=\"mine-icon\" style=\"font-size: 20px;\">&#xe628;</i></a>
      </li> -->

      <!-- <li class=\"layui-nav-item layui-hide-xs\">
        <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/registers/login", 1 => array("type" => "qq")), "method"), "html", null, true);
            echo "\" onclick=\"layer.msg('正在通过QQ登入', {icon:16, shade: 0.1, time:0})\" title=\"QQ登入\" class=\"iconfont icon-qq\"></a>
      </li>
      <li class=\"layui-nav-item layui-hide-xs\">
        <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/registers/login", 1 => array("type" => "weixin")), "method"), "html", null, true);
            echo "\" onclick=\"layer.msg('正在通过微信登入', {icon:16, shade: 0.1, time:0})\" title=\"微信登入\" class=\"mine-icon\"><i class=\"mine-icon\" style=\"font-size: 20px;\">&#xe628;</i></a>
      </li> -->

      ";
        } else {
            // line 91
            echo "      <li class=\"layui-nav-item\">
        <a class=\"fly-nav-avatar\" href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/users/home", 1 => array("uid" => $this->getAttribute((isset($context["userinfo"]) ? $context["userinfo"] : null), "uid", array()))), "method"), "html", null, true);
            echo "\">
          <cite class=\"layui-hide-xs\">";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userinfo"]) ? $context["userinfo"] : null), "username", array()), "html", null, true);
            echo "</cite>
          <!--<i class=\"iconfont icon-renzheng layui-hide-xs\" title=\"认证信息：layui 作者\"></i>
          <i class=\"layui-badge fly-badge-vip layui-hide-xs\">VIP3</i>-->
          <img src=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "ATTACHMENT_ROOT", array(), "array"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userinfo"]) ? $context["userinfo"] : null), "avatar", array()), "html", null, true);
            echo "\">
        </a>
        <dl class=\"layui-nav-child\">
            <dd><a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/users/home", 1 => array("uid" => $this->getAttribute((isset($context["userinfo"]) ? $context["userinfo"] : null), "uid", array()))), "method"), "html", null, true);
            echo "\"><i class=\"layui-icon\" style=\"margin-left: 2px; font-size: 22px;\">&#xe68e;</i>我的主页</a></dd>
            <dd><a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/users/index"), "method"), "html", null, true);
            echo "\"><i class=\"layui-icon\" style=\"margin-left: 2px; font-size: 22px;\">&#xe63c;</i>帖子管理</a></dd>
          <dd><a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/users/set", 1 => array("uid" => $this->getAttribute((isset($context["userinfo"]) ? $context["userinfo"] : null), "uid", array()))), "method"), "html", null, true);
            echo "\"><i class=\"layui-icon\">&#xe620;</i>基本设置</a></dd>
          <dd><a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/users/message"), "method"), "html", null, true);
            echo "\"><i class=\"iconfont icon-tongzhi\" style=\"top: 4px;\"></i>我的消息</a></dd>


          <hr style=\"margin: 5px 0;\">
          <dd><a href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/login/loginout"), "method"), "html", null, true);
            echo "\" style=\"text-align: center;\">退出</a></dd>
        </dl>
      </li>
      ";
        }
        // line 110
        echo "
      
    </ul>
  </div>
</div>
";
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
        return array (  234 => 110,  227 => 106,  220 => 102,  216 => 101,  212 => 100,  208 => 99,  200 => 96,  194 => 93,  190 => 92,  187 => 91,  180 => 87,  174 => 84,  167 => 80,  161 => 77,  155 => 74,  149 => 71,  143 => 68,  140 => 67,  138 => 66,  107 => 37,  95 => 33,  88 => 32,  84 => 31,  77 => 27,  73 => 26,  64 => 20,  60 => 19,  56 => 18,  52 => 17,  48 => 16,  43 => 14,  35 => 9,  31 => 8,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/header.html", "/data/test/calfbbs/app/template/common/header.html");
    }
}
