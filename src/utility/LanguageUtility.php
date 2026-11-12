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
 * @package    open20\design
 * @category   CategoryName
 */

use Yii;
use lajax\translatemanager\models\Language;
use open20\design\Module;

class LanguageUtility
{
    /**
     *
     * @return string
     */
    public static function getAppLanguage()
    {
        $posLang   = strpos(Yii::$app->language, '-');
        $labelLang = strtoupper(substr(Yii::$app->language, 0, $posLang));
        return $labelLang;
    }

    /**
     *
     * @return array
     */
    public static function getTranslationMenu()
    {
        try {
            $voceMenu = [];
            if (
                \Yii::$app->getModule('translatemanager') && isset(Yii::$app->params['languageSelector']) && Yii::$app->params['languageSelector']
                && isset(Yii::$app->language)
            ) {
                $translateManager = new Language();
                $table            = $translateManager->getTableSchema()->name;

                $activeLanguage = self::getActiveLanguages($table);
                $languages      = (!empty($activeLanguage) ? $activeLanguage : []);

                if (!empty($languages)) {
                    foreach ($languages as $Lang) {
                        $voceMenu[] = \yii\helpers\Html::a(
                                \yii\helpers\Html::tag('span', $Lang['name']),
                                [(!empty(\Yii::$app->getModule('translation')->actionLanguage) ? \Yii::$app->getModule('translation')->actionLanguage
                                    : '/site/language')],
                                [
                                'data' => [
                                    'params' => ['language' => $Lang['language_id']],
                                    'method' => 'post'
                                ],
                                'class' => 'list-item',
                                'title' => Module::t('amosdesign', 'Cambia lingua').' '.strtoupper($Lang['name'])
                                ]
                        );
                    }
                }

                return $voceMenu;
            }
        } catch (\Exception $e) {
            return [];
        }
    }

    /**
     * Return array of languages
     * @param string $table
     * @return array
     */
    protected static function getActiveLanguages($table)
    {
        try {
            $language  = new \lajax\translatemanager\models\Language;
            $arrayLang = [];

            if (Yii::$app->db->schema->getTableSchema($table, false) != null) {
                if (\Yii::$app->user->can('CONTENT_TRANSLATOR')) {
                    $arrayLang = (new \yii\db\Query())->from($table)->andWhere(['>=', 'status', 1])->select([
                            'language_id',
                            'name'
                        ])->all();
                } else {
                    $arrayLang = (new \yii\db\Query())->from($table)->andWhere(['=', 'status', 1])->select([
                            'language_id',
                            'name'
                        ])->all();
                }
            }
            return $arrayLang;
        } catch (\Exception $e) {
            return NULL;
        }
    }
}
