<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory,Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
        'username', 'email', 'password','profile_image',

    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getImageAttribute()
    {
       return $this->profile_image;
    }
   
    public function setUserName($userName)
    {
        $this->username=$userName;
    }

    public function getUserName()

    {
        return $this->username;
    }

    public function setEmail($email)
    {
        $this->email=$email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setPassword($password)
    {
        $this->password=$password;
    }

    public function getPassword()
    {
        return $this->password;
    }
 
}


