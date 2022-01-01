<?php

namespace App\Contracts\Services;

use App\Models\User;
use Illuminate\Http\Request;
interface UserServiceInterface
{
  public function getLogin(Request $request);
  public function getRegistration(Request $request);

}
