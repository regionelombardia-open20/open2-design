<?php

use open20\design\assets\BootstrapItaliaDesignAsset;

$currentAsset = BootstrapItaliaDesignAsset::register($this);

/**
 * @param string $inputId
 * @param Model $model
 */

use yii\helpers\Html;
use yii\web\View;
use open20\design\Module;

$ariaDescribedBy = true;

$required = (isset($model) && $model->isAttributeRequired($attribute)) ? 'required' : '';
$minCharsNumber = (isset($options['minCharsNumber'])) ?: '3';

$placeholder = (isset($options['placeholder'])) ? 'placeholder="' . $options['placeholder'] . '"' : false;
$ariaDescribedBy = (isset($options['aria-describedby']) && ($ariaDescribedBy == true) ) ? 'aria-describedby="describedBy' . $inputId . '"' : false;

$jsInputSearch = <<< JS

$('input#{$inputId}').keyup(function() {
   if(this.value.length >= {$minCharsNumber}) {
    $('button#btnjsInputReset{$inputId}').removeClass('d-none');
   }
   if(this.value.length == 0) {
    $('button#btnjsInputReset{$inputId}').addClass('d-none');
   }
});

$('button#btnjsInputReset{$inputId}').on('click',function(){
    $('input#{$inputId}').val('');
    $(this).toggleClass('d-none');
});

JS;
$this->registerJs($jsInputSearch, View::POS_READY);
?>

<div class="input-group">
    <input type="<?= $type ?>" name="<?= $name ?>" class="form-control" <?= $placeholder ?> <?= $ariaDescribedBy ?> id="<?= $inputId ?>" value="<?= $value ?>" <?= $required ?>>
    <?php if ($ariaDescribedBy) : ?>
        <small id="describedBy<?= $inputId ?>" class="form-text text-muted"><?= $options['aria-describedby'] ?></small>
    <?php endif ?>
    <label for="<?= $inputId ?>"><?= $label ?><?= ($required) ? Html::tag('span', '*', ['class' => 'required-asterisk']) : '' ?></label>
    <div class="input-group-append">
        
        <button title="Cerca" class="btn btn-xs border-tertiary" type="submit">
            <svg class="icon icon-tertiary mr-1">
                <use xlink:href="<?= $currentAsset->baseUrl ?>/node_modules/bootstrap-italia/dist/svg/sprite.svg#it-search"></use>
            </svg>
            <span class="sr-only"><?= Module::t('amosdesign','Cerca')?></span>
        </button>
    </div>
    <div class="invalid-feedback"><?= Module::t('amosdesign','Per favore inserisci') . ' ' . $label ?>.</div>
    <div class="valid-feedback"><?= Module::t('amosdesign','Validato!')?></div>
</div>