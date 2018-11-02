<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model {
    protected $table = 'url_pedido';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = ['pedido_id', 'email_cliente', 'url'];


    protected $fillable = ['pedido_id', 'email_cliente', 'url'];

    protected $hidden = ['email_cliente'];
}
