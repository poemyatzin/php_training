<?php

namespace App\Contracts\Dao;

use Illuminate\Http\Request;
use App\Models\User;

interface UserDaoInterface
{
  public function getLogin(Request $request);
  public function getRegistration(Request $request);
    
}
