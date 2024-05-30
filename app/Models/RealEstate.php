<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RealEstate extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['company_id', 'brand_id', 'title', 'description', 'price', 'currency_code', 'view_counter', 'avail_date', 'country_id', 'city_id', 'restrict_id', 'street_id', 'postal_code', 'adress', 'full_adress', 'lat', 'lon', 'provider_user_id', 'photographer_user_id'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_real_estate');
    }
}

