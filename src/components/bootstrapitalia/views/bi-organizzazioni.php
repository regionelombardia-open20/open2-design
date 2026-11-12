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

$labelLinkCta = (isset($labelLinkCta)) ? $labelLinkCta : Module::t('amosdesign', 'Esplora');
$titleLinkCtaCta = (isset($titleLinkCta)) ? $titleLinkCta : Module::t('amosdesign', 'Vai alla pagina di') . ' ' . $title;

$widthColumn = (isset($widthColumn)) ? $widthColumn :  'col-lg-4 col-md-6';

$hideCta = (isset($hideCta)) ? $hideCta : false;

if (isset($hideAllCtaGuest) && $hideAllCtaGuest) {
  $hideAllCtaGuest = \Yii::$app->user->isGuest;
}
?>


<div class="organizzazioni-wrapper border-light border-bottom py-3 <?= $widthColumn ?> <?= $additionalClass ?>">
  <div class="row flex-sm-nowrap h-100">
    <div class="col-12 col-md-4">
      <?php if ($hideAllCtaGuest) : ?>
        <img class="img-fluid" src="<?= $image ?>" alt="<?= $title ?>">
      <?php else : ?>
        <a href="<?= $url ?>" class="organizzazioni d-block" title="<?= $titleLinkCta ?>">
          <?php if (isset($image)) : ?>
            <img class="img-fluid" src="<?= $image ?>" alt="<?= $title ?>">
          <?php endif ?>
        </a>
      <?php endif; ?>
    </div>
    <div class="col-12 col-md-8">
      <div class="ml-0 ml-sm-2 mt-2 mt-sm-0 d-flex flex-column align-items-start h-100 <?= $extraTextSize ?> ">
        <?php if (!(isset($hideTitle))) : ?>
          <a href="<?= $url ?>" class="link-list-title mb-1" title="<?= $titleLinkCta ?>">
            <h3 class="h5 font-weight-bold mb-0 title-one-line w-100"><?= $title ?></h3>
          </a>
        <?php endif; ?>
        <?php if (!$hideAllCtaGuest) : ?>
          <?php if (!$hideCta) : ?>
            <a href="<?= $url ?>" class="btn btn-xs btn-primary py-1 mt-auto" title="<?= $titleLinkCta ?>"><?= $labelLinkCta ?></a>
          <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>