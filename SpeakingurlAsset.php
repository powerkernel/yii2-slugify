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
class SpeakingurlAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/speakingurl';
    public $js = [
        'speakingurl.min.js'
    ];

} 