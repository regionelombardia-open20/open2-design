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


$filterString='';
if(count($tags)>1){
    foreach($tags as $t){
        $filterString=$filterString .' filtro-'. str_replace(' ', '_', strtolower($t->nome));
    }
}else{
    $tags=str_replace(' ', '_', $tags); 
    $filterString=$filterString .' filtro-'. strtolower($tags);
}
?>

<div class="<?= $columnWidth ?> agid-generic-card-container <?= $additionalCssExternalClass ?>">
    <div class="py-3 h-100 d-flex flex-column shadow">
        <div class="categoria-box-card px-4 pb-2 d-flex align-items-center">                                   
            <div>
                <svg class="icon icon-padded rounded-circle icon-white bg-primary d-flex  mr-1" role="img" aria-label="Numero risposte">
                    <use xlink:href="<?= $currentAsset->baseUrl ?>/sprite/material-sprite.svg#<?= $categoryIcon ?>"></use>
                </svg>
            </div>
            <div class="text-uppercase font-weight-bold primary-color">
                <?= $categoryName ?>
            </div> 
              
        </div>
        <div class="px-4 flex-grow-1">
            <div class="h5  ">  
                <a class="text-black" title="Esplora avviso" href="<?= $urlDetail ?>"><?= $cardTitle ?></a>
            </div>
            <div class="pt-3">

                <?php if($email){ ?>
                    <div > 
                        <strong>Email:</strong><?= $email ?> 
                    </div>
                <?php } ?>

                <?php if($telefono){ ?>
                    <div> 
                        <strong>Telefono:</strong><?= $telefono ?> 
                    </div>
                <?php } ?>

                <?php if($refArea){ ?>
                    <div>
                        <p>
                            <strong>Area di riferimento:</strong>
                            <?php 
                            $i=0;
                            foreach ($refArea as $key => $value) : ?>
                                <!-- < ?php print_r($value); ?> -->            
                                <a href="<?=$value?>" title="Vai alla pagina <?= $key?>">
                                    <span><?= $key?></span><?= ($i<count($refArea)-1) ? "," : ""; ?>
                                </a>   
                            <?php 
                            $i++;
                            endforeach; ?>
                        </p>
                    </div>

                <?php } ?>
                
                <?php 
                    /* ??? ritorno con struttura errata dell'array refArea dalla vista _itemCardAgidPerson
                        <?php 
                            $area_riferimento_nome = array_keys($refArea);
                            $area_riferimento_link = $refArea[$area_riferimento_nome[0]][0];
                        ?>
                        <?php if($refArea){ ?>
                            <div>
                                <p>
                                    <strong>Area di riferimento:</strong>
                                    
                                    <?php 
                                    $i=1;
                                    foreach ($refArea as $key => $value) : ?>
                                            
                                                <a href="<?=$value[0]?>" title="Vai alla pagina <?= $key?>">
                                                    <?= $key?> 
                                                </a>
                                                <?php if($i<count($refArea)){ ?>, <?php } ?>
                                    <?php 
                                    $i++;
                                    endforeach; ?>
                                </p>
                            </div>
                        <?php } ?>
                    */
                ?>

            </div>
        </div>
        <div class="cta-box-card px-4 py-3 uk-section- uk-visible@xl uk-section">
            <div class="uk-container">
                <div class="read-more ">
                    <a class="text-uppercase font-weight-bold" title="Esplora <?= $cardTitle ?>" href="<?= $urlDetail ?>">Leggi di più →</a> 
                </div>   
            </div> 
        </div>
    </div>                                   
</div>