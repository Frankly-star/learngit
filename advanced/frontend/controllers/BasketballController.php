<?php

namespace frontend\controllers;

class BasketballController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
