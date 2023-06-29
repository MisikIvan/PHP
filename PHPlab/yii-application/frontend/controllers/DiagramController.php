<?php
namespace frontend\controllers;
use frontend\models\Chart;
use yii\web\Controller;

class DiagramController extends Controller
{
    public function actionChart()
    {
        $data = Chart::getChartData();
        return $this->render('GoogleDiagrams', ['data' => $data]);
    }
}