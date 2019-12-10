<?php

namespace wdmg\widgets;

/**
 * Yii2 ChartJS
 *
 * @category        Widgets
 * @version         1.0.5
 * @author          Alexsander Vyshnyvetskyy <alex.vyshnyvetskyy@gmail.com>
 * @link            https://github.com/wdmg/yii2-chartjs
 * @copyright       Copyright (c) 2019 W.D.M.Group, Ukraine
 * @license         https://opensource.org/licenses/MIT Massachusetts Institute of Technology (MIT) License
 *
 */

use yii\base\Widget;
use yii\base\InvalidConfigException;
use yii\helpers\Html;
use yii\helpers\Json;

class ChartJS extends Widget
{

    /**
     * @var array
     */
    public $options = [];

    /**
     * @var string
     */
    public $type = 'line';

    /**
     * @var array
     */
    public $data = [];

    /**
     * @var array
     */
    public $clientOptions = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        if ($this->type === null)
            throw new InvalidConfigException("The `type` option is required");

        if (!isset($this->options['id']))
            $this->options['id'] = $this->getId();

    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        echo Html::tag('canvas', '<canvas></canvas>', $this->options);
        $this->registerAssets();
    }

    /**
     * Register required assets for the widgets
     */
    protected function registerAssets()
    {
        $js = [];

        // Get view
        $view = $this->getView();

        // Register Chart.js assets to view
        ChartJSAsset::register($view);

        // Prepare plugin options
        $id = $this->options['id'];
        $type = $this->type;
        $data = !empty($this->data) ? Json::encode($this->data) : '{}';
        $options = !empty($this->clientOptions) ? Json::encode($this->clientOptions) : '{}';

        $js[] = ";var chartJS_".$id." = new Chart(document.getElementById('".$id."'), {type: '".$type."', data: ".$data.", options: ".$options."});";

        // Register Chart.js component initial script
        $view->registerJs(implode("\n", $js));

    }

}

?>