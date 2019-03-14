<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Credit extends Model
{
    use SoftDeletes;
    protected $dates=['deleted_at'];
    protected $table='credits';
    protected $fillable=[
        'date',
        'purpose_id',
        'description',
        'voucher_no',
        'amount',
        'user_id',

    ];

    public function purpose(){
        return $this->hasOne(Purpose::class, 'id', 'purpose_id');
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
