<?php

namespace api\controllers;

use common\models\User;
use yii\rest\Controller;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\AccessControl;
use yii\filters\auth\CompositeAuth;
use Yii;

class UserController extends Controller
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => CompositeAuth::className(),
            'authMethods' => [
                HttpBasicAuth::className(),
                HttpBearerAuth::className(),
            ],
        ];
        $behaviors['access'] = [
            'class' => AccessControl::className(),
            'rules' => [
                [
                    'allow' => true,
                    'roles' => ['@'],
                ],
            ],
        ];
        return $behaviors;
    }

    public function actionIndex()
    {
        return $this->findModel();
    }

    public function verbs()
    {
        return [
            'index' => ['get'],
        ];
    }
    /**
     * @return User
     */
    private function findModel()
    {
        return User::findOne(Yii::$app->user->id);
    }
}