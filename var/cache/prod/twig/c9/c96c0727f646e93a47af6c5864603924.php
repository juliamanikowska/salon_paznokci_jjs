<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__9865513ff4785bb52a6a171e62b510d9 */
class __TwigTemplate_42a37e517870766fe85c7d663155b54d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/salon_paznokci_jjs/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/salon_paznokci_jjs/img/app_icon.png\" />

<title>Wydajność • Salon paznokci JJ's</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'pl';
    var lang_is_rtl = '0';
    var full_language_code = 'pl';
    var full_cldr_language_code = 'pl-PL';
    var country_iso_code = 'PL';
    var _PS_VERSION_ = '8.2.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Nowe zamówienie zostało złożone w Twoim sklepie.';
    var order_number_msg = 'Numer zamówienia: ';
    var total_msg = 'Razem: ';
    var from_msg = 'Od: ';
    var see_order_msg = 'Zobacz to zamówienie';
    var new_customer_msg = 'W twoim sklepie zarejestrował się nowy klient.';
    var customer_name_msg = 'Nazwa klienta: ';
    var new_msg = 'W twoim sklepie została opublikowana nowa wiadomość.';
    var see_msg = 'Przeczytaj tą wiadomość';
    var token = 'e1828385f76741f5061ec6c93226db16';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = 'cb2922837de5480e80e7c5ce9fbff2ba';
    var choose_language_translate = 'Wybierz język:';
    var default_language = '1';
    var admin_modules_link = '/salon_paznokci_jjs/admin1/index.php/improve/modules/manage?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU';
    var admin_notification_get_link = '/salon_paznokci_jjs/admin1/index.php/common/notifications?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU';
    var admin_notification_push_link = adminNotificationPushLink = '/salon_paznokci_jjs/admin1/index.php/common/notifications/ack?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr";
        // line 40
        echo "7gcDGp78tU';
    var tab_modules_list = '';
    var update_success_msg = 'Aktualizacja powiodła się';
    var search_product_msg = 'Szukaj produktu';
  </script>



<link
      rel=\"preload\"
      href=\"/salon_paznokci_jjs/admin1/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/salon_paznokci_jjs/admin1/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/salon_paznokci_jjs/admin1/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/salon_paznokci_jjs/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/salon_paznokci_jjs/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/salon_paznokci_jjs/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/salon_paznokci_jjs/admin1/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/salon_paznokci_jjs/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.c13a0d59.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/salon_paznokci_jjs/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/salon_paznokci_jjs/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/salon_paznokci_jjs/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/salon_paznokci_jjs\\/admin1\\/\";
var baseDir = \"\\/salon_paznokci_jjs\\/\";
var changeFormLanguageUrl = \"\\/salon_paznokci_jjs\\/admin1\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIF";
        // line 69
        echo "hsfr7gcDGp78tU\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\u0142\",\"name\":\"Z\\u0142oty polski\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\u0142\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/admin1/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/js/admin.js?v=8.2.0\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/admin1/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/js/tools.js?v=8.2.0\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/admin1/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/jav";
        // line 87
        echo "ascript\" src=\"/salon_paznokci_jjs/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/admin1/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/modules/ps_mbo/views/js/recommended-modules.js?v=4.12.0\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/salon_paznokci_jjs\\/admin1\\/index.php?controller=AdminGamification&token=0e63c07bed9c773a5f50b2e738267e49\";
            var current_id_tab = 94;
        </script><script type=\"module\" src=\"/salon_paznokci_jjs/modules/psxdesign/views/js/upgrade-notification.js\"></script>
    <script>
        window.userLocale  = 'pl';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/salon_paznokci_jjs/admin1/index.php/common/notifications?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 119
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-pl adminperformance\"
  data-base-url=\"/salon_paznokci_jjs/admin1/index.php\"  data-token=\"kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/salon_paznokci_jjs/admin1/index.php/modules/pseditionbasic/homepage?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\"></a>
      <span id=\"shop_version\">8.2.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Szybki dostęp
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/salon_paznokci_jjs/admin1/index.php/sell/catalog/categories/new?token=d1f993870978a822b5bf00d79345717d\"
                 data-item=\"Nowa kategoria\"
      >Nowa kategoria</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=ff1e90e29f6bbd077784e0f3615cb484\"
                 data-item=\"Nowy kupon\"
      >Nowy kupon</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/salon_paznokci_jjs/admin1/index.php/sell/catalog/products-v2/create?token=d1f993870978a822b5bf00d79345717d\"
                 data-item=\"Nowy produkt\"
      >Nowy produkt</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=4af1dbc54770e1228e12d20cc312d634\"
                 data-item=\"Ocena katalogu";
        // line 154
        echo "\"
      >Ocena katalogu</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/salon_paznokci_jjs/admin1/index.php/improve/modules/manage?token=d1f993870978a822b5bf00d79345717d\"
                 data-item=\"Zainstalowane moduły\"
      >Zainstalowane moduły</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/salon_paznokci_jjs/admin1/index.php/sell/orders?token=d1f993870978a822b5bf00d79345717d\"
                 data-item=\"Zamówienia\"
      >Zamówienia</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"41\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance\"
        data-post-link=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminQuickAccesses&token=9c5c7962f4497a21adf5da296785d1a5\"
        data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
        data-link=\"Wydajność - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Dodaj aktualną stronę do Szybkiego dostępu
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminQuickAccesses&token=9c5c7962f4497a21adf5da296785d1a5\">
      <i class=\"material-icons\">settings</i>
      Zarządzaj Szybkiem dostępem
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/salon_paznokci_jjs/admin1/index.php?controller=AdminSearch&amp;token=b3a6329b24e3be77a3c25122b7bbf317\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" c";
        // line 194
        echo "lass=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Szukaj (np.: indeks produktu, nazwa klienta...)\" aria-label=\"Wyszukiwarka\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Wszędzie
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Wszędzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Wszędzie</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, odniesienie itp.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"Nazwa\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Klienci Wg nazwy</a>
        <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Klienci wg adresu IP</a>
        <a class=\"dropdown-item\" data-item=\"Zamówienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zamówienia\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Zamówienia</a>
        <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\" data-placeholder=\"Numer faktury\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faktury</a>
        <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Koszyki</a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 210
        echo "Moduły\" href=\"#\" data-value=\"7\" data-placeholder=\"Nazwa modułu\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Moduły</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">WYSZUKIWANIE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Anuluj</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Szybki dostęp</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/salon_paznokci_jjs/admin1/index.php/sell/catalog/categories/new?token=d1f993870978a822b5bf00d79345717d\"
             data-item=\"Nowa kategoria\"
    >Nowa kategoria</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=ff1e90e29f6bbd077784e0f3615cb484\"
             data-item=\"Nowy kupon\"
    >Nowy kupon</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/salon_paznokci_jjs/admin1/index.php/sell/catalog/products-v2/create?token=d1f993870978a822b5bf00d79345717d\"
             data-item=\"Nowy produkt\"
    >Nowy produkt</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=4af1dbc54770e1228e12d20cc312d634\"
             data-item=\"Ocena katalogu\"
    >Ocena katalogu</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/salon_paznokci_jjs/admin1/index.php/improve/modules/manage?token=d1f993870978a822b5bf00d79345717d\"
             data-item=\"Zainstalowane moduły\"
    >Zainstalowane moduły</a>
      <a class=\"drop";
        // line 249
        echo "down-item quick-row-link\"
       href=\"http://localhost/salon_paznokci_jjs/admin1/index.php/sell/orders?token=d1f993870978a822b5bf00d79345717d\"
             data-item=\"Zamówienia\"
    >Zamówienia</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"76\"
      data-icon=\"icon-AdminAdvancedParameters\"
      data-method=\"add\"
      data-url=\"index.php/configure/advanced/performance\"
      data-post-link=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminQuickAccesses&token=9c5c7962f4497a21adf5da296785d1a5\"
      data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
      data-link=\"Wydajność - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Dodaj aktualną stronę do Szybkiego dostępu
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminQuickAccesses&token=9c5c7962f4497a21adf5da296785d1a5\">
    <i class=\"material-icons\">settings</i>
    Zarządzaj Szybkiem dostępem
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Twój sklep jest w trybie konserwacji.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Twoi odwiedzający i klienci nie mogą uzyskać dostępu do Twojego sklepu w trybie konserwacji.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Aby zarządzać ustawieniami konserwacji, przejdź do zakładki Preferencje &amp;gt; Ogóln";
        // line 292
        echo "e &amp;gt; Przerwa techniczna.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Administratorzy mogą uzyskać dostęp do frontu sklepu bez zapisywania swojego adresu IP.
            &lt;/p&gt;
                  \"
             href=\"/salon_paznokci_jjs/admin1/index.php/configure/shop/maintenance/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Przerwa techniczna</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/salon_paznokci_jjs/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Wyświetl mój sklep</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Zamówienia<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
 ";
        // line 340
        echo "             id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Klienci<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Wiadomości<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych zamówień :(<br>
              Czy sprawdziłeś <strong><a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=ca690e5ae90df007d9058023cd3c9f95\">porzucone koszyki</a></strong>?<br>Może znajdziesz tam swoje następne zamówienie!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych klientów :(<br>
              Czy jesteś aktywny w mediach społecznościowych?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych wiadomości.<br>
              Wydaje się, wszyscy Twoi klienci są zadowoleni :)
            </p>
            <div class=\"notification-elem";
        // line 384
        echo "ents\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      od <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - zarejestrowany <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/salon_paznokci_jjs/img/pr/default.jpg\" alt=\"Julia\" /></span>
        <span class=\"employee_profile\">Witaj ponownie Julia</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/employees/1/edit?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\">
      <i class=\"material-icons\">edit</i>
      <span>Twój profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=lo";
        // line 435
        echo "calhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Zarządzaj swoim kontem PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=training-pl&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Szkolenie
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/pl/eksperci?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=expert-pl&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Znajdź eksperta
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/salon_paznokci_jjs/admin1/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=EGC-QjWSjuO_YeIKEsMaxkFYKgw83kT_TCMytV1exAk&utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=addons-pl&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> PrestaShop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=help-center-pl&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centrum Pomocy
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=";
        // line 452
        echo "AdminLogin&amp;logout=1&amp;token=567cdf29bba809c948ae9a27343d865b\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Wyloguj się</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/employees/toggle-navigation?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/salon_paznokci_jjs/admin1/index.php/modules/pseditionbasic/homepage?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.2.0</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"149\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"150\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/salon_paznokci_jjs/admin1/index.php/modules/pseditionbasic/homepage?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                    ";
        // line 496
        echo "        </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminDashboard&amp;token=e8a7d63775894a4a47ec8fa1e272a9f6\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Pulpit
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sprzedaż</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/orders/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Zamówienia
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                          ";
        // line 535
        echo "          keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/orders/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/orders/invoices/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Faktury
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/orders/credit-slips/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Druki kredytowe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"";
        // line 566
        echo "link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/orders/delivery-slips/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Druk wysyłki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminCarts&amp;token=ca690e5ae90df007d9058023cd3c9f95\" class=\"link\"> Koszyki zakupowe
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/catalog/products?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Katalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
            ";
        // line 597
        echo "                  
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/catalog/products?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/catalog/categories?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Kategorie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/catalog/monitoring/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Monitorowanie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminAttributesGroups&amp;token=81936271b6ac0fdcdd81ba6cce050eaf\" class=\"link\"> Atrybuty i cechy
               ";
        // line 625
        echo "                 </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/catalog/brands/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Marki i dostawcy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/attachments/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Pliki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminCartRules&amp;token=ff1e90e29f6bbd077784e0f3615cb484\" class=\"link\"> Rabaty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/salon_pazn";
        // line 656
        echo "okci_jjs/admin1/index.php/sell/stocks/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Magazyn
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/customers/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Klienci
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/customers/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltw";
        // line 688
        echo "o\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/addresses/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Adresy
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminCustomerThreads&amp;token=7b9389df962dc7751ebdcd6500b2a52b\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Obsługa klienta
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminCustomerThreads&amp;token=7b9389df962dc7751ebdcd6500b2a52b\" class=\"link\"> Obsługa klienta
                                </a>
                              </li>

            ";
        // line 718
        echo "                                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/customer-service/order-messages/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Wiadomości zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminReturn&amp;token=272cf8d17bb34417d4f92854750b6d68\" class=\"link\"> Zwroty produktów
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/salon_paznokci_jjs/admin1/index.php/modules/metrics/legacy/stats?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statystyki
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                               ";
        // line 748
        echo "                             </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"166\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/modules/metrics/legacy/stats?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Statystyki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"167\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/modules/metrics?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Ulepszanie</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/salon_paznokci_jjs/admin1/index.php/modules/mbo/modules/catalog/?_token=";
        // line 784
        echo "kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Moduły
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"159\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/modules/mbo/modules/catalog/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/improve/modules/manage?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Menedżer modułów
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                           ";
        // line 811
        echo "             </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=dadfac58c071e75a6dce6c234b750678\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Wygląd
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"168\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=dadfac58c071e75a6dce6c234b750678\" class=\"link\"> Theme modules
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/modules/mbo/themes/catalog/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Katal";
        // line 839
        echo "og szablonów
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/modules/improve/design/themes?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Customization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/improve/design/mail_theme/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Szablon e-maila
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/improve/design/cms-pages/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Strony
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
      ";
        // line 871
        echo "                          <a href=\"/salon_paznokci_jjs/admin1/index.php/improve/design/modules/positions/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Pozycje
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminImages&amp;token=88deb9c002a53614b87c62b0fb20a59a\" class=\"link\"> Zdjęcia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/modules/link-widget/list?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Lista linków
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminCarriers&amp;token=a3e4673b488356fa80c3c2bf7a04e3e7\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      ";
        // line 901
        echo "Wysyłka
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminCarriers&amp;token=a3e4673b488356fa80c3c2bf7a04e3e7\" class=\"link\"> Przewoźnicy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/improve/shipping/preferences/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/salon_paznokci_jjs/admin1/index.php/improve/payment/payment_methods?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcD";
        // line 931
        echo "Gp78tU\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Płatność
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/improve/payment/payment_methods?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Płatności
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/improve/payment/preferences?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminIntern";
        // line 963
        echo "ational\">
                    <a href=\"/salon_paznokci_jjs/admin1/index.php/improve/international/localization/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Międzynarodowe
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/improve/international/localization/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Lokalizacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/improve/international/zones/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Położenie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                ";
        // line 993
        echo "              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/improve/international/taxes/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Podatki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/improve/international/translations/settings?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Tłumaczenia
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"139\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=119fe5fcdd7db29dc8300076239e8a7d\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-139\" class=\"submenu panel-colla";
        // line 1022
        echo "pse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=119fe5fcdd7db29dc8300076239e8a7d\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminPsfacebookModule&amp;token=8e071b34cca752278edb307050abd4bf\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Konfiguruj</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"151\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/salon_paznokci_jjs/admin1/index.php/modules/pseditionbasic/settings?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\">
                      <i class=\"material-icons mi-sett";
        // line 1057
        echo "ings\">settings</i>
                      <span>
                      Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/shop/preferences/preferences?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Preferencje
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/shop/preferences/preferences?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Ogólny
                                </a>
                              </li>

                                                     ";
        // line 1089
        echo "                             
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/shop/order-preferences/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/shop/product-preferences/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/shop/customer-preferences/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/shop/contacts/?_token=kSJPy5nSTZ";
        // line 1117
        echo "oukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Kontakt
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/shop/seo-urls/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Ruch
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminSearchConf&amp;token=598c9f97b70175ca3a423eeed1b4fece\" class=\"link\"> Szukaj
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/system-information/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Zaawansowane
                   ";
        // line 1148
        echo "   </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/system-information/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Informacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/performance/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Wydajność
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/administration/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Administracja
                                </a>
          ";
        // line 1176
        echo "                    </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/emails/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/import/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Importuj
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/employees/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Zespół
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanc";
        // line 1206
        echo "ed/sql-requests/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Baza danych
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/logs/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Logi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/webservice-keys/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> API
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/feature-flags/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Nowe i eksperymentalne funkcje
                                </a>
                              </li>

                                                ";
        // line 1234
        echo "                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/security/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"link\"> Bezpieczeństwo
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"127\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminKlaviyoPsConfig&amp;token=395f8e38e00c7c170fe4a62e9585a434\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Zaawansowane</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanc";
        // line 1277
        echo "ed/performance/?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" aria-current=\"page\">Wydajność</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Wydajność          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/performance/clear-cache?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\"                  title=\"Wyczyść pamięć podręczną\"                                  >
                  <i class=\"material-icons\">delete</i>                  Wyczyść pamięć podręczną
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Pomoc\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/salon_paznokci_jjs/admin1/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpl%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D8.2.0%2526country%253Dpl/Pomoc?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\"
                   id=\"product_form_open_help\"
                >
                  Pomoc
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                       ";
        // line 1325
        echo "       <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-clear_cache\"
              href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/performance/clear-cache?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\"              title=\"Wyczyść pamięć podręczną\"            >
              Wyczyść pamięć podręczną
              <i class=\"material-icons\">delete</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Pomoc\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/salon_paznokci_jjs/admin1/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpl%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D8.2.0%2526country%253Dpl/Pomoc?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\"
            >
              Pomoc
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1356
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"mt-3\">
    Wersja mobilna tej strony nie jest jeszcze dostępna.
  </p>
  <p class=\"mt-2\">
    Prosimy korzystać z komputera stacjonarnego, aby uzyskać dostęp do tej strony, dopóki nie zostanie zoptymalizowana pod kątem urządzeń mobilnych.
  </p>
  <p class=\"mt-2\">
    Dziękujemy.
  </p>
  <a href=\"/salon_paznokci_jjs/admin1/index.php/modules/pseditionbasic/homepage?_token=kSJPy5nSTZoukHVvvH2uaOiAvHPIFhsfr7gcDGp78tU\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Wstecz
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1390
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 119
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1356
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1390
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__9865513ff4785bb52a6a171e62b510d9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1567 => 1390,  1546 => 1356,  1535 => 119,  1526 => 1390,  1486 => 1356,  1453 => 1325,  1403 => 1277,  1358 => 1234,  1328 => 1206,  1296 => 1176,  1266 => 1148,  1233 => 1117,  1203 => 1089,  1169 => 1057,  1132 => 1022,  1101 => 993,  1069 => 963,  1035 => 931,  1003 => 901,  971 => 871,  937 => 839,  907 => 811,  878 => 784,  840 => 748,  808 => 718,  776 => 688,  742 => 656,  709 => 625,  679 => 597,  646 => 566,  613 => 535,  572 => 496,  526 => 452,  507 => 435,  454 => 384,  408 => 340,  358 => 292,  313 => 249,  272 => 210,  254 => 194,  212 => 154,  172 => 119,  138 => 87,  118 => 69,  87 => 40,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9865513ff4785bb52a6a171e62b510d9", "");
    }
}
