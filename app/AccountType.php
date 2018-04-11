<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    //protected $table = 'accounttypes';
	protected $primaryKey = 'typeId';
	public $timestamps = false;
}
