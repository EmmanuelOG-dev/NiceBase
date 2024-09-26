<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Motorcycle
 *
 * @property $vin
 * @property $id_reference
 * @property $created_at
 * @property $updated_at
 *
 * @property Reference $reference
 * @property Sale[] $sales
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Motorcycle extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['vin', 'id_reference'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reference()
    {
        return $this->belongsTo(\App\Models\Reference::class, 'id_reference', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sales()
    {
        return $this->hasMany(\App\Models\Sale::class, 'id', 'id_motorcycle');
    }
    
}
