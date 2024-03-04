<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staffs extends Model
{
    use HasFactory;

    protected $table = 'staffs';

    protected $primaryKey = 'id_staff';

    protected $keyType = 'string';

    protected $fillable = [
        'id_staff',
        'name',
        'email',
        'password',
        'level',
    ];
}
