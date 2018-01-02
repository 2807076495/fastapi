<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%user_apply}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $user_type
 * @property integer $apply_user_type
 * @property string $contact
 * @property string $idcard
 * @property string $idcard_front_img
 * @property string $idcard_reverse_img
 * @property string $company
 * @property string $license_img
 * @property string $other_licenses
 * @property integer $operator
 * @property integer $created_at
 * @property integer $updated_at
 */
class UserApply extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_apply}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'user_type', 'apply_user_type', 'contact', 'operator', 'created_at', 'updated_at'], 'required'],
            [['user_id', 'user_type', 'apply_user_type', 'operator', 'created_at', 'updated_at'], 'integer'],
            [['other_licenses'], 'string'],
            [['contact'], 'string', 'max' => 32],
            [['idcard'], 'string', 'max' => 18],
            [['idcard_front_img', 'idcard_reverse_img', 'license_img'], 'string', 'max' => 100],
            [['company'], 'string', 'max' => 64],
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
            'user_type' => '用户类型',
            'apply_user_type' => '申请用户类型',
            'contact' => '联系人',
            'idcard' => '身份证号',
            'idcard_front_img' => '身份证正面照片',
            'idcard_reverse_img' => '身份证反面照片',
            'company' => '企业名称',
            'license_img' => '营业执照照片',
            'other_licenses' => '其他材料',
            'operator' => '后台操作员',
            'created_at' => '创建日期',
            'updated_at' => '更新日期',
        ];
    }
}
