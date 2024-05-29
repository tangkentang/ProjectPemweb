<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemweb extends Model
{
    use HasFactory;
    protected $fillable = ['kode','nama','layanan','tipe','durasi'];
    protected $table = 'pemweb';
    public $timestamps = false;

}
