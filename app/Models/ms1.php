<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ms1 extends Model
{
    //
    protected $fillable = [
        'jours', 'heureMatin1','heureMatin2','heureSoir1','heureSoir2',
    ];
}
