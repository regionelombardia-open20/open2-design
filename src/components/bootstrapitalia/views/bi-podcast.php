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
use open20\design\Module;
$bootstrapItaliaAsset = BootstrapItaliaDesignAsset::register($this);
?>

<div class="podcast-item-container my-3 col-12 row">
    <div class="col-md-3 mb-3 mb-md-0">
        <a href="#" title="Vai all'elenco delle puntate">
            <img class="img-fluid" alt="immagine documento" style="max-width:100%;" src="<?= $podcastCover ?>" >
        </a>
    </div>
    <div class="col-md-9 d-flex flex-column"> 
        <div class="uppersection-container d-flex align-items-center justify-content-between mb-2">
            <div class="d-flex align-items-center flex-wrap">
                <a href="#" class="title-one-line link-list-title " title="Vai all'elenco delle puntate">
                    <h3 class="h5 mr-3 mb-0 font-weight-bold"><?= $podcastName ?></h3>
                </a>
                <p class="small text-500 mb-0"><?= Module::t('amosdesign', 'Ultima puntata') . ': ' ?> <?= $lastEpisodeDate ?> </p>
            </div>
            <!--
            <span class="badge badge-primary font-weight-normal text-uppercase">< ?=$podcastCategory ?></span>
            -->
            <p class="card-category text-uppercase h6 font-weight-normal mb-3"><?=$podcastCategory ?></p>
        </div>
        <?php if($podcastDescription){ ?>
            <div class="mb-2">
                <p class="mb-0"><?= $podcastDescription ?></p>
            </div>
        <?php } ?>
        <div class="flex-grow-1 d-flex align-items-end">
            <a href="#" title="Vai all'elenco delle puntate" class="read-more mb-0"><?= Module::t('amosdesign', 'Elenco puntate') ?></a>
        </div>
    </div>
</div>