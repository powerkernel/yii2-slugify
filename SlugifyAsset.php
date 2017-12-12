<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2017 Power Kernel
 */

namespace powerkernel\slugify;


use yii\web\AssetBundle;

/**
 * Class Asset
 * @package powerkernel\slugify
 */
class SlugifyAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-slugify/dist';
    public $js = [
        'slugify.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'powerkernel\slugify\SpeakingurlAsset'
    ];

} 