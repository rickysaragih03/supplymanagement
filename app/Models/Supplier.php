<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';

    protected $fillable = [
        'name',
        'contact_info',
    ];

    // Definisikan relasi jika ada
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
