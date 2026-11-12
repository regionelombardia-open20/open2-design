<?php

/**
 * Aria S.p.A.
 * OPEN 2.0
 *
 * @package   open20\amos\core
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

use open20\design\Module;

?>
<?php if (isset(Yii::$app->params['socialConfigurations']) && is_array(Yii::$app->params['socialConfigurations']) && !empty(Yii::$app->params['socialConfigurations'])) : ?>
  <?php
  $socialConfigurations = Yii::$app->params['socialConfigurations'];
  ?>
  <div class="it-socials d-none d-md-flex">
    <span><?= Module::t('amosdesign','Seguici su') ?></span>
    <ul>
      <?php foreach ($socialConfigurations as $k => $socialConf) : ?>
        <?php if ($k == 'flickr') : ?>
          <li>
            <a href="<?= $socialConf ?>" aria-label="<?= Module::t('amosdesign','Seguici su') . ' ' . $k ?>" target="_blank" title="<?= Module::t('amosdesign','Seguici su') . ' ' . $k ?>">
              <svg class="icon">
                <use xlink:href="<?= $currentAsset->baseUrl ?>/node_modules/bootstrap-italia/dist/svg/sprite.svg#it-<?= $k ?>"></use>
              </svg>
            </a>
          </li>
        <?php else : ?>
          <li>
            <a href="<?= $socialConf ?>" aria-label="<?= Module::t('amosdesign','Seguici su') . ' ' . $k ?>" target="_blank" title="<?= Module::t('amosdesign','Seguici su') . ' ' . $k ?>">
              <svg class="icon">
                <use xlink:href="<?= $currentAsset->baseUrl ?>/sprite/material-sprite.svg#<?= $k ?>"></use>
              </svg>
            </a>
          </li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
  </div>
<?php endif; ?>