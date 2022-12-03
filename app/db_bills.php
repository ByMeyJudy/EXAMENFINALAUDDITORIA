<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class db_bills extends Model implements Auditable
{
    protected $table = 'bills';
    public $timestamps = false;
    use \OwenIt\Auditing\Auditable;
}
