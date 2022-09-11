<?php

namespace App\Models\Traits\Attributes;

use Illuminate\Support\Str;

trait UserAttributes
{
    function getJenisKelaminStringAttribute()
    {
        return ($this->jenis_kelamin == 1);
        return ($this->jenis_kelamin == 2);
    }

    function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    function setUserNameAttribute($value)
    {
        $this->attributes['username'] = strtolower($value);
    }
}
