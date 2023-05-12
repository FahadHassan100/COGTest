<?php

namespace app\controllers;
use yii\httpclient\Client;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class TestController extends Controller
{
    public function actionIndex()
    {


        $client = new Client();
        $requests = $client->get('https://newphilanthropy.ca/sign_contract/api/getTemp');
        $responses = $client->Send($requests);

    
        $message = "Api list";
        return $this->render('listview', [
            "listData" => $responses,
        ]);
    }
}