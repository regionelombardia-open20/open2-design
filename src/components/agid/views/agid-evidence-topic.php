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
$topicTitleIcon = (isset($topicTitleIcon)) ? $topicTitleIcon : 'pin';

?>

<div class="<?= $additionalContainerClass ?> agid-evidence-topic-container">
    <div class="<?= $columnWidth ?> box-card p-5 shadow h-100">            
        <div class="uk-container">
            <div class="categoria-box-card">
                <div class="uk-container">
                    <div>
                        <svg class="icon icon-padded rounded-circle icon-white bg-primary d-flex  mr-1 icon-xl" role="img" aria-label="Numero risposte">
                            <use xlink:href="<?= $currentAsset->baseUrl ?>/sprite/material-sprite.svg#<?= $topicTitleIcon ?>"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <a href="#" class="text-black">
                <h5 class="title-box-card  pt-3 mb-0"> <?= $topicTitle ?></h5>
            </a>
            <div class="text-serif pt-3 uk-margin">
                <p>Tutte le notizie, informazioni e provvedimenti riguardanti il coronavirus (Covid-19)</p>
            </div>
            <ul class="link-list list-unstyled pl-0">
                <li class="my-2">
                    <a class="list-item active icon-left" href="#">
                        <svg class="icon icon-primary">
                            <use xlink:href="<?= $currentAsset->baseUrl ?>/sprite/material-sprite.svg#calendar"></use>
                        </svg>
                        <span>Eventi questo weekend</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="cta-box-card">
            <a class="el-content d-flex align-items-center" href="/it/tutti-gli-argomenti" title="Esplora argomento">
                Esplora argomento  
                <svg class="icon icon-primary d-flex  mr-1 icon-xs" role="img" aria-label="Numero risposte">
                    <use xlink:href="<?= $currentAsset->baseUrl ?>/sprite/material-sprite.svg#arrow-right"></use>
                </svg>               
            </a>
        </div>
    </div>
</div>
