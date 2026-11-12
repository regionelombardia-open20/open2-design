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
use open20\design\components\bootstrapitalia\interfaces\WizardStepsInterface;
use yii\base\InvalidConfigException;
use yii\base\Model;
use yii\base\Widget;
use yii\helpers\BaseHtml;
use yii\helpers\Html;

/**
 * 
 */
class WizardSteps extends Widget
{

    /**
     *
     * @var integer
     */
    public $stepNumber = 1;

    public $isLink = false;

    private $classActive = 'active-step';

    private $classCurrent = 'current-step';

    public $listStep = [];

    public function init()
    {
        parent::init();
    }

    public function run()
    {

        return $this->render('wizard_steps', [
            'stepNumber' => $this->getStepNumber(),
        ]);
    }

    public function setStepNumber($n){
        $this->stepNumber = (!empty($n))?: '0';
    }

    public function getStepNumber(){
        return $this->stepNumber;
    }

    public function setIsLink($value){
        $this->isLink = $value;
    }

    public function getIsLink(){
        return $this->isLink;
    }

    public function getClassActive(){
        return $this->classActive;
    }

    public function getClassCurrent(){
        return $this->classCurrent;
    }

}