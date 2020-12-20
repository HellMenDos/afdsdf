<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Comments extends Model
{
    protected $table = 'comments';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'describe',
        'iduser',
        'idproduct',
        'raiting',
    ];

}