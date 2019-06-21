<?php
namespace backend\controllers;

use common\system\ResopnTools;
use common\system\YlController;

/**
 * Site controller
 */
class SiteController extends YlController
{

    public function behaviors()
    {
        return [
            'corsFilter' => [
                'class' => \yii\filters\Cors::className(),
                'cors' => [
                    'Origin' => ['*'],
                    'Access-Control-Allow-Credentials'=> true,
                    'Access-Control-Request-Headers' => ['*'],
                    'Access-Control-Allow-Origin' => ['*'],
                ]
            ],
        ];
    }

    public function actionError()
    {
        return ResopnTools::error();
    }
}
