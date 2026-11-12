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
?>
<div class="it-modal header-search-modal">
    <div class="modal fade" tabindex="-1" role="dialog" id="searchModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <svg class="icon icon-lg">
                            <use xlink:href="<?= $currentAsset->baseUrl ?>/node_modules/bootstrap-italia/dist/svg/sprite.svg#it-close"></use>
                            </svg>
                        </button>
                        <div class="modal-title h2"><?= Module::t('amosdesign','Cerca')?></div>
                    </div>


                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="h5"><?=Module::t('amosdesign','Inserisci una o più parole chiave per affinare ulteriormente la ricerca')?></div>
                        <div class="form-group autocomplete-wrapper-big mt-5">
                            <form class="hidden" data-toggle="validator" action="<?= $searchAction ?>" method="get">
                                <input type="search" name="query" id="searchNavbar" class="autocomplete" value="" placeholder="<?=Module::t('amosdesign','Testo da cercare')?>" required>
                <!--                            <input type="search" class="autocomplete" placeholder="Testo da cercare" id="autocomplete-two" name="autocomplete-two" data-autocomplete="[]">-->
                                <span class="autocomplete-icon" aria-hidden="true">
                                    <svg class="icon icon-sm">
                                    <use xlink:href="<?= $currentAsset->baseUrl ?>/node_modules/bootstrap-italia/dist/svg/sprite.svg#it-search"></use>
                                    </svg>
                                </span>
                                <!-- <ul class="autocomplete-list" id="testAutocomplete2">
                                    <li>
                                        <a href="#">
                                            <svg class="icon icon-sm">
                                                <use xlink:href="< ?= $currentAsset->baseUrl ?>/node_modules/bootstrap-italia/dist/svg/sprite.svg#it-pa"></use>
                                            </svg>
                                            <span class="autocomplete-list-text">
                                                <span>Comune di <mark>Pi</mark>sa</span><em>Amministrazione</em>
                                            </span>
                                        </a>
                                    </li>
                                </ul> -->
                                <label for="autocomplete-two" class="sr-only"><?= Module::t('amosdesign','Cerca nella piattaforma {platformName}',['platformName' => \Yii::$app->name])?></label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>