<?php

namespace common\libs;
use yii\web\Session;
use backend\models\Product;
use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;


class Cart 
{
	function addCart($id)
	{
		$data = new Product();
		$dataProduct =$data->getInfoProductBy($id);
		if(!isset(Yii::$app->session['cart']))
		{
			$cart[$id] = 
			[

			'name'=>$dataProduct['name'],
			'description'=>$dataProduct['description'],
			'amount'=>$dataProduct['amount'],
			
            ];
           
		}
		else
		{
			$cart = Yii::$app->session['cart'];
			if(array_key_exists($id, $cart))
			{
				$cart[$id] =
				[
                 
			'name'=>$dataProduct['name'],
			'description'=>$dataProduct['description'],
			'amount'=>$dataProduct['amount'],

				];

			}
			else
			{
				$cart[$id] = 
			[

			'name'=>$dataProduct['name'],
			'description'=>$dataProduct['description'],
			'amount'=>$dataProduct['amount'],
			
            ];

			}
		}
		Yii::$app->session['cart'] = $cart;
  
	}

}