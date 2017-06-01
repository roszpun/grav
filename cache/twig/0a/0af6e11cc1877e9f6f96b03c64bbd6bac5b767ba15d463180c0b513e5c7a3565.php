<?php

/* modular/list.html.twig */
class __TwigTemplate_dc7eab44900607eb113d70ce36fc7bd6e6196b474ef35d065cc090cb71570222 extends Twig_Template
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
    ul.list {
        list-style: none;
    }

    .list img {
        display: block;
        width: 150px;
        height: auto;
    }
</style>
<div class=\"container\">
    ";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
    <ul class=\"list\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "users", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 16
            echo "            <li>
                <img src=\"";
            // line 17
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["user"], "picture", array()), array(), "array"), "url", array());
            echo "\">

                ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()));
            echo " <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "surname", array()));
            echo "</strong> - <a style=\"color: steelblue\"
                                                                             href=\"https://github.com/";
            // line 20
            echo $this->getAttribute($context["user"], "git", array());
            echo "\">GitHub</a>
                <hr>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
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
        return array (  66 => 24,  56 => 20,  50 => 19,  45 => 17,  42 => 16,  38 => 15,  33 => 13,  19 => 1,);
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
    ul.list {
        list-style: none;
    }

    .list img {
        display: block;
        width: 150px;
        height: auto;
    }
</style>
<div class=\"container\">
    {{ page.content }}
    <ul class=\"list\">
        {% for user in page.header.users %}
            <li>
                <img src=\"{{ page.media[user.picture].url }}\">

                {{ user.name|e }} <strong>{{ user.surname|e }}</strong> - <a style=\"color: steelblue\"
                                                                             href=\"https://github.com/{{ user.git }}\">GitHub</a>
                <hr>
            </li>
        {% endfor %}
    </ul>
</div>
", "modular/list.html.twig", "/Users/danielszerszen/Code/grav/user/themes/landio/templates/modular/list.html.twig");
    }
}
