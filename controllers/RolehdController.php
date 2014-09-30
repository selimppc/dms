<?php

namespace app\controllers;

use Yii;
use app\models\Roledt;
use app\models\RoledtSearch;
use yii\filters\AccessControl;
use app\models\Rolehd;
use app\models\RolehdSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RolehdController implements the CRUD actions for Rolehd model.
 */
class RolehdController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'create', 'view', 'update', 'delete'],
                'rules' => [
                    [
                        'actions' => ['index', 'create',  'view', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all Rolehd models.
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new Rolehd;
        $searchModel = new RolehdSearch;
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
            'model' => $model,
        ]);
    }

    /**
     * Displays a single Rolehd model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);

        $model1= new Roledt;
        $searchModel1 = new RoledtSearch();
        $dataProvider = $searchModel1->searchDt(['RoledtSearch'=>['c_id'=>$id]]);


        if ($model1->load(Yii::$app->request->post()) && $model1->save()) {
            Yii::$app->getSession()->setFlash('success', 'Data saved successfully !');
            return $this->redirect(['view', 'id' => $model->id]);

        } else {
            return $this->render('view', [
                'model' => $this->findModel($id),
                'model1' =>$model1,
                'dataProvider'=> $dataProvider,
                'searchModel1'=>$searchModel1,
            ]);
        }


    }

    /**
     * Creates a new Rolehd model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Rolehd;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->getSession()->setFlash('success', 'Data saved successfully !');
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Rolehd model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->getSession()->setFlash('success', 'Data updated successfully !');
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Rolehd model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        Yii::$app->getSession()->setFlash('success', 'Data deleted successfully !');
        return $this->redirect(['index']);
    }

    /**
     * Finds the Rolehd model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Rolehd the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Rolehd::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
