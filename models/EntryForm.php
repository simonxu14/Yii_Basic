<?php
/**
 * Created by PhpStorm.
 * User: simonxu14
 * Date: 5/31/2016
 * Time: 9:20 AM
 */

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}