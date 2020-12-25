<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Cart extends Model
{
    protected $table = 'cart';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user',
        'id_product',
        'amount'
    ];

    public function product() 
    {
        return $this->hasMany('App\Models\Product', 'id', 'id_product');
    }

}