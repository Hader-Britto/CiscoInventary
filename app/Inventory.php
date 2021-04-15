<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    public $timestamps = false;
    protected $table = 'inventory';
    protected $fillable = [
        'section', 'position', 'state', 'product', 'pdrpid', 'serial', 'code', 'channel', 'observation'
    ];
    


}
