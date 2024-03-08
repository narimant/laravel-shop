<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Image Driver
    |--------------------------------------------------------------------------
    |
    | Intervention Image supports “GD Library” and “Imagick” to process images
    | internally. Depending on your PHP setup, you can choose one of them.
    |
    | Included options:
    |   - \Intervention\Image\Drivers\Gd\Driver::class
    |   - \Intervention\Image\Drivers\Imagick\Driver::class
    |
    */

    'driver' => \Intervention\Image\Drivers\Gd\Driver::class,
    'index-image-sizes'=>[
        'large'=>['width'=>800,'height'=>600],
        'medium'=>['width'=>400,'height'=>300],
        'small'=>['width'=>80,'height'=>60],
    ],
    'default-current-index-image'=>'medium'

];
