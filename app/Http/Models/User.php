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
        'username', 'firstName', 'lastName', 'email', 'password', 'sex', 'birthDay'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'firstName','lastName', 'password', 'remember_token',
    ];

    public function roles(){
        return $this->belongsToMany('App/Http/Models/Role');
    }

    public static function Rules(){
        $rule = [
            'userName'          => 'required',
            'firstName'         => 'required',
            'lastName'          => 'required',
            'email'             => 'required|email',
            'password'          => 'required|min:6',
            'confirmPassword'   => 'required|min:6',
            'sex'               => 'required',
            'birthDay'          => 'required|date'
        ];
        return $rule;
    }

    public static $message = [
        'userName.required'             => 'Enter the user name.',
        'firstName.required'            => 'Enter the first name.',
        'lastName.required'             => 'Enter the last name',
        'email.required'                => 'Enter the email address',
        'email.email'                   => 'The input is not a valid email address',
        'password.required'             => 'Enter the password',
        'password.min'                  => 'Please enter at least :min characters.',
        'confirmPassword.required'      => 'Confirm the password.',
        'confirmPassword.min'           => 'Please enter at least :min characters.',
        'sex.required'                  => 'Gender is required.',
        'birthDay.required'             => 'Enter your birthday',
        'birthDay.date'                 => 'Please enter a valid date.'
    ];
}
