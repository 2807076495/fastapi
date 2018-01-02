<?php

namespace backend\controllers;

use Yii;
use common\models\myproducts\MyProducts;
use backend\models\myproducts\SearchMyProducts;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\components\JsonEncoder;

/**
 * MyProductsController implements the CRUD actions for MyProducts model.
 */
class MyProductsController extends Controller
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
     * Lists all MyProducts models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchMyProducts();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return JsonEncoder::response(JsonEncoder::STATUS_SUCCESS,'',$dataProvider);
    }

    /**
     * Displays a single MyProducts model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return JsonEncoder::response(JsonEncoder::STATUS_SUCCESS,'',$this->findModel($id));
    }

    /**
     * Creates a new MyProducts model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MyProducts();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return JsonEncoder::response();
        } else {
            return JsonEncoder::response(JsonEncoder::STATUS_FAIL,$model->getFirstErrors());
        }
    }

    /**
     * Updates an existing MyProducts model.
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
     * Deletes an existing MyProducts model.
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
     * Finds the MyProducts model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MyProducts the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MyProducts::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
