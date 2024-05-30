<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['i18n', 'image', 'status', 'sort_order'];

    public function realEstates()
    {
        return $this->belongsToMany(RealEstate::class, 'category_real_estate');
    }
}

