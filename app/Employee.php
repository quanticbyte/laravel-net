<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	//apuntamos a la tabla con al que trabajan
	protected $table = 'employees';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','company_id','user_id','id_op_empresa','firstname','lastname','phone'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
