<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class db_list_bills extends Model implements Auditable
{
    protected $table = 'list_bill';
    public $timestamps = false;
    use \OwenIt\Auditing\Auditable;
}
