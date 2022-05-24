<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceExpenditure extends Model
{
    use  HasFactory;

    /**
     * @var string
     */
    protected $table = 'service_expenditures';

    /**
     * @var array|string[]
     */
    protected $fillable = [
        'uuid',
        'value',
        'description',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(
            Service::class,
            'id',
            'service_id'
        );
    }
}
