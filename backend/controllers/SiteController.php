<?php
namespace backend\controllers;

use common\components\JsonEncoder;
use common\models\User;
use Yii;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function showError($msg){

    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return JsonEncoder::response(JsonEncoder::STATUS_UNLOGIN, '请先登录');
        }
        return JsonEncoder::response();
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        $params = Yii::$app->request->post();
        /*$params['username'] = 'ppzhu';
        $params['password_hash'] = md5('12345678');*/
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        $model->load($params,'');
        if (!$model->login()) {
            return JsonEncoder::response(JsonEncoder::STATUS_FAIL, $model->getFirstErrors());
        }
        return JsonEncoder::response();
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
