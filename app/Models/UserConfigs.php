<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_configs extends Model
{
    use HasFactory;
    protected $table = 'user_configs';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
