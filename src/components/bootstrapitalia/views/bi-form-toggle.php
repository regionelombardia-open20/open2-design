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

/**
 * @param string $inputId
 * @param Model $model
 */
use yii\web\View;

$defaultLabelOn = (isset($labelOn)) ? $labelOn : 'Attivo';
$defaultLabelOff = (isset($labelOff)) ? $labelOff : 'Disattivo';
$defaultLabel = (isset($label)) ? $label : 'Toggle';
$idToggle = (isset($id)) ? $id : 'toggleDefautId';


//js aggiornamento label toggle al caricamento della pagina
$this->registerJs(<<<JS
$(document).ready(function(event) {
    var allToggle = $(".toggles");
    allToggle.each(function(){
        var input = $(this).find('input');
        if((input).prop("checked") == true){
            $(this).find('.jsSwitchLabel').text(' $defaultLabelOn ');
        } else {
            $(this).find('.jsSwitchLabel').text('$defaultLabelOff');
        }
    })
});
$(".toggles").click(function(event) {
    if($(this).find('input').prop("checked") == true) {
        $(this).find('.jsSwitchLabel').text('$defaultLabelOn');
    }else{
        if($(this).find('input').prop("checked") == false) {
            $(this).find('.jsSwitchLabel').text('$defaultLabelOff');
        }
    }
});

JS
, View::POS_READY);

?>



<div>
  <div class="row">
    <div class="col-12">
      <div class="form-check form-check-group">
        <div class="toggles">
          <label class="toggleLabel" for="<?=$idToggle?>">
            <?= $defaultLabel ?>
            <input type="checkbox" id="<?=$idToggle?>">
            <span class="lever"></span>
            <span class="d-block float-right jsSwitchLabel"></span>
          </label>
        </div>
      </div>
    </div>
  </div>
</div>
