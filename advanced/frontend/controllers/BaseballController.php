<?php

namespace frontend\controllers;

class BaseballController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
