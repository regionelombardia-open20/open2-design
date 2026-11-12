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

$jsToggleMenu = <<< JS

$('#toggleMenuSidebar').click(function(event) {

if($(this).prop("checked") == true) {
  console.log('vero');
$('#jsMenu').toggleClass('d-none');
$('#jsMain').toggleClass('col-lg-12');
$('.dev-tool-container').removeClass("mb-4 pb-3");
} else {
  console.log('falso');
  $('#jsMenu').toggleClass('d-none');
  $('#jsMain').toggleClass('col-lg-12');
  $('.dev-tool-container').addClass("mb-4 pb-3");
}

});

JS;

$this->registerJs($jsToggleMenu);

?>

<?php

$jsToggleContainer = <<< JS

$('#toggleContainer').click(function(event) {
$('#mainContent').toggleClass('container');

});

JS;

$this->registerJs($jsToggleContainer);

?>

<div class="dev-tool-container container-fluid fixed-bottom design-theme-bg-light mb-4 mb-lg-0 pb-3 pb-lg-0">
  <div class="row mt-2">
    <div class="col-12 col-lg-4 pl-lg-4">
      <?=
        $this->render(
          '@vendor/open20/design/src/components/bootstrapitalia/views/bi-form-toggle',
          [
            'label' => 'Nascondi menu',
            'id' => 'toggleMenuSidebar'
          ]
        );
      ?>
    </div>
    <div class="col-12 col-lg-4 pl-lg-4">
      <?=
        $this->render(
          '@vendor/open20/design/src/components/bootstrapitalia/views/bi-form-toggle',
          [
            'label' => 'Abilita container',
            'id' => 'toggleContainer'
          ]
        );
      ?>
    </div>
  </div>
</div>