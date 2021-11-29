<?php

namespace frontend\controllers;

class FootballController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
