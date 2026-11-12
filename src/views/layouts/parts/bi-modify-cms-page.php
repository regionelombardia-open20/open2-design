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

use open20\design\Module;
use open20\design\utility\CmsPermissionsUtility;

$canUpdate = CmsPermissionsUtility::canUpdate();
?>

<?php
/** utenza abilitata ad sso */
if (\Yii::$app->user->can('ADMIN') || \Yii::$app->user->can('CMS_PAGE_EDITOR') || $canUpdate) {
?>

    <a href="/admin/login/login-cms-admin?redirect=<?= $currentPageUrl ?>" title="<?= Module::t('amosdesign', 'Modifica pagina') ?>" class="complementary-3-bg btn-modify-cms-page d-flex align-items-center justify-content-center" data-toggle="popover" data-content="<?= Module::t('amosdesign', 'Clicca per modificare la pagina attuale') ?>" data-trigger="hover" role="button">
        <!-- <span class=""><?= Module::t('amosdesign', 'Modifica pagina') ?></span> -->
        <svg class="icon icon-white icon-sm">
            <use xlink:href="<?= $currentAsset->baseUrl ?>/sprite/material-sprite.svg#file-cog"></use>
        </svg>
    </a>

<?php
}
?>