<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'manufacturer',
        'format',
        'composition',
        'image',
        'categories_id',
        'price',
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function show_categories()
    {
        $categ = Categorie::query()->where('id', $this->categories_id)->first();
        return $categ->name;
    }

//    public function get_price()
//    {
//        $price = explode('.', $this->price);
//        dd($price);
//        return $price;
//    }
    protected $table = 'products';

}
