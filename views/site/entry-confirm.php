<?php
/**
 * Created by PhpStorm.
 * User: simonxu14
 * Date: 5/31/2016
 * Time: 9:27 AM
 */
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>