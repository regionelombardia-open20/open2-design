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

$this->registerJs("  
        function showModal3() {
            $('#loadingovngstate').show();
        }
    setTimeout(showModal3, 500);
", \yii\web\View::POS_READY);
?>
<div class="loadingovngstate" style="display:none">
    <div class="loading-overlay" ng-if="LuyaLoading.getState()">
        <div class="loading-overlay-content">
            <h3 class="loading-overlay-title">
                {{LuyaLoading.getStateMessage()}}
            </h3>
            <div class="loading-overlay-loader">
                <div class="loading-indicator">
                    <div class="rect1"></div><!--
                    -->
                    <div class="rect2"></div><!--
                    -->
                    <div class="rect3"></div><!--
                    -->
                    <div class="rect4"></div><!--
                    -->
                    <div class="rect5"></div>
                </div>
            </div>
        </div>
    </div>
</div>