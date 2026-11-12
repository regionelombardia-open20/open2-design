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

$columnWidth = (isset($columnWidth)) ? $columnWidth : 'col-12';
$topicIcon = (isset($topicIcon)) ? $topicIcon : 'help-circle-outline';

?>


<div class="<?= $columnWidth ?> agid-card-search-result-container">
<div class="it-hero-card it-hero-bottom-overlapping px-2 px-lg-5 py-2 py-lg-5 rounded shadow">
            <div class="container">
              <div class="row">
                <div class="col">
                  <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="/design-comuni-prototipi/esempi/bootstrap-italia/template-homepage.html">Home</a><span class="separator">/</span>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">
                        <a href="/design-comuni-prototipi/esempi/bootstrap-italia/template-argomenti.html">Argomenti</a><span class="separator">/</span>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        <span>Cantieri in città</span>
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                <div class="icon-categoria-box-card">
                <div class="uk-container">
                    <div>
                        <svg class="icon icon-padded rounded-circle icon-primary bg-100 d-flex  mr-1 icon-xl" role="img" aria-label="Numero risposte">
                            <use xlink:href="<?= $currentAsset->baseUrl ?>/sprite/material-sprite.svg#alert-outline"></use>
                        </svg>
                    </div>
                    </div>
                </div>
                  <h1>Cantieri in città</h1>
                  <p>
                    Informazioni sui principali cantieri stradali aperti o in
                    programmazione in città che comportano modifiche alla
                    circolazione stradale.
                  </p>
                </div>
                <div class="col-lg-4 offset-lg-2">
                  <div class="card-wrapper card-column">
                    <h6 class="card-title text-muted">
                          Area Lavori pubblici
                    </h6>
                    <div class="card card-teaser card-teaser-info rounded shadow">
                      <div class="card-body">
                        <h5 class="card-title">
                          Area Lavori pubblici
                        </h5>
                        <div class="card-text">
                          <p>Via Roma, 0</p>
                        </div>
                      </div>
                      <div class="avatar size-xl">
                        <img src="https://picsum.photos/200/200" alt="Immagine">
                      </div>
                    </div>
                    <div class="card card-teaser card-teaser-info rounded shadow">
                      <div class="card-body">
                        <h5 class="card-title">
                          Area Governo del territorio
                        </h5>
                        <div class="card-text">
                          <p>Via Roma, 0</p>
                        </div>
                      </div>
                      <div class="avatar size-xl">
                        <img src="https://picsum.photos/200/200" alt="Immagine">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>