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

use open20\amos\admin\AmosAdmin;
use open20\design\assets\BootstrapItaliaDesignAsset;
use open20\design\Module;

$currentAsset = BootstrapItaliaDesignAsset::register($this);
$urlTagManager = (isset($urlTagManager)) ? $urlTagManager : false;

$userprofileGroup = [];
$maxTags = 5;
$amosadmin = AmosAdmin::getModuleName();

$modelId = $model->id;

$js = <<<JS
$.ajax({
    url: '/design/design-ajax/my-profile-widget-ajax',
    type: 'get',
    data: {
        id : $modelId
    },
    success: function (data) {
        $('#widget-myprofile-home').html(data);
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle-second="tooltip"]').tooltip();
    }
});
JS;

$this->registerJs($js);
?>
<div id="widget-myprofile-home" class="bi-widget-myprofile-wrapper bg-secondary py-3">
    <div class="container">
        <div class="d-flex align-items-center flex-wrap position-relative">
            <?=
                $this->render(
                    '@vendor/open20/design/src/components/bootstrapitalia/views/bi-avatar',
                    [
                        'imageAvatar' => $avatarUrl,
                        'url' => $userProfileUrl,
                        'additionalInfo' => $prevalentPartnershipName,
                        //          'extraTextSize' => $extraTextSize,
                        'nameSurname' => $model->nomeCognome,
                        'showAvatar' => true,
                        'avatarWrapperSize' => 'xl',
                        'showWelcomeLabel' => true,
                        'isFacilitator' => $isFacilitator,
                        'isCommunityManager' => $isFacilitator,
                    ]
                );
            ?>

            <div class="ml-auto">
                <div class="progress-spinner progress-spinner-active size-sm">
                    <span class="sr-only"><?= Module::t('amosdesign', 'Caricamento dati utente in corso') . '...' ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
