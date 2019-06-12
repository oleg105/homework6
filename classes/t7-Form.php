<?php


class Form
{
    public function input([$k1 => $v1, $k2 => $v2])
    {
        $line = '<input '. $k1. '="'. $v1. '" '. $k2. '="'. $v2. '">';
        return $line;

        //<input type="text" value="!!!">
        //input(['type'=>'text', 'value'=>'!!!']);
    }

}

