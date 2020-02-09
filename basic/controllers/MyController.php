<?php 

namespace app\controllers;

use yii\web\Controller;

class MyController extends Controller
{
    public function actionMyPage($name='NAME')
    {
        return $this->render('index', ['text' => "Привет! Меня зовут - $name!"]);
    }
}