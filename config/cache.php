<?php
/**
 * StupidlySimple - A PHP Framework For Lazy Developers.
 *
 * @author        Fariz Luqman <fariz.fnb@gmail.com>
 * @copyright    2017 Fariz Luqman
 * @license        MIT
 *
 * @link        https://stupidlysimple.github.io/
 */
return [
    'enabled'  => true,
    'settings' => [
        /*
         * Default storage
         * if you set this storage => 'files', then $cache = phpFastCache(); <-- will be files cache
         */
        'storage' => 'auto', // ssdb, predis, redis, mongodb , files, sqlite, auto, apc, wincache, xcache, memcache, memcached,

        /*
         * Default Path for Cache on HDD
         * Use full PATH like /home/username/cache
         * Keep it blank '', it will automatic setup for you
         */
        'path'        => '', // default path for files
        'securityKey' => '', // default will good. It will create a path by PATH/securityKey

        /*
         * FallBack Driver
         * Example, in your code, you use memcached, apc..etc, but when you moved your web hosting
         * Until you setup your new server caching, use 'overwrite' => 'files'
         */
        'overwrite' => 'files', // whatever caching will change to 'files' and you don't need to change ur code

        /*
         * .htaccess protect
         * default will be  true
         */
        'htaccess' => true,

        /*
         * Default Memcache Server for all $cache = phpFastCache('memcache');
         */
        'server' => [
            ['127.0.0.1', 11211, 1],
        ],

        'memcache' => [
            ['127.0.0.1', 11211, 1],
        ],

        'redis' => [
            'host'     => '127.0.0.1',
            'port'     => '6379',
            'password' => '',
            'database' => '',
            'timeout'  => '',
        ],

        'ssdb' => [
            'host'     => '127.0.0.1',
            'port'     => 8888,
            'password' => '',
            'timeout'  => '',
        ],

        /*
         * Use 1 as normal traditional, 2 = phpfastcache fastest as default, 3 = phpfastcache memory stable
         */
        'caching_method' => 2,
    ],
];
