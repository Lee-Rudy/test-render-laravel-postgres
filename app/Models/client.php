<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    // use HasFactory;

    public $timestamps = false;

    protected $table = 'client';

    protected $primaryKey = 'id';

    protected $fillable = ['nom'];
}
