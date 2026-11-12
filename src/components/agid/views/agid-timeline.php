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

use open20\design\assets\AgidDesignAsset;

$currentAsset = AgidDesignAsset::register($this);

$dataInizioGiorno = (isset($dataInizioGiorno)) ? $dataInizioGiorno : 'oggi';

?>

<div class="agid-timeline-container point-list-wrapper my-4">
    <div class="point-list">
        <div class="point-list-aside">
            <div class="point-date text-monospace"><?= $dataInizioGiorno ?></div>
            <div class="point-month text-monospace"><?= $dataInizioMese ?></div>
        </div>
        <div class="point-list-content">
            <div class="card card-teaser shadow rounded">
                <div class="card-body">
                    <h5 class="card-title">
                      <?= $inizioLabel ?>
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <div class="point-list">
        <div class="point-list-aside">
            <div class="point-date text-monospace"><?= $dataFineGiorno ?></div>
            <div class="point-month text-monospace"><?= $dataFineMese ?></div>
        </div>
        <div class="point-list-content">
            <div class="card card-teaser shadow rounded">
                <div class="card-body">
                    <h5 class="card-title">
                    <?= $fineLabel ?>
                    </h5>
                </div>
            </div>
    </div>
</div>
          


</div>