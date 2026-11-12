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

use yii\web\View;
use open20\design\assets\BootstrapItaliaDesignAsset;
use open20\design\Module;

$currentAsset = BootstrapItaliaDesignAsset::register($this);

$jsHistory = <<< JS

    $(document).ready(function () {
        if(window.history.length <= 1) {
            var elements = document.getElementsByClassName("jsBackButton");
            for (var i = 0; i < elements.length; i++) {
                elements[i].classList.add("d-none");
            }
        }
    });

JS;
$this->registerJs($jsHistory, View::POS_READY);
?>


<div class="jsBackButton go-back">
    <a href="http://javascript:void(0)" title="<?= Module::t('amosdesign', 'Torna indietro') ?>">
        <svg class="icon icon-xs icon-primary">
            <use xlink:href="<?= $currentAsset->baseUrl ?>/sprite/material-sprite.svg#arrow-left"></use>
        </svg>
        <?= Module::t('amosdesign', 'Torna indietro') ?>
    </a>
</div>