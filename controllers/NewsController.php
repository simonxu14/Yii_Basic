<?php
/**
 * Created by PhpStorm.
 * User: simonxu14
 * Date: 6/3/2016
 * Time: 11:03 AM
 */

namespace app\controllers;

use yii\rbac\Item;
use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;


class NewsController extends ActiveController
{
    public $modelClass = 'app\models\News';

    public function actionList() {
        $modelClass = $this->modelClass;
        $query = $modelClass::find();
        return new ActiveDataProvider([
            'query' => $query,
        ]);
    }
}