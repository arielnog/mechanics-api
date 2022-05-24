<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use  HasFactory, SoftDeletes;

    protected $table = 'services';

    /**
     * @var array|string[]
     */
    protected $fillable = [
        'uuid',
        'execute_date',
        'value',
        'description',
        'type',
        'order_id',
    ];

    /**
     * @return BelongsTo
     */
    public function serviceOrder(): BelongsTo
    {
        return $this->belongsTo(
            ServiceOrder::class,
            'id',
            'order_id'
        );
    }

    /**
     * @return BelongsTo
     */
    public function serviceType(): BelongsTo
    {
        return $this->belongsTo(
            ServiceType::class,
            'id',
            'type_id'
        );
    }

    /**
     * @return HasMany
     */
    public function serviceImage(): HasMany
    {
        return $this->hasMany(
            ServiceImage::class,
            'service_id',
            'id'
        );
    }

    /**
     * @return HasMany
     */
    public function serviceExpenditure(): HasMany
    {
        return $this->hasMany(
            ServiceExpenditure::class,
            'service_id',
            'id'
        );
    }

}
