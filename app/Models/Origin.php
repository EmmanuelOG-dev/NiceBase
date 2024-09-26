<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Origin
 *
 * @property $id
 * @property $origin
 * @property $created_at
 * @property $updated_at
 *
 * @property Costumer[] $costumers
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Origin extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['origin'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function costumers()
    {
        return $this->hasMany(\App\Models\Costumer::class, 'id', 'id_origin');
    }
    
}
