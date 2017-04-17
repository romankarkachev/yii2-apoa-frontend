<?php
namespace romankarkachev\apoa;

use yii\web\AssetBundle as BaseAsset;

/**
 * @author Roman Karkachev <post@romankarkachev.ru>
 * @copyright 2017 Roman Karkachev
 * @date 2017-04-14
 * Homer AssetBundle
 * @since 0.1
 */
class ApoaAsset extends BaseAsset
{
    public $sourcePath = '@romankarkachev/apoa/src';
    public $css = [
        'css/ptsans.css',
        'css/bootstrap.min.css',
        'css/main.css',
        'css/style.css',
        'css/responsive.css',
    ];
    public $js = [
        'js/own-menu.js',
        'js/jquery.isotope.min.js',
        'js/jquery.lighter.js',
        'js/main.js',
    ];
    public $depends = [
        'rmrevin\yii\fontawesome\AssetBundle',
        'mimicreative\assets\SimpleLineIconsAsset',
    ];
}
