<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Cliente extends Authenticatable
{
    /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'cliente';

  public $timestamps = false;

  protected $primaryKey = 'email_cliente';

  public function getAuthPassword()
{
    return $this->senha_cliente;
}

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
