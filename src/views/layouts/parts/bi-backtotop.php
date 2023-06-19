<?php

use open20\design\Module;
?>
<div class="d-flex align-items-center">
  <a href="javascript::void(0)" aria-hidden="true" data-attribute="back-to-top" class="back-to-top back-to-top-small shadow z-index-1031" title="<?= Module::t('amosdesign', 'Torna in cima alla pagina') ?>" >
    <svg class="icon icon-light">
      <use xlink:href="<?= $currentAsset->baseUrl ?>/sprite/material-sprite.svg#arrow-up"></use>
    </svg>
      <span class="sr-only"><?= Module::t('amosdesign', 'Torna in cima alla pagina') ?></span>
  </a>
</div>

