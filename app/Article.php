<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
        'judul',
        'deskripsi'
    ];

    public function articles() {
        return $this->belongsTo('App\User');
    }
}
