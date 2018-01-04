<?php

namespace backend\controllers;

use Yii;
use common\models\UserApply;
use backend\models\userapply\SearchUserApply;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\components\JsonEncoder;

/**
 * UserApplyController implements the CRUD actions for UserApply model.
 */
class UserApplyController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all UserApply models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchUserApply();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return JsonEncoder::response(JsonEncoder::STATUS_SUCCESS,'',$dataProvider);
    }

    /**
     * Displays a single UserApply model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return JsonEncoder::response(JsonEncoder::STATUS_SUCCESS,'',$this->findModel($id));
    }

    /**
     * Creates a new UserApply model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UserApply();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return JsonEncoder::response();
        } else {
            return JsonEncoder::response(JsonEncoder::STATUS_FAIL,$model->getFirstErrors());
        }
    }

    /**
     * Updates an existing UserApply model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return JsonEncoder::response();
        } else {
            return JsonEncoder::response(JsonEncoder::STATUS_FAIL,$model->getFirstErrors());
        }
    }

    /**
     * Deletes an existing UserApply model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return JsonEncoder::response();
    }

    /**
     * Finds the UserApply model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return UserApply the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = UserApply::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
