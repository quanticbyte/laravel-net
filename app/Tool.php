<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    //use Notifiable;
	//apuntamos a la tabla con al que trabajan
	protected $table = 'tools';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'model', 'image_url','state','employee_id','company_id','is_active','serial_number'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
