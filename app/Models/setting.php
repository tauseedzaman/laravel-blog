<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class setting extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        'title',
        'about',
        'business_email',
        'business_phone',
        'logo_path',
        'logo_icon_path',
        'favicon_path',
    ];
}
