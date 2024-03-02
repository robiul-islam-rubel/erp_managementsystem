<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $table = 'advertisements';
    protected $primaryKey = 'id';
    protected $fillable=['title1','title2','add_desc'];
    use HasFactory;
}
