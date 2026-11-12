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

?>


<div class="agid-share-link dropdown d-inline">
  <button class="btn btn-dropdown dropdown-toggle" type="button" id="shareActions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <svg class="icon">
    <use xlink:href="<?= $currentAsset->baseUrl ?>/node_modules/bootstrap-italia/dist/svg/sprite.svg#it-share"></use>
    </svg>
    <small>Condividi</small>
  </button>
  <div class="dropdown-menu shadow-lg" aria-labelledby="shareActions" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 32px, 0px);">
    <div class="link-list-wrapper">
      <ul class="link-list">
        <li>
          <a class="list-item" href="#">
            <svg class="icon">
            <use xlink:href="<?= $currentAsset->baseUrl ?>/node_modules/bootstrap-italia/dist/svg/sprite.svg#it-facebook"></use>
            </svg>
            <span>Facebook</span>
          </a>
        </li>
        <li>
          <a class="list-item" href="#">
            <svg class="icon">
            <use xlink:href="<?= $currentAsset->baseUrl ?>/node_modules/bootstrap-italia/dist/svg/sprite.svg#it-twitter"></use>
            </svg>
            <span>Twitter</span>
          </a>
        </li>
        <li>
          <a class="list-item" href="#">
            <svg class="icon">
            <use xlink:href="<?= $currentAsset->baseUrl ?>/node_modules/bootstrap-italia/dist/svg/sprite.svg#it-linkedin"></use>
            </svg>
            <span>Linkedin</span>
          </a>
        </li>
        <li>
          <a class="list-item" href="#">
            <svg class="icon">
            <use xlink:href="<?= $currentAsset->baseUrl ?>/node_modules/bootstrap-italia/dist/svg/sprite.svg#it-whatsapp"></use>
            </svg>
            <span>Whatsapp</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>