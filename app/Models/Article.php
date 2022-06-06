<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'title',
        'description',
        'content',
        'created_at',
        'updated_at'
    ];
}
