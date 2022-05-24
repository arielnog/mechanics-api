<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceOrder extends Model
{
    use  HasFactory, SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'service_orders';

    /**
     * @var array|string[]
     */
    protected $fillable = [
        'uuid',
        'vehicle_id',
        'customer_report',
    ];

    /**
     * @return BelongsTo
     */
    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(
            Vehicle::class,
            'id',
            'vehicle_id'
        );
    }

    public function service(): HasMany
    {
        return $this->hasMany(
            Service::class,
            'order_id',
            'id'
        );
    }
}
