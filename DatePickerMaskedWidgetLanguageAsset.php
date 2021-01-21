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
 * DatePickerMaskedWidgetLanguageAsset
 *
 */
class DatePickerMaskedWidgetLanguageAsset extends AssetBundle
{
    public $sourcePath = '@vendor/sigaryov/date-picker-masked-widget/bootstrap-datepicker/dist/locales';

    public $depends = [
        'sigaryov\DatePickerMaskedWidget\DateRangePickerMaskedWidgetAsset'
    ];
}
