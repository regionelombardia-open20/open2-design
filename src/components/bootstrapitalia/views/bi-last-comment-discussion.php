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

?>

<div class="last-comment-discussion-wrapper">
        <small><strong><?= Module::t('amosdesign', 'Ultimo contributo') ?></strong></small>

        <div class="comment-wrapper lightgrey-bg-c2 p-2 mt-2">
          <?php if (isset(($lastCommentDiscussion))) : ?>
            <div class="comment-author">
              <?=
                $this->render(
                  '@vendor/open20/design/src/components/bootstrapitalia/views/bi-avatar',
                  [
                    'nameSurname' => $nameSurnameLastComment,
                    'imageAvatar' => $imageAvatar,
                    'url' => $urlAvatar,
                    'additionalInfo' => '07/07/2020 alle 10:28',
                    'removeLink' => $removeLink,
                    'avatarWrapperSize' => $avatarWrapperSize,
                    'extraTextSize' => $extraTextSize

                  ]
                );
              ?>
            </div>
            <div class="last-comment small my-2 pl-4">
              <p class="ml-3 mb-0 title-four-line"><?= $lastCommentDiscussion ?></p>
            </div>
          <?php else : ?>
            <div class="last-comment small my-2">
              <p class="mb-0 text-muted"><?= Module::t('amosdesign', 'Puoi essere il primo a lasciare un contributo') ?></p>
            </div>
          <?php endif ?>
        </div>
        <div class="footer-last-comment lightgrey-bg-c2 d-flex justify-content-end mt-1 p-2">
          <a href="#" class="btn btn-primary btn-xs"><?= Module::t('amosdesign', 'Contribuisci') ?></a>
        </div>
      </div>