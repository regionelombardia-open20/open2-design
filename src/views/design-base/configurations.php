<?php

use open20\design\assets\BootstrapItaliaDesignAsset;
use open20\design\assets\PrismJSAsset;

$bootstrapItaliaAsset = BootstrapItaliaDesignAsset::register($this);
$PrismJSAsset = PrismJSAsset::register($this);
?>

<div class="py-4">

    <?=
    $this->render(
        '@vendor/open20/design/src/components/bootstrapitalia/views/bi-back-button'
    );
    ?>

    <h1>LISTA CONFIGURAZIONI DESIGN</h1>
    <p class="equal-font-size-h4">Le configurazioni vanno inserite nel file <strong>common/common/config/params.php</strong> e sostituiscono le precedenti.</p>
    <p>Viene visualizzato il badge <span class="badge badge-success">Attivo</span> se la configurazione è attiva nella piattaforma corrente</p>
    <hr>
    <h2 class="mt-5">Gestione loghi</h2>
    <h3>Loghi in header</h3>
    <p>Array unico di configurazione denominato <strong>logoConfigurations</strong></p>
    <p>Ogni array di primo livello rappresenta un <strong>logo</strong> che sarà visualizzato nella zona header (parte alta se positionTop = TRUE).</p>
    <div class="row variable-gutters mt-5">
        <div class="col-md-5">
            <p class="text-uppercase font-weight-bold">Lista configurazioni</p>
            <hr>
            <ul>
                <li>
                    <strong>logoImg</strong> : rappresenta il path del file (attualmente deve essere presente sia in backend/web che in frontend/web)
                </li>
                <li>
                    <strong>logoText</strong> : rappresenta la stringa stampata
                </li>
                <li>
                    <strong>logoAlt</strong> : attributo alt
                </li>
                <li>
                    <strong>logoClass</strong> : classe aggiuntiva
                </li>
                <li>
                    <strong>logoUrl</strong> : link associato; se passato 'frontendUrl' andrà a rimpiazzarsi con Yii::$app->params['platform']['frontendUrl'], stessa cosa per 'backendUrl'
                </li>
                <li>
                    <strong>logoTitle</strong> : title link
                </li>
                <li>
                    <strong>logoUrlTarget</strong> : target link
                </li>
                <li>
                    <strong>positionTop</strong> => TRUE: posiziona il logo nella parte alta
                </li>
            </ul>
        </div>
        <div class="col-md-7">
            <p class="text-uppercase">Esempio</p>
            <hr>
            <pre>
<code class="language-php">
'logoConfigurations' => [
    'firstLogo' => [
        'logoImg' => '/img/Logo-Preference-Center.svg',
        'logoAlt' => 'logo Lombardia Informa',
    ],
    'topLogo' => [
        'logoImg' => '/img/logo_regione_lombardia-bianco.svg',
        'logoAlt' => 'logo Regione Lombardia',
        'logoPosition' => 'd-xs-block logo-rl-top',
        'logoUrl' => 'https://regione.lombardia.it',
        'logoTitle' => 'Vai al portale di Regione Lombardia',
        'logoUrlTarget' => '_blank',
        'positionTop' => true,
    ]
],
</code>
</pre>
        </div>

    </div>
    <hr>
    <h2 class="mt-5">Configurazioni di layout</h2>
    <p>Array unico di configurazione denominato <strong>layoutConfigurations</strong></p>
    <div class="row variable-gutters mt-5">
        <div class="col-md-5">
            <p class="text-uppercase font-weight-bold">Lista configurazioni</p>
            <hr>
            <h3>Header</h3>
            <ul>
                <li>
                    <strong>
                        disableThemeLightHeader
                        <?php if (\Yii::$app->params['layoutConfigurations']['disableThemeLightHeader']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : true => disabilita classe theme-light
                </li>
                <li>
                    <strong>
                        fluidContainerHeader
                        <?php if (\Yii::$app->params['layoutConfigurations']['fluidContainerHeader']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : if true switch container class with container-fluid, also enabled as a <u>view parameter</u>
                </li>

                <li>
                    <strong>
                        customUserNotLoggedHeader
                        <?php if (\Yii::$app->params['layoutConfigurations']['customUserNotLoggedHeader']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : path list link user not logged view custom
                </li>
                <li>
                    <strong>
                        hideGlobalSearchHeader
                        <?php if (\Yii::$app->params['layoutConfigurations']['hideGlobalSearchHeader']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : true => hide global search
                </li>
                <li>
                    <strong>
                        disableSmallHeader
                        <?php if (\Yii::$app->params['layoutConfigurations']['disableSmallHeader']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : true => disable class it-small-header
                </li>
                <li>
                    <strong>
                        showSocialHeader
                        <?php if (\Yii::$app->params['layoutConfigurations']['showSocialHeader']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : true => show social in header
                </li>
                <li>
                    <strong>
                        enableHeaderStickyHeader
                        <?php if (\Yii::$app->params['layoutConfigurations']['enableHeaderStickyHeader']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : true => abilita sticky header
                </li>
                <li>
                    <strong>
                        hideAssistance
                        <?php if (\Yii::$app->params['assistance']['hideAssistanceHeader']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : false => show assistance in header
                </li>
            </ul>
            <h3>Menu</h3>
            <ul>
                <li>
                    <strong>
                        hideHamburgerMenuHeader
                        <?php if (\Yii::$app->params['layoutConfigurations']['hideHamburgerMenuHeader']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : true => hide hamburger menu
                </li>
                <li>
                    <strong>
                        showAlwaysHamburgerMenuHeader
                        <?php if (\Yii::$app->params['layoutConfigurations']['showAlwaysHamburgerMenuHeader']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : true => hamburger menu persistent for all media
                </li>
                <li>
                    <strong>
                        hideLangSwitchMenuHeader
                        <?php if (\Yii::$app->params['layoutConfigurations']['hideLangSwitchMenuHeader']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : true => hide language switcher menu
                </li>
                <li>
                    <strong>
                        customUserMenuHeader
                        <?php if (\Yii::$app->params['layoutConfigurations']['customUserMenuHeader']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : path list link user menu view custom
                </li>
                <li>
                    <strong>
                        hideUserMenuHeader
                        <?php if (\Yii::$app->params['layoutConfigurations']['hideUserMenuHeader']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : true => hide user menu, also enabled as a <u>view parameter</u>
                </li>
                <li>
                    <strong>
                        showSecondaryMenuHeader
                        <?php if (\Yii::$app->params['layoutConfigurations']['showSecondaryMenuHeader']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : true => visualizza un menu secondario sulla parte destra della navbar
                </li>
                <li>
                    <strong>
                        hideCmsMenuPluginHeader
                        <?php if (\Yii::$app->params['layoutConfigurations']['hideCmsMenuPluginHeader']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : true => nasconde il menu di default dei plugin
                </li>
            </ul>
            <h3>Footer</h3>
            <ul>
                <li>

                    <strong>
                        customPlatformFooter
                        <?php if (\Yii::$app->params['layoutConfigurations']['customPlatformFooter']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : path view custom
                </li>
                <li>
                    <strong>
                        showSocialFooter
                        <?php if (\Yii::$app->params['layoutConfigurations']['showSocialFooter']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : true => show social in header
                </li>
                <li>

                    <strong>
                        hideCookieBar
                        <?php if (\Yii::$app->params['layoutConfigurations']['hideCookieBar']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : true => hide cookiebar
                </li>
            </ul>
            <h3>Login</h3>
            <ul>
                <li>

                    <strong>
                        hideSpidDescriptionLogin
                        <?php if (\Yii::$app->params['layoutConfigurations']['hideSpidDescriptionLogin']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : true => hide description of SPID button
                </li>
                <li>

                    <strong>
                        showLiteModeLogin
                        <?php if (\Yii::$app->params['layoutConfigurations']['showLiteModeLogin']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : true => hide login form and render only login buttons
                </li>
            </ul>
            <h3>Breadcrumbs</h3>
            <ul>
                <li>
                    <strong>
                        hideBreadcrumbs
                        <?php if (\Yii::$app->params['layoutConfigurations']['hideBreadcrumbs']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : hide breadcrumbs in layout, also enabled as a <u>view parameter</u>
                </li>
            </ul>
            <h3>Privacy Pilicy</h3>
            <ul>
                <li>
                    <strong>
                        customPlatformPrivacyCheck
                        <?php if (\Yii::$app->params['layoutConfigurations']['customPlatformPrivacyCheck']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : path view custom
                </li>
            </ul>
        </div>
        <div class="col-md-7">
            <p class="text-uppercase">Esempio</p>
            <hr>
            <pre>
<code class="language-php">
'layoutConfigurations' => [
    'customPlatformFooter' => '@common/views/layouts/parts/footer-custom',
    'customUserMenuHeader' => '@common/views/layouts/parts/header-usermenu-custom',
    'fluidContainerHeader' => false,
    'hideHamburgerMenuHeader' => false,
    'showAlwaysHamburgerMenuHeader' => true,
    'hideGlobalSearchHeader' => true,
    'hideUserMenuHeader' => false,
    'hideSpidDescriptionLogin' => true,
    'hideIdpcButtonInfo' => true,
    'hideCookieBar' => true,
    'showLiteModeLogin' => false,
    'showSocialHeader' => false,
    'disableSmallHeader' => true,
    'hideAssistance' => \Yii::$app->params['assistance']['hideAssistanceHeader'])
],
</code>
        </div>
    </div>

    <h2 class="mt-5">Configurazioni di link</h2>
    <p>Array unico di configurazione denominato <strong>linkConfigurations</strong> (gli override valgono per tutta la piattaforma)</p>
    <div class="row variable-gutters mt-5">
        <div class="col-md-6">
            <p class="text-uppercase font-weight-bold">Lista configurazioni</p>
            <hr>
            <ul>
                <li>
                    <strong>
                        privacyPolicyLinkCommon
                        <?php if (\Yii::$app->params['linkConfigurations']['privacyPolicyLinkCommon']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : override privacy policy url
                </li>
                <li>

                    <strong>
                        cookiePolicyLinkCommon
                        <?php if (\Yii::$app->params['linkConfigurations']['cookiePolicyLinkCommon']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : override cookie policy url
                </li>
                <li>

                    <strong>
                        registrationLinkCommon
                        <?php if (\Yii::$app->params['linkConfigurations']['registrationLinkCommon']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : override registration url
                </li>
                <li>
                    <strong>
                        loginLinkCommon
                        <?php if (\Yii::$app->params['linkConfigurations']['loginLinkCommon']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : override login url
                </li>
                <li>
                    <strong>
                        logoutLinkCommon
                        <?php if (\Yii::$app->params['linkConfigurations']['logoutLinkCommon']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : override logout url
                </li>
                <li>
                    <strong>
                        forgotPasswordLinkCommon
                        <?php if (\Yii::$app->params['layoutConfigurations']['forgotPasswordLinkCommon']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : override forget password url
                </li>
                <li>
                    <strong>
                        userProfileLinkCommon
                        <?php if (\Yii::$app->params['layoutConfigurations']['userProfileLinkCommon']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : override user profile url
                </li>
                <li>
                    <strong>
                        pageSearchLinkCommon
                        <?php if (\Yii::$app->params['linkConfigurations']['pageSearchLinkCommon']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : search page url
                </li>
            </ul>
        </div>
        <div class="col-md-6">
            <p class="text-uppercase">Esempio</p>
            <hr>
            <pre>
<code class="language-php">
'linkConfigurations' => [
    'privacyPolicyLinkCommon' => '/it/privacy-policy',
    'cookiePolicyLinkCommon' => '/it/cookie-policy',
    'registrationLinkCommon' => '/preferenceuser/registration/preferences',
    'loginLinkCommon' => '/preferenceuser/preference/settings',
],
</code>
</pre>
        </div>
    </div>



    <h2 class="mt-5">Configurazioni contenitori menu CMS</h2>
    <p>Array unico di configurazione denominato <strong>menuCmsConfigurations</strong> (gli override valgono per tutta la piattaforma)</p>
    <div class="row variable-gutters mt-5">
        <div class="col-md-6">
            <p class="text-uppercase font-weight-bold">Lista configurazioni</p>
            <hr>
            <ul>
                <li>
                    <strong>
                        mainCmsMenu
                        <?php if (\Yii::$app->params['menuCmsConfigurations']['mainCmsMenu']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : override main cms menu container (default is 'default')
                </li>
                <li>
                    <strong>
                        secondaryCmsMenu
                        <?php if (\Yii::$app->params['menuCmsConfigurations']['secondaryCmsMenu']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : override secondary cms menu container (default is 'secondary')
                </li>
                <li>
                    <strong>
                        footerCmsMenu
                        <?php if (\Yii::$app->params['menuCmsConfigurations']['footerCmsMenu']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : override footer cms menu container (default is 'footer')
                </li>
            </ul>
        </div>
        <div class="col-md-6">
            <p class="text-uppercase">Esempio</p>
            <hr>
            <pre>
                <code class="language-php">
                'menuCmsConfigurations' => [
                        'mainCmsMenu' => 'mainMenuDesign',
                        'footerCmsMenu' => 'footerMenuDesign'
                    ],
                </code>
            </pre>
        </div>
    </div>

    <hr>
    <h2 class="mt-5">Configurazioni assistenza</h2>
    <p>Array unico di configurazione denominato <strong>assistance</strong> (gli override valgono per tutta la piattaforma)</p>
    <div class="row variable-gutters mt-5">
        <div class="col-md-6">
            <p class="text-uppercase font-weight-bold">Lista configurazioni</p>
            <hr>
            <ul>
                <li>
                    <strong>
                        hideAssistanceHeader
                        <?php if (\Yii::$app->params['assistance']['hideAssistanceHeader']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : false => show assistance in header
                </li>
                <li>
                    <strong>
                        type
                        <?php if (\Yii::$app->params['assistance']['type']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong>: <?= \Yii::$app->params['assistance']['type'] ?> => decide la modalità di uso dell'assistenza: url o email
                </li>
                <li>
                    <strong>
                        email
                        <?php if (\Yii::$app->params['assistance']['email']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : <?= \Yii::$app->params['assistance']['email'] ?> => indirizzo email dell'asistenza
                </li>
                <li>
                    <strong>
                        url
                        <?php if (\Yii::$app->params['assistance']['url']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : <?= \Yii::$app->params['assistance']['url'] ?> => url della pagina di assistenza
                </li>
            </ul>
        </div>
        <div class="col-md-6">
            <p class="text-uppercase">Esempio</p>
            <hr>
            <pre>
<code class="language-php">
'assistance' => [
        'hideAssistanceHeader' => false, //disable the assistance button
        'type' => 'url', //Assistance button mode: url or email
        'email' => 'ticket@openinnovationlombardia.it', //Assistance mail
        'url' => 'tickets' //Url to the assistance page
    ],
</code>
            </pre>
        </div>
    </div>
    <hr>
    <h2 class="mt-5">Configurazioni Social</h2>
    <p>Array unico di configurazione denominato <strong>socialConfigurations</strong> (gli override valgono per tutta la piattaforma)</p>
    <div class="row variable-gutters mt-5">
        <div class="col-md-6">
            <p class="text-uppercase font-weight-bold">Lista configurazioni</p>
            <hr>
            <ul>
                <li>
                    <strong>
                        facebook
                        <?php if (\Yii::$app->params['socialConfigurations']['facebook']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : link a facebook
                </li>
                <li>
                    <strong>
                        instagram
                        <?php if (\Yii::$app->params['socialConfigurations']['instagram']) : ?>
                            <span class="badge badge-success">Attivo</span>
                        <?php endif ?>
                    </strong> : link a instagram
                </li>
            </ul>
        </div>
        <div class="col-md-6">
            <p class="text-uppercase">Esempio</p>
            <hr>
            <pre>
<code class="language-php">
'socialConfigurations' => [
        'facebook' => 'https://facebook.com',
        'instagram' => 'https://instagram.com',
    ]
</code>
            </pre>
        </div>
    </div>
</div>