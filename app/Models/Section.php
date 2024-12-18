<?php

namespace App\Models;

use App\Traits\HasImages;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasImages;
    protected $guarded = [];


    public function first_image(){
        $existingImage = $this->images->first();
        if ($existingImage && $existingImage->path != null) {
            return asset('storage/' . $existingImage->path);
        }
        return null;
    }

}
