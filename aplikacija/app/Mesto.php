<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesto extends Model
{
    public function contact()
    {
        return $this->hasMany(Contact::class);
    }
}
