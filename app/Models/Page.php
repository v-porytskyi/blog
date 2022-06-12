<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property Carbon $createdAt
 * @property Carbon $updatedAt
 */
class Page extends Model
{
    protected $table = 'pages';

    protected $fillable = [
        'route_name',
        'title',
        'description',
        'keywords',
        'created_at',
        'updated_at'
    ];

    public function tags(): HasMany
    {
        return $this->hasMany(PageMetaTag::class, 'page_id', 'id');
    }
}
