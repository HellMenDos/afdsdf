<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table = 'product';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'describe',
        'price',
    ];

    public function comments() 
    {
        return $this->hasMany('App\Models\Comments', 'idproduct', 'id');
    }

    public function photos() 
    {
        return $this->hasMany('App\Models\Photos', 'idproduct', 'id');
    }
}
