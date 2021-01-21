<?php

/**
 * @copyright Copyright (c) 2016 dianakaal
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @author dianakaal <dianakaal@gmail.com>
 * @Date: 12/02/16
 * @Description: Combination of Yii framework's Input Mask and yii2-date-picker widget.
 * @package sigaryov\DatePickerMaskedWidget
 */

namespace sigaryov\DatePickerMaskedWidget;

use yii\web\AssetBundle;

/**
 * DatePickerMaskedWidgetAsset
 *
 */
class DatePickerMaskedWidgetAsset extends AssetBundle
{
	//$sourcePath: specifies the root directory that contains the asset files in this bundle. 
    public $sourcePath = '@vendor/sigaryov/date-picker-masked-widget';

    public $js = [
        'jquery.inputmask/dist/jquery.inputmask.bundle.js'
    ];

    //$depends: an array listing the names of the asset bundles that this bundle depends on, in order. 
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',//IS THIS AUTOMATICALLY INCLUDED IN YII2? so I don't need to add it to my project separately
    ];

    public function init() {
        $this->css[] = YII_DEBUG ? 'bootstrap-datepicker/dist/css/bootstrap-datepicker3.css' : 'bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css';
        $this->js[] = YII_DEBUG ? 'bootstrap-datepicker/dist/js/bootstrap-datepicker.js' : 'bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js';
    }
}
