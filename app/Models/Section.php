<?php

namespace App\Models;

use App\Traits\HasImages;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasImages;
    protected $guarded = [];

}
