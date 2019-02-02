<?php

namespace App;

final class Init
{
    public function __construct()
    {
        //
    }

    public static function get_services()
    {
        return [
            Base\Enqueue::class,
            Base\SettingLinks::class,
            Base\Post::class,
            Base\Term::class,

            Pages\Admin::class,
        ];
    }

    public static function register_services()
    {
        foreach(self::get_services() as $class) {
            $service = self::instantiate($class);

            if( method_exists($service, 'register') ) {
                $service->register();
            }
        }
    }

    private static function instantiate($class)
    {
        return new $class();
    }
}