<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Agente extends Authenticatable {
    /**
   * The database table used by the model.
   *
   * @var string
   */
    protected $table = 'agente';

    public $timestamps = false;

    protected $primaryKey = 'email_agente';

    public $incrementing = false;

    protected $keyType = 'string';

    public function getAuthPassword(){
      return $this->senha_agente;
    }

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = ['email_agente', 'nome_agente', 'senha_agente'];

    /**
    * The attributes excluded from the model's JSON form.
    *
    * @var array
    */
    protected $hidden = ['senha_agente'];

    public function getRememberToken()
    {
      return null;
    }

    public function setRememberToken($value)
    {
       // do nothing
    }
}
