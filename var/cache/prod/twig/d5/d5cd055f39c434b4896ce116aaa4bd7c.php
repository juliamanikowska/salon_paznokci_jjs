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

/* __string_template__639f2df97daad5377b5fa13365d3074c */
class __TwigTemplate_7fbbf5a1c8cb79560df4da42db569202 extends Template
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

<title>Home • Salon paznokci JJ's</title>

  <script type=\"text/javascript\">
    var help_class_name = 'HOME';
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
    var token = '12ef90eaeabf2f9e0cbd8ef62fb4994c';
    var currentIndex = 'index.php?controller=HOME';
    var employee_token = 'cb2922837de5480e80e7c5ce9fbff2ba';
    var choose_language_translate = 'Wybierz język:';
    var default_language = '1';
    var admin_modules_link = '/salon_paznokci_jjs/admin1/index.php/improve/modules/manage?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss';
    var admin_notification_get_link = '/salon_paznokci_jjs/admin1/index.php/common/notifications?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss';
    var admin_notification_push_link = adminNotificationPushLink = '/salon_paznokci_jjs/admin1/index.php/common/notifications/ack?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss';
    var tab_module";
        // line 41
        echo "s_list = '';
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
var changeFormLanguageUrl = \"\\/salon_paznokci_jjs\\/admin1\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\";
var contextPsA";
        // line 70
        echo "ccounts = {\"currentContext\":{\"type\":1,\"id\":1},\"psxName\":\"ps_edition_basic\",\"psIs17\":true,\"psAccountsVersion\":\"7.0.8\",\"psAccountsIsInstalled\":true,\"psAccountsInstallLink\":null,\"psAccountsIsEnabled\":true,\"psAccountsEnableLink\":\"http:\\/\\/localhost\\/salon_paznokci_jjs\\/admin1\\/index.php\\/improve\\/modules\\/manage\\/action\\/enable\\/ps_accounts?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\",\"psAccountsIsUptodate\":true,\"psAccountsUpdateLink\":null,\"user\":{\"uuid\":null,\"email\":null,\"emailIsValidated\":false,\"isSuperAdmin\":true},\"backendUser\":{\"email\":\"juliamanikowska54@gmail.com\",\"employeeId\":1,\"isSuperAdmin\":true},\"currentShop\":{\"id\":\"1\",\"name\":\"Salon paznokci JJ's\",\"domain\":\"localhost\",\"domainSsl\":\"localhost\",\"physicalUri\":\"\\/salon_paznokci_jjs\\/\",\"virtualUri\":\"\",\"frontUrl\":\"https:\\/\\/localhost\\/salon_paznokci_jjs\\/\",\"uuid\":null,\"publicKey\":\"-----BEGIN RSA PUBLIC KEY-----\\r\\nMIGJAoGBANHjaMJEWuSHEG8TkGGo7gyaSrMyVTKaV+ugng6nbHxigYt7a0TrK7+u\\r\\nlm6JBOn3fDrv2t207vGv6Ox+R2g8+jxoRDPkyl6nU\\/aoVCjaIHI9ug4FFB\\/b9XP3\\r\\nDkUF40\\/n1JbgWjBkbYH5+QdT4ywrQFjk8Aw42px5Lgnf0b5Qgzz\\/AgMBAAE=\\r\\n-----END RSA PUBLIC KEY-----\",\"employeeId\":null,\"user\":{\"email\":null,\"emailIsValidated\":false,\"uuid\":null},\"url\":\"http:\\/\\/localhost\\/salon_paznokci_jjs\\/admin1\\/index.php?controller=AdminModules&configure=ps_edition_basic&setShopContext=s-1&token=a16feb3d4fc6f2ecde6d9e87632b5c02\",\"isLinkedV4\":false,\"unlinkedAuto\":false,\"multishop\":false,\"moduleName\":\"ps_edition_basic\",\"psVersion\":\"8.2.0\"},\"isShopContext\":true,\"superAdminEmail\":\"juliamanikowska54@gmail.com\",\"onboardingLink\":\"https:\\/\\/accounts.distribution.prestashop.net?shops=W3siaWQiOiIxIiwibmFtZSI6IlNhbG9uIHBhem5va2NpIEpKJ3MiLCJkb21haW4iOiJsb2NhbGhvc3QiLCJkb21haW5Tc2wiOiJsb2NhbGhvc3QiLCJwaHlzaWNhbFVyaSI6Ilwvc2Fsb25fcGF6bm9rY2lfampzXC8iLCJ2aXJ0dWFsVXJpIjoiIiwiZnJvbnRVcmwiOiJodHRwczpcL1wvbG9jYWxob3N0XC9zYWxvbl9wYXpub2tjaV9qanNcLyIsInV1aWQiOm51bGwsInB1YmxpY0tleSI6Ii0tLS0tQkVHSU4gUlNBIFBVQkxJQyBLRVktLS0tLVxyXG5NSUdKQW9HQkFOSGphTUpFV3VTSEVHOFRrR0dvN2d5Y";
        echo "VNyTXlWVEthVit1Z25nNm5iSHhpZ1l0N2EwVHJLNyt1XHJcbmxtNkpCT24zZkRydjJ0MjA3dkd2Nk94K1IyZzgranhvUkRQa3lsNm5VXC9hb1ZDamFJSEk5dWc0RkZCXC9iOVhQM1xyXG5Ea1VGNDBcL24xSmJnV2pCa2JZSDUrUWRUNHl3clFGams4QXc0MnB4NUxnbmYwYjVRZ3p6XC9BZ01CQUFFPVxyXG4tLS0tLUVORCBSU0EgUFVCTElDIEtFWS0tLS0tIiwiZW1wbG95ZWVJZCI6IjEiLCJ1c2VyIjp7ImVtYWlsIjpudWxsLCJlbWFpbElzVmFsaWRhdGVkIjpmYWxzZSwidXVpZCI6bnVsbH0sInVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdFwvc2Fsb25fcGF6bm9rY2lfampzXC9hZG1pbjFcL2luZGV4LnBocD9jb250cm9sbGVyPUFkbWluTW9kdWxlcyZjb25maWd1cmU9cHNfZWRpdGlvbl9iYXNpYyZzZXRTaG9wQ29udGV4dD1zLTEmdG9rZW49YTE2ZmViM2Q0ZmM2ZjJlY2RlNmQ5ZTg3NjMyYjVjMDIiLCJpc0xpbmtlZFY0IjpmYWxzZSwidW5saW5rZWRBdXRvIjpmYWxzZSwibXVsdGlzaG9wIjpmYWxzZSwibW9kdWxlTmFtZSI6InBzX2VkaXRpb25fYmFzaWMiLCJwc1ZlcnNpb24iOiI4LjIuMCJ9XQ==\",\"ssoResendVerificationEmail\":\"https:\\/\\/auth.prestashop.com\\/account\\/send-verification-email\",\"manageAccountLink\":\"https:\\/\\/auth.prestashop.com\\/login?lang=pl\",\"isOnboardedV4\":false,\"shops\":[{\"id\":\"1\",\"name\":\"Default\",\"shops\":[{\"id\":\"1\",\"name\":\"Salon paznokci JJ's\",\"domain\":\"localhost\",\"domainSsl\":\"localhost\",\"physicalUri\":\"\\/salon_paznokci_jjs\\/\",\"virtualUri\":\"\",\"frontUrl\":\"https:\\/\\/localhost\\/salon_paznokci_jjs\\/\",\"uuid\":null,\"publicKey\":\"-----BEGIN RSA PUBLIC KEY-----\\r\\nMIGJAoGBANHjaMJEWuSHEG8TkGGo7gyaSrMyVTKaV+ugng6nbHxigYt7a0TrK7+u\\r\\nlm6JBOn3fDrv2t207vGv6Ox+R2g8+jxoRDPkyl6nU\\/aoVCjaIHI9ug4FFB\\/b9XP3\\r\\nDkUF40\\/n1JbgWjBkbYH5+QdT4ywrQFjk8Aw42px5Lgnf0b5Qgzz\\/AgMBAAE=\\r\\n-----END RSA PUBLIC KEY-----\",\"employeeId\":null,\"user\":{\"email\":null,\"emailIsValidated\":false,\"uuid\":null},\"url\":\"http:\\/\\/localhost\\/salon_paznokci_jjs\\/admin1\\/index.php?controller=AdminModules&configure=ps_edition_basic&setShopContext=s-1&token=a16feb3d4fc6f2ecde6d9e87632b5c02\",\"isLinkedV4\":false,\"unlinkedAuto\":false,\"multishop\":false,\"moduleName\":\"ps_edition_basic\",\"psVersion\":\"8.2.0\",\"moduleVersion\":\"7.0.8\"}],\"multishop\":false,\"moduleName\":\"ps_edition_basic\",\"psVersion\":\"8.2.0\"}],\"adminAjaxLink\":\"http:\\/\\/localhost\\/salon_paznokci_jjs\\/admin1\\/in";
        echo "dex.php?controller=AdminAjaxPsAccounts&ajax=1&token=6cd5b17c188f80c8ad48e2bcbed4d402\",\"accountsUiUrl\":\"https:\\/\\/accounts.distribution.prestashop.net\",\"dependencies\":{\"ps_eventbus\":{\"isInstalled\":true,\"installLink\":\"http:\\/\\/localhost\\/salon_paznokci_jjs\\/admin1\\/index.php\\/improve\\/modules\\/manage\\/action\\/install\\/ps_eventbus?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\",\"isEnabled\":true,\"enableLink\":\"http:\\/\\/localhost\\/salon_paznokci_jjs\\/admin1\\/index.php\\/improve\\/modules\\/manage\\/action\\/enable\\/ps_eventbus?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\"}}};
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
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/js/jquery/plugins/jquery.c";
        // line 82
        echo "hosen.js\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/js/admin.js?v=8.2.0\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/admin1/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/js/tools.js?v=8.2.0\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/admin1/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/admin1/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/modules/ps_mbo/views/js/recommended-modules.js?v=4.12.0\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/salon_paznokci_jjs/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/salon_paznokci_jjs\\/admin1\\/index.php?controller=AdminGamification&token=0e63c07bed9c773a5f50b2e738267e49\";
            var current_id_tab = 149;
        </script><script type=\"module\" src=\"/salon_paznokci_jjs/modules/psxdesign/views/js/upgrade-notification.js\"></script>
    <script>
        window.userLocale  = 'pl';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopc";
        // line 105
        echo "orp/smb-edition-homepage/dist/assets/index.js\"></script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/salon_paznokci_jjs/admin1/index.php/common/notifications?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 120
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-pl home\"
  data-base-url=\"/salon_paznokci_jjs/admin1/index.php\"  data-token=\"0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/salon_paznokci_jjs/admin1/index.php/modules/pseditionbasic/homepage?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\"></a>
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
                 data-item=\"Ocena katalogu\"
      >Oce";
        // line 156
        echo "na katalogu</a>
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
        data-rand=\"63\"
        data-icon=\"\"
        data-method=\"add\"
        data-url=\"index.php/modules/pseditionbasic/homepage\"
        data-post-link=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminQuickAccesses&token=9c5c7962f4497a21adf5da296785d1a5\"
        data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
        data-link=\"Welcome - Lista\"
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
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"in";
        // line 196
        echo "put-group\">
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
        <a class=\"dropdown-item\" data-item=\"Moduły\" href=\"#\" data-value=\"7\" data-place";
        // line 211
        echo "holder=\"Nazwa modułu\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Moduły</a>
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
      <a class=\"dropdown-item quick-row-link\"
       href=\"http";
        // line 251
        echo "://localhost/salon_paznokci_jjs/admin1/index.php/sell/orders?token=d1f993870978a822b5bf00d79345717d\"
             data-item=\"Zamówienia\"
    >Zamówienia</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"14\"
      data-icon=\"\"
      data-method=\"add\"
      data-url=\"index.php/modules/pseditionbasic/homepage\"
      data-post-link=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminQuickAccesses&token=9c5c7962f4497a21adf5da296785d1a5\"
      data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
      data-link=\"Welcome - Lista\"
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
              Aby zarządzać ustawieniami konserwacji, przejdź do zakładki Preferencje &amp;gt; Ogólne &amp;gt; Przerwa techniczna.
          &lt;/p&gt;
                      ";
        // line 295
        echo "&lt;p class=&quot;text-left&quot;&gt;
              Administratorzy mogą uzyskać dostęp do frontu sklepu bez zapisywania swojego adresu IP.
            &lt;/p&gt;
                  \"
             href=\"/salon_paznokci_jjs/admin1/index.php/configure/shop/maintenance/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\"
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
              id=\"customers-tab\"
              data-toggle=\"tab\"
          ";
        // line 343
        echo "    data-type=\"customer\"
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
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  ";
        // line 389
        echo "</div>
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

      <a class=\"dropdown-item employee-link profile-link\" href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/employees/1/edit?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\">
      <i class=\"material-icons\">edit</i>
      <span>Twój profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=header";
        // line 436
        echo "employeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Zarządzaj swoim kontem PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=training-pl&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Szkolenie
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/pl/eksperci?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=expert-pl&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Znajdź eksperta
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/salon_paznokci_jjs/admin1/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=M8-GiHeS8fU9e6gQbnS88xt4V5oR_eJpay-paDkCP_Q&utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=addons-pl&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> PrestaShop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_2&utm_campaign=help-center-pl&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centrum Pomocy
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminLogin&amp;logout=1&amp;token=567cdf29bba809c948ae9a27343d865b\">
     ";
        // line 454
        echo " <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Wyloguj się</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/employees/toggle-navigation?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/salon_paznokci_jjs/admin1/index.php/modules/pseditionbasic/homepage?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.2.0</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"149\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"150\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/salon_paznokci_jjs/admin1/index.php/modules/pseditionbasic/homepage?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
";
        // line 499
        echo "                                        </li>
                                              
                  
                                                      
                  
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
                    <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/orders/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Zamówienia
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                ";
        // line 537
        echo "                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/orders/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/orders/invoices/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Faktury
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/orders/credit-slips/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Druki kredytowe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">";
        // line 567
        echo "
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/orders/delivery-slips/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Druk wysyłki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminCarts&amp;token=ca690e5ae90df007d9058023cd3c9f95\" class=\"link\"> Koszyki zakupowe
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/catalog/products?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\">
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
        // line 599
        echo "                 
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/catalog/products?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/catalog/categories?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Kategorie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/catalog/monitoring/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Monitorowanie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminAttributesGroups&amp;token=81936271b6ac0fdcdd81ba6cce050eaf\" class=\"link\"> Atrybuty i cechy
                                </a>
                              </li>

   ";
        // line 629
        echo "                                                                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/catalog/brands/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Marki i dostawcy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/attachments/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Pliki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminCartRules&amp;token=ff1e90e29f6bbd077784e0f3615cb484\" class=\"link\"> Rabaty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/stocks/?_token=0NSB4wJtl0swk7tT";
        // line 657
        echo "EHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Magazyn
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/customers/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\">
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
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/customers/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
             ";
        // line 690
        echo "                   <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/addresses/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Adresy
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
        // line 719
        echo "        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/sell/customer-service/order-messages/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Wiadomości zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminReturn&amp;token=272cf8d17bb34417d4f92854750b6d68\" class=\"link\"> Zwroty produktów
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/salon_paznokci_jjs/admin1/index.php/modules/metrics/legacy/stats?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statystyki
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                            ";
        // line 750
        echo "                </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"166\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/modules/metrics/legacy/stats?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Statystyki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"167\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/modules/metrics?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Ulepszanie</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/salon_paznokci_jjs/admin1/index.php/modules/mbo/modules/catalog/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\">
   ";
        // line 786
        echo "                   <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Moduły
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"159\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/modules/mbo/modules/catalog/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/improve/modules/manage?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Menedżer modułów
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                           ";
        // line 813
        echo "   
                  
                                                      
                  
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
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/modules/mbo/themes/catalog/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Katalog szablonów
                                </a>
           ";
        // line 842
        echo "                   </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/modules/improve/design/themes?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Customization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/improve/design/mail_theme/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Szablon e-maila
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/improve/design/cms-pages/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Strony
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/salon_paznokci_jjs/admin1/";
        // line 872
        echo "index.php/improve/design/modules/positions/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Pozycje
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminImages&amp;token=88deb9c002a53614b87c62b0fb20a59a\" class=\"link\"> Zdjęcia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/modules/link-widget/list?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Lista linków
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminCarriers&amp;token=a3e4673b488356fa80c3c2bf7a04e3e7\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Wysyłka
                      </span>
                       ";
        // line 904
        echo "                             <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminCarriers&amp;token=a3e4673b488356fa80c3c2bf7a04e3e7\" class=\"link\"> Przewoźnicy
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/improve/shipping/preferences/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/salon_paznokci_jjs/admin1/index.php/improve/payment/payment_methods?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\">
                      <i class=\"material";
        // line 933
        echo "-icons mi-payment\">payment</i>
                      <span>
                      Płatność
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/improve/payment/payment_methods?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Płatności
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/improve/payment/preferences?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Preferencje
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/salon_paznokci_jjs/adm";
        // line 965
        echo "in1/index.php/improve/international/localization/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\">
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
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/improve/international/localization/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Lokalizacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/improve/international/zones/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Położenie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"";
        // line 994
        echo "subtab-AdminParentTaxes\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/improve/international/taxes/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Podatki
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/improve/international/translations/settings?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Tłumaczenia
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
                                              <ul id=\"collapse-139\" class=\"submenu panel-collapse\">
                                                      
 ";
        // line 1025
        echo "                             
                                                            
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
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Konfiguruj</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"151\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/salon_paznokci_jjs/admin1/index.php/modules/pseditionbasic/settings?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Sett";
        // line 1060
        echo "ings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/shop/preferences/preferences?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\">
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
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/shop/preferences/preferences?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Ogólny
                                </a>
                              </li>

                                                                                  
                              
             ";
        // line 1092
        echo "                                               
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/shop/order-preferences/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Zamówienia
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/shop/product-preferences/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Produkty
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/shop/customer-preferences/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Klienci
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/shop/contacts/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Kontakt
                 ";
        // line 1119
        echo "               </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/shop/seo-urls/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Ruch
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/salon_paznokci_jjs/admin1/index.php?controller=AdminSearchConf&amp;token=598c9f97b70175ca3a423eeed1b4fece\" class=\"link\"> Szukaj
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/system-information/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Zaawansowane
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                  ";
        // line 1151
        echo "                                  keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/system-information/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Informacja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/performance/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Wydajność
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/administration/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Administracja
                                </a>
                              </li>

                                                                                  
                              
        ";
        // line 1181
        echo "                                                    
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/emails/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/import/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Importuj
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/employees/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Zespół
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/sql-requests/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Baza danych
                                </a>
                 ";
        // line 1209
        echo "             </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/logs/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Logi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/webservice-keys/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> API
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/feature-flags/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Nowe i eksperymentalne funkcje
                                </a>
                              </li>

                                                                                  
                              
                                                            
                      ";
        // line 1238
        echo "        <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/salon_paznokci_jjs/admin1/index.php/configure/advanced/security/?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"link\"> Bezpieczeństwo
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
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/salon_paznokci_jjs/admin1/index.php/modules/pseditionbasic/homepage?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" aria-current=\"page\">Welcome</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"";
        // line 1285
        echo "title\">
            Home          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Pomoc\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"https://help.prestashop-project.org/pl/doc/HOME?version=8.2.0&amp;country=pl\"
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
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Pomoc\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"https://help.prestashop-project.org/pl/doc/HOME?version=8.2.0&amp;country=pl\"
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
        // line 1346
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
  <a href=\"/salon_paznokci_jjs/admin1/index.php/modules/pseditionbasic/homepage?_token=0NSB4wJtl0swk7tTEHUxes5L22WnEg4kwM2P36uGFss\" class=\"btn btn-primary py-1 mt-3\">
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
        // line 1380
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 120
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1346
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

    // line 1380
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
        return "__string_template__639f2df97daad5377b5fa13365d3074c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1559 => 1380,  1538 => 1346,  1527 => 120,  1518 => 1380,  1478 => 1346,  1415 => 1285,  1366 => 1238,  1335 => 1209,  1305 => 1181,  1273 => 1151,  1239 => 1119,  1210 => 1092,  1176 => 1060,  1139 => 1025,  1106 => 994,  1075 => 965,  1041 => 933,  1010 => 904,  976 => 872,  944 => 842,  913 => 813,  884 => 786,  846 => 750,  813 => 719,  782 => 690,  747 => 657,  717 => 629,  685 => 599,  651 => 567,  619 => 537,  579 => 499,  532 => 454,  512 => 436,  463 => 389,  415 => 343,  365 => 295,  319 => 251,  277 => 211,  260 => 196,  218 => 156,  177 => 120,  160 => 105,  135 => 82,  119 => 70,  88 => 41,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__639f2df97daad5377b5fa13365d3074c", "");
    }
}
