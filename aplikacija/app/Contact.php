<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable=["fullName","email","phone","mesto_id"];
    public function mesto()
    {
        return $this->belongsTo(Mesto::class);
        $timestamps = false;
    }
}
