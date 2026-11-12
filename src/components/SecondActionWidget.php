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

namespace open20\design\components;


use open20\amos\core\icons\AmosIcons;
use open20\design\utility\DesignIcon;
use yii\base\Widget;
use yii\helpers\ArrayHelper;use yii\helpers\Html;

class SecondActionWidget extends Widget
{
    const TYPE_LAYOUT = 'layout';
    const TYPE_DESIGN = 'design';

    public $type = self::TYPE_LAYOUT;
    public $urlSecondAction;
    public $labelSecondAction;
    public $titleSecondAction;
    public $titleScopePreventSecondAction;
    public $iconSecondAction;
    public $modelLabel;
    public $btnClass;
    public $isScope = false;

    public $canSecondAction;
    public $hideSecondAction;

    public $options = [];

    /**
     *
     */
    public function init()
    {
        parent::init();
        $this->options = $this->getView()->params['optionsSecondAction'];
    }

    public function run()
    {
        if(!$this->hideSecondAction) {
            if($this->type == self::TYPE_DESIGN){
                $class = "cta link-action-" . $this->modelLabel . " $this->btnClass  btn-primary-outline ";
                $icon = DesignIcon::show($this->iconSecondAction);
            }else {
                $class = "cta link-action-" . $this->modelLabel . " $this->btnClass flexbox align-items-center btn btn-xs btn-primary ";
                $icon = AmosIcons::show($this->iconSecondAction);
            }
            $labelSecondAction = $icon. '<span>' . $this->labelSecondAction . '</span>';
            $options = [
                'class' => $class,
                'title' => $this->titleSecondAction
            ];

            $options = ArrayHelper::merge($options, $this->options);

            if (!$this->canSecondAction && $this->isScope) {
                $options['class'] .= "disabled disabled-with-pointer-events";
                $options['data-toggle'] = 'tooltip';
                $options['title'] = $this->titleScopePreventSecondAction;
                return Html::button($labelSecondAction, $options);
            }
            return \yii\helpers\Html::a($labelSecondAction, $this->urlSecondAction, $options);
        }
        return '';
    }



}

//echo \open20\design\components\SecondActionWidget::widget([
//    'modelLabel' => $modelLabel,
//    'urlSecondAction' => $urlSecondAction,
//    'labelSecondAction' => $labelSecondAction,
//    'titleSecondAction' => $titleScopePreventSecondAction,
//    'iconSecondAction' => $iconSecondAction,
//    'btnClass' => $btnClass,
//    'isScope' => true
//
//])