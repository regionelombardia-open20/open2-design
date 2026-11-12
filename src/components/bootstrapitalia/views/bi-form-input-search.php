<?php
/**
 * Aria S.p.A.
 * OPEN 2.0
 *
 * @package   open20\design
 * @author    Aria S.p.A. <protocollo@pec.ariaspa.it>
 * @license   GNU General Public License v3.0 <https://www.gnu.org/licenses/gpl-3.0.html>
 * @link      https://www.ariaspa.it/
 *
 * This file is part of OPEN 2.0.
 *
 * OPEN 2.0 is free software: you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OPEN 2.0 is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OPEN 2.0. If not, see <https://www.gnu.org/licenses/>.
 */

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
$searchIconClass = (isset($options['searchIconClass'])) ? $options['searchIconClass'] : 'icon-tertiary';
$ariaDescribedBy = (isset($options['aria-describedby']) && ($ariaDescribedBy == true) ) ? 'aria-describedby="describedBy' . $inputId . '"' : false;

$submitButtonId = $inputId . 'Btn';


$html_options = "";
if(isset($htmlOptions))
{
   if(is_array($htmlOptions))
   {
     foreach($htmlOptions as $key=>$opt)
     {
        $html_options .= $key . "='" . $opt . "' ";
     }
   }
}    


$jsInputSearch = <<< JS

var input = document.getElementById('{$inputId}');
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("{submitButtonId}").click();
  }
});


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
    <input type="<?= $type ?>" name="<?= $name ?>" class="form-control" <?= $placeholder ?> <?= $ariaDescribedBy ?> id="<?= $inputId ?>" value="<?= $value ?>" <?= $required ?> <?= $html_options ?>>
    <?php if ($ariaDescribedBy) : ?>
        <small id="describedBy<?= $inputId ?>" class="form-text text-muted"><?= $options['aria-describedby'] ?></small>
    <?php endif ?>
    <label for="<?= $inputId ?>"><?= $label ?><?= ($required) ? Html::tag('span', '*', ['class' => 'required-asterisk']) : '' ?></label>
    <div class="input-group-append d-flex align-items-center">
        <button title="Resetta filtro di ricerca" class="btn btn-xs border-tertiary d-none" type="reset" id="btnjsInputReset<?=$inputId?>">
            <svg class="icon icon-tertiary">
                <use xlink:href="<?= $currentAsset->baseUrl ?>/node_modules/bootstrap-italia/dist/svg/sprite.svg#it-close"></use>
            </svg>
            <span class="sr-only"><?= Module::t('amosdesign','Resetta ricerca')?></span>
        </button>
        <button id="<?=$submitButtonId?>" title="<?= Module::t('amosdesign','Cerca')?>" class="btn btn-xs border-tertiary" type="submit">
            <svg class="icon <?=$searchIconClass?> mr-1">
                <use xlink:href="<?= $currentAsset->baseUrl ?>/node_modules/bootstrap-italia/dist/svg/sprite.svg#it-search"></use>
            </svg>
            <span class="sr-only"><?= Module::t('amosdesign','Cerca')?></span>
        </button>
    </div>
    <div class="invalid-feedback"><?= Module::t('amosdesign','Per favore inserisci') . ' ' . $label ?>.</div>
    
</div>