<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory, SoftDeletes;

    protected $table        = 'tb_news';
    protected $primaryKey   = 'id_news';

    protected $fillable = [

        # foreign key
        'id_news_category',

        # English
        'title_en',
        'slug_en',
        'excerpt_en',
        'content_en',
        'thumbnail_en',

        # Indonesia
        'title_id',
        'slug_id',
        'excerpt_id',
        'content_id',
        'thumbnail_id',

        // SEO EN
        'meta_title_en',
        'meta_description_en',
        'meta_keywords_en',

        // SEO ID
        'meta_title_id',
        'meta_description_id',
        'meta_keywords_id',

        // Publish
        'author_name_en',
        'author_name_id',
        'published_at',
        'published_status',
        'views',
        'status_data'
    ];

    # ...
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
        'published_at' => 'datetime',
    ];

    public function getViewsFormattedAttribute(): string
    {
        return number_format($this->views);
    }

    public function getPublishedDateAttribute(): string
    {
        return $this->published_at ? $this->published_at->format('d M Y') : '-';
    }

    public function getPublishedTimeAttribute(): string
    {
        return $this->published_at ? $this->published_at->format('H:i') : '-';
    }

    public function getTitleAttribute(): string
    {
        return "
            <strong>{$this->title_en}</strong>
            <br>
            <small class='text-muted'>{$this->title_id}</small>";
    }

    public function getPublishedBadgeClassAttribute(): string
    {
        return match ($this->published_status) {
            'Published' => 'success',
            'Draft' => 'warning',
            default => 'secondary',
        };
    }

    public function getStatusBadgeClassAttribute(): string
    {
        return $this->status_data == 'Active'
            ? 'success'
            : 'danger';
    }

    public function newsCategory()
    {
        return $this->belongsTo(NewsCategory::class, 'id_news_category', 'id_news_category');
    }
}
