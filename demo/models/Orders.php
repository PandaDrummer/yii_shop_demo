<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property int $product_id
 * @property string $product_name
 * @property string $product_type
 * @property int $product_wieght
 * @property double $price
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'product_id', 'product_name', 'product_type', 'product_wieght', 'price'], 'required'],
            [['product_id', 'product_wieght'], 'integer'],
            [['price'], 'number'],
            [['name', 'phone', 'product_name', 'product_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'product_id' => 'Product ID',
            'product_name' => 'Product Name',
            'product_type' => 'Product Type',
            'product_wieght' => 'Product Wieght',
            'price' => 'Price',
        ];
    }
}
