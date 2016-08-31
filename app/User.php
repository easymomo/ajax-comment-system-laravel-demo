<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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
     * Return the author user attributes.
     *
     * @return array
     */
    public function getAuthor()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'url' => $this->url,
            'avatar' => 'gravatar',
            'admin' => $this->role === 'admin',
        ];
    }
}
