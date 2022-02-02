<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salesrecords extends Model
{
    protected $fillable = ['nama_item','keterangan','harga'];
}
