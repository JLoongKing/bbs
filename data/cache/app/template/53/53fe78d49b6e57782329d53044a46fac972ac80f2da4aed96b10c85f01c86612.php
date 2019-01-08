<?php

/* common/footer.html */
class __TwigTemplate_afd57532ee03650cdff5cefd1b0c31da7218fa4690beac021a7c12c374f1848f extends Twig_Template
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
        echo "<div class=\"fly-footer\">

  <p><!--作者耗费一年心血所做匠心产品,请手下留情，保留作者名称及官网链接,感谢!。-->
    <a href=\"http://www.calfbb.com/\" target=\"_blank\">Powered by Calfbbs</a>  <a href=\"http://www.calfbb.com/\" target=\"_blank\">2018-2028 &copy;</a></p>
  <p>

    <a href=\"#\" >版权所有:";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["copyright"]) ? $context["copyright"] : null), "html", null, true);
        echo "</a>
    <a href=\"#\" >备案/许可证号:";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["icp"]) ? $context["icp"] : null), "html", null, true);
        echo "</a>

  </p>
</div>

<!--<form action=\"http://cn.bing.com/search\" class=\"fly-search\">-->
  <!--<i class=\"iconfont icon-sousuo\"></i>-->
  <!--<input class=\"layui-input\" autocomplete=\"off\" placeholder=\"搜索内容，回车跳转\" type=\"text\" name=\"q\">-->
<!--</form>-->
<script>

//注意：导航 依赖 element 模块，否则无法进行功能性操作
    layui.use(['element','layer'], function(){
        var element = layui.element;
        var layer=layui.layer;
//搜索
        \$('.fly-search').click(function(){
            layer.open({
                type: 1
                ,title: false
                ,closeBtn: false
                //,shade: [0.1, '#fff']
                ,shadeClose: true
                ,maxWidth: 10000
                ,skin: 'fly-layer-search'
                ,content: ['<form action=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/search/search", 1 => array("keyword" => "text")), "method"), "html", null, true);
        echo "\">'
                    ,'<input autocomplete=\"off\" placeholder=\"搜索内容，回车跳转\" type=\"text\" name=\"q\">'
                    ,'</form>'].join('')
                ,success: function(layero){
                    var input = layero.find('input');
                    input.focus();

                    layero.find('form').submit(function(){
                        var val = input.val();
                        if(val.replace(/\\s/g, '') === ''){
                            return false;
                        }
                        var text=input.val();
                        input.val('搜索帖子: '+ text);
                        var url=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["G"]) ? $context["G"] : null), "url", array(0 => "app/search/search", 1 => array("keyword" => "text")), "method"), "html", null, true);
        echo "\";
                        url = url.replace(\"text\", text);
                        window.location.href=url;
                        return false;

                    });
                }
            })
        });
    });
</script>





</body>
</html>";
    }

    public function getTemplateName()
    {
        return "common/footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 47,  59 => 33,  31 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/footer.html", "/data/test/calfbbs/app/template/common/footer.html");
    }
}
