<?php

namespace backend\models;

use Yii;
use yii\data\ActiveDataProvider;
use frontend\controller\ShoppingcartController;
use common\libs\Cart;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $user_email
 * @property string $name
 * @property string $description
 * @property string $ikey
 * @property string $amount
 * @property integer $quantity
 * @property string $availability
 * @property string $prod_condition
 * @property string $brand
 * @property integer $stock
 * @property string $image
 * @property integer $status
 * @property string $created_at
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'ikey', 'amount', 'availability', 'prod_condition', 'brand', 'stock', 'image', 'status'], 'required'],
            [['description'], 'string'],
            [['quantity', 'stock', 'status'], 'integer'],
            [['created_at','user_email'], 'safe'],
            [['user_email', 'prod_condition', 'brand'], 'string', 'max' => 100],
            [['name', 'image'], 'string', 'max' => 255],
            [['ikey', 'amount', 'availability'], 'string', 'max' => 50],
            [['image'],'file','extensions'=>'jpg,png,gif','skipOnEmpty'=>false]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_email' => 'User Email',
            'name' => 'Name',
            'description' => 'Description',
            'ikey' => 'Ikey',
            'amount' => 'Amount',
            'quantity' => 'Quantity',
            'availability' => 'Availability',
            'prod_condition' => 'Prod Condition',
            'brand' => 'Brand',
            'stock' => 'Stock',
            'image' => 'Image',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }


    function getInfoProductBy($id)
    {
        $data = Product::find()->asArray()->where('id=:id',['id'=>$id])->one();
        return $data;
    }
}
