<?php

use open20\design\assets\AgidDesignAsset;

$agidAsset = AgidDesignAsset::register($this);

$columnWidth = (isset($columnWidth)) ? $columnWidth : 'col-12';
$topicIcon = (isset($topicIcon)) ? $topicIcon : 'help-circle-outline';

?>


<div class="<?= $columnWidth ?> agid-item-search-result-container">
  <div class="col-md-4">
    <div class="card card-teaser">
      <div class="card-body">
        <div class="category-top">
          <svg class="icon">
            <use xlink:href="<?= $agidAsset->baseUrl ?>/sprite/material-sprite.svg#bank-outline"></use>
          </svg>
          <a class="category" href="#">Servizi</a>
        </div>
        <h4 class="card-title">
          <a href="#">Scadenza TARI 2018: istruzioni per pagamento</a>
        </h4>
        <p class="card-text">
          Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
          odit aut fugit, sed quia consequuntur magni dolores eos qui
          ratione.
        </p>
      </div>
    </div>
  </div>
</div>