<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function directory_displays()
    {
        return $this->hasMany('App\Models\DirectoryDisplay');
    }
}
