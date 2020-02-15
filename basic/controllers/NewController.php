<?php

namespace app\controllers;

use yii\web\Controller;

class NewController extends Controller
{

    public function actionIndex()
    {
        $connection = Yii::$app->db;
        $command = $connection->CreateCommand("SELECT * FROM book");
        $rows = $command->queryAll();
        return $this->render('index', ['rows' => $rows]);
    }

    public function actionMyPage()
    {
        return $this->render('myPage');
    }
}