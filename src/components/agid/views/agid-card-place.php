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

use open20\design\assets\AgidDesignAsset;

$currentAsset = AgidDesignAsset::register($this);

?>


<div class="<?= $columnWidth ?> agid-card-place-container card card-teaser shadow mt-3 rounded">
    <svg class="icon">
        <use xlink:href="<?= $currentAsset->baseUrl ?>/sprite/material-sprite.svg#pin"></use>    
    </svg>
    <div class="card-body">
        <h5 class="card-title">
            <?= $cardCity ?>
        </h5>
        <div class="card-text">
            <p><?= $cardAdress ?> - <?= $cardCAP ?></p>
            <a href="<?= $moreDetailUrl ?>" title="<?= $moreDetailTitle ?>" class="mt-3"><?= $moreDetailText ?></a>
        </div>
    </div>  
</div>