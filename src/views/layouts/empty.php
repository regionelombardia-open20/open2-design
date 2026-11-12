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
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Open2.0 Design - empty layout</title>
    <?php $this->head() ?>
    <?php $this->registerJs("window.__PUBLIC_PATH__ = '{$bootstrapItaliaAsset->baseUrl}/node_modules/bootstrap-italia/dist/fonts'", \yii\web\View::POS_HEAD); ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>
    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">

        <?php echo $content ?>


    </main>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>