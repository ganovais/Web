<?php

namespace App\Helpers;

class StringHelper
{
    public static function cleanNumber($number)
    {
        return trim(
            str_replace(
                [
                    '(',
                    ')',
                    ' ', 
                    '-', 
                    '.', 
                    ',', 
                    '/', 
                    '_'], '', $number
            )
        );
    }

}

?>