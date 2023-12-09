<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Gambar extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_portfolio',
        'path',
    ];

    public function getPathAttribute($value){
        if($value!=NULL){
            return Storage::disk('__gambar')->url($value);
        }else
        return null;
    }

    //relationship
    public function portofolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
