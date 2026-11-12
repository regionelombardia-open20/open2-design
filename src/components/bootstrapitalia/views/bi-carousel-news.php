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

$landscapeColsNumber = (isset($landscapeColsNumber)) ? $landscapeColsNumber : 'one';

?>
<div class="it-carousel-wrapper it-carousel-landscape-abstract-<?= $landscapeColsNumber ?>-cols owl-carousel-design owl-carousel-design-news">
  <div class="it-carousel-all owl-carousel">
    <div class="it-single-slide-wrapper">
      <!--start card-->
      <?=
          $this->render(
            '@vendor/open20/design/src/components/bootstrapitalia/views/bi-news',
            [
              'category' => 'ULTIME DALLA P.A.',
              'image' => 'https://picsum.photos/1600/900?random=6',
              'nameSurname' => 'Paolo Bianchi',
              
              'showAvatar' => true,
              'itemDirection' => 'row',
              'carouselClass' =>'newsInsideCarousel',
              'avatarWrapperSize' => 'md',
              'categorySize'=> 'lead',
              'titleSize'=> 'h3',
              'title' =>'Lorem ipsum dolor sit amet',
              'date' => '2020-12-12',
              'widthColumn' => 'col-12'
            ]
          );
        ?>
      <!--end card-->
    </div>
    <div class="it-single-slide-wrapper">
      <!--start card-->
      <?=
          $this->render(
            '@vendor/open20/design/src/components/bootstrapitalia/views/bi-news',
            [
              'category' => 'ULTIME DALLA P.A.',
              'image' => 'https://picsum.photos/1600/900?random=7',
              'nameSurname' => 'Paolo Bianchi',
              'title' =>'Lorem ipsum dolor sit amet ipsum dolor sit amet',
              'showAvatar' => true,
              'itemDirection' => 'row',
              'carouselClass' =>'news-inside-carousel',
              'date' => '2020-12-12',
              'widthColumn' => 'col-12'
            ]
          );
        ?>
      <!--end card-->
    </div>
    <div class="it-single-slide-wrapper">
      <!--start card-->
      <?=
          $this->render(
            '@vendor/open20/design/src/components/bootstrapitalia/views/bi-news',
            [
              'category' => 'ULTIME DALLA P.A.',
              'image' => 'https://picsum.photos/1600/900?random=8',
              'nameSurname' => 'Paolo Bianchi',
              'title' =>'Io sono una stringa da 75 caratteri totali e da qui in poi non so cosa fare',
              'showAvatar' => true,
              'itemDirection' => 'row',
              'carouselClass' =>'news-inside-carousel',
              'date' => '2020-12-12',
              'widthColumn' => 'col-12'
            ]
          );
        ?>
      <!--end card-->
    </div>

    <div class="it-single-slide-wrapper">
      <!--start card-->
      <?=
          $this->render(
            '@vendor/open20/design/src/components/bootstrapitalia/views/bi-news',
            [
              'category' => 'ULTIME DALLA P.A.',
              'image' => 'https://picsum.photos/1600/900?random=9',
              'nameSurname' => 'Paolo Bianchi',
              'title' =>'Io sono una stringa da 75 caratteri totali e da qui in poi non so cosa fare',
              'showAvatar' => true,
              'itemDirection' => 'row',
              'carouselClass' =>'news-inside-carousel',
              'date' => '2020-12-12',
              'widthColumn' => 'col-12'
            ]
          );
        ?>
      <!--end card-->
    </div>
    <div class="it-single-slide-wrapper">
      <!--start card-->
      <?=
          $this->render(
            '@vendor/open20/design/src/components/bootstrapitalia/views/bi-news',
            [
              'category' => 'ULTIME DALLA P.A.',
              'image' => 'https://picsum.photos/1600/900?random=10',
              'nameSurname' => 'Paolo Bianchi',
              'title' =>'Io sono una stringa da 75 caratteri totali e da qui in poi non so cosa fare',
              'showAvatar' => true,
              'itemDirection' => 'row',
              'carouselClass' =>'news-inside-carousel',
              'date' => '2020-12-12',
              'widthColumn' => 'col-12'
            ]
          );
        ?>
      <!--end card-->
    </div>
    <div class="it-single-slide-wrapper">
      <!--start card-->
      <?=
          $this->render(
            '@vendor/open20/design/src/components/bootstrapitalia/views/bi-news',
            [
              'category' => 'ULTIME DALLA P.A.',
              'image' => 'https://picsum.photos/1600/900?random=11',
              'nameSurname' => 'Paolo Bianchi',
              'title' =>'Io sono una stringa da 75 caratteri totali e da qui in poi non so cosa fare',
              'showAvatar' => true,
              'itemDirection' => 'row',
              'carouselClass' =>'news-inside-carousel',
              'date' => '2020-12-12',
              'widthColumn' => 'col-12'
            ]
          );
        ?>
      <!--end card-->
    </div>
  </div>
</div>