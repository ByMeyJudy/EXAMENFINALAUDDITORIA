<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class db_not_pay extends Model implements Auditable
{
    protected $table = 'not_pay';
    public $timestamps = false;
    use \OwenIt\Auditing\Auditable;
}
