<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "fa_my_products".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $product_id
 * @property integer $status
 * @property string $product_title
 * @property integer $free_times
 * @property integer $price
 * @property integer $times
 * @property integer $is_deleted
 * @property integer $used_times
 * @property integer $created_at
 * @property integer $updated_at
 */
class MyProducts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%my_products}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'product_id', 'status', 'product_title', 'free_times', 'price', 'times', 'created_at', 'updated_at'], 'required'],
            [['user_id', 'product_id', 'status', 'free_times', 'price', 'times', 'is_deleted', 'used_times', 'created_at', 'updated_at'], 'integer'],
            [['product_title'], 'string', 'max' => 32],
            [['user_id', 'product_id'], 'unique', 'targetAttribute' => ['user_id', 'product_id'], 'message' => 'The combination of 用户ID and 产品ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => '用户ID',
            'product_id' => '产品ID',
            'status' => '启用状态',
            'product_title' => '产品标题',
            'free_times' => '免费调用次数',
            'price' => '调用费用',
            'times' => '调用次数',
            'is_deleted' => '是否删除',
            'used_times' => '已调用次数',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
