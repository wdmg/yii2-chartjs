[![Progress](https://img.shields.io/badge/required-Yii2_v2.0.13-blue.svg)](https://packagist.org/packages/yiisoft/yii2) [![Github all releases](https://img.shields.io/github/downloads/wdmg/yii2-charjs/total.svg)](https://GitHub.com/wdmg/yii2-charjs/releases/) [![GitHub version](https://badge.fury.io/gh/wdmg%2Fyii2-charjs.svg)](https://github.com/wdmg/yii2-charjs) ![Progress](https://img.shields.io/badge/progress-in_development-red.svg) [![GitHub license](https://img.shields.io/github/license/wdmg/yii2-charjs.svg)](https://github.com/wdmg/yii2-charjs/blob/master/LICENSE)

# Yii2 ChartJS widget
Chart widget for Yii2 based on Chart.js

# Requirements 
* PHP 5.6 or higher
* Yii2 v.2.0.13 and newest
* [Chart.js](https://github.com/chartjs/Chart.js) v.2.7.3 and newest.

# Installation
To install the widget, run the following command in the console:

`$ composer require "wdmg/yii2-chartjs"`

# Usage

    <?php
    
    use wdmg\widgets\chartjs;
    ...
    
    echo ChartJS::widget([
        'type' => 'line',
        'options' => [
            'width' => 640,
            'height' => 360
        ],
        'data' => [
            'labels' => ["January", "February", "March", "April", "May", "June"],
            'datasets' => [
              [
                  'label'=> 'Bob',
                  'data' => [5, 8, 12, 10, 7, 13]
              ],
              [
                  'label'=> 'Alice',
                  'data' => [6, 8, 10, 6, 4, 12]
              ]
            ]
        ]
        ...
    ]);
    
    ?>


# Options
See more on [Creating a Chart](https://www.chartjs.org/docs/latest/getting-started/usage.html)

# Status and version
* v.1.0.0 - Widget in progress development.