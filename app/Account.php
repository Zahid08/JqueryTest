<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //protected $table = 'accounts';
	protected $primaryKey = 'accId';
	public $timestamps = false;
}