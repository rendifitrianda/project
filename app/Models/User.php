<?php

namespace App\Models;

use App\Models\Produk;
use App\Models\UserDetail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\concerns\HasMany; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'user';
    use HasApiTokens, HasFactory, Notifiable;

    function detail()
    {
        return $this->hasOne(UserDetail::class, 'id_user');
    }

    function Produk()
    {
         return $this->hasMany(Produk::class, 'id_user');
    }


    //attribute untuk mengubah nama menjadi huruf kecil semua
    function setNamaAttribute($value)
    {
        $this->attributes['nama'] = strtolower($value);
    }

   
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    // /**
    //  * The attributes that should be hidden for serialization.
    //  *
    //  * @var array<int, string>
    //  */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    // /**
    //  * The attributes that should be cast.
    //  *
    //  * @var array<string, string>
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    //     'password' => 'hashed',
    // ];
}
