<?php

namespace myxland\sms;

use Overtrue\EasySms\EasySms;

/**
 * 短信发送
 */
class Sms
{
    protected static $sms;

    public static function app()
    {
        if (! isset(self::$sms)) {
            $config = config('sms.');
            if (! $config) {
                throw new \InvalidArgumentException("missing sms config");
            }
            self::$sms = new EasySms($config);
        }

        return self::$sms;
    }

    public static function __callStatic($name, $arguments)
    {
        return self::app()->$name($arguments);
    }
}