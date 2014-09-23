<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use app\models\Z_user;
use app\models\User;
use app\models\UserSearch;
use yii\helpers\Security;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'create', 'index', 'view', 'update', 'delete', 'ResetPassword'],
                'rules' => [
                    [
                        'actions' => ['logout', 'create', 'index', 'view', 'update', 'delete', 'ResetPassword'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],

                ],
            ],

        ];
    }

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch;
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

    /**
     * Displays a single User model.
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
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

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
     * Updates an existing User model.
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


    public function actionResetPassword()
    {
        $id = Yii::$app->user->id;
        $model = User::findOne(['id'=>$id]);
        $model->setScenario('resetPw');

        if ($model->load(Yii::$app->request->post())) {

                if($model->save()){
                    Yii::$app->getSession()->setFlash('success', 'New password was saved.');
                    return $this->redirect(['view', 'id' => $model->id]);
                }else{
                    Yii::$app->getSession()->setFlash('error', 'Incorrect old password.');
                    return $this->redirect(['reset-password']);
                }
        }else {
            return $this->render('reset_password', [
                'model' => $model,
            ]);
        }

    }

    public function actionNewUser($id)
    {
        $model = User::findOne(['id'=>$id]);
        $model->setScenario('resetNew');

        if ($model->load(Yii::$app->request->post())) {
            $model->c_active = '1';
            if($model->save()){
                Yii::$app->getSession()->setFlash('success', 'New password was saved.');
                return $this->redirect(['new-user', 'id' => $id]);
            }else{
                Yii::$app->getSession()->setFlash('error', 'Incorrect old password.');
                return $this->redirect(['new-user', 'id' => $id]);
            }
        }else {
            return $this->render('reset_password', [
                'model' => $model,
            ]);
        }

    }

    /**
     * Deletes an existing User model.
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
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
