<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormModel extends Model
{
    use HasFactory;
    
    protected $table = 'form';

    protected $fillable = [
        'url', 'update_date', 'customer_name',
        'address', 'user_name', 'password',
        'server', 'folder', 'mode',
        'date', 'call_date', 'response_type',
        'database_detail', 'status', 'age'
    ];
}
