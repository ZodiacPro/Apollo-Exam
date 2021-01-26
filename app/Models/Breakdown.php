<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breakdown extends Model
{
    use HasFactory;

    protected $fillable=[
       'id',
       'values',
       'randoms_id',
        ];
       public function randoms()
     {
        return $this->belongsTo('App\Models\Random');
     }
   
}
