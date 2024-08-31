<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'logo',
    ];

    public function BrandCategories(): HasMany
    {
        return $this->hasMany(BrandCategory::class, 'brand_id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
