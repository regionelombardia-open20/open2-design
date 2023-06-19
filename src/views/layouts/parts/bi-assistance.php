<?php

use open20\design\Module;
?>

  <div class="bi-assistance z-index-1031">
    <a class="d-flex align-items-center justify-content-center border border-primary" href="<?= $isMail ? 'mailto:' . $mailAddress :  $urlAssistance ?>" data-toggle="tooltip" data-placement="left" title="<?= Module::t('amosdesign', 'Hai bisogno di assistenza?') ?>">
      <svg class="icon icon-sm">
        <use xlink:href="<?= $currentAsset->baseUrl ?>/sprite/material-sprite.svg#help"></use>
      </svg>
    </a>
    <span class="sr-only"><?= Module::t('amosdesign', 'Verrà aperta una nuova finestra') ?></span>
  </div>
