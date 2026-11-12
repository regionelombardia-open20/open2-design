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
$currentAsset = BootstrapItaliaDesignAsset::register($this);

?>

<div class="owl-carousel-design owl-carousel-herobanner-design it-carousel-wrapper">
   <div class="it-carousel-all owl-carousel">

      <!-- START SLIDE -->
      <div class="it-single-slide-wrapper">
         <div class="it-hero-wrapper it-dark it-overlay">
            <div class="img-responsive-wrapper">
               <div class="img-responsive">
                  <?php if (isset($imgUrl) && !empty($imgUrl)) : ?>
                     <div class="img-wrapper"><img src="<?= $imgUrl ?>" alt="<?= $imgName ?>"></div>
                  <?php endif; ?>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="it-hero-text-wrapper bg-dark">
                        <?php if (isset($category) && !empty($category)) : ?>
                           <span class="it-category"><?= $category ?></span>
                        <?php endif; ?>
                        <?php if (isset($title) && !empty($title)) : ?>
                           <h1><?= $title ?></h1>
                        <?php endif; ?>
                        <?php if (isset($subtitle) && !empty($subtitle)) : ?>
                           <p class="d-none d-lg-block"><?= $subtitle ?></p>
                        <?php endif; ?>
                        <?php if (isset($ctaUrl) && !is_empty($ctaUrl)) : ?>
                           <div class="it-btn-container">
                              <a class="btn btn-sm btn-outline-primary" href="<?= $ctaUrl ?>" title="<?= $ctaTitleLink ?>">
                                 <?= $ctaLabel ?>
                              </a>
                           </div>
                        <?php endif; ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- END SLIDE -->

   </div>
</div>