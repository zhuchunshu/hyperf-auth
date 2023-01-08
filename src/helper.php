<?php

declare(strict_types=1);
/**
 * This file is part of qbhy/hyperf-auth.
 *
 * @link     https://github.com/qbhy/hyperf-auth
 * @document https://github.com/qbhy/hyperf-auth/blob/master/README.md
 * @contact  qbhy0715@qq.com
 * @license  https://github.com/qbhy/hyperf-auth/blob/master/LICENSE
 */
use Hyperf\Utils\ApplicationContext;
use Qbhy\HyperfAuth\AuthManager;

if (! function_exists('str_random')) {
    function str_random($num = 6): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $num; ++$i) {
            $index = rand(0, 61);
            $randomString .= $characters[$index];
        }
        return $randomString;
    }
}

if (! function_exists('dev_clock')) {
    function dev_clock(string $title, callable $handler)
    {
        $start = microtime(true);
        $result = $handler();
        $end = microtime(true);
        dump($title . ' 用时：' . (($end - $start) * 1000) . 'ms');
        return $result;
    }
}
