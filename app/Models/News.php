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
        'author_name',
        'published_date',
        'published_status',
        'views',
        'status_data'
    ];

    # ...
    protected $casts = [
        'created_at'        => 'datetime',
        'updated_at'        => 'datetime',
        'deleted_at'        => 'datetime',
        'published_date'    => 'datetime',
    ];

    public function newsCategory()
    {
        return $this->belongsTo(NewsCategory::class, 'id_news_category', 'id_news_category');
    }
}
