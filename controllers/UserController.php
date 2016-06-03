<?php
/**
 * Created by PhpStorm.
 * User: simonxu14
 * Date: 6/3/2016
 * Time: 9:25 AM
 */
namespace app\controllers;

use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';
}