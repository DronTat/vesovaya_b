<?php
namespace api\controllers;

use Yii;
use yii\rest\Controller;
use common\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return 'api';
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        $model = new LoginForm();
        $model->load(Yii::$app->request->bodyParams, '');
        if($tokens = $model->auth()){
            return [
                'access_token' => $tokens[0],
                'refresh_token' => $tokens[1],
            ];
        } else{
            return $model;
        }
    }

    protected function verbs()
    {
        return [
            'login' => ['post'],
            'index' => ['get']
        ];
    }
}
