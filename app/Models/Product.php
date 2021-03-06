<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
		'name',
		'price',
		'img',
		'category_id',
    ];
	public function category()
	{
		return $this->belongsTo(Category::class,'category_id');
	}

	public function photos()
    {
        return $this->morphMany('App\Models\Product','picturable');
    }

}
