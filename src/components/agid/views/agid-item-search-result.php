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

$columnWidth = (isset($columnWidth)) ? $columnWidth : 'col-12';

?>


<div class="<?= $columnWidth ?> agid-item-search-result-container">
    <div class="card card-teaser flex-grow-1 d-flex">
      <div class="card-body d-flex flex-column flex-grow-1 h-100">
        <div class="category-top d-flex">
          <svg class="icon <?= $iconClass ?>">
            <use xlink:href="<?= $currentAsset->baseUrl ?>/sprite/material-sprite.svg#<?= $icon ?>"></use>
          </svg>
          <p class="category <?= $categoryClass?>" ><?= $category ?></p>
        </div>
        <p class="card-title h4">
          <a class="<?=$titleClass?>" href="<?=$cardLink?>"><?= $cardTitle?></a>
        </p>
        <p class="card-text">
          <?= $cardDescription ?>
        </p>
        <a class="mt-3 read-more position-relative flex-grow-1 d-flex align-items-end" style="bottom:auto" href="<?=$cardLink?>">Leggi tutto
          <svg class="icon <?= $iconClass ?>">
            <use xlink:href="<?= $currentAsset->baseUrl ?>/sprite/material-sprite.svg#arrow-right"></use>
          </svg></a>

      </div>
    </div>
</div>