<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


final class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'telp'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];


}
