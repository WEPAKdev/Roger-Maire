<?php

/* PrestaShopBundle:Admin/Module/Includes:card_notification_configure.html.twig */
class __TwigTemplate_6b8266e0ba979154e14474c6c149f3663c619c2112e6a53f4de56e8d21a0b17a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:card_manage_installed.html.twig", "PrestaShopBundle:Admin/Module/Includes:card_notification_configure.html.twig", 25);
        $this->blocks = array(
            'addon_description' => array($this, 'block_addon_description'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Module/Includes:card_manage_installed.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_addon_description($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "attributes", array()), "warning", array()), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:card_notification_configure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 31,  28 => 30,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/Module/Includes:card_notification_configure.html.twig", "C:\\wamp64\\www\\RogerMaireLocal\\src\\PrestaShopBundle/Resources/views/Admin/Module/Includes/card_notification_configure.html.twig");
    }
}
