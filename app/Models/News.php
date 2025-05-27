<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image_path',
        'user_id',
        'visit_count',
    ];

    // Relasi ke User (Author)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Set slug otomatis saat menyimpan
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($news) {
            $news->slug = Str::slug($news->title);
        });
    }
}
