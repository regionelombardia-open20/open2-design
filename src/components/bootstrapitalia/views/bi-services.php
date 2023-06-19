<?php

use open20\design\Module;
use open20\design\assets\BootstrapItaliaDesignAsset;

$bootstrapItaliaAsset = BootstrapItaliaDesignAsset::register($this);

$titleSize = (isset($titleSize)) ? $titleSize : 'h5';

$model     = (isset($model) ? $model : null);
$actionModify      = (isset($actionModify) ? $actionModify : null);
$actionDelete      = (isset($actionDelete) ? $actionDelete : null);

$widthColumn = (isset($widthColumn)) ? $widthColumn :  'col-lg-4 col-md-6';

$newPublication = (isset($newPublication)) ? $newPublication : false;
$removeLink = (isset($removeLink)) ? $removeLink : false;

$labelCtaView = (isset($labelCtaView)) ? $labelCtaView : Module::t('amosdesign', 'info');
$titleCtaView = (isset($titleCtaView)) ? $titleCtaView : Module::t('amosdesign', 'Visualizza maggiori informazioni');

$labelCta = (isset($labelCta)) ? $labelCta : Module::t('amosdesign', 'Accedi');
$titleCta = (isset($titleCta)) ? $titleCta : Module::t('amosdesign', 'Accedi al servizio') . $title;


if (strlen($description) > 150) {
    $description = \open20\amos\core\utilities\StringUtils::truncateHTML(
        $description,
        147
    );
}
?>

<div class="card-container card-service <?= $widthColumn ?>">
    <div class="card-wrapper card-space">
        <div class="card card-bg">
            <div class="card-body h-100 d-flex flex-column justify-content-start">
                <div class="other-info-item d-flex justify-content-end align-items-center">
                    <?php if (($newPublication)) : ?>
                        <?php
                        echo $this->render(
                            '@vendor/open20/design/src/components/bootstrapitalia/views/bi-badge-new-pubblication'
                        );
                        ?>
                    <?php endif; ?>

                    <!-- Reference funzionamento da check_box_list_tags.php usato in preference (quando funzionerà la logica scommentare l'svg sotto)-->
                    <div class="box-fav-services">
                        <svg class="icon icon-s icon-primary" role="img" aria-label="Icona per attivare una preferenza">
                            <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#star-outline"></use>
                        </svg>
                        <!--  <svg class="icon icon-s icon-primary" role="img" aria-label="Icona per attivare una preferenza">
                            <use xlink:href="< ?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#star"></use>
                        </svg> -->
                    </div>



                    <div class="ml-2">
                        <?php
                        echo $this->render(
                            '@vendor/open20/design/src/components/bootstrapitalia/views/bi-context-menu-widget',
                            [
                                'buttons' => \open20\amos\core\utilities\ButtonUtility::composeContextMenuButtons($model, $actionModify, $actionDelete),
                                'model' => $model
                            ]
                        );
                        ?>
                    </div>
                </div>

                <div>
                    <p class="title-card font-weight-bold mb-2 <?= $titleSize ?>">
                        <?php if (!$removeLink && !empty($url)) : ?>
                            <a href="<?= $url ?>" class="text-decoration-none" title="<?= Module::t('amosdesign', 'Vai al servizio') . ' ' . $title ?>">
                                <?= $title ?>
                            </a>
                        <?php else : ?>
                            <?= $title ?>
                        <?php endif; ?>
                    </p>

                    <?php if ((!empty($abstract))) : ?>
                        <p class="abstract-card mb-0">
                            <?= $abstract ?>
                        </p>
                    <?php else : ?>
                        <div>
                            <?= $description ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="card-info-bottom d-flex justify-content-between align-content-center pt-4 mt-auto">
                    <div class="info d-flex pt-1">
                        <a class="btn btn-icon px-0" href="<?= $url ?>" title="<?= $titleCtaView ?>">
                            <svg class="icon icon-black">
                                <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#information"></use>
                            </svg>
                            <span class="text"><?= $labelCtaView ?></span>
                        </a>
                    </div>
                    <div>
                        <a class="btn btn-primary" href="<?= $urlCta ?>" title="<?= $titleCta ?>">
                            <span class="text"><?= $labelCta ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>