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

use open20\design\assets\BootstrapItaliaDesignAsset;
use yii\base\InvalidConfigException;
use yii\base\Model;
use yii\base\Widget;
use yii\helpers\BaseHtml;
use yii\helpers\Html;
use open20\amos\core\module\BaseAmosModule;
use yii\helpers\VarDumper;

/**
 * ```php
 * <?= $form->field($model, 'name')->widget(Input::classname(),  [
 *                          'options'=> ['required' => true,
 *                                          // configure option here
 *                                      ]
 * // configure additional widget properties here
 * ])->label(false)
 * ?>
 * 
 * ```
 * 
 */
class Select extends Widget
{

    /**
     * @var Model the data model that this widget is associated with.
     */
    public $model = null;

    /**
     * @var string the model attribute that this widget is associated with.
     */
    public $attribute;

    /**
     * @var string the input name. This must be set if [[model]] and [[attribute]] are not set.
     */
    public $name;

    /**
     * @var string label for attribute
     */
    public $label = null;

    /**
     * @var string the input value.
     */
    public $value;

    public $items;

    /**
     * @var array the HTML attributes for the input tag.
     */
    public $options = [];

    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        if ($this->name === null && !$this->hasModel()) {
            throw new InvalidConfigException("Either 'name', or 'model' and 'attribute' properties must be specified.");
        }
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->hasModel() ? Html::getInputId($this->model, $this->attribute) : $this->attribute ;
        }

        parent::init();
    }

    /**
     * @return bool whether this widget is associated with a data model.
     */
    protected function hasModel()
    {
        return $this->model instanceof Model && $this->attribute !== null;
    }

    public function run()
    {
        $inputId = $this->options['id'];
        $dataAction = $this->options['data-action'];
        $relatedId = $this->options['related-id'];
        $multiple = false;

        if(isset($this->options['multiple'])){
            $multiple = $this->options['multiple'];
        }

        if ($this->model === null) {
            $name = $this->name;
            $label = $this->label;
        } else {
            $name = BaseHtml::getInputName($this->model, $this->attribute);
            $label = (is_null($this->label)) ? $this->model->getAttributeLabel($this->attribute) : $this->label;
            $attribute = $this->attribute;
            if(!empty($this->model->$attribute)) {
                $this->value = $this->model->$attribute;
            }
        }

        if($multiple){
            $name.='[]';
        }


        return $this->render('bi-form-select', [
            'model' => $this->model,
            'attribute' => $this->attribute,
            'name' => $name,
            'value' => $this->value,
            'items' => $this->items,
            'label' => $label,
            'options' => $this->options,
            'inputId' => $inputId,
            'dataAction' => $dataAction,
            'relatedId' => $relatedId,
            'multiple' => $multiple,
            'placeholder' => isset($this->options['placeholder'])? $this->options['placeholder']: '',
        ]);
    }
}
