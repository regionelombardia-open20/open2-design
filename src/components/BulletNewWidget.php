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
 * Time: 15:28
 */

namespace open20\design\components;

use open20\amos\notificationmanager\record\NotifyRecord;
use yii\base\Widget;
use yii\bootstrap\Html;


class BulletNewWidget extends Widget
{
    public $model;
    public $class_div_container = 'badge-new-pubblication d-flex align-items-center';
    public $class_span = 'badge badge-pill badge-danger text-uppercase';

    public $basePath = '@vendor/open20/design/src/components/bootstrapitalia/views';

    /**
     * @inheritdoc
     */
    public function run()
    {
        if ($this->model instanceof NotifyRecord) {
            if ($this->model->isNews()) {
                return $this->render($this->basePath.'/bi-badge-new-pubblication',[
                    'class_div_container' => $this->class_span,
                    'class_span' => $this->class_span
                ]);
            }
        }
        return '';
    }

}
