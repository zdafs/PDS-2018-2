<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model {
  protected $table = 'pedidos';

  public $timestamps = false;

  public $incrementing = false;

  protected $primaryKey = ['pedido_id', 'email_cliente'];


  protected $fillable = ['pedido_id', 'email_cliente', 'url', 'descricao', 'qnt_adultos',
                        'qnt_criancas', 'qnt_bebes', 'tipo_viagem', 'tipo_passagem', 'preferencia'];

  protected $hidden = ['email_cliente'];
}
