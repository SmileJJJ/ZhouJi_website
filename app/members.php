<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class members extends Model
{
    protected $table='members';

    public $timestamps=true;

    public function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($value)
    {
        return $value;
    }
}