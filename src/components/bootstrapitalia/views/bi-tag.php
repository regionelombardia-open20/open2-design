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
?>

<?php

use open20\design\assets\BootstrapItaliaDesignAsset;
use open20\design\Module;

$currentAsset = BootstrapItaliaDesignAsset::register($this);

$treeDepthLabels = (isset($treeDepthLabels)) ? $treeDepthLabels : '';
$url = (isset($url)) ? $url : 'javascript:void(0)';
$label = (isset($label)) ? $label : '';
$depth = (isset($depth)) ? $depth : '0';
$icon = ($depth <= 0) ? 'tag' : 'tag-multiple';
$tooltipOption = 'data-toggle="tooltip"';

$i = 0;
$titleLink = '';
if (is_array($treeDepthLabels)) {
    $y = count($treeDepthLabels) - 1;
    foreach ($treeDepthLabels as $singleDepthLabel) {
        if($i < $y) {
            $treeDepth .= $singleDepthLabel . ' ' . ' / ' . ' ';
        } else {
            $treeDepth .= $singleDepthLabel . ' ' . ' / ' . ' ' . $label;
        }
        $i++;
    }
}
$titleLink = (!empty($treeDepth)? $treeDepth : '');
?>


<div class="chip my-1 h-100 <?= ($depth > 0) ? 'chip-multiple' : ''?> ">
    <a href="<?= $url ?>" title="<?= $tagRoot . ($path ? " / " . $path : "") ?>" data-toggle="tooltip" class="d-flex text-decoration-none align-items-center">
        <ul class="chip-group-stacked mx-1">
            <li>
                <svg class="avatar-icon border border-white icon icon-xs">
                    <use xlink:href="<?= $currentAsset->baseUrl ?>/sprite/material-sprite.svg#<?= $icon ?>"></use>
                </svg>
            </li>
        </ul>
        <span class="chip-label h-100 pt-1"><?= $label ?></span>
    </a>
</div>