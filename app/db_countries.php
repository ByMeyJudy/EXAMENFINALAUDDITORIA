<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class db_countries extends Model implements Auditable
{
    protected $table = 'countrys';
    public $timestamps = false;
    use \OwenIt\Auditing\Auditable;
}
