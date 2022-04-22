<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    use Sluggable;
    protected $guarded = [];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class)->withDefault();
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%');
                $query->orWhere('content', 'like', '%' . $search . '%');
            });
        });
    }

    public function scopeFilterW($query, array $filters)
    {
        
        $query->when($filters['q'] ?? null, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%');
                $query->where('content', 'like', '%' . $search . '%');

            });
        })->when($filters['date'] ?? null, function ($query, $date) {
            $query->whereDate('news.created_at', '=', $date);
        });
    }

}
