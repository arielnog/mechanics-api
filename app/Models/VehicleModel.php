<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleModel extends Model
{
    use  HasFactory;

    /**
     * @var string
     */
    protected $table = 'vehicle_models';

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array|string[]
     */
    protected $fillable = [
        'uuid',
        'name',
        'brand_id'
    ];

    protected $guarded = [
        'id',
    ];

    /**
     * @return BelongsTo
     */
    public function vehicleBrand(): BelongsTo
    {
        return $this->belongsTo(
            VehicleBrand::class,
            'id',
            'brand_id'
        );
    }

    /**
     * @return HasMany
     */
    public function vehicle(): HasMany
    {
        return $this->hasMany(
            Vehicle::class,
            'model_id',
            'id'
        );
    }
}
