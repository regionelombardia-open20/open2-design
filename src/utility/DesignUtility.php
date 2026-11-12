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
 * Time: 10:31
 */

namespace open20\design\utility;


use open20\design\Module;

class DesignUtility
{
    /**
     * @return string
     */
    public static function getTextSigninOrSignup()
    {
        return Module::t('amosdesign', "accedi o registrati alla piattaforma");
    }

    /**
     * @return array
     */
    public static function listViewPagerConfig()
    {
        $prevPaginatorIcon = DesignIcon::show('chevron-left', DesignIcon::ICON_MD, 'icon icon-sm');
        $nextPaginatorIcon = DesignIcon::show('chevron-right', DesignIcon::ICON_MD, 'icon icon-sm');
        $startPaginatorIcon = DesignIcon::show('chevron-double-left', DesignIcon::ICON_MD, 'icon icon-sm');
        $endPaginatorIcon = DesignIcon::show('chevron-double-right', DesignIcon::ICON_MD, 'icon icon-sm');

        return [
            'options' => [
                'class' => 'pagination'
            ],
            'pageCssClass' => 'page-item',
            'activePageCssClass' => 'border border-primary rounded',
            'nextPageCssClass' => 'page-item border border-white rounded',
            'prevPageCssClass' => 'page-item border border-white rounded',
            'firstPageCssClass' => 'page-item border border-white rounded',
            'lastPageCssClass' => 'page-item border border-white rounded',
            'prevPageLabel' => $prevPaginatorIcon,
            'nextPageLabel' => $nextPaginatorIcon,
            'firstPageLabel' => $startPaginatorIcon,
            'lastPageLabel' => $endPaginatorIcon,
            'linkOptions' => [
                'class' => 'page-link'
            ],
        ];
    }

    /**
     * @param bool $withSummary
     * @return string
     */
    public static function getLayoutSummary($withSummary = true)
    {
        $listViewLayoutSummary = \Yii::$app->controller->view->render('@vendor/open20/design/src/components/yii2/views/parts/_listViewLayoutSummary');
        $listViewLayoutSummaryWithoutPagination = \Yii::$app->controller->view->render('@vendor/open20/design/src/components/yii2/views/parts/_listViewLayoutSummaryWithoutPagination');

        if ($withSummary) {
            return $listViewLayoutSummary;
        }
        return $listViewLayoutSummaryWithoutPagination;
    }

    /**
     * Funzione per risalire al plugin di un widget dato il suo namespace
     * @param $widgetPath
     * @return false|string[]
     */
    public static function getWidgetPlugin($widgetPath)
    {
        $partialPath = substr($widgetPath, 0, strpos($widgetPath, '\widgets'));
        $plugin = end(explode('\\', $partialPath));
        return $plugin;
    }

    public static function bytesFormat($bytes)
    {
        if ($bytes >= 1073741824) {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        } else {
            $bytes = $bytes . ' byte';
        }

        return $bytes;
    }
}
