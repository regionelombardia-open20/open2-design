<?php

/**
 * Aria S.p.A.
 * OPEN 2.0
 *
 * @package   open20\amos\core
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

use yii\helpers\VarDumper;

$FlashMsg = Yii::$app->session->getAllFlashes(true);
?>

<?php if (!empty($FlashMsg)) : ?> 

    <div class="container-messages container">
    <?php endif; ?>
    <?php
    foreach ($FlashMsg as $type => $message) :
        if (!is_array($message)) : ?>

            <div class="alert alert-<?= $type ?> alert-dismissible fade show mt-2" role="alert">
                <?= $message ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <?php else :
            // due gestioni diverse per gli alert, se modale $message diventa un array con quello che serve per attivare una modale
            if ($type == 'modal'): 
                echo $this->render("." . DIRECTORY_SEPARATOR . "bi-modal-alert", [
                    'arrayContent' => $message[0],
                ]); 
            else:
            foreach ($message as $msg) : ?>

                <div class="alert alert-<?= $type ?> alert-dismissible fade show mt-2" role="alert">
                    <?= $msg ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php 
                
            endforeach;
            endif;
        endif;
    endforeach;
    ?>
    <?php if (!empty($FlashMsg)) : ?>
    </div>
<?php endif; ?>