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

use open20\design\components\bootstrapitalia\CheckBoxListTopicsIcon;
use open20\design\Module;
?>


<div class="modal fade modale-validazione modal-custom" id="preferenceActivationFailedModal" tabindex="-1" role="dialog" aria-labelledby="preferenceActivationFailedModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h3 class="modal-title" id="preferenceActivationFailedModalLabel"><?= Module::t('amosdesign', 'Attivazione preferenza non riuscita')?></h3>
        <button aria-label="chiudi la modale" type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body pb-4 text-center text-md-left">
        <div class="row pb-4">
          <div class="col-md-5">
            <img class="img-fluid" src="/img/phone-alert.svg" alt="icona telefono con simbolo di attenzione">
          </div>
            <div class="col-md-7">
              <p class="p-2"><?= Module::t('amosdesign', 'Ti ricordiamo che per poter attivare le preferenze e ricevere  le comunicazioni è necessario inserire almeno una ')?><strong><?= Module::t('amosdesign', 'modalità di contatto')?></strong></p>
            </div>
        </div>
        <!-- TODO cosa far fare al bottone quando si clicca ok -->
        <button type="button" class="btn btn-primary w-75 d-flex justify-content-center m-auto"><?= Module::t('amosdesign', 'Ok grazie')?></button> 
      </div>
    </div>
  </div>
</div>