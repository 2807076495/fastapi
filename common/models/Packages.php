<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%packages}}".
 *
 * @property integer $id
 * @property integer $product_id
 * @property integer $user_type
 * @property integer $free_times
 * @property integer $price
 * @property integer $times
 */
class Packages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%packages}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'user_type', 'free_times', 'price', 'times'], 'required'],
            [['product_id', 'user_type', 'free_times', 'price', 'times'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => '产品ID',
            'user_type' => '用户类型【0:普通用户、1:认证用户、2:企业用户】',
            'free_times' => '免费次数',
            'price' => '调用费用',
            'times' => '调用次数',
        ];
    }
}
