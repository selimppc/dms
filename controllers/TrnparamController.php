<?php

namespace app\controllers;

use Yii;
use app\models\Trnparam;
use app\models\TrnparamSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TrnparamController implements the CRUD actions for Trnparam model.
 */
class TrnparamController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    //'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Trnparam models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TrnparamSearch;
        $dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

    /**
     * Displays a single Trnparam model.
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
     * Creates a new Trnparam model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Trnparam;
        $pageTitle = 'New Transaction Settings';

        $model->TYPE = "Hello";
        $model->CODE = "CODE";
        $model->last_number = "0";
        $model->increment = "1";
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
     * =============================================
     * Voucher Transaction Number
     * =============================================
     */

    public function actionVoucherTransactionNumber()
    {
        $model = new Trnparam;
        $pageTitle = 'New Voucher TRN NO';

        $model->TYPE = "Voucher TRN No";
        $model->CODE = "TRN";
        $model->last_number = "0";
        $model->increment = "1";
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
     * =============================================
     * Requisition Number
     * =============================================
     */

    public function actionRequisitionNumber()
    {
        $model = new Trnparam;
        $pageTitle = 'New Requisition Number';

        $model->TYPE = "Requisition Number";
        $model->CODE = "REQ";
        $model->last_number = "0";
        $model->increment = "1";
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
     * =============================================
     * Purchase Order Number
     * =============================================
     */

    public function actionPurchaseOrderNumber()
    {
        $model = new Trnparam;
        $pageTitle = 'New Purchase Order Number';

        $model->TYPE = "Purchase Order Number";
        $model->CODE = "PO--";
        $model->last_number = "0";
        $model->increment = "1";
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
     * =============================================
     * Invoice Number
     * =============================================
     */

    public function actionInvoiceNumber()
    {
        $model = new Trnparam;
        $pageTitle = 'New Invoice Number';

        $model->TYPE = "Invoice Number";
        $model->CODE = "INV-";
        $model->last_number = "0";
        $model->increment = "1";
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
     * =============================================
     * Sales Return Number
     * =============================================
     */

    public function actionSalesReturnNumber()
    {
        $model = new Trnparam;
        $pageTitle = 'New Sales Return Number';

        $model->TYPE = "Sales Return Number";
        $model->CODE = "SR--";
        $model->last_number = "0";
        $model->increment = "1";
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
     * =============================================
     * Money Receipt Number
     * =============================================
     */

    public function actionMoneyReceiptNumber()
    {
        $model = new Trnparam;
        $pageTitle = 'New Money Receipt Number';

        $model->TYPE = "Money Receipt Number";
        $model->CODE = "MR--";
        $model->last_number = "0";
        $model->increment = "1";
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
     * =============================================
     * GRN Number Setup
     * =============================================
     */
    public function actionGrnNumber()
    {
        $model = new Trnparam;
        $pageTitle = 'New GRN Number Setup';

        $model->TYPE = "GRN Number";
        $model->CODE = "GRN-";
        $model->last_number = "0";
        $model->increment = "1";
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
     * =============================================
     * IM Transaction
     * =============================================
     */
    public function actionImTransactionNumber()
    {
        $model = new Trnparam;
        $pageTitle = 'New IM Transaction';

        $model->TYPE = "IM Transaction";
        $model->CODE = "IMTRN";
        $model->last_number = "0";
        $model->increment = "1";
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
     * =============================================
     * IM Transfer Number
     * =============================================
     */
    public function actionImTransferNumber()
    {
        $model = new Trnparam;
        $pageTitle = 'New IM Transfer Number';

        $model->TYPE = "IM Transfer";
        $model->CODE = "IMTRF";
        $model->last_number = "0";
        $model->increment = "1";
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
     * =============================================
     * IM Adjustment Transaction Number
     * =============================================
     */
    public function actionImAdjustmentTransactionNumber()
    {
        $model = new Trnparam;
        $pageTitle = 'New IM Adjustment Transaction Number';

        $model->TYPE = "IM Adjustment Transaction";
        $model->CODE = "ADJ-";
        $model->last_number = "0";
        $model->increment = "1";
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
     * Updates an existing Trnparam model.
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
     * Deletes an existing Trnparam model.
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
     * Finds the Trnparam model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Trnparam the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Trnparam::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
