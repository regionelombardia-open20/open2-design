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

use luya\admin\Module as Admin;
use luya\helpers\Url;

$this->registerJs("  
        function showModal() {
            $('#ngmessang').show();
        }
    setTimeout(showModal, 500);
", \yii\web\View::POS_READY);
?>
<div id="ngmessang" style="display:none;">
    <div class="toasts" ng-repeat="item in toastQueue" ng-class="{'toasts--mainnav-small': !isHover}">
        <div class="modal toasts-modal fade show" ng-if="item.type == 'confirm'" zaa-esc="item.close()" style="display: block;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{item.title}}</h5>
                        <button type="button" class="close" ng-click="item.close()" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{item.message}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" ng-click="item.close()"><?= Admin::t('button_abort'); ?></button>
                        <button type="button" class="btn btn-primary" ng-click="item.click()"><?= Admin::t('button_yes'); ?></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="toasts-toast" ng-if="item.type != 'confirm'" style="transform: translateY(-{{ ($index * 100)}}%);">
            <div class="alert text-white" ng-click="item.close()" ng-class="{'alert-success': item.type == 'success', 'alert-danger': item.type == 'error', 'alert-warning': item.type == 'warning', 'alert-info': item.type == 'info'}">
                <i class="material-icons toasts-toast-icon" ng-show="item.type == 'success'">check_circle</i>
                <i class="material-icons toasts-toast-icon" ng-show="item.type == 'error'">error_outline</i>
                <i class="material-icons toasts-toast-icon" ng-show="item.type == 'warning'">warning</i>
                <i class="material-icons toasts-toast-icon" ng-show="item.type == 'info'">info_outline</i>
                <span>{{item.message}}</span>
            </div>
        </div>
    </div>
</div>