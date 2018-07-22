<?php
/**
 * Created by PhpStorm.
 * User: Eng2018
 * Date: 7/22/2018
 * Time: 10:48 AM
 */

namespace app\assets;


use yii\web\AssetBundle;

class CssAsset extends AssetBundle
{
    public $basePath='@webroot';
    public $baseUrl='@web';
    public $css=[
        'css/css.css'
        ];
}