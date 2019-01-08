<?php

/* index/setting.html */
class __TwigTemplate_6ecb09e7044d5efd1c5e32df0c522f29901a056a739b9b330722acfdd3b96474 extends Twig_Template
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
        echo twig_include($this->env, $context, "common/header.html");
        echo "
<div class=\"admin\">
    ";
        // line 3
        echo twig_include($this->env, $context, "common/settingNav.html");
        echo "


</div>
";
        // line 7
        echo twig_include($this->env, $context, "common/footer.html");
    }

    public function getTemplateName()
    {
        return "index/setting.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  24 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index/setting.html", "/data/test/calfbbs/addons/admin/template/index/setting.html");
    }
}
