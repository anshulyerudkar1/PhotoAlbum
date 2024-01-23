<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main_Album extends Model
{
    use HasFactory;
    protected $table = "main_album";
    protected $primaryKey = "m_id";
}
