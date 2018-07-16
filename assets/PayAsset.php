<?php
/**
 * Created by PhpStorm.
 * User: Eng2018
 * Date: 7/16/2018
 * Time: 10:36 AM
 */

namespace app\assets;


use yii\web\AssetBundle;

class PayAsset extends AssetBundle
{
    public $basePat='@web';
    public $baseUrl='@web';

    public $css=[
        'css/payHome.css'
        ];

}