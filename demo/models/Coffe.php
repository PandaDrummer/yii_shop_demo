<?php

namespace app\models;

use Yii;


class Coffe extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'coffe';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'discription', 'l_price', 'm_price', 'h_price', 'sourness', 'bitterness', 'roasting'], 'required'],
            [['discription'], 'string'],
            [['l_price', 'm_price', 'h_price', 'sourness', 'bitterness', 'roasting'], 'integer'],
            [['name', 'img'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'discription' => 'Discription',
            'img' => 'Img',
            'l_price' => 'L Price',
            'm_price' => 'M Price',
            'h_price' => 'H Price',
            'sourness' => 'Sourness',
            'bitterness' => 'Bitterness',
            'roasting' => 'Roasting',
        ];
    }
    public function getImg(){
        if($this->img){
            return Yii::getAlias('@web').'/'.'uploads/'.$this->img;
        }
        return '/noimg.png';
    }


    public function saveImage($filename){
        $this->img = $filename;
        return $this->save(false);
    }

    public function deleteImage(){
        $uploadsmodel= new ImageUpload();
        $uploadsmodel->deleteCurrentimg($this->img);
    }
    public function beforeDelete()
    {
        $this->deleteImage();
        return parent::beforeDelete(); // TODO: Change the autogenerated stub
    }
}
