<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ServiceType extends Model
{
    use  HasFactory;

    /**
     * @var bool
     */
    public bool $timestamps = false;

    protected $fillable = [
        'uuid',
        'name'
    ];

    protected $guarded = [
        'id',
    ];

    public function service(): HasMany
    {
        return $this->hasMany(
            Service::class,
            'type_id',
            'id'
        );
    }
}
