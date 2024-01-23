<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Album extends Model
{
    use HasFactory;
    protected $table = "sub_album";
    protected $primaryKey = "s_id";
}
