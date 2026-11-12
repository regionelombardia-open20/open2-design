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
use yii\web\View;
use open20\design\Module;

$bootstrapItaliaAsset = BootstrapItaliaDesignAsset::register($this); 

$filterList= (isset($filterList))? $filterList :  Module::t('amosdesign', 'Tutto');

$this->registerJs(
  <<<JS

$(".filter-container button").click(function(event) {
  var activeFilter=this.innerText;
  
  if(activeFilter.toUpperCase()=='tutto'.toUpperCase()){
    
    var divToDisplay=$(".event-calendar-text:not(activeFilter)");
    
    for(j=0; j<divToDisplay.length; j++){
      divToDisplay[j].style.display="inline-block";
    }
  }else{
    var divToDisplay=document.getElementsByClassName(activeFilter);
    
    var divToHide=$(".event-calendar-text:not(activeFilter)");
    for(i=0; i<divToHide.length; i++){
      divToHide[i].style.display="none";
    }
    for(j=0; j<divToDisplay.length; j++){
      divToDisplay[j].style.display="inline-block";
    }
  }
});

JS
,  View::POS_READY);


?>

<section class="calendar-section">
  <div class=" pb-5 pt-0">
    <div class="container">
      <div class="row row-title pb-3 justify-content-end">
        <div class="filter-container">
          <?php foreach ($filterList as $i): ?>
            <?php if($i=='Tutto'){ ?>
              <button id="<?= $i ?>" type="button" class="mt-1 btn btn-primary btn-sm"><?= $i ?></button>
            <?php } else { ?>
              <button id="<?= $i ?>" type="button" class="mt-1 btn btn-outline-secondary btn-sm"><?= $i ?></button>
            <?php } ?>
          <?php endforeach ; ?>          
        </div>
      </div>
      <div class="row row-calendar">
        <div class="it-carousel-wrapper it-carousel-landscape-abstract-three-cols it-calendar-wrapper">
          <div class="it-header-block">
            <div class="it-header-block-title">
              <h4 class="mb-0 text-center text-white"><?Module::t('amosdesign', 'Settembre'). " " . "2019"?></h4>
            </div>
          </div>
          <div class="it-carousel-all owl-carousel it-card-bg">
            <div class="it-single-slide-wrapper h-100 ">
              <div class="card-wrapper h-100">
                <div class="card card-bg">
                  <div class="card-body">
                    <h5 class="card-title my-0 border-bottom "><?Module::t('amosdesign', '15')?><span><?Module::t('amosdesign', 'lun')?></span></h5>
                    <div class="py-3 w-100 border-bottom  event-calendar-text Scadenze">
                      <a href="#" class=" text-decoration-none small w-100 h-100 d-inline-block " ><?Module::t('amosdesign', 'Saldo TASI')?></a>
                    </div>
                    <div class="py-3 w-100 border-bottom  event-calendar-text Eventi">
                      <a href="#" class=" text-decoration-none small w-100 h-100 d-inline-block " ><?Module::t('amosdesign', 'Concerto gratuito piazza XX Settembre')?></a>
                    </div>
                    <div class="py-3 w-100 border-bottom  event-calendar-text Consigli-comunali">
                      <a href="#" class=" text-decoration-none small w-100 h-100 d-inline-block " ><?Module::t('amosdesign', 'Convocazione Consiglio Comunale - Prima seduta')?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="it-single-slide-wrapper h-100 ">
              <div class="card-wrapper h-100">
                <div class="card card-bg">
                  <div class="card-body">
                    <h5 class="card-title my-0 border-bottom"><?Module::t('amosdesign', '16')?><span><?Module::t('amosdesign', 'mar')?></span></h5>
                    <div class="py-3 w-100 border-bottom  event-calendar-text Scadenze">
                      <a href="#" class=" text-decoration-none small w-100 h-100 d-inline-block " ><?Module::t('amosdesign', 'Saldo TASI')?></a>
                    </div>
                    <div class="py-3 w-100 border-bottom  event-calendar-text Eventi">
                      <a href="#" class=" text-decoration-none small w-100 h-100 d-inline-block " ><?Module::t('amosdesign', 'Concerto gratuito piazza XX Settembre')?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="it-single-slide-wrapper h-100">
              <div class="card-wrapper h-100">
                <div class="card card-bg">
                  <div class="card-body">
                    <h5 class="card-title my-0 border-bottom "><?Module::t('amosdesign', '17')?><span><?Module::t('amosdesign', 'mer')?></span></h5>
                    <div class="py-3 w-100 border-bottom  event-calendar-text Eventi">
                      <a href="#" class=" text-decoration-none small w-100 h-100 d-inline-block " ><?Module::t('amosdesign', 'Concerto gratuito piazza XX Settembre')?></a>
                    </div>
                    <div class="py-3 w-100 border-bottom  event-calendar-text Consigli-comunali">
                      <a href="#" class=" text-decoration-none small w-100 h-100 d-inline-block " ><?Module::t('amosdesign', 'Convocazione Consiglio Comunale - Prima seduta')?></a>
                    </div>
                    <div class="py-3 w-100 border-bottom  event-calendar-text Scadenze">
                      <a href="#" class=" text-decoration-none small w-100 h-100 d-inline-block " ><?Module::t('amosdesign', 'Seconda rata TARI')?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="it-single-slide-wrapper h-100 ">
              <div class="card-wrapper h-100">
                <div class="card card-bg">
                  <div class="card-body">
                    <h5 class="card-title my-0 border-bottom"><?Module::t('amosdesign', '18')?><span><?Module::t('amosdesign', 'giov')?></span></h5>
                    <div class="py-3 w-100 border-bottom  event-calendar-text Scadenze">
                      <a href="#" class="text-decoration-none small w-100 h-100 d-inline-block " ><?Module::t('amosdesign', 'Saldo TASI')?></a>
                    </div>
                    <div class="py-3 w-100 border-bottom  event-calendar-text Eventi">
                      <a href="#" class=" text-decoration-none small w-100 h-100 d-inline-block " ><?Module::t('amosdesign', 'Concerto gratuito piazza XX Settembre')?></a>
                    </div>
                    <div class="py-3 w-100 border-bottom  event-calendar-text Consigli-comunali">
                      <a href="#" class=" text-decoration-none small w-100 h-100 d-inline-block " ><?Module::t('amosdesign', 'Convocazione Consiglio Comunale - Prima seduta')?></a>
                    </div>
                    <div class="py-3 w-100 border-bottom  event-calendar-text Scadenze">
                      <a href="#" class=" text-decoration-none small w-100 h-100 d-inline-block " ><?Module::t('amosdesign', 'Seconda rata TARI')?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="it-single-slide-wrapper h-100">
              <div class="card-wrapper h-100">
                <div class="card card-bg">
                  <div class="card-body">
                    <h5 class="card-title my-0 border-bottom "><?Module::t('amosdesign', '19')?><span><?Module::t('amosdesign', 'sab')?></span></h5>
                    <div class="py-3 w-100 border-bottom  event-calendar-text Scadenze">
                      <a href="#" class=" text-decoration-none small w-100 h-100 d-inline-block " ><?Module::t('amosdesign', 'Saldo TASI')?></a>
                    </div>
                    <div class="py-3 w-100 border-bottom  event-calendar-text Eventi">
                      <a href="#" class=" text-decoration-none small w-100 h-100 d-inline-block " ><?Module::t('amosdesign', 'Concerto gratuito piazza XX Settembre')?></a>
                    </div>

                    <div class="py-3 w-100 border-bottom  event-calendar-text Consigli-comunali">
                      <a href="#" class=" text-decoration-none small w-100 h-100 d-inline-block " ><?Module::t('amosdesign', 'Convocazione Consiglio Comunale - Prima seduta')?></a>
                    </div>

                    <div class="py-3 w-100 border-bottom  event-calendar-text Scadenze">
                      <a href="#" class="text-decoration-none small w-100 h-100 d-inline-block " ><?Module::t('amosdesign', 'Seconda rata TARI')?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="it-single-slide-wrapper h-100">
              <div class="card-wrapper h-100">
                <div class="card card-bg">
                  <div class="card-body">
                    <h5 class="card-title my-0 border-bottom "><?Module::t('amosdesign', '20')?><span><?Module::t('amosdesign', 'dom')?></span></h5>
                    <div class="py-3 w-100 border-bottom  event-calendar-text Scadenze">
                      <a href="#" class=" text-decoration-none small w-100 h-100 d-inline-block " ><?Module::t('amosdesign', 'Seconda rata TARI')?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="it-single-slide-wrapper h-100 ">
              <div class="card-wrapper h-100">
                <div class="card card-bg">
                  <div class="card-body">
                    <h5 class="card-title my-0 border-bottom"><?Module::t('amosdesign', '21')?><span><?Module::t('amosdesign', 'lun')?></span></h5>
                    <div class="py-3 w-100 border-bottom  event-calendar-text Scadenze">
                      <a href="#" class=" text-decoration-none small w-100 h-100 d-inline-block " ><?Module::t('amosdesign', 'Seconda rata TARI')?></a>
                    </div>

                    <div class="py-3 w-100 border-bottom  event-calendar-text Consigli-comunali">
                      <a href="#" class="text-decoration-none small w-100 h-100 d-inline-block " ><?Module::t('amosdesign', 'Convocazione Consiglio Comunale - Prima seduta')?></a>
                    </div>

                    <div class="py-3 w-100 border-bottom  event-calendar-text Scadenze">
                      <a href="#" class=" text-decoration-none small w-100 h-100 d-inline-block " ><?Module::t('amosdesign', 'Seconda rata TARI')?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="it-single-slide-wrapper h-100">
              <div class="card-wrapper h-100">
                <div class="card card-bg">
                  <div class="card-body">
                    <h5 class="card-title my-0 border-bottom "><?Module::t('amosdesign', '22')?><span><?Module::t('amosdesign', 'mar')?></span></h5>
                    <div class="py-3 w-100 border-bottom  event-calendar-text Scadenze">
                      <a href="#" class=" text-decoration-none small w-100 h-100 d-inline-block " ><?Module::t('amosdesign', 'Saldo TASI')?></a>
                    </div>

                    <div class="py-3 w-100 border-bottom  event-calendar-text Eventi">
                      <a href="#" class=" text-decoration-none small w-100 h-100 d-inline-block " ><?Module::t('amosdesign', 'Concerto gratuito piazza XX Settembre')?></a>
                    </div>

                    <div class="py-3 w-100 border-bottom  event-calendar-text Consigli-comunali">
                      <a href="#" class="text-decoration-none small w-100 h-100 d-inline-block " ><?Module::t('amosdesign', 'Convocazione Consiglio Comunale - Prima seduta')?></a>
                    </div>

                    <div class="py-3 w-100 border-bottom  event-calendar-text Scadenze">
                      <a href="#" class="text-decoration-none small w-100 h-100 d-inline-block " ><?Module::t('amosdesign', 'Seconda rata TARI')?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>







        