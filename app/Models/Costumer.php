<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Costumer
 *
 * @property $id_costumer
 * @property $name_costumer
 * @property $lastname_costumer
 * @property $birth_date
 * @property $gender
 * @property $phone
 * @property $address
 * @property $email
 * @property $prospect_date
 * @property $id_origin
 * @property $updated_at
 *
 * @property Origin $origin
 * @property Sale[] $sales
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Costumer extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['dni', 'name_costumer', 'lastname_costumer', 'birth_date', 'gender', 'phone', 'address', 'email', 'id_origin'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function origin()
    {
        return $this->belongsTo(\App\Models\Origin::class, 'id_origin', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sales()
    {
        return $this->hasMany(\App\Models\Sale::class, 'id', 'id_costumer');
    }
    
}
