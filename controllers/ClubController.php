<?php

namespace app\controllers;

use app\models\Club;
use app\models\ClubSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
use yii;

/**
 * ClubController implements the CRUD actions for Club model.
 */
class ClubController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::class,
                    'only' => ['delete','update','create'],
                    'rules' => [
                        [
                            'actions' => ['delete'],
                            'allow' => true,
                            'roles' => ['administrator'],
                        ],
                        [
                            'actions' => ['create'],
                            'allow' => true,
                            'roles' => ['administrator'],
                        ],
                        [
                            'actions' => ['update'],
                            'allow' => true,
                            'roles' => ['administrator'],
                        ],
                    ],
                ],
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['post'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Club models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ClubSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Club model.
     * @param int $id_product Id Product
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_club)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_club),
        ]);
    }

    /**
     * Creates a new Club model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Club();

        if ($this->request->isPost) 
        {
            $model->load($this->request->post());
            $model->image = UploadedFile::getInstance($model, 'image');
            $model->image->saveAs("image/line-up/{$model->image->baseName}.{$model->image->extension}");
            $model->save(false);
            Yii::$app->session->setFlash('success', "Игрок успшно добавлен в состав."); 
                return $this->redirect(['view', 'id_club' => $model->id_club]);
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Club model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_club Id Club
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_club)
    {
        $model = $this->findModel($id_club);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_club' => $model->id_club]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Club model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_club Id Club
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_club)
    {
        $this->findModel($id_club)->delete();
        Yii::$app->session->setFlash('success', "Игрок успшно убран из состава."); 

        return $this->redirect(['index']);
    }

    /**
     * Finds the Club model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_club Id Club
     * @return Club the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_club)
    {
        if (($model = Club::findOne(['id_club' => $id_club])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
