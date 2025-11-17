<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wagon extends Model
{
    
    protected $fillable = ['location','wagon_number'];
    
    use HasFactory;
}
