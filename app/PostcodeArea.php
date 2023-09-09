<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostcodeArea extends Model
{
    use HasFactory;
    protected $table = 'postcode_area';
    protected $fillable = ['postcode', 'contactno', 'api_response'];
}

