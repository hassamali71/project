<?php

namespace frontend\controllers;

use common\libs\Cart;
use yii\web\Session;
use backend\models\Product;
use yii\web\Controller;
use yii\data\ActiveDataProvider;


class ShoppingcartController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    function actionAddcart($id)
    {
    	$cart = new Cart();
    	$cart ->addCart($id);

    	echo '<pre>';
    	print_r(Yii::$app->session['cart']);
    	die;
     
    }

}
