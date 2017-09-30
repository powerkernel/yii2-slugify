<?php
/**
 * @author Harry Tang <harry@powerkernel.com>
 * @link https://powerkernel.com
 * @copyright Copyright (c) 2016 Power Kernel
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