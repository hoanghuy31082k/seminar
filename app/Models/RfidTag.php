<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RfidTag extends Model
{
    use HasFactory;
    protected $fillable = ['rfid','book_id','created_at','updated_at'];
    
}
