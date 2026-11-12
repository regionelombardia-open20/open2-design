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

use yii\web\View;
use open20\design\assets\BootstrapItaliaDesignAsset;
use open20\amos\core\utilities\StringUtils;
use open20\design\Module;

$currentAsset = BootstrapItaliaDesignAsset::register($this);

$jsReadMore = <<< JS

$("#moreTextJs .changeContentJs > .actionChangeContentJs").click(function(){
    $("#moreTextJs .changeContentJs").toggle();
    $('html, body').animate({scrollTop: $('#moreTextJs').offset().top - 120},1000);
});
JS;
$this->registerJs($jsReadMore, View::POS_READY);
?>

<?php
$limit = (isset($limit))? $limit : 0;
$moreContentTextLink = (isset($moreContentTextLink))? $moreContentTextLink :Module::t('amosdesign', 'espandi descrizione');
$moreContentTitleLink = (isset($moreContentTitleLink))? $moreContentTitleLink :Module::t('amosdesign', 'Leggi il contenuto completo');

$lessContentTextLink = (isset($lessContentTextLink))? $lessContentTextLink :Module::t('amosdesign', 'riduci descrizione');
$lessContentTitleLink = (isset($lessContentTitleLink))? $lessContentTitleLink :Module::t('amosdesign', 'Riduci contenuto');
?>

<div id="moreTextJs">
    <div class="changeContentJs partialContent">
        <?= StringUtils::truncateHTML($content, $limit) ?>
        <a class="read-more actionChangeContentJs" href="javascript:void(0)" title="<?= $moreContentTitleLink ?>">
            <span class="text"><?= $moreContentTextLink ?></span>
            <svg class="icon">
                <use xlink:href="<?= $currentAsset->baseUrl ?>/node_modules/bootstrap-italia/dist/svg/sprite.svg#it-chevron-down"></use>
            </svg>
        </a>
    </div>
    <div class="changeContentJs totalContent" style="display:none">
        <?= $content ?>
        <a class="read-more actionChangeContentJs" href="javascript:void(0)" title="<?= $lessContentTitleLink ?>">
            <span class="text"><?= $lessContentTextLink ?></span>
            <svg class="icon">
                <use xlink:href="<?= $currentAsset->baseUrl ?>/node_modules/bootstrap-italia/dist/svg/sprite.svg#it-chevron-up"></use>
            </svg>
        </a>
    </div>
</div>