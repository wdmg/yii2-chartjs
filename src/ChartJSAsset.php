<?php

namespace wdmg\widgets;

use yii\web\AssetBundle;

class ChartJSAsset extends AssetBundle
{
    public $sourcePath = '@bower/chart.js';

    public function init()
    {
        $this->js = YII_DEBUG ? ['dist/Chart.js'] : ['dist/Chart.min.js'];
    }

}

?>