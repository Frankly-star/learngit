<?php

namespace frontend\controllers;

class GolfController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
