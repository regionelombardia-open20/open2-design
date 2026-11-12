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

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use open20\design\Module;

\open20\design\assets\SelectDesignAsset::register($this);

$required    = (isset($model) && $model->isAttributeRequired($attribute)) ? 'required' : '';
?>

<?php
$enableGroup = false;
$tmp         = reset($items);
if ($tmp) {
    if (is_array($tmp)) {
        $enableGroup = true;
    }
}
?>

<div class="position-absolute z-index-1">
    <div class="progress-spinner progress-spinner-double size-sm progress-spinner-active z-index-1 position-relative"
         id="spinner-<?= $inputId ?>" style="display: none;">
        <div class="progress-spinner-inner"></div>
        <div class="progress-spinner-inner"></div>
        <span class="sr-only"><?= Module::t('amosdesign', 'Caricamento').'...' ?></span>
    </div>
</div>

<?php
$attrMultiple = '';
if ($multiple) {
    $attrMultiple = 'multiple="true"';
}
?>

<div class="bootstrap-select-wrapper" id="<?= $inputId ?>-wrapper">
    <label for="<?=$inputId ?>"><?= $label ?><?= ($required) ? Html::tag('span', '*', ['class' => 'required-asterisk']) : '' ?></label>
    <select <?= $attrMultiple ?> title="<?= $placeholder ?>" data-live-search="true" class="<?=
    $relatedId ? 'rellable-drop' : '';
    ?>" data-releted="<?= $relatedId; ?>" data-valued="<?= $value; ?>" data-action="<?= $dataAction; ?>" data-live-search-placeholder="Cerca" name="<?= $name ?>" id="<?= $inputId ?>">
    <!--            <option value="" title="Scegli una opzione" data-content="Annulla <span class='reset-label'></span>"></option>-->

        <?php if ($enableGroup) { ?>
            <?php foreach ($items as $labelGroup => $itemsValue) { ?>
                <optgroup label="<?= $labelGroup ?>">
                    <?php foreach ($itemsValue as $key => $optionLabel) {
                        ?>
                        <?php
                        $isSelected = (is_array($value)) ? in_array($key, $value) : ($value == $key);
                        ?>
                        <option value="<?= $key ?>" <?= $isSelected ? 'selected' : '' ?>><?= $optionLabel ?></option>
                    <?php } ?>
                </optgroup>
            <?php } ?>
        <?php } else { ?>
            <?php foreach ($items as $key => $optionLabel) { ?>
                <?php $isSelected = (is_array($value)) ? in_array($key, $value) : ($value == $key); ?>
                <option value="<?= $key ?>" <?= $isSelected ? 'selected' : '' ?>><?= $optionLabel ?></option>
            <?php } ?>
        <?php } ?>
    </select>
</div>

<?php
if (isset($dataAction)) {
    $csrParam = Yii::$app->request->csrfParam;
    $csrValue = Yii::$app->request->getCsrfToken();

    $this->registerJsVar('csrfParam', $csrParam);
    $this->registerJsVar('csrValue', $csrValue);
}
?>