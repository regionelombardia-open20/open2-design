<?php
/**
 * Aria S.p.A.
 * OPEN 2.0
 *
 * @package   open20\design\layout
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

namespace open20\design\assets;

use yii\web\AssetBundle;

/**
 * Class BootstrapItaliaDesignAsset
 * @package open20\design\assets
 */

class BootstrapItaliaDesignAsset extends AssetBundle
{
    public $sourcePath = '@vendor/open20/design/src/assets/resources/bootstrapitaliacustom';

    public $js = [
        'node_modules/bootstrap-italia/dist/js/bootstrap-italia.bundle.min.js', //mantenere come prima riga
        'js/bootstrap-italia-custom.js',
        'js/owl-carousel-design.js',
        'js/footer-height.js',
        'js/hamburger-menu.js',
        'js/btn-modify-cms-page.js',
        'node_modules/svgxuse/svgxuse.min.js', //per far vedere le icone in IE
    ];

    public $css = [
      'MaterialDesign-Webfont-master/css/materialdesignicons.min.css',
      'css/pretty-checkbox.min.css',
      'scss/main-design.scss'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        if( !(isset(\Yii::$app->params['layoutConfigurations']['enableHeaderStickyHeader'])) || (isset(\Yii::$app->params['layoutConfigurations']['enableHeaderStickyHeader']) && !(\Yii::$app->params['layoutConfigurations']['enableHeaderStickyHeader']))){
            $this->js[] = 'js/header-height.js';
        }
        parent::init();
    }
}
