<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe;
    public $token;
}
