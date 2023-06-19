<?php

use open20\design\utility\DateUtility;
use open20\design\assets\BootstrapItaliaDesignAsset;
use open20\design\Module;

$bootstrapItaliaAsset = BootstrapItaliaDesignAsset::register($this);

//https://www.php.net/manual/en/datetime.format.php
$dateLastSyncDrive = DateUtility::getDate($dateSyncDrive, 'php:d/m/Y');
$hourLastSyncDrive = DateUtility::getDateHour($dateSyncDrive, 'php:H:i');


$type = strtoupper($type);
$date = DateUtility::getDate($date);
$customTooltipInfo = (isset($customTooltipInfo)) ? $customTooltipInfo . ' (' . $type . ' - ' . $size . ')' : '';



$lastSyncDrive = (isset($dateSyncDrive)) ? Module::t('amosdesign', 'Documento Google Drive') . '<br>' . Module::t('amosdesign', 'aggiornato il') . $dateLastSyncDrive . Module::t('amosdesign', 'alle') . $hourLastSyncDrive  : false;
$infoDoc = '<strong>'. Module::t('amosdesign', 'Nome file principale'). '</strong>' . ' ' . $nameFile . '<br>';
$infoDoc = (isset($nameSurname)) ? $infoDoc .'<strong>'. Module::t('amosdesign', 'Pubblicato da') . '</strong>' . ' ' . $nameSurname . ' ' . Module::t('amosdesign', 'il') . ' ' . $date . '<br>' : $infoDoc;
$infoDoc = (isset($category)) ? $infoDoc . '<strong>'. Module::t('amosdesign', 'nella categoria') . '</strong>' . ' ' . $category  . '<br>' : $infoDoc ;
$infoDoc = (isset($community)) ? $infoDoc . ' ' . '<strong>'.  Module::t('amosdesign', 'in community') .'</strong>' . ' ' . $community : $infoDoc;
$widthColumn = (isset($widthColumn)) ? $widthColumn :  'col-md-4 col-sm-6';
$allegatiNum = (isset($allegatiNum)) ?  Module::t('amosdesign', 'Allegati interni ') . $allegatiNum  : '';

$model     = (isset($model) ? $model : null);
$actionModify      = (isset($actionModify) ? $actionModify : null);
$actionDelete      = (isset($actionDelete) ? $actionDelete : null);

?>
<div class="<?= $widthColumn ?>">
  <div class="card-wrapper card-space documenti-card-wrapper pb-4 <?= ($typeFolder) ? 'card-type-folder' :  ''; ?>">
    <div class="card card-bg">
      <div class="card-body">
        <div class="categoryicon-top">
          
            <?php if ((in_array(strtolower($type), ['jpg', 'png', 'jpeg', 'svg']))) : ?>
              <svg class="icon icon-image">
              <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#file-image"></use>
              </svg>
            <?php elseif ((in_array(strtolower($type), ['pdf']))) : ?>
              <svg class="icon icon-pdf">
              <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#file-pdf"></use>
              </svg>
            <?php elseif ((in_array(strtolower($type), ['doc', 'docx']))) : ?>
              <svg class="icon icon-word">
              <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#file-word"></use>
              </svg>
            <?php elseif ((in_array(strtolower($type), ['xls', 'xlsx']))) : ?>
              <svg class="icon icon-excel">
              <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#file-excel"></use>
              </svg>
            <?php elseif ((in_array(strtolower($type), ['zip', 'rar']))) : ?>
              <svg class="icon icon-secondary">
              <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#folder-zip"></use>
              </svg>
            <?php elseif ($typeFolder) : ?>
              <svg class="icon icon-folder">
              <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#folder"></use>
              </svg>
            <?php else : ?>
              <svg class="icon icon-secondary">
              <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#file-link"></use>
              </svg>
            <?php endif ?>
          
          <?php if ($dateSyncDrive) : ?>
            <svg class="icon icon-xs icon-overlay bg-google-drive icon-padded rounded-circle icon-white" data-toggle="tooltip" data-html="true" title="<?= $lastSyncDrive ?>">
              <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#google-drive"></use>
            </svg>
          <?php endif ?>

          <?php if (isset($size) && $size == 0 && (!$typeFolder)) : ?>
            <span class="text mx-1 text-uppercase"><?= Module::t('amosdesign', 'Link esterno') ?></span>
          <?php elseif (isset($size) && $size == 0 && ($typeFolder)) : ?>
            <span class="text mx-1 text-uppercase"><?= Module::t('amosdesign', 'Cartella') ?></span>
          <?php else : ?>
            <span class="text mx-1 text-uppercase"><?= $type ?></span>
          <?php endif ?>

          <?php if (isset($size) && $size > 0 && (!$typeFolder)) : ?>
            <span class="text text-capitalize"><?= '(' . $size . 'Kb)' ?></span>
          <?php endif ?>




          <div class="info-doc-top-right ml-auto d-flex align-items-center">
            
            <?php if ($allegatiNum) : ?>
              <div class="allegatiNum">
                <svg class="icon icon-sm icon-secondary" data-toggle="tooltip" title="<?= $allegatiNum ?>">
                  <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#paperclip"></use>
                </svg>
              </div>

            <?php endif; ?>
            <?php
            echo $this->render(
              '@vendor/open20/design/src/components/bootstrapitalia/views/bi-context-menu-widget',
              [
                  'buttons' => \open20\amos\core\utilities\ButtonUtility::composeContextMenuButtons($model, $actionModify, $actionDelete)
              ]
            );
            ?>

          </div>


        </div>

        <a href="<?= $url ?>" class="link-list-title" title="<?= Module::t('amosdesign', 'Dettaglio documento') ?> <?= $title ?>">
          <h6 class="card-title mb-2 title-three-line"><?= $title ?></h6>
        </a>



        <?php if (($newPubblication)) : ?>

          <?php
          echo $this->render(
            '@vendor/open20/design/src/components/bootstrapitalia/views/bi-badge-new-pubblication'
          );
          ?>

        <?php endif; ?>



        <?php if (isset($versionFile)) : ?>
          <div class="blockquote-footer"><cite title="versione file"><?= Module::t('amosdesign', 'versione') ?> <?= $versionFile ?></cite></div>

        <?php endif ?>
        <!-- <div class="card-text text-sans-serif">< ?= $infoDoc ?></div> -->


        <?php if ($typeFolder) : ?>
          <a href="<?= $url ?>" title="<?= Module::t('amosdesign', 'Apri la cartella') ?> <?= $fileName ?>" class="read-more d-inline mr-2"><?= Module::t('amosdesign', 'Apri cartella') ?></a>
        <?php else : ?>
          <?php if (isset($size) && $size == 0 && (!$typeFolder)) : ?>
            <a href="<?= $url ?>" title="<?= Module::t('amosdesign', 'Vedi il dettaglio del documento esterno') ?> <?= $fileName ?>" class="read-more d-inline mr-2" ><?= Module::t('amosdesign', 'Dettaglio') ?></a>
          <?php else: ?>
            <a href="<?= $fileUrl ?>" title="<?= Module::t('amosdesign', 'Scarica il documento') ?> <?= $fileName ?>" class="read-more d-inline mr-2" download><?= Module::t('amosdesign', 'Scarica') ?></a>
          <?php endif; ?>
        <?php endif; ?>

        <a href="javascript:void(0)" data-toggle="tooltip" data-html="true" title="<?= $infoDoc ?>" class="info-doc">
          <svg class="icon icon-sm icon-info">
            <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#information-outline"></use>
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>