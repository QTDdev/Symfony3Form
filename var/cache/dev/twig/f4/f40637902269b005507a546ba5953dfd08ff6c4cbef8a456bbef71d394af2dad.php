<?php

/* @Doc/Doc/doc_books.html.twig */
class __TwigTemplate_2e6c1b443ce1b18a2a5db6a0f1accd76f2f378185120cfa0c6283d3a8e917448 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Doc/Doc/doc_books.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Doc/Doc/doc_books.html.twig"));

        // line 1
        echo "
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\"/>

<table class=\"table table-hover \">

    <thead>
    <tr class=\"table-dark\">

        <th scope=\"col\"></th>

        <td scope=\"col\">Titre</td>

        <td scope=\"col\">Genre</td>

        <td scope=\"col\">Format</td>

        <td scope=\"col\">Nb Pages</td>

        <td scope=\"col\">Auteur</td>


    </tr>
    </thead>



        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["livres"] ?? $this->getContext($context, "livres")));
        foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
            // line 28
            echo "    <tbody>
    <tr>
        <th scope=\"row\"></th>

        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "title", array()), "html", null, true);
            echo "</td>

        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "genre", array()), "html", null, true);
            echo "</td>

        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "format", array()), "html", null, true);
            echo "</td>

        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["livre"], "nbPage", array()), "html", null, true);
            echo "</td>

        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["livre"], "author", array()), "nom", array())), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["livre"], "author", array()), "prenom", array()), "html", null, true);
            echo "</td>
    </tr>
    </tbody>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "




</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Doc/Doc/doc_books.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 45,  83 => 40,  78 => 38,  73 => 36,  68 => 34,  63 => 32,  57 => 28,  53 => 27,  25 => 1,);
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

        <td scope=\"col\">Genre</td>

        <td scope=\"col\">Format</td>

        <td scope=\"col\">Nb Pages</td>

        <td scope=\"col\">Auteur</td>


    </tr>
    </thead>



        {% for livre in livres %}
    <tbody>
    <tr>
        <th scope=\"row\"></th>

        <td>{{ livre.title }}</td>

        <td>{{ livre.genre }}</td>

        <td>{{ livre.format }}</td>

        <td>{{ livre.nbPage }}</td>

        <td>{{ livre.author.nom | upper }}  {{ livre.author.prenom }}</td>
    </tr>
    </tbody>

        {%  endfor %}





</table>", "@Doc/Doc/doc_books.html.twig", "/var/www/html/media/src/DocBundle/Resources/views/Doc/doc_books.html.twig");
    }
}
