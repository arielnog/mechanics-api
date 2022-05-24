<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use  HasFactory, SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'vehicles';

    /**
     * @var bool
     */

    protected $fillable = [
        'uuid',
        'license_plate',
        'year',
        'mileage',
        'type',
        'brand_id',
        'model_id',
        'client_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
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
            'brand_id',
            'id'
        );
    }

    /**
     * @return BelongsTo
     */
    public function vehicleModel(): BelongsTo
    {
        return $this->belongsTo(
            VehicleModel::class,
            'model_id',
            'id'
        );
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(
            Client::class,
            'id',
            'client_id'
        );
    }
}
