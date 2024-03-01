<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $primaryKey = 'id_cus';

    protected $keyType = 'string';

    protected $fillable = [
        'id_cus',
        'name',
        'address',
        'phonenumber',
        'gender',
        'status',
    ];
}
