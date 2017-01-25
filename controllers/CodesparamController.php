<?php

namespace app\controllers;

use Yii;
use app\models\Codesparam;
use app\models\CodesparamSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CodesparamController implements the CRUD actions for Codesparam model.
 */
class CodesparamController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Codesparam models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CodesparamSearch;
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

    /**
     * Displays a single Codesparam model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Codesparam model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Codesparam;
        $pageTitle = 'New Settings for codesparam';

        $model->TYPE = "Hello";
        $model->CODE = "CODE";
        $model->ip_address = getHostByName(getHostName());

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'pageTitle' => $pageTitle,
            ]);
        }
    }

    /*
     * ==================================================
     * Product Class
     * ==================================================
     */

    public function actionProductClass()
    {
        $model = new Codesparam;
        $pageTitle = 'New Product Class';

        $model->TYPE = "Product Class";
        $model->CODE = "PRODUCT";
        $model->ip_address = getHostByName(getHostName());

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'pageTitle' => $pageTitle,
            ]);
        }
    }


    /*
     * ==================================================
     * Product Group
     * ==================================================
     */

    public function actionProductGroup()
    {
        $model = new Codesparam;
        $pageTitle = 'New Product Group';

        $model->TYPE = "Product Group";
        $model->CODE = "GROUP";
        $model->ip_address = getHostByName(getHostName());

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'pageTitle' => $pageTitle,
            ]);
        }
    }

    /*
     * ==================================================
     * Product Unit of Measurement
     * ==================================================
     */

    public function actionUnitOfMeasurement()
    {
        $model = new Codesparam;
        $pageTitle = 'New Unit of Measurement';

        $model->TYPE = "Unit of Measurement";
        $model->CODE = "UOM";
        $model->ip_address = getHostByName(getHostName());

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'pageTitle' => $pageTitle,
            ]);
        }
    }


    /*
     * ==================================================
     * Product Category
     * ==================================================
     */

    public function actionProductCategory()
    {
        $model = new Codesparam;
        $pageTitle = 'New Product Category';

        $model->TYPE = "Product Category";
        $model->CODE = "CATEGORY";
        $model->ip_address = getHostByName(getHostName());

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'pageTitle' => $pageTitle,
            ]);
        }
    }



    /*
     * ==================================================
     * Supplier Group Setup
     * ==================================================
     */

    public function actionSupplierGroup()
    {
        $model = new Codesparam;
        $pageTitle = 'New Supplier Group';

        $model->TYPE = "Supplier Group";
        $model->CODE = "SUPPLIER";
        $model->ip_address = getHostByName(getHostName());

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'pageTitle' => $pageTitle,
            ]);
        }
    }


    /*
     * ==================================================
     * Customer Group Setup
     * ==================================================
     */

    public function actionCustomerGroup()
    {
        $model = new Codesparam;
        $pageTitle = 'New Customer Group';

        $model->TYPE = "Customer Group";
        $model->CODE = "CUSTOMER";
        $model->ip_address = getHostByName(getHostName());

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'pageTitle' => $pageTitle,
            ]);
        }
    }

    /**
     * Updates an existing Codesparam model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Codesparam model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Codesparam model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Codesparam the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Codesparam::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
