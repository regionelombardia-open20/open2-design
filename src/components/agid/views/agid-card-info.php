<?php

use open20\design\assets\AgidDesignAsset;

$agidAsset = AgidDesignAsset::register($this);

?>


<div class="agid-card-info-container callout <?= $columnWidth ?>">
    <div class="callout-title">
        <svg class="icon">
            <use xlink:href="<?= $agidAsset->baseUrl ?>/sprite/material-sprite.svg#information-outline"></use>    
        </svg>
    </div>
    <p><?= $cardInfoText ?></p>
    <h6><a title="<?= $cardInfoCtaTitle ?>" href="<?= $cardInfoCtaUrl ?>"><?= $cardInfoCtaText ?></a></h6>
</div>
