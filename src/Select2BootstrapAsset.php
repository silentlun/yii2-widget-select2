<?php

/*
 * This file is part of the 2amigos/yii2-select2-widget project.
 * (c) 2amigOS! <http://2amigos.us/>
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace silentlun\select2;

use yii\web\AssetBundle;

class Select2BootstrapAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';

    public $css = [
        'css/select2-bootstrap-5-theme.css'
    ];

    public $depends = [
        'silentlun\select2\Select2Asset'
    ];
}
