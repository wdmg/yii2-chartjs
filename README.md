[![Yii2](https://img.shields.io/badge/required-Yii2_v2.0.33-blue.svg)](https://packagist.org/packages/yiisoft/yii2)
[![Downloads](https://img.shields.io/packagist/dt/wdmg/yii2-chartjs.svg)](https://packagist.org/packages/wdmg/yii2-chartjs)
[![Packagist Version](https://img.shields.io/packagist/v/wdmg/yii2-chartjs.svg)](https://packagist.org/packages/wdmg/yii2-chartjs)
![Progress](https://img.shields.io/badge/progress-ready_to_use-green.svg)
[![GitHub license](https://img.shields.io/github/license/wdmg/yii2-chartjs.svg)](https://github.com/wdmg/yii2-chartjs/blob/master/LICENSE)

# Yii2 ChartJS widget
Chart widget for Yii2 based on Chart.js

# Requirements 
* PHP 5.6 or higher
* Yii2 v.2.0.33 and newest
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
            'height' => 260
        ],
        'data' => [
            'labels' => ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            'datasets' => [
                [
                    'label'=> 'Bob',
                    'data' => [5, 8, 12, 10, 7, 13],
                    'backgroundColor' => [
                        'rgba(54, 162, 235, 0.2)'
                    ],
                    'borderColor' => [
                        'rgba(54, 162, 235, 1)'
                    ],
                    'borderWidth' => 1
                ],
                [
                    'label'=> 'Alice',
                    'data' => [6, 8, 10, 6, 4, 12],
                    'backgroundColor' => [
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    'borderColor' => [
                        'rgba(255,99,132,1)'
                    ],
                    'borderWidth' => 1
                ]
            ]
        ]
    ]);
    
    ?>


# Options
See more on [Creating a Chart](https://www.chartjs.org/docs/latest/getting-started/usage.html)

# Status and version [ready to use]
* v.1.0.6 - Up to date dependencies
* v.1.0.5 - Fixed deprecated class declaration
* v.1.0.4 - Update Yii2 version
* v.1.0.3 - Update Yii2 version