<?php
/**
 * Created by PhpStorm.
 * User: Eng2018
 * Date: 7/22/2018
 * Time: 10:44 AM
 */

namespace app\controllers;

use yii\web\Controller;

class CssController extends Controller
{
    public $layout='css';
    public function actionIndex(){
        return $this->render('index');
    }
}