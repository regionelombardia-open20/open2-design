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

/**
 * @param string $inputId
 * @param Model $model
 */
use yii\helpers\Html;
use open20\design\Module;


$required = (isset($model) && $model->isAttributeRequired($attribute)) ? 'required' : '';

$placeholder = (isset($options['placeholder'])) ? 'placeholder="' . $options['placeholder'] . '"' : false;
$ariaDescribedBy = (isset($options['aria-describedby'])) ? 'aria-describedby="describedBy' . $inputId . '"' : false;

?>
<input type="<?= $type ?>" name="<?= $name ?>" class="form-control" <?=$placeholder?> <?=$ariaDescribedBy?> id="<?= $inputId ?>" value="<?= $value ?>" <?= $required ?>>
<?php if ($ariaDescribedBy) : ?>
<small id="describedBy<?= $inputId ?>" class="form-text text-muted"><?= $options['aria-describedby'] ?></small>
<?php endif ?>
<label for="<?= $inputId ?>"><?= $label ?><?= ($required) ? Html::tag('span','*',['class'=>'required-asterisk']) : ''?></label>
<div class="invalid-feedback"><?= Module::t('amosdesign', 'Per favore inserisci') ?> <?= $label ?>.</div>
