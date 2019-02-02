<?php

namespace App\Utils;

use \Googlei18n\MyanmarTools\ZawgyiDetector;
use \Rabbit;

class Converter
{
    public function convertToUni($content)
    {
        $detector = new ZawgyiDetector();
        
        $score = $detector->getZawgyiProbability($content);

        return $score>=0.95?Rabbit::zg2uni($content):$content;
    }
}