<?php
namespace app\models;


use yii\db\ActiveRecord;

class Cart extends ActiveRecord
{
    public function addToCart($coffe,$type,$wieght,$qty=1){
        switch ($wieght){
            case 100:
                $price=$coffe->l_price;
                break;
            case 250:
                $price=$coffe->m_price;
                break;
            case 500:
                $price=$coffe->h_price;
                break;
        }
        if(isset($_SESSION['cart'][$coffe->id])){
            $_SESSION['cart'][$coffe->id]['qty'] +=$qty;
        }else{
            $_SESSION['cart'][$coffe->id]=[
                'qty'=>$qty,
                'name'=>$coffe->name,
                'type'=>$type,
                'price'=>$price,
                'wieght'=>$wieght,
                'img'=>$coffe->img
            ];
        }
    }
    public function addToCartTea($tea,$type,$wieght,$qty=1){
        switch ($wieght){
            case 100:
                $price=$tea->l_price;
                break;
            case 150:
                $price=$tea->m_price;
                break;
            case 200:
                $price=$tea->h_price;
                break;
        }
        if(isset($_SESSION['cart'][$tea->id])){
            $_SESSION['cart'][$tea->id+1000]['qty'] +=$qty;
        }else{
            $type='чай';
            $_SESSION['cart'][$tea->id+1000]=[
                'qty'=>$qty,
                'name'=>$tea->name,
                'type'=>$type,
                'price'=>$price,
                'wieght'=>$wieght,
                'img'=>$tea->img
            ];
        }
    }
}