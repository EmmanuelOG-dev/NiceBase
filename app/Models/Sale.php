<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sale
 *
 * @property $id
 * @property $id_motorcycle
 * @property $id_seller
 * @property $id_costumer
 * @property $id_status
 * @property $created_at
 * @property $updated_at
 *
 * @property Costumer $costumer
 * @property Motorcycle $motorcycle
 * @property Seller $seller
 * @property Status $status
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sale extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_motorcycle', 'id_seller', 'id_costumer', 'id_status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function costumer()
    {
        return $this->belongsTo(\App\Models\Costumer::class, 'id_costumer', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function motorcycle()
    {
        return $this->belongsTo(\App\Models\Motorcycle::class, 'id_motorcycle', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function seller()
    {
        return $this->belongsTo(\App\Models\Seller::class, 'id_seller', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status()
    {
        return $this->belongsTo(\App\Models\Status::class, 'id_status', 'id');
    }
    
}
