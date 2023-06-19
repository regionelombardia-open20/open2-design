<?php

use open20\design\Module;
use \yii\helpers\Html;
use open20\design\utility\DesignUtility;
use open20\cms\dashboard\models\CmsDashSidebarItem;

$openOnLoadPage = isset($openOnLoadPage) ? $openOnLoadPage : false;

if ($openOnLoadPage) {
    $sidebarClasses = 'sidebar-redattore affix-parent';
} else {
    $sidebarClasses = 'sidebar-redattore affix-parent sidebar-small';
}
$sidebarItems = CmsDashSidebarItem::getSidebarItems();

$currentUrl = \yii\helpers\Url::current();

$activeUrlDashboard = (strpos($currentUrl, '/dashboards/d1/index') !== false) ? 'active' : '';
$activeUrlManageSidebar = (strpos($currentUrl, '/dashboards/cms-dash-sidebar-item/index') !== false) ? 'active' : '';
?>

<div class="modal fade" id="modalMyPlatform" tabindex="-1" role="dialog" aria-labelledby="modalMyPlatform" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel"><?= Module::t('amosdesign', 'Gestione portali') ?></h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span class="mdi mdi-close"></span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-2">Clicca sul blocco ed effettua l'accesso alla dashboard del portale</p>
                <div class="row variable-gutters m-t-30">
                    <div class="col-md-12 border-bottom mb-3">
                        <div class="card-my-platform">
                            <a href="javascript:void(0)" class="bullet-platform-online active" title="Loggato su Portale Regione Lombardia" data-toggle="tooltip"></a>
                            <a href="/dashboards/d1/index" title="Vai alla dashboard">
                                <div class="img-platform">
                                    <img src="/img/rl.png" alt="Portale di Regione Lombardia logo" class="img-fluid">
                                </div>
                                <div class="info-platform">
                                    <div class="name-platform"><?= \Yii::$app->name ?></div>
                                    <?php
                                    $profilo = '';
                                    $upc = \open20\amos\admin\models\UserProfileClassesUserMm::findOne(['user_id' => \Yii::$app->user->id]);
                                    if (!empty($upc)){
                                        $profile = $upc->userProfileClasses;
                                        if (!empty($profile)){
                                            $profilo = $profile->name;
                                        }
                                    }
                                    ?>
                                    <div class="ruolo-platform small"><?= $profilo ?></div>
                                </div>

                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <div class="card-my-platform disabled">
                            <a tabindex="0" href="javascript:void(0)" role="button" data-toggle="popover" data-trigger="focus" title="Open Innovation" data-content="Accesso momentaneamente bloccato" data-placement="top">
                                <div class="img-platform">
                                    <img src="/img/portale.jpg" alt="Open Innovation logo" class="img-fluid">
                                </div>
                                <div class="info-platform">
                                    <div class="name-platform">Open Innovation</div>
                                    <div class="ruolo-platform small">Capo Redattore</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card-my-platform disabled">
                            <a tabindex="0" href="javascript:void(0)" role="button" data-toggle="popover" data-trigger="focus" title="Lombardia Informa" data-content="Accesso momentaneamente bloccato per demo" data-placement="top">
                                <div class="img-platform">
                                    <img src="/img/li.png" alt="Lombardia Informa logo" class="img-fluid">
                                </div>

                                <div class="info-platform">
                                    <div class="name-platform">Lombardia Informa</div>
                                    <div class="ruolo-platform small">Redattore</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<nav id="sidebarLeftRedattore" class="<?= $sidebarClasses ?>">
    <div class="sidebar-nav affix-top">
        <div class="scrollable-nav">
            <ul class="nav sidebar-list">
                <?php foreach($sidebarItems as $sidebarItem) :
                    $liClass = 'nav-item';
                    $liClass = $sidebarItem->class_container ? $liClass . ' ' . $sidebarItem->class_container : $liClass;
                    $liId = $sidebarItem->id_container ? $sidebarItem->id_container : '';

                    ?>
                    <li class="<?= $liClass ?> JqueryItem-<?= $sidebarItem->id ?>" id="<?= $liId ?>" >
                        <?php
                        // Discriminatore: se il link contiene slash è un link, altrimenti contiene sicuramente backslash quindi è un path

                        if(strpos($sidebarItem->link, '\\') !== false) { // WIDGET
                            $widgetModule = DesignUtility::getWidgetPlugin($sidebarItem->link);
                            $widgetModule = \Yii::$app->getModule($widgetModule);
                            if(!empty($widgetModule)){
                                echo $sidebarItem->link::widget([
                                    'sidebarTitle' => $sidebarItem->label,
                                    'sidebarMousehoverDescription' => $sidebarItem->description,
                                    'sidebarIcon' => $sidebarItem->icon_name
                                ]);
                            }
                        }
                        else { // LINK
                            $text = '<span class="mdi mdi-' . $sidebarItem->icon_name . ' icon-sidebar"></span><span class="nav-label-link">' . Module::t('amosdesign', $sidebarItem->label) . '</span>';
                            if($sidebarItem->id == 10) {
                                $addedOptions = [
                                    'data-toggle' => 'modal',
                                    'data-target' => '#modalMyPlatform'
                                ];
                            }
                            else $addedOptions = [];
                            echo Html::a($text,
                                [$sidebarItem->link],
                                \yii\helpers\ArrayHelper::merge(
                                    [
                                        'class' => "nav-item-link {$sidebarItem->active}",
                                        'title' => $sidebarItem->description,
                                        'target' => $sidebarItem->isTargetBlank ? '_blank' : ''
                                    ],
                                    $addedOptions
                                )
                            );
                            // Link shortcut
                            if($sidebarItem->link_shortcut) {
                                echo Html::a('<span class="mdi mdi-plus-circle-outline icon-add-new"></span>',
                                    [$sidebarItem->link_shortcut],
                                    [
                                        'class' => 'btn-add-new',
                                        'title' => $sidebarItem->shortcut_description,
                                        'data-toggle' => 'tooltip',
                                        'data-placement' => 'right',
                                        'target' => $sidebarItem->isTargetBlank ? '_blank' : ''
                                    ]
                                );
                            }
                        } ?>
                    </li>
                <?php endforeach; ?>

                <?php if(Yii::$app->user->can('ADMIN')) : ?>
                    <li class="nav-item">
                        <a href="/dashboards/cms-dash-sidebar-item/index" class="nav-item-link <?= $activeUrlManageSidebar ?>" title="Gestisci Sidebar">
                            <span class="mdi mdi-cog icon-sidebar"></span><span class="nav-label-link"><?= Module::t('amosdesign', 'Gestione') ?></span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>

        </div>
        <button onclick="toggleSidebar()" class="btn btn-toggle-sidebar" title="Espandi / Riduci sidebar">
            <span class="mdi mdi-menu-left mdi-24px"></span>
        </button>
    </div>

</nav>
