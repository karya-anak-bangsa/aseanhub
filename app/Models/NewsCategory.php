<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NewsCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $table        = 'tb_news_categories';
    protected $primaryKey   = 'id_news_category';

    protected $fillable = [
        'category_name',
        'nama_kategori',
        'slug_en',
        'slug_id',
        'description',
        'deskripsi',
        'sort_order',
        'status_data',
    ];

    // ...
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    // ...
    public function news()
    {
        return $this->hasMany(News::class, 'id_news_category', 'id_news_category');
    }
}
