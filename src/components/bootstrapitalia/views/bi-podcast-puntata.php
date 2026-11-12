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
$bootstrapItaliaAsset = BootstrapItaliaDesignAsset::register($this);
?>

<div class="podcast-item-container my-3 col-12 row">
    <?php if(isset($podcastCover)) : ?>
        <div class="col-md-3 mb-3 mb-md-0">
            <a href="<?= $url ?>" title="Vai alla puntata">
                <img class="img-fluid" alt="immagine documento" src="<?= $podcastCover ?>" >
            </a>
        </div>
    <?php endif; ?>
    <div class="<?= (isset($podcastCover)) ? 'col-md-9' : 'col-md-12' ?> d-flex flex-column"> 
        <a href="<?= $url ?>" title="Vai alla puntata" class="title-one-line  link-list-title  mr-3 mb-0"><h3 class="h4"><?= $podcastName ?></h3></a>
        <p class="lead  mb-2"><?php if($episodeDuration){ ?> (<?=$episodeDuration ?>') - <?php } ?> <?= $episodeDate?></p>  
        <p class="mb-0 title-two-line-desktop"><?= $podcastDescription ?></p>
    </div>
</div>