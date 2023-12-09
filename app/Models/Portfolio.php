<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'kategori',
        'lokasi',
        'tahun',
        'luas_situs',
        'luas_lantai',
        'tinggi',
        'pic',
        'tipe',
        'cover',
    ];

    public function getCoverAttribute($value){
        if($value!=NULL){
            return Storage::disk('__cover')->url($value);
        }else
        return null;
    }

    public function getCoverIfNullReturnTemplateAttribute(){
        if($this->cover!=NULL){
            return $this->cover;
        }else
        // return 'https://source.unsplash.com/random/1920x1080'; 
        return asset('/gambar/image-kosong(1080x1080).jpg');
    }

    //relationship 
    public function gambar()
    {
        return $this->hasMany(Gambar::class,'id_portfolio','id');
    }

}
