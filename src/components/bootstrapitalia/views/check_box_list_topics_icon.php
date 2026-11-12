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
use yii\web\View;
use open20\design\Module;

$bootstrapItaliaAsset = BootstrapItaliaDesignAsset::register($this);

$this->registerJs(<<<JS

    $("input[id^='card-input-checkbox-']").click(function() {
        $("#card-preference-checkbox-id-" + $(this).val()).toggleClass("active");
   });

JS
, View::POS_READY);

?>

<div class="row">
    <?php
    foreach ($choices as $topic) :
        $topicId = $topic->getId();
        $checked = (in_array($topicId, $model->$attribute)) ? 'checked="checked"' : '';
    ?>

        <div class="<?= $classCardContainer ?>">
            <div class="card-wrapper card-preference card-preference-checkbox pb-3 <?= (!empty($checked))? 'active': '' ?>" id='card-preference-checkbox-id-<?= $topicId ?>'>
                <div class="card rounded bg-card-preference-bg">
                <div class="pretty p-icon p-toggle p-plain" id="card-input-toggle-<?= $topicId ?>">
                                <input type="checkbox" id="card-input-checkbox-<?= $topicId ?>" name="<?= $inputName ?>[]" value="<?= $topicId ?>" <?= $checked ?> />
                                <div class="state p-on">
                                    <svg class="icon icon-sm icon-primary" role="img" aria-label="Icona per attivare una preferenza">
                                        <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#heart"></use>
                                    </svg>
                                    <label for="card-input-checkbox-<?= $topicId ?>" class="sr-only">Attiva preferenza</label>
                                </div>

                                <div class="state p-off">
                                    <svg class="icon icon-sm icon-primary" role="img" aria-label="Icona per attivare una preferenza">
                                        <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#heart-outline"></use>
                                    </svg>
                                    <label for="card-input-checkbox-<?= $topicId ?>" class="sr-only"><?= Module::t('amosdesign', 'Attiva preferenza') ?></label>
                                </div>
                            </div>
                    <div class="card-body">
                        <div class="categoryicon-top">
                            <img src="<?= $baseIconsUrl . $topic->getIcon() ?>" alt="icona categoria">
                            

                        </div>
                        <span class="h6 mb-0 mt-3"><?= $topic->getLabel() ?></span>


                    </div>
                </div>
            </div>
        </div>
    <?php
    endforeach;
    ?>
</div>