<?php

namespace app\controllers;

use Yii;
use app\models\Rolehd;
use yii\filters\AccessControl;
use app\models\Roledt;
use app\models\Menupanel;
use app\models\RoledtSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


/**
 * RoledtController implements the CRUD actions for Roledt model.
 */
class RoledtController extends Controller
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
     * Lists all Roledt models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RoledtSearch;
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

    /**
     * Displays a single Roledt model.
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
     * Creates a new Roledt model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Roledt;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->getSession()->setFlash('success', 'Data saved successfully !');
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Roledt model.
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
     * Deletes an existing Roledt model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        Yii::$app->getSession()->setFlash('success', 'Data deleted successfully !');
        return $this->redirect(['rolehd/index']);
       // return $this->redirect(Yii::$app->user->getReturnUrl());
    }

    /**
     * Finds the Roledt model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Roledt the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Roledt::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


    public function actionMenuItem($id){
        $countMenu = Menupanel::find()
            ->where(['id' => $id])
            ->count();

        $parentMenu = Menupanel::find()
            ->where(['id' => $id])
            ->one();
        $parentID = $parentMenu->c_parentid;
        $menuType = $parentMenu->c_type;

        $menuItem = Menupanel::find()
            ->where(['id' => $parentID])
            ->orderBy('id ASC')
            ->all();

        $roleHd= Rolehd::find()
            ->orderBy('c_name ASC')
            ->all();

        if($countMenu>0){
            if($menuType == 'MODU'){
                foreach($roleHd as $post){
                    echo "<option value='".$post->id."'>".$post->c_name."</option>";
                }
            }else{
                foreach($menuItem as $post){
                    echo "<option value='".$post->id."'>".$post->c_name."</option>";
                }
            }
        }
        else{
            echo "<option> - Nothing Found - </option>";
        }

    }


}
