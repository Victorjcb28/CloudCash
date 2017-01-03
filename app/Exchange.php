<?php

namespace Cash;

use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    protected $table = 'Exchange';
    protected $fillable = [
        'id_vendedor', 'metodo', 'cantidad', 'id_comprador',
    ];

    public function User()
    {
        return $this->belongsTo('Cash\User');
    }
}
