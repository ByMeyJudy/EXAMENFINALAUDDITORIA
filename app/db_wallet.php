<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class db_wallet extends Model implements Auditable
{
    protected $table = 'wallet';
    public $timestamps = false;
    use \OwenIt\Auditing\Auditable;
}
