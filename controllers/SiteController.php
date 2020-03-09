<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Mensajes;
use yii\data\ActiveDataProvider;
use app\models\Libros;
use app\models\Autores;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $numeroRegistros = Mensajes::find()->count();
        $aleatorio = random_int(0, $numeroRegistros - 1);
        $filaAleatoria = Mensajes::find()->offset($aleatorio)->one();;
        
        return $this->render('index',[
            'filaAleatoria' => $filaAleatoria,
        ]);
    }

    public function actionLibros()
    {
        $query = Libros::find()->select("id, isbn, titulo, fecha_publicacion");
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        return $this->render('libros',[
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionAutores()
    {
        $query = Autores::find()->select("id, nombre, apellidos");
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        return $this->render('autores',[
            'dataProvider' => $dataProvider,
        ]);
    }

}
