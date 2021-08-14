<?php

namespace App\Models;

use App\Traits\ImageOperations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory,ImageOperations;
    protected $fillable=['description','image'];
}
