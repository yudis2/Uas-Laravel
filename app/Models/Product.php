<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'category_id',
        'barcode',
        'price',
        'unit',
        'picture',
        'stock'
    ];
    public static function boot()
    {
        parent::boot();
        static::creating(function($model) {
            $model->user_id = Auth()->user()->id;
            return true;
        });
    }
    public function category()
    {
        return $this->belongsTo('App\Category')->select('name', 'id');
    }
}
