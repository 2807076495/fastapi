<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%adv}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $image
 * @property string $link
 * @property integer $created_at
 */
class Adv extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%adv}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'image', 'link', 'created_at'], 'required'],
            [['created_at'], 'integer'],
            [['title'], 'string', 'max' => 32],
            [['image', 'link'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'image' => '图片',
            'link' => '链接',
            'created_at' => '创建时间',
        ];
    }
}
