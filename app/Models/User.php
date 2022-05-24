<?php

namespace app\Models;

use app\User;
use Illuminate\Support\Facades\Auth;

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class User {
    
    public function getUser() {
        return User::find(auth()->user()->id);
    }
    
}
