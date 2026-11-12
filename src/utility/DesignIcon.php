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

/**
 * Created by PhpStorm.
 * User: michele.lafrancesca
 * Date: 18/02/2021
 * Time: 10:36
 */

namespace open20\design\utility;


use open20\design\assets\BootstrapItaliaDesignAsset;
use yii\helpers\Html;

class DesignIcon
{

    const ICON_MD = 'material-design';
    const ICON_BI = 'bootstrap-italia';

    /**
     * @param $iconName
     * @param string $framework
     * @param string $class
     * @param null $assetBundle
     * @return string
     */
    public static function show($iconName, $framework =  DesignIcon::ICON_MD,  $class = 'icon',  $assetBundle = null ){
        if(empty($assetBundle)){
            $assetBundle = BootstrapItaliaDesignAsset::register(\Yii::$app->controller->view);
        }
        $baseUrl = $assetBundle->baseUrl;
        if($framework == DesignIcon::ICON_MD){
            $path = 'sprite/material-sprite.svg';
        }else if(DesignIcon::ICON_BI){
            $path = 'node_modules/bootstrap-italia/dist/svg/sprite.svg';
        }
        return "<svg class='$class'><use xlink:href='$baseUrl/$path#$iconName'></use></svg>";
    }

}