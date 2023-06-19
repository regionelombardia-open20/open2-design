<?php

/**
 * Aria S.p.A.
 * OPEN 2.0
 *
 *
 * @package    [NAMESPACE_HERE]
 * @category   CategoryName
 */

use open20\design\assets\BootstrapItaliaDesignAsset;
use yii\helpers\Html;
use yii\web\View;

$bootstrapItaliaAsset = BootstrapItaliaDesignAsset::register($this);
$isActive = $isActive? 1: 0;
$this->registerJs(<<<JS

$("a[id^='single-selection-list-topics-icon-to-remove-anchor-id']").click(function(event) {
    event.preventDefault();
    if ($isActive == 1) {
        $("#{$inputId}").val($(this).attr("data-tagId")).trigger('change');
    }
});

JS
, View::POS_READY);

$isActionDisabledClass = ($isActionDisabled) ? 'action-disabled' : '';

?>

<?= Html::hiddenInput($attribute, null, ['id' => $inputId]) ?>

<div class="form-check" id="single-selection-list-topics-icon-to-remove">
    <div class="row">
        <?php
        $count = 1;
        foreach ($choices as $topic) :
            $topicId = $topic->getId();
        ?>
            <div class="<?= $classCardContainer ?>">
            <div class="card-wrapper card-preference active <?= $isActionDisabledClass ?>" id="single-selection-list-topics-icon-to-remove-<?= $count ?>">
                    <div class="card rounded ">
                        <div class="card-body">
                            <div class="categoryicon-top">
                                <img src="<?= $baseIconsUrl . $topic->getIcon() ?>" alt="icona <?= $topic->getLabel() ?>" class="mr-3">
                                <span class="h6"><?= $topic->getLabel() ?></span>
                            </div>
                            <p class="card-text"><?= $topic->getDescription() ?></p>

                            <?php
                            if (!empty($additionalView)) {
                                echo Yii::$app->controller->renderPartial($additionalView, [
                                    'topic' => $topic
                                ]);
                            }
                            ?>
                            <a class="simple-link stretched-link" href="#" data-tagId="<?= $topic->getId() ?>" id="single-selection-list-topics-icon-to-remove-anchor-id-<?= $topic->getId() ?>">
                                <svg class="icon icon-sm icon-primary" role="img" aria-label="Icona per gestire la preferenza">
                                    <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#heart"></use>
                                </svg>
                                <span><?= (!is_null($linkLabel)) ? $linkLabel : Yii::t('design', 'Gestisci preferenza') ?></span></a>
                        </div>
                    </div>
                </div>
            </div>

        <?php
            $count++;
        endforeach;
        ?>
    </div>
</div>