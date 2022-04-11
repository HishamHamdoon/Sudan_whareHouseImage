<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    // protected $table = 'photographers';

    protected $fillable = [
        'title',
        'body',
        'name',
        'photo',
        'user_id',  
    ];
    protected $hidden = [
        
        'updated_at',
        'created_at'

    ];
    public $timestamp =false;

    public function user (){

        return $this->belongsTo('App\Models\User','user_id');

    }
}
