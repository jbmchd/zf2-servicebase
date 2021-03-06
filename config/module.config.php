<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonBase for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return [
    'controller_plugins' => [ 
        'invokables' => [ 
            'app'    => Zf2ServiceBase\Plugin\GenericPlugin::class,
        ]
    ],
];
