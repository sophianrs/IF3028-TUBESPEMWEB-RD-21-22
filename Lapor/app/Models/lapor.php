<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lapor extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'isi', 'aspek', 'lampiran'];
}