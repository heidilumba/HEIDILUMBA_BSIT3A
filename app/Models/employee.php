<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $table = 'employees_tbl';
    protected $primarykey = 'id';
    protected $fillable = ['first_name','last_name','DOB','phone',];
}