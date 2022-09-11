<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Produk;
use App\Models\Traits\Attributes\UserAttributes;
use App\Models\UserDetail;

class User extends Authenticatable
{
    use UserAttributes;
    protected $table = 'user';
    use HasFactory, Notifiable;

    function detail()
    {
        return $this->hasOne(UserDetail::class, 'id_user');
    }
    function getJenisKelaminStringAttribute()
    {
        return ($this->jenis_kelamin == 1) ? "Laki - Laki" : "Perempuan";
    }

    function produk()
    {
        return $this->hasMany(Produk::class, 'id_user');
    }
    function setUsernameAttribute($value)
    {
        $this->attributes['username'] = strtolower($value);
    }
}
