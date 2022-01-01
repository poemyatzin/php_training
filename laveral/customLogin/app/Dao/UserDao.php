<?php 
namespace App\Dao;
use App\Contracts\Dao\UserDaoInterface;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Hash;


class UserDao implements UserDaoInterface
{
    /**
     * To get task list
     * @return $taskList
     */
    public function getLogin(Request $request)
    {
       $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        return $credentials;
    }
    /**
     * Write code on Method
     *
     * @return response()
     */

    public function getRegistration(Request $request)
    {
       $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
       return $data;
    }
    
}
