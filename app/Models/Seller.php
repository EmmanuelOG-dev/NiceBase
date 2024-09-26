<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Seller
 *
 * @property $id_seller
 * @property $name_seller
 * @property $lastname_seller
 * @property $created_at
 * @property $updated_at
 *
 * @property Sale[] $sales
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Seller extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['dni', 'name_seller', 'lastname_seller'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sales()
    {
        return $this->hasMany(\App\Models\Sale::class, 'id', 'id_seller');
    }
    
}
