<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',         // Change to lowercase
        'description',   // Change to lowercase
        'deadline',
        'assigned_user',
        'assigned_client',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'assigned_user');
    }
    public function client()
    {
        return $this->belongsTo(Client::class, 'assigned_client');
    }
}
