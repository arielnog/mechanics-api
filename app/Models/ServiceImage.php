<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceImage extends Model
{
    use  HasFactory;

    /**
     * @var string
     */
    protected $table = 'service_images';

    /**
     * @var array|string[]
     */
    protected $fillable = [
        'uuid',
        'image_path',
        'service_id',
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
