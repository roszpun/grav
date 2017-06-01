<?php

/* forms/fields/file/file.html.twig */
class __TwigTemplate_92645678c658574928a2166fae2f01b67b5d38a33aab39b32558f2bb22b70b03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/file/file.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
            'input_attributes' => array($this, 'block_input_attributes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["defaults"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "form", array());
        // line 3
        $context["files"] = twig_array_merge($this->getAttribute(($context["defaults"] ?? null), "files", array()), ((array_key_exists("field", $context)) ? (_twig_default_filter(($context["field"] ?? null), array())) : (array())));
        // line 4
        $context["limit"] = (( !$this->getAttribute(($context["field"] ?? null), "multiple", array())) ? (1) : ($this->getAttribute(($context["files"] ?? null), "limit", array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 57
    public function block_input($context, array $blocks = array())
    {
        // line 58
        echo "    ";
        $context["page_can_upload"] = (($context["exists"] ?? null) || (((($context["type"] ?? null) == "page") &&  !($context["exists"] ?? null)) &&  !((is_string($__internal_69412ca6c36147f90ea77e954671cfef4a43c3daeed78a26a6b2ad884be575c6 = $this->getAttribute(($context["field"] ?? null), "destination", array())) && is_string($__internal_0599d867dd216b56b504b8d6629d6d68c80fdc08c444ee1d293ddefed0247976 = "@self") && ('' === $__internal_0599d867dd216b56b504b8d6629d6d68c80fdc08c444ee1d293ddefed0247976 || 0 === strpos($__internal_69412ca6c36147f90ea77e954671cfef4a43c3daeed78a26a6b2ad884be575c6, $__internal_0599d867dd216b56b504b8d6629d6d68c80fdc08c444ee1d293ddefed0247976))) || (is_string($__internal_c9687662503888cde320b7eb3a1532a23ade93bde78a659cb648420efa8b023a = $this->getAttribute(($context["field"] ?? null), "destination", array())) && is_string($__internal_2a3621862defe38a47aa7d192d1d86dee9238b7f9d40ec80ed71602b4c449b2a = "self@") && ('' === $__internal_2a3621862defe38a47aa7d192d1d86dee9238b7f9d40ec80ed71602b4c449b2a || 0 === strpos($__internal_c9687662503888cde320b7eb3a1532a23ade93bde78a659cb648420efa8b023a, $__internal_2a3621862defe38a47aa7d192d1d86dee9238b7f9d40ec80ed71602b4c449b2a))))));
        // line 59
        echo "    ";
        if (( !array_key_exists("type", $context) || ($context["page_can_upload"] ?? null))) {
            // line 60
            echo "
    ";
            // line 61
            $context["settings"] = array("name" => $this->getAttribute(($context["field"] ?? null), "name", array()), "paramName" => ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))) . (($this->getAttribute(($context["files"] ?? null), "multiple", array())) ? ("[]") : (""))), "limit" => ($context["limit"] ?? null), "filesize" => $this->getAttribute(($context["files"] ?? null), "filesize", array()), "accept" => $this->getAttribute(($context["files"] ?? null), "accept", array()));
            // line 62
            echo "
    <div class=\"form-input-wrapper dropzone files-upload ";
            // line 63
            if ( !($this->getAttribute(($context["field"] ?? null), "fancy", array()) === false)) {
                echo "form-input-file";
            }
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "size", array()), "xlarge")) : ("xlarge")), "html", null, true);
            echo "\" data-grav-file-settings=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["settings"] ?? null)), "html_attr");
            echo "\" ";
            if (($context["file_url_add"] ?? null)) {
                echo "data-file-url-add=\"";
                echo twig_escape_filter($this->env, ($context["file_url_add"] ?? null), "html", null, true);
                echo "\"";
            }
            echo " ";
            if (($context["file_url_remove"] ?? null)) {
                echo "data-file-url-remove=\"";
                echo twig_escape_filter($this->env, ($context["file_url_remove"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ">
        <input
            ";
            // line 66
            echo "            ";
            $this->displayBlock('input_attributes', $context, $blocks);
            // line 74
            echo "        />

        ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["path"] => $context["file"]) {
                // line 77
                echo "            ";
                echo $this->getAttribute($this, "preview", array(0 => $context["path"], 1 => $context["file"], 2 => $context), "method");
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['path'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "        ";
            $this->loadTemplate("forms/fields/hidden/hidden.html.twig", "forms/fields/file/file.html.twig", 79)->display(array_merge($context, array("field" => array("name" => ("_json." . $this->getAttribute(($context["field"] ?? null), "name", array()))), "value" => twig_jsonencode_filter(($context["value"] ?? null)))));
            // line 80
            echo "    </div>

    ";
        } else {
            // line 83
            echo "        <span class=\"note\">";
            echo $this->env->getExtension('Grav\Plugin\Admin\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANNOT_ADD_FILES_PAGE_NOT_SAVED");
            echo "</span>
    ";
        }
    }

    // line 66
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 67
        echo "                type=\"file\"
                ";
        // line 68
        if ($this->getAttribute(($context["files"] ?? null), "multiple", array())) {
            echo "multiple=\"multiple\"";
        }
        // line 69
        echo "                ";
        if ($this->getAttribute(($context["files"] ?? null), "accept", array())) {
            echo "accept=\"";
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["files"] ?? null), "accept", array()), ","), "html", null, true);
            echo "\"";
        }
        // line 70
        echo "                ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 71
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "random_name", array())) {
            echo "random=\"true\"";
        }
        // line 72
        echo "                ";
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
            ";
    }

    // line 6
    public function getbytesToSize($__bytes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 7
            ob_start();
            // line 8
            echo "        ";
            $context["kilobyte"] = 1024;
            // line 9
            echo "        ";
            $context["megabyte"] = (($context["kilobyte"] ?? null) * 1024);
            // line 10
            echo "        ";
            $context["gigabyte"] = (($context["megabyte"] ?? null) * 1024);
            // line 11
            echo "        ";
            $context["terabyte"] = (($context["gigabyte"] ?? null) * 1024);
            // line 12
            echo "
        ";
            // line 13
            if ((($context["bytes"] ?? null) < ($context["kilobyte"] ?? null))) {
                // line 14
                echo "            ";
                echo twig_escape_filter($this->env, (($context["bytes"] ?? null) . " B"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 15
($context["bytes"] ?? null) < ($context["megabyte"] ?? null))) {
                // line 16
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["kilobyte"] ?? null)), 2, ".") . " KB"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 17
($context["bytes"] ?? null) < ($context["gigabyte"] ?? null))) {
                // line 18
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["megabyte"] ?? null)), 2, ".") . " MB"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 19
($context["bytes"] ?? null) < ($context["terabyte"] ?? null))) {
                // line 20
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["gigabyte"] ?? null)), 2, ".") . " GB"), "html", null, true);
                echo "
        ";
            } else {
                // line 22
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? null) / ($context["terabyte"] ?? null)), 2, ".") . " TB"), "html", null, true);
                echo "
        ";
            }
            // line 24
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 27
    public function getpreview($__path__ = null, $__value__ = null, $__global__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "path" => $__path__,
            "value" => $__value__,
            "global" => $__global__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 28
            echo "    ";
            if (($context["value"] ?? null)) {
                // line 29
                echo "        ";
                $context["uri"] = $this->getAttribute($this->getAttribute(($context["global"] ?? null), "grav", array()), "uri", array());
                // line 30
                echo "        ";
                $context["files"] = $this->getAttribute(($context["global"] ?? null), "files", array());
                // line 31
                echo "        ";
                $context["config"] = $this->getAttribute($this->getAttribute(($context["global"] ?? null), "grav", array()), "config", array());
                // line 32
                echo "        ";
                $context["route"] = $this->getAttribute($this->getAttribute(($context["global"] ?? null), "context", array()), "route", array(), "method");
                // line 33
                echo "        ";
                $context["type"] = (($this->getAttribute(($context["global"] ?? null), "blueprint_type", array())) ? ($this->getAttribute(($context["global"] ?? null), "blueprint_type", array())) : ((((get_class($this->getAttribute(($context["global"] ?? null), "context", array())) == "Grav\\Common\\Page\\Page")) ? ("pages") : ((($this->getAttribute(($context["global"] ?? null), "plugin", array())) ? ("plugins") : ((($this->getAttribute(($context["global"] ?? null), "theme", array())) ? ("themes") : ("config"))))))));
                // line 34
                echo "
        ";
                // line 35
                $context["blueprint_name"] = $this->getAttribute($this->getAttribute(($context["global"] ?? null), "blueprints", array()), "getFilename", array());
                // line 36
                echo "        ";
                if ((($context["type"] ?? null) == "pages")) {
                    // line 37
                    echo "            ";
                    $context["blueprint_name"] = ((($context["type"] ?? null) . "/") . ($context["blueprint_name"] ?? null));
                    // line 38
                    echo "        ";
                }
                // line 39
                echo "        ";
                $context["blueprint"] = base64_encode(($context["blueprint_name"] ?? null));
                // line 40
                echo "        ";
                $context["real_path"] = $this->getAttribute($this->getAttribute(($context["global"] ?? null), "admin", array()), "getPagePathFromToken", array(0 => ($context["path"] ?? null)), "method");
                // line 41
                echo "        ";
                $context["remove"] = (($this->getAttribute(($context["global"] ?? null), "file_url_remove", array())) ? ($this->getAttribute(($context["global"] ?? null), "file_url_remove", array())) : (($this->getAttribute(($context["global"] ?? null), "base_url_relative", array()) . "/media.json")));
                // line 42
                echo "        ";
                $context["remove"] = $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((((((((((((((((((((                // line 43
($context["remove"] ?? null) . "/route") . $this->getAttribute($this->getAttribute(                // line 44
($context["config"] ?? null), "system", array()), "param_sep", array())) . base64_encode((($this->getAttribute(($context["global"] ?? null), "base_path", array()) . "/") . ($context["real_path"] ?? null)))) . "/task") . $this->getAttribute($this->getAttribute(                // line 45
($context["config"] ?? null), "system", array()), "param_sep", array())) . "removeFileFromBlueprint") . "/proute") . $this->getAttribute($this->getAttribute(                // line 46
($context["config"] ?? null), "system", array()), "param_sep", array())) . base64_encode(($context["route"] ?? null))) . "/blueprint") . $this->getAttribute($this->getAttribute(                // line 47
($context["config"] ?? null), "system", array()), "param_sep", array())) . ($context["blueprint"] ?? null)) . "/type") . $this->getAttribute($this->getAttribute(                // line 48
($context["config"] ?? null), "system", array()), "param_sep", array())) . ($context["type"] ?? null)) . "/field") . $this->getAttribute($this->getAttribute(                // line 49
($context["config"] ?? null), "system", array()), "param_sep", array())) . $this->getAttribute(($context["files"] ?? null), "name", array())) . "/path") . $this->getAttribute($this->getAttribute(                // line 50
($context["config"] ?? null), "system", array()), "param_sep", array())) . base64_encode($this->getAttribute(($context["value"] ?? null), "path", array()))), 1 => "admin-form", 2 => "admin-nonce"), "method");
                // line 51
                echo "
        ";
                // line 52
                $context["file"] = twig_array_merge(($context["value"] ?? null), array("remove" => ($context["remove"] ?? null), "path" => ((($this->getAttribute(($context["uri"] ?? null), "rootUrl", array()) == "/")) ? ("/") : ((($this->getAttribute(($context["uri"] ?? null), "rootUrl", array()) . "/") . ($context["real_path"] ?? null))))));
                // line 53
                echo "        <div class=\"hidden\" data-file=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["file"] ?? null)), "html_attr");
                echo "\"></div>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/fields/file/file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 53,  295 => 52,  292 => 51,  290 => 50,  289 => 49,  288 => 48,  287 => 47,  286 => 46,  285 => 45,  284 => 44,  283 => 43,  281 => 42,  278 => 41,  275 => 40,  272 => 39,  269 => 38,  266 => 37,  263 => 36,  261 => 35,  258 => 34,  255 => 33,  252 => 32,  249 => 31,  246 => 30,  243 => 29,  240 => 28,  226 => 27,  210 => 24,  204 => 22,  198 => 20,  196 => 19,  191 => 18,  189 => 17,  184 => 16,  182 => 15,  177 => 14,  175 => 13,  172 => 12,  169 => 11,  166 => 10,  163 => 9,  160 => 8,  158 => 7,  146 => 6,  139 => 72,  134 => 71,  129 => 70,  122 => 69,  118 => 68,  115 => 67,  112 => 66,  104 => 83,  99 => 80,  96 => 79,  87 => 77,  83 => 76,  79 => 74,  76 => 66,  53 => 63,  50 => 62,  48 => 61,  45 => 60,  42 => 59,  39 => 58,  36 => 57,  32 => 1,  30 => 4,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/field.html.twig\" %}
{% set defaults = config.plugins.form %}
{% set files = defaults.files|merge(field|default([])) %}
{% set limit = not field.multiple ? 1 : files.limit %}

{% macro bytesToSize(bytes) -%}
    {% spaceless %}
        {% set kilobyte = 1024 %}
        {% set megabyte = kilobyte * 1024 %}
        {% set gigabyte = megabyte * 1024 %}
        {% set terabyte = gigabyte * 1024 %}

        {% if bytes < kilobyte %}
            {{ bytes ~ ' B' }}
        {% elseif bytes < megabyte %}
            {{ (bytes / kilobyte)|number_format(2, '.') ~ ' KB' }}
        {% elseif bytes < gigabyte %}
            {{ (bytes / megabyte)|number_format(2, '.') ~ ' MB' }}
        {% elseif bytes < terabyte %}
            {{ (bytes / gigabyte)|number_format(2, '.') ~ ' GB' }}
        {% else %}
            {{ (bytes / terabyte)|number_format(2, '.') ~ ' TB' }}
        {% endif %}
    {% endspaceless %}
{%- endmacro %}

{% macro preview(path, value, global) %}
    {% if value %}
        {% set uri = global.grav.uri %}
        {% set files = global.files %}
        {% set config = global.grav.config %}
        {% set route = global.context.route() %}
        {% set type = global.blueprint_type ? global.blueprint_type : (get_class(global.context) == 'Grav\\\\Common\\\\Page\\\\Page' ? 'pages' : global.plugin ? 'plugins' : global.theme ? 'themes' : 'config') %}

        {% set blueprint_name = global.blueprints.getFilename %}
        {% if type == 'pages' %}
            {% set blueprint_name = type ~ '/' ~ blueprint_name %}
        {% endif %}
        {% set blueprint = base64_encode(blueprint_name) %}
        {% set real_path = global.admin.getPagePathFromToken(path) %}
        {% set remove = global.file_url_remove ? global.file_url_remove : (global.base_url_relative ~ '/media.json') %}
        {% set remove = uri.addNonce(
        remove ~
        '/route' ~ config.system.param_sep ~ base64_encode(global.base_path ~ '/' ~ real_path) ~
        '/task' ~ config.system.param_sep ~ 'removeFileFromBlueprint' ~
        '/proute' ~ config.system.param_sep ~ base64_encode(route) ~
        '/blueprint' ~ config.system.param_sep ~ blueprint ~
        '/type' ~ config.system.param_sep ~ type ~
        '/field' ~ config.system.param_sep ~ files.name ~
        '/path' ~ config.system.param_sep ~ base64_encode(value.path), 'admin-form', 'admin-nonce') %}

        {% set file = value|merge({remove: remove, path: (uri.rootUrl == '/' ? '/' : uri.rootUrl ~ '/' ~ real_path) }) %}
        <div class=\"hidden\" data-file=\"{{ file|json_encode|e('html_attr') }}\"></div>
    {% endif %}
{% endmacro %}

{% block input %}
    {% set page_can_upload = exists or (type == 'page' and not exists and not (field.destination starts with '@self' or field.destination starts with 'self@')) %}
    {% if type is not defined or page_can_upload %}

    {% set settings = {name: field.name, paramName: (scope ~ field.name)|fieldName ~ (files.multiple ? '[]' : ''), limit: limit, filesize: files.filesize, accept: files.accept} %}

    <div class=\"form-input-wrapper dropzone files-upload {% if field.fancy is not same as(false) %}form-input-file{% endif %} {{ field.size|default('xlarge') }}\" data-grav-file-settings=\"{{ settings|json_encode|e('html_attr') }}\" {% if file_url_add %}data-file-url-add=\"{{ file_url_add }}\"{% endif %} {% if file_url_remove %}data-file-url-remove=\"{{ file_url_remove }}\"{% endif %}>
        <input
            {# required attribute structures #}
            {% block input_attributes %}
                type=\"file\"
                {% if files.multiple %}multiple=\"multiple\"{% endif %}
                {% if files.accept %}accept=\"{{ files.accept|join(',') }}\"{% endif %}
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                {% if field.random_name %}random=\"true\"{% endif %}
                {{ parent() }}
            {% endblock %}
        />

        {% for path, file in value %}
            {{ _self.preview(path, file, _context) }}
        {% endfor %}
        {% include 'forms/fields/hidden/hidden.html.twig' with {field: {name: '_json.' ~ field.name}, value:value|raw|json_encode} %}
    </div>

    {% else %}
        <span class=\"note\">{{ \"PLUGIN_ADMIN.CANNOT_ADD_FILES_PAGE_NOT_SAVED\"|tu|raw }}</span>
    {% endif %}
{% endblock %}
", "forms/fields/file/file.html.twig", "/Users/danielszerszen/Code/grav/user/plugins/admin/themes/grav/templates/forms/fields/file/file.html.twig");
    }
}
