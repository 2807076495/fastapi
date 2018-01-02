<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%categories}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $tag
 * @property integer $group
 * @property integer $created_at
 * @property integer $updated_at
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%categories}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'tag', 'group', 'created_at', 'updated_at'], 'required'],
            [['group', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 32],
            [['tag'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '分类名称',
            'tag' => '分类简称',
            'group' => '分组',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
