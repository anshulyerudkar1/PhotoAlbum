<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main_Video_Album extends Model
{
    use HasFactory;
    protected $table = "main_video_album";
    protected $primaryKey = "mV_id";
}
