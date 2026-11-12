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
 * @param int $starsNumber
 * @param string $attribute
 */

use yii\helpers\Html;
use open20\design\Module;
$bootstrapItaliaAsset = \open20\design\assets\BootstrapItaliaDesignAsset::register($this);
$required = (isset($model) && $model->isAttributeRequired($attribute)) ? 'required' : '';
$value = empty($value)? 0: $value;
?>

<div class="form-rating">
    <fieldset class="rating <?= ($readonly)? 'rating-read-only': 'rating-label' ?>">
        <legend><span class="sr-only"><?= Module::t('amosdesign', 'Valutazione')?></span> <span><?= $value ?> <?= Module::t('amosdesign', 'stelle')?></span> <span class="sr-only"><?= Module::t('amosdesign', 'su')?> <?= $starsNumber ?></span></legend>

        <?php
        for ($i = $starsNumber; $i>=1; $i--):
            $htmlId = $name . '-star' . $i . '-id';
            ?>
            <input type="radio" id="<?= $htmlId ?>" name="<?= $name ?>" value="<?= $i ?>" <?= ($value == $i)? 'checked': '' ?> <?= ($readonly)? 'disabled': '' ?>/>
            <label class = "full" for="<?= $htmlId ?>">
                <svg class="icon icon-sm"><use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/node_modules/bootstrap-italia/dist/svg/sprite.svg#it-star-full"></use></svg>
                <span class="sr-only"><?= Module::t('amosdesign', 'Valuta')?> <?= $i ?> <?= Module::t('amosdesign', 'stelle')?><?= Module::t('amosdesign', 'su')?><?= $starsNumber ?></span>
            </label>
            <?php
        endfor;
        ?>
    </fieldset>

    <!-- <div class="invalid-feedback">Error message...</div> -->
</div>