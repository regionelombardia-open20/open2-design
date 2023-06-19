<?php

/**
 * Aria S.p.A.
 * OPEN 2.0
 *
 *
 * @package    [NAMESPACE_HERE]
 * @category   CategoryName
 */

use open20\design\assets\BootstrapItaliaDesignAsset;
use open20\design\Module;

$bootstrapItaliaAsset = BootstrapItaliaDesignAsset::register($this);

$date  = (isset($date)) ? \Yii::$app->formatter->asDate($date, 'php:d mm yy') : ''; 

if (!isset($infoDoc)){
  $infoDoc = '<strong>' . Module::t('amosdesign', 'Pubblicata da') . '</strong>' . ' ' . $nameSurname;
  $infoDoc = (!empty($date)) ? $infoDoc . ' ' . '<strong>' . Module::t('amosdesign', 'il') . '</strong>' . ' ' . $date . ' ' : $infoDoc;
  $infoDoc = (isset($category)) ? $infoDoc . ' ' . '<strong>' . Module::t('amosdesign', 'in') . '</strong>' . ' ' . $category : $infoDoc;
  $infoDoc = (isset($community)) ? $infoDoc . ' ' . '<strong>' . Module::t('amosdesign', 'per') . '</strong>' . ' ' . $community : $infoDoc;
}

$lastSyncDrive = (isset($dateSyncDrive)) ? 'Documento Google Drive<br>aggiornato il: ' . $dateLastSyncDrive . ' alle ' . $hourLastSyncDrive  : false;
$widthColumn = (isset($widthColumn)) ? $widthColumn :  'col-12';

?>

<div class="<?= $widthColumn ?>">
  <div class="document-item-container border-bottom py-4">
    <div>
      <div class="d-flex align-items-start mb-2">

        <div class="info-file d-flex text-secondary small">

          <?php if ((in_array(strtolower($type), ['jpg', 'png', 'jpeg', 'svg']))) : ?>
            <svg class="icon icon-image icon-sm">
              <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#file-image"></use>
            </svg>
          <?php elseif ((in_array(strtolower($type), ['pdf']))) : ?>
            <svg class="icon icon-pdf icon-sm">
              <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#file-pdf"></use>
            </svg>
          <?php elseif ((in_array(strtolower($type), ['doc', 'docx']))) : ?>
            <svg class="icon icon-word icon-sm">
              <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#file-word"></use>
            </svg>
          <?php elseif ((in_array(strtolower($type), ['xls', 'xlsx']))) : ?>
            <svg class="icon icon-excel icon-sm">
              <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#file-excel"></use>
            </svg>
          <?php elseif ((in_array(strtolower($type), ['zip', 'rar']))) : ?>
            <svg class="icon icon-secondary icon-sm">
              <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#folder-zip"></use>
            </svg>
          <?php elseif ((in_array(strtolower($typeFolder), ['folder']))) : ?>
            <svg class="icon icon-folder icon-sm">
              <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#folder"></use>
            </svg>
          <?php else : ?>
            <svg class="icon icon-secondary icon-sm">
              <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#file-link"></use>
            </svg>
          <?php endif ?>

          <?php if ($dateSyncDrive) : ?>
            <svg class="icon icon-xs icon-overlay bg-google-drive icon-padded rounded-circle icon-white" data-toggle="tooltip" data-html="true" title="<?= $lastSyncDrive ?>">
              <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#google-drive"></use>
            </svg>
          <?php endif ?>

          <?php if (!isset($size) && (!isset($typeFolder))) : ?>
            <span class="text mx-1 text-uppercase"><?= Module::t('amosdesign', 'Link esterno')?></span>
          <?php elseif (!isset($size) && (isset($typeFolder))) : ?>
            <span class="text mx-1 text-uppercase"><?= Module::t('amosdesign', 'Cartella')?></span>
          <?php else : ?>
            <span class="text mx-1 text-uppercase"><?= $type ?></span>
          <?php endif ?>

          <?php if (isset($size)) : ?>
            <span class="text text-capitalize"><?= '(' . $size . 'Kb)' ?></span>
          <?php endif ?>
          <span class="text ml-2"><?= '-' . ' ' . Module::t('amosdesign', 'Nome file principale') . ':' . ' '?><?= $fileName ?></span>
        </div>
 
        <div class="other-info-item d-flex align-items-center justify-content-end ml-auto">

          <?php if (($newPubblication)) : ?>
            <div class="ml-2">
              <?php
              echo $this->render(
                '@vendor/open20/design/src/components/bootstrapitalia/views/bi-badge-new-pubblication'
              );
              ?>
            </div>
          <?php endif; ?>
          <div class="ml-2">
            <?php
            echo $this->render(
              '@vendor/open20/design/src/components/bootstrapitalia/views/bi-context-menu-widget'
            );
            ?>
          </div>
        </div>
      </div>
      <a class="link-list-title " href="<?= $url ?>" title="Vai al documento <?= $title ?>">
        <h5 class="mb-0 font-weight-bold"><?= $title ?></h5>
      </a>
      <?php if (isset($description)) : ?>
        <p class="text-secondary mb-2"><?= $description ?></p>
      <?php endif ?>
      <div class="small mb-2">
        <?= $infoDoc ?>
      </div>
      <div>
        <a href="<?= $fileUrl ?>" title="Scarica il documento <?= $fileName ?>" class="read-more d-inline mr-2" download><?= Module::t('amosdesign', 'Scarica')?></a>

      </div>
    </div>

  </div>
</div>