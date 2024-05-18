<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $fillable = ['title'];

    public function tags()
    {
        return $this->belongsToMany(PostTag::class, foreignPivotKey: "post_listing_id");
    }

}
