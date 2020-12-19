<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Photos extends Model
{
    protected $table = 'photos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idproduct',
        'url'
    ];


}
