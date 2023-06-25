<?php

namespace wdmg\widgets;

/**
 * @author          Alexsander Vyshnyvetskyy <alex.vyshnyvetskyy@gmail.com>
 * @copyright       Copyright (c) 2019 - 2023 W.D.M.Group, Ukraine
 * @license         https://opensource.org/licenses/MIT Massachusetts Institute of Technology (MIT) License
 */

use yii\web\AssetBundle;

class ChartJSAsset extends AssetBundle
{
    public $sourcePath = '@bower/chart.js';

    public function init()
    {
        parent::init();
        $this->js = YII_DEBUG ? ['dist/Chart.js'] : ['dist/Chart.min.js'];
        $this->depends = [\yii\web\JqueryAsset::class];
    }

}

?>