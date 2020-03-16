<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/index.html.twig */
class __TwigTemplate_476253b95f650012a66ba1c969a0a178ce95aa912236b97b70ef319e0f13b2cf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <form  action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("invoice_create");
        echo "\" method=\"post\">
    <label for=\"date_invoice\">Data Fattura</label>
    <input type=\"date\" name=\"date_invoice\" value=\"\"><br>
    <label for=\"num_invoice\">Numero Fattura</label>
    <input type=\"number\" name=\"num_invoice\" value=\"\"><br>
    <label for=\"id_customer\">Num Cliente</label>
    <input type=\"number\" name=\"id_customer\" value=\"\"><br>
    <label for=\"description\">Descrizione</label>
    <input type=\"text\" name=\"description\" value=\"\"><br>
    <label for=\"quantity\">Quantità</label>
    <input type=\"number\" name=\"quantity\" value=\"\"><br>
    <label for=\"amount\">Importo</label>
    <input type=\"number\" name=\"amount\" value=\"\"><br>
    <label for=\"amountIva\">Importo IVA</label>
    <input type=\"number\" name=\"amountIva\" value=\"\"><br>
    <label for=\"TotAmountIva\">Totale + IVA</label>
    <input type=\"number\" name=\"TotAmountIva\" value=\"\"><br>
    <input type=\"submit\" name=\"submit\" value=\"Registra\">

  </form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 5,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

  <form  action=\"{{ path('invoice_create') }}\" method=\"post\">
    <label for=\"date_invoice\">Data Fattura</label>
    <input type=\"date\" name=\"date_invoice\" value=\"\"><br>
    <label for=\"num_invoice\">Numero Fattura</label>
    <input type=\"number\" name=\"num_invoice\" value=\"\"><br>
    <label for=\"id_customer\">Num Cliente</label>
    <input type=\"number\" name=\"id_customer\" value=\"\"><br>
    <label for=\"description\">Descrizione</label>
    <input type=\"text\" name=\"description\" value=\"\"><br>
    <label for=\"quantity\">Quantità</label>
    <input type=\"number\" name=\"quantity\" value=\"\"><br>
    <label for=\"amount\">Importo</label>
    <input type=\"number\" name=\"amount\" value=\"\"><br>
    <label for=\"amountIva\">Importo IVA</label>
    <input type=\"number\" name=\"amountIva\" value=\"\"><br>
    <label for=\"TotAmountIva\">Totale + IVA</label>
    <input type=\"number\" name=\"TotAmountIva\" value=\"\"><br>
    <input type=\"submit\" name=\"submit\" value=\"Registra\">

  </form>

{% endblock %}
", "default/index.html.twig", "C:\\Users\\unieuro\\Desktop\\my_project_symphony\\app\\Resources\\views\\default\\index.html.twig");
    }
}
