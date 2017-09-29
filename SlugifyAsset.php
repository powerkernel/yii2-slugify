<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2017 Power Kernel
 */

namespace modernkernel\slugify;


use yii\web\AssetBundle;

/**
 * Class Asset
 * @package modernkernel\slugify
 */
class SlugifyAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/jquery-slugify/dist';
    public $js = [
        'slugify.min.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'modernkernel\slugify\SpeakingurlAsset'
    ];

} 