<?php

namespace app\controllers;

use yii\web\Controller;

class NewController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionMyPage()
    {
        return $this->render('myPage');
    }
}