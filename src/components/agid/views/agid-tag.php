<?php

use open20\design\assets\AgidDesignAsset;

$agidAsset = AgidDesignAsset::register($this);

$siteBg = (isset($siteBg)) ? $siteBg : 'primary';

?>



<div class="chip chip-simple <?= $tagColor ?>">
    <a href="#" class="chip-label"><?= $tagName ?></a>
</div>