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

use open20\design\assets\BootstrapItaliaDesignAsset;
use open20\design\Module;

$bootstrapItaliaAsset = BootstrapItaliaDesignAsset::register($this);
$modelLabel="";
$modelId="";
$widget_title = isset($title) ? $title : Module::t('amosdesign', 'Menu contestuale');
if(!empty($model)):
    $modelId=$model->id;
    $modelLabel = strtolower($model->getGrammar()->getModelLabel());
    $idManageMenu="dropdownManageMenu". $modelLabel . $modelId;
endif;

?>
<?php if (!empty($buttons)) { ?>
    <div class="dropdown dropdown-manage dropleft">
        <a class="manage-menu  dropdown-toggle btn btn-xs btn-outline-tertiary btn-icon" href="javascript:void(0)" id="<?= $idManageMenu ?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="<?= $widget_title ?>">
            <svg class="icon">
            <use xlink:href="<?= $bootstrapItaliaAsset->baseUrl ?>/sprite/material-sprite.svg#cog"></use>
            </svg>
        </a>
        <div class="dropdown-menu" aria-labelledby="<?= $idManageMenu ?>">
            <div class="link-list-wrapper">
                <ul class="link-list">
                    <?php foreach ($buttons as $btn) { ?>
                        <li>
                            <a class="list-item" href="<?= $btn['url'] ?>" <?= $btn['options'] ?>>
                                <span><?= $btn['label'] ?></span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
<?php } ?>