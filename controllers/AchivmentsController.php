<?php

namespace app\controllers;

use app\models\Achivments;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * AchivmentsController implements the CRUD actions for Achivments model.
 */
class AchivmentsController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
      return[
        'access' => [
            'class' => AccessControl::class,
            'rules' => [
                [
                    'allow' => true,
                    'roles' => ['administrator', 'viewAdminModule'],
                ],
            ],
        ],
        'verbs' => [
        'class' => VerbFilter::className(),
        'actions' => [
        'delete' => ['POST'],
                    ],
            ],
        ];
    }

    /**
     * Lists all Achivments models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Achivments::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'achivments_id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Achivments model.
     * @param int $achivments_id Achivments ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($achivments_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($achivments_id),
        ]);
    }

    /**
     * Creates a new Achivments model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Achivments();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'achivments_id' => $model->achivments_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Achivments model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $achivments_id Achivments ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($achivments_id)
    {
        $model = $this->findModel($achivments_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'achivments_id' => $model->achivments_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Achivments model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $achivments_id Achivments ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($achivments_id)
    {
        $this->findModel($achivments_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Achivments model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $achivments_id Achivments ID
     * @return Achivments the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($achivments_id)
    {
        if (($model = Achivments::findOne(['achivments_id' => $achivments_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
