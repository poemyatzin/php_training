<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use App\Contracts\Dao\UserDaoInterface;
use App\Contracts\Services\UserServiceInterface;
class UserService implements UserServiceInterface
{
    private $userDao;

  
    public function __construct(UserDaoInterface $userDao)
    {
        $this->userDao =$userDao ;
    }

    public function getLogin(Request $request)
    {
      return $this->userDao->getLogin($request);
    }
    public function getRegistration(Request $request)
    {
      return $this->userDao->getRegistration($request);
    }
}