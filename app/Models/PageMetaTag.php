<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $page_id
 * @property string $property
 * @property string $content
 * @property Carbon $createdAt
 * @property Carbon $updatedAt
 */
class PageMetaTag extends Model
{
    protected $table = 'pages_og_meta_tags';

    protected $fillable = [
        'page_id',
        'property',
        'content',
        'created_at',
        'updated_at'
    ];
}
