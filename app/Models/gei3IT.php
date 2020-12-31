<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class gei3IT extends Model
{
    protected $fillable = [
        'jours', 'heureMatin1','heureMatin2','heureSoir1','heureSoir2',
    ];
    protected $table = 'emploigei3it';
}




