<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    public $timestamps = false;
    protected $table = 'loan';
    protected $fillable = [
        'loancode', 'pdrp_id', 'serial', 'channel', 'idinventary', 'estimateddate', 'realreturn', 'dateloan', 'state', 'pastdays', 'observation'
    ];
}
