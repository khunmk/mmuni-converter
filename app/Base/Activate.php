<?php

/**
 * @author Khun
 * @package mm-converter
 */

namespace App\Base;

class Activate
{
    public static function activate()
    {
        flush_rewrite_rules();
    }
}