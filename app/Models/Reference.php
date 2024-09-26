<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reference
 *
 * @property $id
 * @property $name
 * @property $build_year
 * @property $id_brand
 * @property $id_category
 * @property $engine_size
 * @property $created_at
 * @property $updated_at
 *
 * @property Brand $brand
 * @property Category $category
 * @property Motorcycle[] $motorcycles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reference extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'build_year', 'id_brand', 'id_category', 'engine_size'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function brand()
    {
        return $this->belongsTo(\App\Models\Brand::class, 'id_brand', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'id_category', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function motorcycles()
    {
        return $this->hasMany(\App\Models\Motorcycle::class, 'id', 'id_reference');
    }
    
}
