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

namespace open20\design\utility;

/**
 * Aria S.p.A.
 * OPEN 2.0
 *
 *
 * @package    [NAMESPACE_HERE]
 * @category   CategoryName
 */
use Exception;
use open20\design\Module;
use Yii;
use yii\helpers\Html;

class CmsLanguageUtility extends LanguageUtility
{
    /**
     * @var null|array Singleton container when used for mobile and desktop in order to reduce db requests.
     */
    private static $_dataArray;

    public static function getAppLanguage()
    {
        $labelLang = strtoupper(Yii::$app->composition['langShortCode']);
        return $labelLang;
    }

    /**
     *
     * @return array
     */
    public static function getTranslationMenu()
    {
        try {
            $voceMenu    = [];
            $link        = '';
            $currentLang = Yii::$app->composition['langShortCode'];
            $languages   = self::getDataArray();

            if (!empty($languages)) {
                foreach ($languages as $langData) {
                    $item     = $langData['item'];
                    $lang     = $langData['lang'];
                    $isActive = $currentLang == $lang['short_code'];

                    if (get_class(\Yii::$app->controller->module) != 'luya\cms\frontend\Module') {
                        $baseUrl = str_replace('/'.$currentLang, '', \Yii::$app->request->url);

                        $link = '/'.$lang['short_code'].$baseUrl;
                    } else if ($item) {
                        $link = $item->itemArray['link'];
                    } else {
                        $link = Yii::$app->urlManager->prependBaseUrl($lang['short_code']);
                    }
                    $voceMenu[] = Html::a(
                            Html::tag('span', strtoupper($lang['short_code'])), null,
                            [
                            'href' => $link,
                            'data' => [
                                'params' => ['language' => $lang['short_code']],
                                'method' => 'post'
                            ],
                            'class' => 'list-item',
                            'title' => Module::t('amosdesign', 'Cambia lingua').' '. strtoupper($lang['short_code'])
                            ]
                    );
                }
            }

            return $voceMenu;
        } catch (Exception $e) {
            return [];
        }
    }

    /**
     *
     * @return type
     */
    private static function getDataArray()
    {
        if (self::$_dataArray === null) {
            $currentMenuItem = Yii::$app->menu->current;
            $array           = [];
            foreach (Yii::$app->adminLanguage->getLanguages() as $lang) {
                $array[] = [
                    'lang' => $lang,
                    'item' => Yii::$app->menu->find()->where(['nav_id' => $currentMenuItem->navId])->lang($lang['short_code'])->with('hidden')->one(),
                ];
            }

            self::$_dataArray = $array;
        }

        return self::$_dataArray;
    }
}