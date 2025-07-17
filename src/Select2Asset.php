<?php

/*
 * This file is part of the 2amigos/yii2-select2-widget project.
 * 
 */

namespace silentlun\select2;

use yii\web\AssetBundle;

class Select2Asset extends AssetBundle
{
    public $sourcePath = '@bower/select2/dist';

    public $depends = [
        'yii\web\JqueryAsset'
    ];
    
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setupAssets('css', ['css/select2']);
        $this->setupAssets('js', ['js/select2.full']);
        parent::init();
    }
    
    /**
     * Set up CSS and JS asset arrays based on the base-file names
     *
     * @param string $type whether 'css' or 'js'
     * @param array $files the list of 'css' or 'js' basefile names
     */
    protected function setupAssets($type, $files = [])
    {
        $srcFiles = [];
        $minFiles = [];
        foreach ($files as $file) {
            $srcFiles[] = "{$file}.{$type}";
            $minFiles[] = "{$file}.min.{$type}";
        }
        $this->$type = YII_DEBUG ? $srcFiles : $minFiles;
    }
}
