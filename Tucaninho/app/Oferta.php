<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model{

    protected $table = 'oferta';

    public $timestamps = false;

    public $incrementing = false;

    protected $primaryKey = [['pedido_id', 'email_cliente'], 'email_agente'];


    protected $fillable = ['pedido_id', 'email_cliente', 'email_agente', 'descricao', 'preco'];

    protected $hidden = ['email_agente'];

}
