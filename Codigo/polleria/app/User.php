<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    protected $table      = 'tbl_usuario';
    protected $primaryKey = 'id_usuario';
    public $timestamps    = false;

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     public function admin()
    {
        return $this->hasOne('App\Admin', 'id_usuario');
    }

    public function cliente()
    {
        return $this->hasOne('App\Cliente', 'id_usuario');
    }
}
