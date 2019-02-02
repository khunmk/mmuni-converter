<?php

namespace App\Base;

use App\Utils\Converter;

class Term
{
    public function __construct()
    {
        //
    }

    public function register()
    {
        add_action('pre_term_name', array($this, 'mmconverter_filter_term_data'), 10, 2);
        add_action('pre_term_description', array($this, 'mmconverter_filter_term_data'), 10, 2);
    }

    public function mmconverter_filter_term_data($data)
    {
        $converter = new Converter();

        return $data?$converter->convertToUni($data):$data;
    }
}