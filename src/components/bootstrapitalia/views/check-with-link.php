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
//valori di default variabili
$externalLink = (isset($externalLink)) ? $externalLink :  true;
$linkText = (isset($linkText)) ? $linkText :  'leggi l\'informativa sulla privacy';
$target = (isset($target)) ? $target :  '_self';
$title = (isset($title)) ? $title :  'leggi l\'informativa sulla privacy';
$privacyLink = (isset($privacyLink)) ? $privacyLink : \Yii::$app->params['linkConfigurations']['privacyPolicyLinkCommon'];

?>

<?php if ($externalLink) { ?>
   <!--CASO DI LINK ESTERNO-->
   <div>
      <div class="form-check">
         <input id="externalLinkPrivacy" type="checkbox" required>
         <label for="externalLinkPrivacy"><?= Module::t('amosdesign', 'Checkbox di esempio con link esterno') ?> <a href="<?= $privacyLink ?>" target="<?= $target ?>" title="<?= $title ?>"><?= $linkText ?>*</a></label>
      </div>
   </div>

<?php } else { ?>

   <!--CASO DI LINK MODALE-->
   <div>
      <div class="form-check">
         <input id="modalLinkPrivacy" type="checkbox" required>
         <label for="modalLinkPrivacy"><?= Module::t('amosdesign', 'Checkbox di esempio con modale') ?> <a href="#" data-toggle="modal" data-target="#modalright" target="<?= $target ?>" title="<?= $title ?>"><u class="primary-color">link alla privacy</u></a>*</label>
      </div>
   </div>

   <div class="modal it-dialog-scrollable fade" tabindex="-1" role="dialog" id="modalright">
      <div class="modal-dialog modal-dialog-right modal-lg" role="document">
         <div class="modal-content">
            <div class="modal-header align-items-baseline">
               <h5 class="modal-title">TODO
               </h5>
               <button aria-label="chiudi la modale" type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
               </button>

            </div>
            <div class="modal-body">
               <p>Iniettare body della pagina privacy </p>
            </div>

         </div>
      </div>
   </div>
<?php } ?>