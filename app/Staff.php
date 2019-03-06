<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table='staff';
    protected $fillable =
        [
            'name',
            'birthday',
            'sex',
            'religion',
            'blood_group',
            'address',
            'phone',
            'email',
            'designation',
            'joining_date',
            'salary',
            'photo',
            'nid'
        ];

    public function staff(){
        return $this->belongsToMany(Salary::class);
    }
}
