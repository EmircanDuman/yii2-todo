<?php

namespace emircanduman\todo\components;

use Yii;
use yii\base\BaseObject;

class TriggerActions extends BaseObject
{
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }

    /* public function onUserDeleteBefore($event)
    {
        ['id' => $id_user, 'default_user' => $defaultUser, 'action' => $action] = $event->payload;
        if ($action == 'delete') {
            $packages = Package::find()->where(['id_user' => $id_user])->all();
            foreach ($packages as $package) {
                $package->delete();
            }
            

        }elseif($action == 'transfer'){
            if ($defaultUser) {
                $packages = Package::find()->where(['id_user' => $id_user])->all();
                foreach ($packages as $package) {
                    $package->id_user = $defaultUser;
                    $package->save();
                }
            }
        }
    } */
}