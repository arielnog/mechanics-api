<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use  HasFactory, SoftDeletes;

    protected $table = 'clients';

    /**
     * @var array|string[]
     */
    protected $fillable = [
        'uuid',
        'full_name',
        'nickname',
        'birth_date',
        'email',
        'contact_principal',
        'contact_alternative',
        'mechanic_id'
    ];

    /**
     * @var string[]
     */
    protected $guarded = [
        'id',
        'user_id'
    ];


    /**
     * @return BelongsTo
     */
    public function mechanics(): BelongsTo
    {
        return $this->belongsTo(
            Mechanic::class,
            'id',
            'mechanic_id'
        );
    }

    /**
     * @return HasMany
     */
    public function vehicles(): HasMany
    {
        return $this->hasMany(
            Vehicle::class,
            'client_id',
            'id'
        );
    }

    public function vehicleBrands(): HasOneThrough
    {
        return $this->hasOneThrough(
          Vehicle::class,
            VehicleBrand::class,
            'id',
            'brand_id',
            'vehicle_id'
        );
    }
}

