<?php

namespace app\controllers;

use app\models\Matches;
use app\models\MatchesHome;
use app\models\MatchesAway;
use yii\data\ActiveDataProvider;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;

class MatchesController extends Controller
{
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Matches::find(),
            'pagination' => ['pageSize' => 5],
            'sort' => ['defaultOrder' => ['match_date' => SORT_DESC,]],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($match_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($match_id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Matches();

        if ($model->load(Yii::$app->request->post())) 
        {
            if (($model->team1 == $model->team2) && ($model->team1 != 'Радиотехнический колледж' || $model->team2 != 'Радиотехнический колледж')) 
            {  // Если у команд одинаковое значение или хотя бы в одной строке не указан 'Радиотехнический колледж', то нам высвечивается плашка и перекидывает обратно в create.
                VarDumper::dump($model->attributes, true);
                Yii::$app->session->setFlash('error', "Команды должны быть разные.");   
                return $this->redirect(['create']);
            } 
            elseif (($model->team1 != $model->team2) && ($model->team1 == 'Радиотехнический колледж' || $model->team2 == 'Радиотехнический колледж'))
            {    // Если у команд разное значение, то значения заносятся в бд и нас перекидывает в index, и выскакивыает плашка.
                VarDumper::dump($model->attributes, true);
                $model->save();
                Yii::$app->session->setFlash('success', "Матч успешно добавлен.");  
                return $this->redirect(['index']);
            }
            else 
            {
                Yii::$app->session->setFlash('error', "В одном из полей нету 'Радиотехнического колледжа'.");
            }
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($match_id)
    {
        $model = $this->findModel($match_id);

        if ($model->load($this->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', "Матч успешно изменён."); 
            return $this->redirect(['view', 'match_id' => $model->match_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($match_id)
    {
        $this->findModel($match_id)->delete();
        Yii::$app->session->setFlash('success', "Матч успешно удалён."); 

        return $this->redirect(['index']);
    }

    protected function findModel($match_id)
    {
        if (($model = Matches::findOne(['match_id' => $match_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
