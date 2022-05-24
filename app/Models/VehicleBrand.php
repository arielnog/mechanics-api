<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleBrand extends Model
{
    use  HasFactory;

    protected $table = 'vehicle_brands';

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var string[]
     */
    protected $fillable = [
        'uuid',
        'name'
    ];

    /**
     * @var string[]
     */
    protected $guarded = [
        'id',
    ];

    /**
     * @return HasMany
     */
    public function model(): HasMany
    {
        return $this->hasMany(
            VehicleModel::class,
            'brand_id',
            'id'
        );
    }

    /**
     * @return HasMany
     */
    public function vehicles(): HasMany
    {
        return $this->HasMany(
            Vehicle::class,
            'brand_id',
            'id'
        );
    }
}
