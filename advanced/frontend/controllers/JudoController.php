<?php

namespace frontend\controllers;

class JudoController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
