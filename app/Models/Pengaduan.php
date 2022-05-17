<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_pengadu',
        'email_pengadu',
        'phone_pengadu',
        'nama_korban',
        'nik_korban',
        'phone_korban',
        'email_korban',
        'agama_korban',
        'alamat_korban',
        'account',
        'platform',
        'kronologi',
        'bukti',
    ];
}
