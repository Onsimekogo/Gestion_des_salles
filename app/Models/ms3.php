<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ms3 extends Model
{
    protected $fillable = [
        'jours', 'heureMatin1','heureMatin2','heureSoir1','heureSoir2',
    ];
}
