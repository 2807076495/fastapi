<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%products}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $logo
 * @property integer $status
 * @property string $keyword
 * @property string $description
 * @property integer $is_free
 * @property integer $used_times
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%products}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'title', 'status', 'is_free'], 'required'],
            [['id', 'status', 'is_free', 'used_times'], 'integer'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 32],
            [['logo', 'keyword'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '产品编号',
            'title' => '产品名称',
            'logo' => '产品logo',
            'status' => '产品状态',
            'keyword' => '关键字',
            'description' => '描述',
            'is_free' => '是否收费【0:全免费、1:半免费、2:收费、3:手动】',
            'used_times' => 'Used Times',
        ];
    }
}
