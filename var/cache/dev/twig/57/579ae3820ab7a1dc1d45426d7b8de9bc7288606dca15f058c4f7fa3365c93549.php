<?php

/* @Doc/Doc/doc_evenements.html.twig */
class __TwigTemplate_5dbf3ae2dd94a48443dc24a7e8d3b4af417cf4bdbed20c38443711659f20ed61 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Doc/Doc/doc_evenements.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Doc/Doc/doc_evenements.html.twig"));

        // line 1
        echo "
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\"/>

<table class=\"table table-hover \">

    <thead>
    <tr class=\"table-dark\">

        <th scope=\"col\"></th>

        <td scope=\"col\">Titre</td>

        <td scope=\"col\">Date</td>

        <td scope=\"col\">Description</td>

        <td scope=\"col\">Type</td>

        <td scope=\"col\">Invites</td>



    </tr>
    </thead>



    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["evenements"] ?? $this->getContext($context, "evenements")));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 29
            echo "        <tbody>
        <tr>
            <th scope=\"row\"></th>

            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["evenement"], "title", array())), "html", null, true);
            echo "</td>

            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evenement"], "date", array())), "html", null, true);
            echo "</td>

            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "description", array()), "html", null, true);
            echo "</td>

            <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "type", array()), "html", null, true);
            echo "</td>


            <td>";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["evenement"], "invites", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["invite"]) {
                // line 43
                echo "                    <li>";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["invite"], "nom", array())), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["invite"], "prenom", array()), "html", null, true);
                echo " </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "
            </td>

        </tr>
        </tbody>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "




</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Doc/Doc/doc_evenements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 52,  100 => 45,  89 => 43,  85 => 42,  79 => 39,  74 => 37,  69 => 35,  64 => 33,  58 => 29,  54 => 28,  25 => 1,);
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

        <td scope=\"col\">Titre</td>

        <td scope=\"col\">Date</td>

        <td scope=\"col\">Description</td>

        <td scope=\"col\">Type</td>

        <td scope=\"col\">Invites</td>



    </tr>
    </thead>



    {% for evenement in evenements %}
        <tbody>
        <tr>
            <th scope=\"row\"></th>

            <td>{{ evenement.title | upper}}</td>

            <td>{{ evenement.date | date }}</td>

            <td>{{ evenement.description }}</td>

            <td>{{ evenement.type }}</td>


            <td>{% for invite in evenement.invites %}
                    <li>{{ invite.nom | upper }} {{ invite.prenom }} </li>
                {% endfor %}

            </td>

        </tr>
        </tbody>

    {%  endfor %}





</table>", "@Doc/Doc/doc_evenements.html.twig", "/var/www/html/media/src/DocBundle/Resources/views/Doc/doc_evenements.html.twig");
    }
}
