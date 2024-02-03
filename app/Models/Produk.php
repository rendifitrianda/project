<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\support\Str;
class Produk extends Model
{
    protected $table = 'produk';
    
    
    public function seller()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    
    function handleUploadFoto()
    {
        if(request()->hasFile('foto'))
        {
            $foto = request()->file('foto');
            $destination = "images/produk"; 
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/".$url;
            $this->save();
        }
    }
}
