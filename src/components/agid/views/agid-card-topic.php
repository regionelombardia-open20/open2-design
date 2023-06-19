<?php

use open20\design\assets\AgidDesignAsset;

$agidAsset = AgidDesignAsset::register($this);

$columnWidth = (isset($columnWidth)) ? $columnWidth : 'col-12';
$topicIcon = (isset($topicIcon)) ? $topicIcon : 'help-circle-outline';

?>


<div class="<?= $additionalContainerClass ?> agid-evidence-topic-container">
    <div class="<?= $columnWidth ?> card card-teaser rounded shadow align-items-center">
        <svg class="icon">
            <use xlink:href="<?= $agidAsset->baseUrl ?>/sprite/material-sprite.svg#<?= $topicIcon ?>"></use>    
        </svg>
        <div class="card-body">
            <h5 class="card-title">
                <a href="<?= $topicLink ?>"><?= $topicTitle ?></a>
            </h5>
        </div>
    </div>
</div>