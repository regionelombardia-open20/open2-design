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

/**
 * Aria S.p.A.
 * OPEN 2.0
 *
 *
 * @package    [NAMESPACE_HERE]
 * @category   CategoryName
 */
use open20\design\Module;
use Yii;
use yii\base\Component;
use open20\amos\core\controllers\AmosController;

class LayoutManager extends Component {

    public function renderMainLayout(array $params) {
        $basePath = Yii::$app->getModule(Module::getModuleName())->getBasePath();
        return Yii::$app->view->renderFile($basePath . '/views/layouts/bi-main-layout.php',
                        $params);
    }

    /**
     * 
     * @param AmosController $controller
     */
    public function setLayout(AmosController $controller) {
        $basePath = Yii::$app->getModule(Module::getModuleName())->getBasePath();
        $controller->layout =  '@vendor/open20/design/src/views/layouts/bi-main-layout';
    }

}
