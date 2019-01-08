<?php

/* common/column.html */
class __TwigTemplate_41a5783532a8dfac615d0b2152d2cb32d1e294c83d3bab93e888cca922992757 extends Twig_Template
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
        echo "<div class=\"fly-panel fly-column\">
  <div class=\"layui-container\">
    <ul class=\"layui-clear\">
      
      <li ";
        // line 5
        if (((isset($context["cid"]) ? $context["cid"] : null) == 200000)) {
            echo " class=\"layui-hide-xs layui-this\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["_G"]) ? $context["_G"] : null), "APP_URL", array(), "array"), "html", null, true);
        echo "\">首页</a></li>
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classifyList"]) ? $context["classifyList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 7
            echo "      <!-- ";
            if (($this->getAttribute($context["data"], "level", array()) == 1)) {
                echo " -->
      <li ";
                // line 8
                if (($this->getAttribute($context["data"], "id", array()) == (isset($context["cid"]) ? $context["cid"] : null))) {
                    echo " class=\"layui-hide-xs layui-this\" ";
                }
                echo "><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/search/search", 1 => array("cid" => $this->getAttribute($context["data"], "id", array()))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "name", array()), "html", null, true);
                echo "</a></li> 
      <!-- ";
            }
            // line 9
            echo " -->
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      <!-- <li><a href=\"./index.php?m=app&c=index&a=search\">分享<span class=\"layui-badge-dot\"></span></a></li> 
      <li><a href=\"./index.php?m=app&c=index&a=search\">讨论</a></li> 
      <li><a href=\"./index.php?m=app&c=index&a=search\">建议</a></li> 
      <li><a href=\"./index.php?m=app&c=index&a=search\">公告</a></li> 
      <li><a href=\"./index.php?m=app&c=index&a=search\">动态</a></li> -->
      <li class=\"layui-hide-xs layui-hide-sm layui-show-md-inline-block\"><span class=\"fly-mid\"></span></li>  
      
      <!-- 用户登入后显示 -->
      ";
        // line 19
        if ((isset($context["userinfo"]) ? $context["userinfo"] : null)) {
            // line 20
            echo "      <li class=\"layui-hide-xs layui-hide-sm layui-show-md-inline-block\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/users/index"), "method"), "html", null, true);
            echo "\">我发表的贴</a></li>
      ";
        }
        // line 22
        echo "     <!-- <li class=\"layui-hide-xs layui-hide-sm layui-show-md-inline-block\"><a href=\"./index.php?m=app&c=users&a=index#collection\">我收藏的贴</a></li> -->
    </ul>

    <div class=\"fly-column-right layui-hide-xs\"> 
      <span class=\"fly-search\"><i class=\"layui-icon\"></i></span> 
      <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/post/add"), "method"), "html", null, true);
        echo "\" class=\"layui-btn\">发表新帖</a>
    </div> 
    <div class=\"layui-hide-sm layui-show-xs-block\" style=\"margin-top: -10px; padding-bottom: 10px; text-align: center;\"> 
      <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/post/add"), "method"), "html", null, true);
        echo "\" class=\"layui-btn\">发表新帖</a>
    </div> 
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "common/column.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 30,  85 => 27,  78 => 22,  72 => 20,  70 => 19,  60 => 11,  53 => 9,  42 => 8,  37 => 7,  33 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/column.html", "/data/test/calfbbs/app/template/common/column.html");
    }
}
