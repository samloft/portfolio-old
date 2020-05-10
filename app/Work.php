<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Contact.
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $image
 * @property string $description
 * @property string $images
 * @property string $github
 * @property string $website
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */
class Work extends Model
{
    protected $guarded = [
        '_token',
    ];

    protected $casts = [
        'images' => 'array',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
