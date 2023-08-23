<?php

namespace app\controllers;

use app\models\Gallery;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii;

/**
 * GalleryController implements the CRUD actions for Gallery model.
 */
class GalleryController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'index'  => ['GET'],
                        'delete' => ['POST'],
                    ],
                
                ],
            ]
        );
    }

    /**
     * Lists all Gallery models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Gallery::find(),
            
            'pagination' => [
                'pageSize' => 6,
            ],
            'sort' => [
                'defaultOrder' => [
                    'gallery_id' => SORT_DESC,
                ]
            ],
            
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Gallery model.
     * @param int $gallery_id Gallery ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($gallery_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($gallery_id),
        ]);
    }

    /**
     * Creates a new Gallery model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Gallery();

        if ($this->request->isPost) 
        {
            $model->load($this->request->post());
            $model->photo = UploadedFile::getInstance($model, 'photo');
            $model->photo->saveAs("image/gallery/{$model->photo->baseName}.{$model->photo->extension}");
            $model->save(false);
            Yii::$app->session->setFlash('success', "Фотография успешно добавлена."); 
            return $this->redirect(['index']);
        }
        else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Gallery model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $gallery_id Gallery ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($gallery_id)
    {
        $model = $this->findModel($gallery_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', "Фотография успешно обновлена."); 
            return $this->redirect(['view', 'gallery_id' => $model->gallery_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Gallery model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $gallery_id Gallery ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($gallery_id)
    {
        $this->findModel($gallery_id)->delete();
        Yii::$app->session->setFlash('success', "Фотография успешно удалена."); 

        return $this->redirect(['index']);
    }

    /**
     * Finds the Gallery model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $gallery_id Gallery ID
     * @return Gallery the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($gallery_id)
    {
        if (($model = Gallery::findOne(['gallery_id' => $gallery_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
