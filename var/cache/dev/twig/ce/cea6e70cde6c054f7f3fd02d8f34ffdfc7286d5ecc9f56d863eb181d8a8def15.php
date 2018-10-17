<?php

/* @Doc/Doc/doc_invites.html.twig */
class __TwigTemplate_182799360faa5c5ae8ba2a0ed98c8fbc8bab61fa2737f287941b937a20fc1aba extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Doc/Doc/doc_invites.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Doc/Doc/doc_invites.html.twig"));

        // line 1
        echo "
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\"/>

<table class=\"table table-hover \">

    <thead>
    <tr class=\"table-dark\">

        <th scope=\"col\"></th>

        <td scope=\"col\">Id Invite</td>

        <td scope=\"col\">Nom</td>

        <td scope=\"col\">Prenom</td>



    </tr>
    </thead>



    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["invites"] ?? $this->getContext($context, "invites")));
        foreach ($context['_seq'] as $context["_key"] => $context["invite"]) {
            // line 25
            echo "        <tbody>
        <tr>
            <th scope=\"row\"></th>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["invite"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["invite"], "authors", array()), "nom", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["invite"], "authors", array()), "prenom", array()), "html", null, true);
            echo "</td>
        </tr>
        </tbody>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "




</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Doc/Doc/doc_invites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 35,  67 => 30,  63 => 29,  59 => 28,  54 => 25,  50 => 24,  25 => 1,);
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

        <td scope=\"col\">Id Invite</td>

        <td scope=\"col\">Nom</td>

        <td scope=\"col\">Prenom</td>



    </tr>
    </thead>



    {% for invite in invites %}
        <tbody>
        <tr>
            <th scope=\"row\"></th>
            <td>{{ invite.id }}</td>
            <td>{{ invite.authors.nom }}</td>
            <td>{{ invite.authors.prenom }}</td>
        </tr>
        </tbody>

    {%  endfor %}





</table>", "@Doc/Doc/doc_invites.html.twig", "/var/www/html/media/src/DocBundle/Resources/views/Doc/doc_invites.html.twig");
    }
}
