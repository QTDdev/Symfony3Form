<?php

/* @Doc/Doc/doc_authors.html.twig */
class __TwigTemplate_80cd19efbddc882f405a852ce527d133b5e28796a4bd7de8d740f43dff2521c2 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Doc/Doc/doc_authors.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Doc/Doc/doc_authors.html.twig"));

        // line 1
        echo "
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\"/>

<table class=\"table table-hover \">

    <thead>
    <tr class=\"table-dark\">

        <th scope=\"col\"></th>

        <td scope=\"col\">Nom</td>

        <td scope=\"col\">Prenom</td>

        <td scope=\"col\">Biographie</td>

        <td scope=\"col\">Livres</td>

        <td scope=\"col\">Invite</td>



    </tr>
    </thead>



    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["authors"] ?? $this->getContext($context, "authors")));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 29
            echo "        <tbody>
        <tr>
            <th scope=\"row\"></th>

            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "nom", array()), "html", null, true);
            echo "</td>

            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "prenom", array()), "html", null, true);
            echo "</td>

            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "biographie", array()), "html", null, true);
            echo "</td>

            <td>";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["author"], "livres", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
                // line 40
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "title", array()), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "
            </td>

            <td>";
            // line 45
            if ($this->getAttribute($this->getAttribute($context["author"], "invite", array(), "any", false, true), "id", array(), "any", true, true)) {
                // line 46
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["author"], "invite", array()), "id", array()), "html", null, true);
                echo "</td>
                ";
            }
            // line 47
            echo "     

        </tr>
        </tbody>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "




</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Doc/Doc/doc_authors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 53,  105 => 47,  99 => 46,  97 => 45,  92 => 42,  83 => 40,  79 => 39,  74 => 37,  69 => 35,  64 => 33,  58 => 29,  54 => 28,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\"/>

<table class=\"table table-hover \">

    <thead>
    <tr class=\"table-dark\">

        <th scope=\"col\"></th>

        <td scope=\"col\">Nom</td>

        <td scope=\"col\">Prenom</td>

        <td scope=\"col\">Biographie</td>

        <td scope=\"col\">Livres</td>

        <td scope=\"col\">Invite</td>



    </tr>
    </thead>



    {% for author in authors %}
        <tbody>
        <tr>
            <th scope=\"row\"></th>

            <td>{{ author.nom }}</td>

            <td>{{ author.prenom }}</td>

            <td>{{ author.biographie }}</td>

            <td>{% for livre in author.livres %}
            <li>{{ livre.title }}</li>
            {% endfor %}

            </td>

            <td>{% if author.invite.id is defined %}
                {{ author.invite.id }}</td>
                {% endif %}     

        </tr>
        </tbody>

    {%  endfor %}





</table>", "@Doc/Doc/doc_authors.html.twig", "/var/www/html/media/src/DocBundle/Resources/views/Doc/doc_authors.html.twig");
    }
}
