<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class members extends Model
{
    const SEX_UN = 10; //未知
    const SEX_BOY= 20; //男
    const SEX_GRIL=30; //女

    protected $table='members';

    protected $prymarykey='id';

    protected $fillable=['姓名','出生年月日','邮箱','学历','联系方式','身份证','性别'];

    public $timestamps=true;

    public function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($value)
    {
        return $value;
    }

    public function getsex($ind=null)
    {
        $arr=[
            self::SEX_UN=>'未知',
            self::SEX_BOY=>'男',
            self::SEX_GRIL=>'女',
        ];

        if ($ind!==null)
        {
            return array_key_exists($ind,$arr) ? $arr[$ind] :$arr[self::SEX_UN];
        }

        return $arr;
    }

    public function freshTimestamp()
    {
        return time();
    }

    public function fromDateTime($value)
    {
        return $value;
    }


}