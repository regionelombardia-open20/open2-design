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

$required = (isset($model) && $model->isAttributeRequired($attribute)) ? 'required' : '';
$checked = (isset($model) && $model->$attribute) || (isset($value) && !empty($value)) ? 'checked': '';

?>

<div class="form-check">

    <?php if (empty($items) || !is_array($items)) { ?>
        <?php echo Html::input('checkbox', $name, $value, $options) ?>
        <label class="form-check-label" for="<?= $inputId ?>"><?= $label ?><?= ($required) ? Html::tag('span', '*', ['class' => 'required-asterisk']) : '' ?></label>
        <?php
    } else {
        foreach ($items as $key => $value) {
            $idcheck = $inputId . substr(uniqid(), -3);
            ?>

            <input class="form-check-input" type="checkbox" id="<?= $idcheck ?>" value="<?= $key ?>" name="<?= $name ?>" <?= $required ?>>
            <label class="form-check-label" for="<?= $idcheck ?>"><?= $value ?></label>

            <?php
        }
    }
    ?>
    <!-- <div class="invalid-feedback">Error message...</div> -->
</div>