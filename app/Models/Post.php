<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'desc', 'price'];
    protected $guarded = ['id'];
    protected $with = ['category', 'section'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
