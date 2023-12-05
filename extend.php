<?php

namespace Cmf\Hello;

use Cmf\Extend;

return [
    (new Extend\Frontend('site'))
        ->js(__DIR__ . '/js/dist/site.js')
        ->css(__DIR__ . '/less/site.less'),

    (new Extend\Frontend('admin'))
        ->js(__DIR__ . '/js/dist/admin.js'),

    new Extend\Locales(__DIR__ . '/locale'),
];
