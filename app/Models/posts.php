<?php

namespace App\Models;

use App\Http\Livewire\Admin\Users;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class posts extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        'title',
        'image',
        'content',
        'category_id',
        'auther'
    ];

    // comments of this post
    public function comments()
    {
        return $this->hasMany(comments::class);
    }

    // auther of this post
    public function auther()
    {
        return $this->belongsTo(Users::class);
    }

    // category of this post
    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
