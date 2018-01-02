<?php

namespace backend\controllers;

use common\components\JsonEncoder;
use Yii;
use common\models\products\Products;
use backend\models\products\SearchProducts;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
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
     * Lists all Products models.
     * @return mixed
     */
    public function actionIndex()
    {
        $params = Yii::$app->request->queryParams;
        $searchModel = new SearchProducts();
        $dataProvider = $searchModel->search($params);
//        $models = $dataProvider->getModels();
        return JsonEncoder::response(JsonEncoder::STATUS_SUCCESS,'',$dataProvider);
    }

    /**
     * Displays a single Products model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return JsonEncoder::response(JsonEncoder::STATUS_SUCCESS,'',$this->findModel($id));
    }

    /**
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SearchProducts();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return JsonEncoder::response();
        } else {
            return JsonEncoder::response(JsonEncoder::STATUS_FAIL,$model->getFirstErrors());
        }
    }

    /**
     * Updates an existing Products model.
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
     * Deletes an existing Products model.
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
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SearchProducts::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
