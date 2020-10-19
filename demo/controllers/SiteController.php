<?php

namespace app\controllers;

use app\models\Cart;
use app\models\Coffe;
use app\models\OrderForm;
use app\models\Orders;
use app\models\Tea;
use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;

class SiteController extends Controller
{
    public $layout='front';
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $coffe=Coffe::find()->all();

        return $this->render('index',[
            'coffe'=>$coffe,
        ]);
    }
    public function actionTea(){
        $tea=Tea::find()->all();
        return $this->render('tea',[
            'tea'=>$tea,
        ]);
    }
    public function actionTeaView($id){
        $tea=Tea::findOne($id);
        return $this->render('tea-view',[
            'tea'=>$tea
        ]);
    }
    public function actionView($id){
        $coffe=Coffe::findOne($id);
        return $this->render('view',[
            'coffe'=>$coffe
        ]);
    }
    public function actionCart(){
        $id=Yii::$app->request->get('id');
        $type=Yii::$app->request->get('ptype');
        $wieght=Yii::$app->request->get('wieght');
        if($type=='tea'){
            $tea=Tea::findOne($id);
            $session=Yii::$app->session;
            $session->open();
            $cart=new Cart();
            $cart->addToCartTea($tea,$type,$wieght);
        }else{
            $coffe=Coffe::findOne($id);
            $session=Yii::$app->session;
            $session->open();
            $cart=new Cart();
            $cart->addToCart($coffe,$type,$wieght);
        }
    }
    public function actionOrder(){
        $session = Yii::$app->session;
        $cart=$session->get('cart');
        return $this->render('cart',[
            'cart'=>$cart
        ]);
    }
    public function actionBuy(){
        $session = Yii::$app->session;
        $cartSession=$session->get('cart');
        if($cartSession){
            $orderForm= new OrderForm();
            if ($orderForm->load(Yii::$app->request->post()) && $orderForm->validate()){
                foreach ($cartSession as $id=>$item){
                    $orders= new Orders();
                    $orders->product_id=$id;
                    $orders->product_name=$item['name'];
                    $orders->name=$orderForm->name;
                    $orders->phone=$orderForm->phone;
                    $orders->product_type=$item['type'];
                    $orders->product_wieght=$item['wieght'];
                    $orders->price=$item['price'];
                    $orders->save(false);
                }
            }
            return $this->render('cart',[
                'cart'=>$cartSession,
                'orderform'=>$orderForm,
            ]);
        }
        else{
            return $this->render('empty');
        }

    }
    public function actionClear(){
        $session= Yii::$app->session;
        $session->open();
        $session->remove('cart');
    }
    public function actionLogin(){
        Yii::$app->user->logout();
        $model = new Loginform();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $user = User::find()->where(['username' => $model->username, 'password' => $model->password])->one();
            if($user){
                Yii::$app->user->login($user);
                $this->redirect('../admin/coffe/index');
            }
            else{
                $this->redirect('/site/login');
            }
        } else {

            return $this->render('loginform', ['model' => $model]);
        }
    }


    public function vardump($var) {
       echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }
}
