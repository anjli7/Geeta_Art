<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'number',
        'message',
    ];
    
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    
    public $timestamps = true;
    
    protected $table = 'contacts';
    
    protected $primaryKey = 'id';
    
    public $incrementing = true;
}
    