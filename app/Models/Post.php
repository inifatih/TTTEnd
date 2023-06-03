<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{

    use HasFactory, Sluggable;

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

    public function getRouteKeyName(){
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
            ];
    }
}
