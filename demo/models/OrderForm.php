<?php


namespace app\models;
use yii\base\Model;

class OrderForm extends Model
{
    public $name;
    public $phone;

    public function rules()
    {
        return [
            [['name', 'phone'], 'required'],


        ];
    }
}