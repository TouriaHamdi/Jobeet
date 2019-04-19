<?php
/**
 * Created by PhpStorm.
 * User: sqli
 * Date: 28 mars 2019
 * Time: 16:18
 */

class Jobeet
{
    static public function slugify($text)
    {
        // replace all non letters or digits by -
        $text = preg_replace('/\W+/', '-', $text);

        // trim and lowercase
        $text = strtolower(trim($text, '-'));

        return $text;
    }
}