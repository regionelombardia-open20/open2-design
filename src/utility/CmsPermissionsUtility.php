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

use Yii;
use luya\admin\components\Auth;
use luya\admin\models\Group;
use luya\admin\models\User;
use luya\cms\admin\Module as CmsAdminModule;
use luya\cms\models\NavPermission;
use open20\design\Module;
use open20\amos\core\user\User as AmosUser;

class CmsPermissionsUtility
{

    /**
     *
     * @return boolean
     */
    public static function checkUserPermissionsPageUpdate()
    {
        $ret = false;

        $module = Module::getInstance();
        if ($module->checkCmsPermissions) {
            $ret = Yii::$app->auth->matchApi(Yii::$app->adminuser->getId(), CmsAdminModule::ROUTE_PAGE_UDPATE, Auth::CAN_UPDATE);
        }

        return $ret;
    }

    /**
     *
     * @return boolean
     */
    public static function checkUserPermissionsPageDelete()
    {
        $ret = false;

        $module = Module::getInstance();
        if ($module->checkCmsPermissions) {
            $ret = Yii::$app->auth->matchApi(Yii::$app->adminuser->getId(), CmsAdminModule::ROUTE_PAGE_DELETE, Auth::CAN_DELETE);
        }

        return $ret;
    }

    /**
     *
     * @return boolean
     */
    public static function checkUserPermissionsPageCreate()
    {
        $ret = false;

        $module = Module::getInstance();
        if ($module->checkCmsPermissions) {
            $ret = Yii::$app->auth->matchApi(Yii::$app->adminuser->getId(), CmsAdminModule::ROUTE_PAGE_CREATE, Auth::CAN_CREATE);
        }

        return $ret;
    }

    /**
     *
     * @return boolean
     */
    public static function matchRoute()
    {
        $match = false;
        $email = AmosUser::findOne([
            'id' => Yii::$app->user->id
        ])->email;
        $cmsUser = User::findOne([
            'email' => $email
        ]);
        if (! is_null($cmsUser)) {
            $groups = $cmsUser->groups;
            /** @var Group $group */
            foreach ($groups as $group) {
                $permissions = NavPermission::find()->andWhere([
                    'group_id' => $group->id
                ])->count();
                if (! $permissions) {
                    $match = true;
                    break;
                } else {
                    $permissions = NavPermission::find()->andWhere([
                        'group_id' => $group->id,
                        'nav_id' => Yii::$app->menu->current->id
                    ])->count();
                    if ($permissions) {
                        $match = true;
                        break;
                    }
                }
            }
        }
        // check the access inside auth->matchRoute and return true/false.
        return $match;
    }

    /**
     *
     * @return boolean
     */
    public static function canUpdate()
    {
        return static::matchRoute();
    }
}

