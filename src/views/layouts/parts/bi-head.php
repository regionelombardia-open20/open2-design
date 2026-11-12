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
use yii\helpers\Html;

?>

<meta charset="<?= Yii::$app->charset ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?= Html::csrfMetaTags() ?>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?= Html::encode(Yii::$app->name)?><?= (isset($this->title)) ? ' ' . '-' . ' ' . Html::encode($this->title) : ''?></title>
<link rel="shortcut icon" href="<?= Yii::$app->request->baseUrl . Yii::$app->params['favicon'] ?>" type="image/x-icon" />
<?php $this->head() ?>
<?php $this->registerJs("window.__PUBLIC_PATH__ = '{$currentAsset->baseUrl}/node_modules/bootstrap-italia/dist/fonts';", \yii\web\View::POS_HEAD); ?>

