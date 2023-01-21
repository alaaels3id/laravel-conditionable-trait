<?php

namespace App\Http;

use Illuminate\Support\Traits\Conditionable;

trait Condition
{
    use Conditionable;

    public static function finding($id)
    {
        return (new self)->_finding($id);
    }

    public function _finding($id)
    {
        return $this->when(self::find($id), function ($obj, $value){
            return $value;
        }, function (){
            return str_replace('App\\Models\\', '', self::class) . ' not found';
        });
    }
}
