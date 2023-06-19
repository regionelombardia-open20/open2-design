<?php

use open20\design\Module;
use open20\design\utility\DateUtility;
use open20\design\assets\BootstrapItaliaDesignAsset;

$bootstrapItaliaAsset = BootstrapItaliaDesignAsset::register($this);

$direction = (isset($itemDirection)) ? 'flex-xl-' . $itemDirection : '';
$titleSize = (isset($titleSize)) ? $titleSize : 'h5';
$showSignature     = (isset($showSignature)) ? $showSignature : false; //firma alla fine della card
$model     = (isset($model) ? $model : null);
$actionModify      = (isset($actionModify) ? $actionModify : null);
$actionDelete      = (isset($actionDelete) ? $actionDelete : null);

//https://www.php.net/manual/en/datetime.format.php
$dayStart   = DateUtility::getDate($dateStart, 'php:d');
$monthStart = DateUtility::getDate($dateStart, 'php:M');
$yearStart  = DateUtility::getDate($dateStart, 'php:Y');
$dateStart  = DateUtility::getDate($dateStart);

$hideDateEnd = false;
if (isset($dateEnd)) {
    $dayEnd   = DateUtility::getDate($dateEnd, 'php:d');
    $monthEnd = DateUtility::getDate($dateEnd, 'php:M');
    $yearEnd  = DateUtility::getDate($dateEnd, 'php:Y');
    $dateEnd  = DateUtility::getDate($dateEnd);
} else {
    $hideDateEnd = (isset($hideDateEnd) ? $hideDateEnd : true);
}



$stateToComplete = (isset($stateToComplete)) ? $stateToComplete : Module::t('amosdesign', 'Da completare');
$stateNew = (isset($stateNew)) ? $stateNew : Module::t('amosdesign', 'Nuovo');
$stateConcluded = (isset($stateConcluded)) ? $stateConcluded : Module::t('amosdesign', 'Concluso');

if (isset($pollState)) {
    if ($pollState == '1') {
        $stateLabel = Module::t('amosdesign', 'Nuovo');
        $stateClass = "state-new";
        $callToAction = Module::t('amosdesign', 'Apri');
        $titleReadMore = Module::t('amosdesign', 'Apri il sondaggio');
    } else if ($pollState == '2') {
        $stateLabel = Module::t('amosdesign', 'Concluso');
        $stateClass = "state-completed";
        $callToAction = Module::t('amosdesign', 'Visualizza');
        $titleReadMore = Module::t('amosdesign', 'Visualizza il sondaggio');
    } else {
        //isOpenCommunity
        $stateLabel = Module::t('amosdesign', 'Da completare');
        $stateClass = "state-to-complete";
        $callToAction = Module::t('amosdesign', 'Completa');
        $titleReadMore = Module::t('amosdesign', 'Completa il sondaggio');
    }
};

$participants = (isset($participants)) ? $participants : '-';

$widthColumn = (isset($widthColumn)) ? $widthColumn :  'col-lg-4 col-md-6';

?>

<div class="container-sondaggi <?= $widthColumn ?> <?= $carouselClass ?>">
    <div class="card-wrapper card-space">
        <div class="card card-bg card-img <?= $direction ?>">
            <?php if ((isset($image))) : ?>
                <div class="image-wrapper position-relative h-100">
                    <a href="<?= $url ?>" title="Vai al sondaggio <?= $title ?>">
                        <img src="<?= $image ?>" alt="<?= Module::t('amosdesign', 'immagine della notizia') ?>" class="sondaggi-image img-fluid w-100 mh-100" />
                    </a>
                    <div class="sondaggi-date d-flex flex-column position-absolute text-uppercase text-center text-white w-100">
                        <div class="date-start d-flex justify-content-center font-weight-bold">
                            <span class="font-weight-light"> <?= Module::t('amosdesign', 'Aperto il') . ' ' ?></span>
                            <span class="card-day"><?= $dayStart ?></span>
                            <span class="card-month"><?= $monthStart ?></span>
                            <span class="card-year"><?= $yearStart ?></span>
                        </div>
                        <?php if (!$hideDateEnd) : ?>
                            <div class="date-end d-flex justify-content-center font-weight-bold">
                                <span class="font-weight-light"> <?= Module::t('amosdesign', 'Fino al') . ' ' ?></span>
                                <span class="card-day"><?= $dayEnd ?></span>
                                <span class="card-month"><?= $monthEnd ?></span>
                                <span class="card-year"><?= $yearEnd ?></span>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
                <div class="other-info-item d-flex align-items-center pl-3">
                    <div class="ml-2">
                        <?php
                        echo $this->render(
                            '@vendor/open20/design/src/components/bootstrapitalia/views/bi-context-menu-widget',
                            [
                                'buttons' => \open20\amos\core\utilities\ButtonUtility::composeContextMenuButtons($model, $actionModify, $actionDelete)
                            ]
                        );
                        ?>
                    </div>
                </div>
            <?php endif; ?>

            <div class="card-body position-relative">
                <?php if (($pollState == '1')) : ?>
                    <?php
                    echo $this->render(
                        '@vendor/open20/design/src/components/bootstrapitalia/views/bi-badge-new-pubblication'
                    );
                    ?>
                <?php endif; ?>

                <h3 class="card-title title-four-line mb-3 font-weight-bold <?= $titleSize ?>">
                    <a href="<?= $url ?>" class=" link-list-title d-inline" title="Vai al sondaggio <?= $title ?>">
                        <?= $title ?>
                    </a>

                    <?php if (!empty($contentScopesAvatar)) : ?>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="<?= $contentScopesAvatar ?>">
                            <svg class="icon icon-sm icon-secondary" role="img" aria-label="Numero visite">
                                <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#account-supervisor-circle"></use>
                            </svg>
                            <span class="sr-only"><?= $contentScopesAvatar ?></span>
                        </a>
                    <?php endif; ?>
                </h3>

                <p class="card-description small font-weight-light mb-2 title-two-line"><?= $description ?></p>


                <div class="dati-content d-flex flex-column flex-sm-row justify-content-between text-uppercase w-100">
                    <div class="partecipanti-stato font-weight-bold">
                        <span class="font-weight-light"><?= Module::t('amosdesign', 'Partecipanti') . ':' ?></span>
                        <p class="pertecipanti"><?= $participants ?></p>
                    </div>
                    <div class="partecipanti-stato font-weight-bold">
                        <span class="font-weight-light"><?= Module::t('amosdesign', 'Stato') . ':' ?></span>
                        <p class="stato <?= $stateClass ?>"><?= $stateLabel ?></p>
                    </div>
                </div>

                <a class="read-more" href="<?= $url ?>" title="<?= $titleReadMore ?>">
                    <span class="text"><?= $callToAction ?></span>
                    <!--                <svg class="icon">
                        <use xlink:href="< ?= $bootstrapItaliaAsset->baseUrl ?>/node_modules/bootstrap-italia/dist/svg/sprite.svg#it-arrow-right"></use>
                    </svg>
 -->
                </a>
            </div>
        </div>
    </div>
</div>