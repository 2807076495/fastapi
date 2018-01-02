<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/12/30
 * Time: 18:25
 */

return \yii\helpers\ArrayHelper::merge(
    require (Yii::getAlias('@yii') . '/messages/zh-CN/yii.php'),
    [
        'Incorrect username or password.' => '账号或密码错误',
    ]
);