<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $table = 'marks';
    protected $primaryKey = 'std_id';
    protected $fillable = ['std_id','name','batch','attn','viva','quiz','assign','mid','final'];
    use HasFactory;
}
