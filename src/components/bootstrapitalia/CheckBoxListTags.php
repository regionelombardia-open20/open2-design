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

namespace open20\design\components\bootstrapitalia;

use open20\amos\tag\models\Tag;
use yii\base\InvalidConfigException;
use yii\base\Model;
use yii\base\Widget;
use yii\helpers\BaseHtml;
use yii\helpers\Html;

/**
 * 
 */
class CheckBoxListTags extends Widget
{

    /**
     * @var Model the data model that this widget is associated with.
     */
    public $model;

    /**
     * @var Tag[]
     */
    public $choices;

    /**
     * @var string the model attribute that this widget is associated with.
     */
    public $attribute;

    /**
     * @var string 
     */
    public $baseIconsUrl = ''; 

    /**
     * @var array the HTML attributes.
     */
    public $options = [];

    /**
     *
     * @var integer
     */
    public $tagWrapperSize;

    public function init()
    {
        parent::init();

        if ($this->model === null || !$this->hasModel()) {
            throw new InvalidConfigException("Model not configured.");
        }

        if ($this->choices === null || !is_array($this->choices)) {
            throw new InvalidConfigException("Choices not configured.");
        }


        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->hasModel() ? Html::getInputId($this->model, $this->attribute) : $this->getId();
        }

        foreach($this->choices as $topicIcon) {
            if (!($topicIcon instanceof Tag)) {
                throw new InvalidConfigException("Choices not well configured.");
            }
        }

    }

    /**
     * @return bool whether this widget is associated with a data model.
     */
    protected function hasModel()
    {
        return $this->model instanceof Model;
    }

    public function run()
    {
        $inputName = BaseHtml::getInputName($this->model, $this->attribute);

        return $this->render('check_box_list_tags', [
            'choices' => $this->choices,
            'model' => $this->model,
            'attribute' => $this->attribute,
            'inputName' => $inputName,
            'baseIconsUrl' => $this->baseIconsUrl,
            'tagWrapperSize' => $this->tagWrapperSize,
            // 'arrayIds' => $arrayIds,
            'showIcon' => isset($this->options['showIcon']) ? $this->options['showIcon'] : 'false'
        ]);
    }
}