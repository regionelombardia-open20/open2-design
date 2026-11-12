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

use yii\base\InvalidCallException;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\ActiveForm as YiiActiveForm;
use yii\widgets\ActiveFormAsset;

/**
 * Description of ActiveForm
 *
 */
class ActiveForm extends YiiActiveForm
{

    public function init()
    {
        parent::init();
        $this->fieldClass = ActiveField::className();
    }

    public function run()
    {
        if (!empty($this->_fields)) {
            throw new InvalidCallException('Each beginField() should have a matching endField() call.');
        }

        $content                     = ob_get_clean();
        $this->options['novalidate'] = 'novalidate';
        $html                        = Html::beginForm($this->action,
                $this->method, $this->options);
        $html                        .= $content;

        if ($this->enableClientScript) {
            $this->registerClientScript();
        }

        $html .= Html::endForm();
        return $html;
    }

    /**
     * This registers the necessary JavaScript code.
     * @since 2.0.12
     */
    public function registerClientScript()
    {
        $id         = $this->options['id'];
        $options    = Json::htmlEncode($this->getClientOptions());
        $attributes = Json::htmlEncode($this->attributes);
        $view       = $this->getView();
        ActiveFormAsset::register($view);
        $view->registerJs("jQuery('#$id').yiiActiveForm($attributes, $options);");
        // $view->registerJs("(function() {
        //     'use strict';
        //     window.addEventListener('load', function() {
        //       var forms = document.getElementsByClassName('needs-validation');
        //       var validation = Array.prototype.filter.call(forms, function(form) {
        //         form.addEventListener('submit', function(event) {
        //           if (form.checkValidity() === false) {
        //             event.preventDefault();
        //             event.stopPropagation();
        //           }
        //         }, false);
        //         form.classList.add('was-validated');
        //       });
        //     }, false);
        //   })();");
    }
}