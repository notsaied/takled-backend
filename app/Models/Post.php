<?php

namespace App\Models;

use App\Traits\HasImages;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasImages;

    protected $guarded = [];
}
