<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Testing\Fluent\Concerns\Has;

class Post extends Model
{
    use HasFactory;
    protected  $fillable = [
        'title',
        'content',
        'user_id',
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class , 'user_id');
    }

    public function comments() :  HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
