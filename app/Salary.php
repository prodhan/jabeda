<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table='salaries';
    protected $fillable=[
        'type',
        'staff_id',
        'date',
        'month_name',
        'amount',
        'comment',
    ];

    public function staff($type){

        return $this->hasOne(Staff::class, 'id', 'staff_id');
    }


}
