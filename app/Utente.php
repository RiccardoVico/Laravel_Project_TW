<?php

namespace App;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Utente extends Authenticatable
{  
    protected $table = 'utente';
    

    protected $fillable = [
        'username','nome','cognome','recapito','tipologia','password','cittainteresse','via',
        'citta','numerocivico','cap','provincia','paese','mail'
    ];

    

 protected $hidden = [
        'password', 'remember_token',
    ];
  protected $casts = [
        'email_verified_at' => 'datetime',
    ];
  public function hasRole($role){
      $role=(array)$role;
      return in_array($this->role,role);
  }
}