<?php

namespace frontend\controllers;

class KarateController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
