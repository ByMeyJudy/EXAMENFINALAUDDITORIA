<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class db_credit extends Model implements Auditable
{
    protected $table = 'credit';
    use \OwenIt\Auditing\Auditable;
}
