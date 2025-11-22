<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportInquiry extends Model
{
    use HasFactory;

    protected $table = 'import_inquiries';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'brand',
        'model',
        'year',
        'color',
        'condition',
        'message',
    ];
}
