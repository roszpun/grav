<?php

/* modular/list.html.twig */
class __TwigTemplate_f0ce46d061bdc3f35b5bb8744c632f9e91923033c6cf3535072ca0d088d4d2fb extends Twig_Template
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
        echo "<style>
    .list{
        text-align: center;
    }
    .list ul {
        list-style: none;
        padding-bottom: 50px;
    }

    .list ul:after{
        display: block;
        content: '';
        clear: both;
    }

    .list h1{
        margin: 60px 0;
    }
    
    .list li{
        width: 50%;
        float: left;
    }

    .list img {
        margin: 15px auto;
        border-radius: 50%;
        display: block;
        width: 150px;
        height: auto;
    }
</style>
<div class=\"container list\">
    ";
        // line 34
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
    <ul>
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "users", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 37
            echo "            <li>
                <img src=\"";
            // line 38
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["user"], "picture", array()), array(), "array"), "url", array());
            echo "\">

                ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()));
            echo " <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "surname", array()));
            echo "</strong>
                -
                <a style=\"color: steelblue\" href=\"https://github.com/";
            // line 42
            echo $this->getAttribute($context["user"], "git", array());
            echo "\">GitHub</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 45,  78 => 42,  71 => 40,  66 => 38,  63 => 37,  59 => 36,  54 => 34,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style>
    .list{
        text-align: center;
    }
    .list ul {
        list-style: none;
        padding-bottom: 50px;
    }

    .list ul:after{
        display: block;
        content: '';
        clear: both;
    }

    .list h1{
        margin: 60px 0;
    }
    
    .list li{
        width: 50%;
        float: left;
    }

    .list img {
        margin: 15px auto;
        border-radius: 50%;
        display: block;
        width: 150px;
        height: auto;
    }
</style>
<div class=\"container list\">
    {{ page.content }}
    <ul>
        {% for user in page.header.users %}
            <li>
                <img src=\"{{ page.media[user.picture].url }}\">

                {{ user.name|e }} <strong>{{ user.surname|e }}</strong>
                -
                <a style=\"color: steelblue\" href=\"https://github.com/{{ user.git }}\">GitHub</a>
            </li>
        {% endfor %}
    </ul>
</div>
", "modular/list.html.twig", "/Users/danielszerszen/Code/grav/user/themes/landio/templates/modular/list.html.twig");
    }
}
