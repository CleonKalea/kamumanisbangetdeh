<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class UserView extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    // public function spes(){
    //     return $this->belongsTo('App\Models\Poliklinik', 'foreign_key', 'other_key');
    // }

    public function jk()
    {
        return $this->belongsTo(JenisKelamin::class, 'jenis_kelamin_id');
    }
}
