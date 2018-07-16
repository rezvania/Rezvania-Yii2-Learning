<?php
/**
 * Created by PhpStorm.
 * User: Eng2018
 * Date: 7/14/2018
 * Time: 1:12 PM
 */

namespace app\controllers;


use yii\web\Controller;

class BamanController extends Controller
{
    public $layout='payHome';
    public function actionIndex(){
        return $this->render('index');
    }

}