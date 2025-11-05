<?php

namespace frontend\controllers;
use Json;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use frontend\models\Faq;
use frontend\models\ReplayTagname;
use frontend\models\Faqsearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use yii\filters\AccessControl;

class ReplayTagnameController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['answer'],
                'rules' => [
                   
                    [
                        
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    public function actionIndex($id,$question)
    {
        $provider = ReplayTagname::find()->where(['question_id' =>urlencode($id)])->one();
        
        return $this->render('index',['provider' => $provider]);
       
    }
    public function actionAnswer(){
        //return'fhfg';
        return $this->render('answer');
    }

}
