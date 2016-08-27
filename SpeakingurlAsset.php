<?php
/**
 * @author Harry Tang <harry@modernkernel.com>
 * @link https://modernkernel.com
 * @copyright Copyright (c) 2016 Modern Kernel
 */

namespace modernkernel\slugify;


use yii\web\AssetBundle;

/**
 * Class Asset
 * @package modernkernel\slugify
 */
class SpeakingurlAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/speakingurl';
    public $js = [
        'speakingurl.min.js'
    ];

} 