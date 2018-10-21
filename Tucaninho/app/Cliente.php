<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'cliente';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['email_cliente', 'nome_cliente', 'senha_cliente'];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = ['senha_cliente'];
}
