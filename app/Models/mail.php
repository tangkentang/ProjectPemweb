<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mail extends Model
{
    use HasFactory;
    protected $fillable = ['firstName','lastName','email','noPhone','msg','attachment'];
    protected $table = 'mail';
    public $timestamps = false;
}
