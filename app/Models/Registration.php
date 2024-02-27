<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'registration';
    protected $primaryKey = 'stdid';
    protected $fillable=['name','stdid','password','conformpassoword'];
    use HasFactory;
}
