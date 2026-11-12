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
?>

<div class="form-group">
      <div class="bootstrap-select-wrapper">
        <label><?= Module::t('amosdesign', 'Comune')?></label>
        <div class="invalid-feedback"><?= Module::t('amosdesign', 'Non validato')?></div>
        <select title=<?= Module::t('amosdesign', 'Scegli una opzione')?> data-live-search="true" data-live-search-placeholder="Cerca opzioni">
          <option value="1">Milano</option>
          <option value="2">Mantova</option>
          <option value="3">Sermide</option>
          <option value="4">Ferrara</option>
          <option value="5">Roma</option>
        </select>
      </div>
    </div>