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

$bootstrapItaliaAsset = BootstrapItaliaDesignAsset::register($this);


$image = (isset($image)) ? $image :  'https://picsum.photos/1600/900?random=5';

$paidLabel = ($isPaid) ? 'a pagamento' : '';
$availableSeatsLabel = (isset($availableSeats)) ? '(disponibili' . ' ' . $availableSeats . ' ' . 'posti)' : '';
$infos = $type . ', ' . $paidLabel . ' ' . $availableSeatsLabel;

?>

<div class="scope-eventi-container d-flex flex-column flex-lg-row">
    <div class="d-block flex-column-reverse flex-lg-row h-100">

        <?=
            $this->render(
                '@vendor/open20/design/src/components/bootstrapitalia/views/bi-event',
                [
                    'image' => $image,
                    'dateHourStart' => $dateHourStart,
                    'inScope' => true,
                    'url' => $url,
                    'urlCta' => $urlCta,
                ]
            );
        ?>
    </div>
    <div class="d-flex flex-column ml-0 ml-lg-3 text-container">
        <h3 class="h5 font-weight-bold mt-3 mt-lg-0 mb-0"><?= $title ?></h3>
        <p class="mb-0"><?= $summary ?></p>
        <p class="location"><?= $location . ' ' . $address . ', ' . $addressNumber . ' ' . $cap . ' ' . $city . ' (' . $province . ')'  ?></p>
        <p class="infos"><?= $infos ?></p>
        <p class="descrizione"><?= $description ?></p>
    </div>
</div>