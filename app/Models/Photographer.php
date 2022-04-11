<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{
    // protected $table = 'photographers';

    protected $fillable = [
        'name',
        'email',
        'photo',
        'age',
        'birthdate',
    ];
    protected $hidden = [
        'updated_at',
        'created_at'
    ];
    public $timestamp =false;
}
