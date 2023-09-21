<?php

declare(strict_types=1);

namespace glpzzz\htmx;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Htmx Asset Bundle
 */
class HtmxAsset extends AssetBundle
{
    /**
     * @inheritDoc
     */
    public $sourcePath = '@npm/htmx/';

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];

    /**
     * @inheritDoc
     */
    public $js = [
        'htmx.js',
    ];
}
