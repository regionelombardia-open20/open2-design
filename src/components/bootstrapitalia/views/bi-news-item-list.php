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

use open20\design\utility\DateUtility;
use open20\design\assets\BootstrapItaliaDesignAsset;

$bootstrapItaliaAsset = BootstrapItaliaDesignAsset::register($this);

$direction = (isset($itemDirection)) ? 'flex-xl-' . $itemDirection : '';
$categorySize  = (isset($categorySize)) ? $categorySize  : 'h6';
$titleSize = (isset($titleSize)) ? $titleSize : 'h5';
$descriptionSize = (isset($descriptionSize)) ? $descriptionSize : '';
$showSignature = (isset($showSignature)) ? $showSignature : 'false';
$showAvatar = (isset($showAvatar)) ? $showAvatar : 'true';
$avatarWrapperSize = (isset($avatarWrapperSize)) ? $avatarWrapperSize : 'md';

//https://www.php.net/manual/en/datetime.format.php
$day = DateUtility::getDate($date, 'php:d');
$month = DateUtility::getDate($date, 'php:M');
$year = DateUtility::getDate($date, 'php:Y');
$date = DateUtility::getDate($date);

$model     = (isset($model) ? $model : null);
$actionModify      = (isset($actionModify) ? $actionModify : null);
$actionDelete      = (isset($actionDelete) ? $actionDelete : null);

$labelReadMore = (isset($labelReadMore)) ? $labelReadMore : 'Leggi';
$titleReadMore = (isset($titleReadMore)) ? $titleReadMore : 'Leggi la notizia' . ' ' . $title;

?>

<div class="news-item-list-wrapper">
  <div class="card-wrapper">
    <div class="card">
      <div class="card-body border-bottom border-light px-0">
        <div class="row">
          <div class="col-md-4">
          <img src="<?= $image ?>" alt="immagine evento" class="community-image img-fluid w-100 mh-100 mb-2" />
          </div>
          <div class="col-md-8">
            <div class="d-flex align-items-start">
            <div class="category-top mb-1">
            <span class="card-category text-secondary text-uppercase small font-weight-normal mb-0 <?= $customCategoryClass ?> text-uppercase rounded-0" <?php if ((!empty($colorBgCategory))) : ?> style="background-color: <?= $colorBgCategory ?> !important; padding: 0 4px; " <?php endif; ?>><strong <?php if ((!empty($colorTextCategory))) : ?> style="color: <?= $colorTextCategory ?> " <?php endif; ?>><?= $category ?></strong></span>
              
              <span class="data"><?= $date ?></span>
            </div>
            <div class="d-flex align-items-center ml-auto pl-3">
                <?php if (($newPubblication)) : ?>
                  <?php
                  echo $this->render(
                    '@vendor/open20/design/src/components/bootstrapitalia/views/bi-badge-new-pubblication'
                  );
                  ?>
                <?php endif; ?>
                <div class="ml-2">
                  <?php
                    echo $this->render(
                      '@vendor/open20/design/src/components/bootstrapitalia/views/bi-context-menu-widget',
                      [
                        'buttons' => \open20\amos\core\utilities\ButtonUtility::composeContextMenuButtons($model, $actionModify, $actionDelete),
                        'model' => $model
                      ]
                    );
                  ?>
                </div>
              </div>
              </div>
            <div>
              <a href="<?= $url ?>" title="Vai alla news <?= $title ?>" class="link-list-title title-two-line">
                <h3 class="card-title font-weight-bold big-heading mb-2  <?= $titleSize ?>"><?= $title ?></h3>
              </a>

            </div>

            <p class="card-description small font-weight-light mb-2 title-two-line"><?= $description ?>

            </p>
            <div class="d-flex flex-wrap">
              <?php if (($showSignature)) : ?>
                <span class="card-signature mb-0 mr-3"><?= 'di' . ' ' . $nameSurname ?> </span>
              <?php endif; ?>
              <a class="read-more ml-auto" href="<?= $url ?>" title="<?= $titleReadMore ?>">
                <span class="text"><?= $labelReadMore ?></span>
                
              </a>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>