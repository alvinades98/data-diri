<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_user extends Model
{
    protected $table = "data_users";

    protected $fillable = ['nama','age','city'];
}
