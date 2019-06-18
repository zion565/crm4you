<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_customer extends Model
{
    protected $table = 'tbl_customer';
    protected $fillable = ['id'];
//    const CREATED_AT = 'created_at';
//    const UPDATED_AT = 'update_at';
    public $timestamps = false;
}
