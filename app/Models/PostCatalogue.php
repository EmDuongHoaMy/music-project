<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PostCatalogue extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'post_catalogues';
    protected $fillable = [
        'name',
        'description',
        'parent_id',
        'level',
        'lft',
        'rgt',
        'img',
        'user_id'
    ];
}
