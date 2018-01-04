<?php

namespace backend\controllers;

use Yii;
use common\models\Packages;
use backend\models\packages\SearchPackages;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\components\JsonEncoder;

/**
 * PackagesController implements the CRUD actions for Packages model.
 */
class PackagesController extends Controller
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
     * Lists all Packages models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchPackages();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return JsonEncoder::response(JsonEncoder::STATUS_SUCCESS,'',$dataProvider);
        /*return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);*/
    }

    /**
     * Displays a single Packages model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return JsonEncoder::response(JsonEncoder::STATUS_SUCCESS,'',$this->findModel($id));
        /*return $this->render('view', [
            'model' => $this->findModel($id),
        ]);*/
    }

    /**
     * Creates a new Packages model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Packages();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return JsonEncoder::response();
        } else {
            return JsonEncoder::response(JsonEncoder::STATUS_FAIL,$model->getFirstErrors());
        }
    }

    /**
     * Updates an existing Packages model.
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
     * Deletes an existing Packages model.
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
     * Finds the Packages model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Packages the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Packages::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
