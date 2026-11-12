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




$activeClass = ($isActive) ? 'active' : '';
$cardBG=($activeClass)? '' : 'bg-card-preference-bg'; 
$isActionDisabledClass = ($isActionDisabled) ? 'action-disabled' : '';
$isEmptyCard = (isset($emptyCard));
$textEmptyTitleMessage = ($isEmptyCard) ? $emptyCard['emptyTitleMessage'] : '';
$textEmptyMessage = ($isEmptyCard) ? $emptyCard['emptyMessage'] : '';

$idWithCounter = $baseId . $counter;
$anchorId = $baseId . "anchor-id-" . $cardId;

?>

<?php if (!$isEmptyCard) : ?>
<!--start card-->
  <div class="card-wrapper card-preference pb-3 <?= $activeClass ?> <?= $isActionDisabledClass ?>" id="<?= $idWithCounter ?> "> 
    
      <div class="card rounded <?= $cardBG ?>">
        <div class="card-body">
          <div class="categoryicon-top">
            <?php if(isset($cardImg)) : ?>
              <img src="<?= $cardImg['baseImgUrl'] . $cardImg['imgUrl'] ?>" alt="icona <?= $cardLabel ?>" class="mr-3">
            <?php else : ?>
              <svg class="icon" role="img" aria-label="Icona <?= $cardLabel ?>">  
                <use xlink:href="<?=$cardIcon['baseIconUrl'] . $cardIcon['iconUrl']?>"></use>
              </svg>
            <?php endif ?>
            <span class="h6"><?= $cardLabel ?></span>
          </div>
          <p class="card-text"> <?= $cardDescription ?></p>
          <a class="simple-link d-flex justify-content-end align-items-center stretched-link" data-cardId="<?= $cardId ?>" id="<?= $anchorId ?>" href="#" <?= isset($isActionDisabled) ? 'onclick="return false"' : '' ?>>
            <svg class="icon icon-sm icon-primary" role="img" aria-label="Icona per attivare la preferenza">
              <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#heart-outline"></use>
            </svg>
            <span><?= (!is_null($linkLabel))? $linkLabel: Yii::t('amoscore', 'Attiva preferenza') ?></span>
          </a>
        </div>
      </div>
    
      <!--<div class="card rounded  bg-card-preference-bg">
        <div class="card-body">
          <div class="categoryicon-top">
            <?php if(isset($cardImg)) : ?>
              <img src="<?= $cardImg['baseImgUrl'] . $cardImg['imgUrl'] ?>" alt="icona <?= $cardLabel ?>" class="mr-3">
            <?php else : ?>
              <svg class="icon" role="img" aria-label="Icona <?= $cardLabel ?>">  
                <use xlink:href="<?=$cardIcon['baseIconUrl'] . $cardIcon['iconUrl']?>"></use>
              </svg>
            <?php endif ?>
            <span class="h6"><?= $cardLabel ?></span>
          </div>
          <p class="card-text"> <?= $cardDescription ?></p>
          <a class="simple-link d-flex justify-content-end align-items-center stretched-link" data-cardId="<?= $cardId ?>" id="<?= $anchorId ?>" href="#" <?= isset($isActionDisabled) ? 'onclick="return false"' : '' ?>>
            <svg class="icon icon-sm icon-primary" role="img" aria-label="Icona per attivare la preferenza">
              <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#heart-outline"></use>
            </svg>
            <span><?= (!is_null($linkLabel))? $linkLabel: Yii::t('amoscore', 'Attiva preferenza') ?></span>
          </a>
        </div>
      </div>-->
    
  </div>
<!--end card-->
<?php else : ?>
  <!--start empty card-->
  <div class="card-wrapper card-preference empty pb-3">
    <div class="card rounded">
      <div class="card-body">
        <div class="categoryicon-top">
          <span class="h6 text-muted"><?=$textEmptyTitleMessage?></span>
        </div>
        <p class="card-text text-muted"><?=$textEmptyMessage?></p>
      </div>
    </div>
  </div>
  <!--end empty card-->
<?php endif ?>

