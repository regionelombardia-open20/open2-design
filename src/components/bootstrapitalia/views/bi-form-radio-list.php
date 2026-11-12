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

$generalListLabel = (isset($options['general-list-label'])) ? $options['general-list-label'] : false;

?>
<?php if ($generalListLabel) : ?>
    <div class="label-style">
        <p class="mb-0">
            <?= $generalListLabel ?>
        </p>
    </div>
<?php endif ?>
<div class="form-group">
    
        <?php if (empty($items) || !is_array($items)) { ?>

            <input class="form-check-input" type="radio" id="<?= $inputId ?>-id" value="<?= $model->$attribute ?>">
            <label class="form-check-label" for="<?= $inputId ?>-id"><?= $attribute ?></label>
            <?php
        } else {

            $i = 0;
            foreach ($items as $key => $value) {
                $idradio = $inputId . substr(uniqid(), -3);
            ?>
                <div class="form-check <?= $classInline ?>" id="<?= $inputId; ?>">
                <input name="<?= $name ?>" type="radio" id="<?= $idradio ?>" value="<?= $key ?>" <?= ($model->$attribute == $key) ? 'checked' : '' ?>>
                <label for="<?= $idradio ?>"><?= $value ?></label>
                </div>
        <?php
                $i++;
            }
        }
        ?>

   
</div>