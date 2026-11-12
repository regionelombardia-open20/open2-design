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
?>

<div class="luyasearch" ng-class="{'luyasearch-open' : searchInputOpen, 'luyasearch-closed': !searchInputOpen, 'luyasearch-toggled': isHover}" zaa-esc="escapeSearchInput()">
    <div class="luyasearch-inner">
        <div class="luyasearch-form form-group">
            <input id="global-search-input" focus-me="searchInputOpen" ng-model-options="{ debounce: 1000 }" ng-model="searchQuery" type="search" class="luyasearch-input form-control" placeholder="<?= Admin::t('layout_filemanager_search_text'); ?>" />
            <div class="luyasearch-close" ng-click="closeSearchInput()">
                <i class="material-icons luyasearch-close-icon">close</i>
            </div>
        </div>
        <div class="alert alert-info" ng-show="searchResponse==null && searchQuery.length <= 2 && searchQuery.length > 0">
            <?= Admin::t('layout_search_min_letters'); ?>
        </div>
        <div class="alert alert-info" ng-show="(searchResponse.length == 0 && searchResponse != null) && searchQuery.length > 2">
            <?= Admin::t('layout_search_no_results'); ?>
        </div>
        <div class="luyasearch-loader" ng-show="searchResponse==null && searchQuery.length > 2">
            <div class="loading-indicator loading-indicator-small">
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
        <div class="luyasearch-results">
            <div class="luyasearch-result" ng-repeat="item in searchResponse">

                <div class="card" ng-class="{'card-closed': !groupVisibility}">
                    <div class="card-header" ng-click="groupVisibility=!groupVisibility">
                        <span class="material-icons card-toggle-indicator">keyboard_arrow_down</span>
                        <i class="material-icons">{{item.menuItem.icon}}</i>&nbsp;<span>{{item.menuItem.alias}}</span><span class="badge badge-secondary float-right">{{item.data.length}}</span>
                    </div>
                    <div class="card-body p-2">
                        <div class="table-responsive">
                            <table class="table table-hover table-align-middle">
                                <thead>
                                    <tr ng-repeat="row in item.data | limitTo:1">
                                        <th ng-hide="!item.hideFields.indexOf(k)" ng-repeat="(k,v) in row">{{k}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="row in item.data" ng-click="searchDetailClick(item, row)">
                                        <td ng-hide="!item.hideFields.indexOf(k)" ng-repeat="(k,v) in row">{{v}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>