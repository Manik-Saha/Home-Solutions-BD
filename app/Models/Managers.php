<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Managers extends Model
{
    protected $table = 'managers';
    public $timestamps = false;
    protected $primaryKey = 'id';
}