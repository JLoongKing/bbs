<?php

/* common/header.html */
class __TwigTemplate_9d7a4da830fd5e3fda3126a153e836e6ed1bccf5962a32159db0be621952a724 extends Twig_Template
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
        echo "<div class=\"header\">
    <div class=\"layout\">
        <div class=\"title\">
            <h5>calfbbs</h5>
            <h2>系统安装向导</h2>
        </div>
        <div class=\"version\">版本: V2.0</div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "common/header.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/header.html", "/data/test/calfbbs/addons/install/template/common/header.html");
    }
}
