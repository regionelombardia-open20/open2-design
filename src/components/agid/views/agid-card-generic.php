<?php

use open20\design\assets\AgidDesignAsset;

$agidAsset = AgidDesignAsset::register($this);

$columnWidth = (isset($columnWidth)) ? $columnWidth : 'col-12';
$topicIcon = (isset($topicIcon)) ? $topicIcon : 'help-circle-outline';

?>


<div class="<?= $columnWidth ?> agid-evidence-topic-container">
    <div class="card card-teaser rounded shadow">
        <div class="card-body">
            <div class="category-top">
                <svg class="icon">
                    <use xlink:href="<?= $agidAsset->baseUrl ?>/sprite/material-sprite.svg#<?= $cardIcon ?>"></use>    
                </svg>
                <a class="category" href="#"><?= $cardCategory ?></a>
            </div>
            <h5 class="card-title"><?= $cardTitle ?> </h5>
            <p class="card-text">
                <?= $cardDescription ?>
            </p>
        </div>
    </div>
</div>