<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'published_at' => 'datetime'
    ];

    protected $month = [
        'Січень',
        'Лютий',
        'Березень',
        'Квітень',
        'Травень',
        'Червень',
        'Липень',
        'Серпень',
        'Вересень',
        'Жовтень',
        'Листопад',
        'Грудень'
    ];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function categories() : BelongsToMany {
        return $this->belongsToMany(Category::class);
    }

    public function formatDescription() : string
    {
        return Str::words(strip_tags($this->description), 30, '...');
    }

    public function getFormatDate()
    {
        return $this->published_at->format('d ' . 'F' . ' y');
    }

    public function startsWith()
    {
        if (str_starts_with($this->thumbnail, 'http'))
        {
            return $this->thumbnail;
        }
        return '/storage/' . $this->thumbnail;
    }
}
