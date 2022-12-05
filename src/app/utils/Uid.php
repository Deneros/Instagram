<?php namespace App\Utils;

class Uid
{
    public static function generateId():string{
        return uniqid();
    }
}
