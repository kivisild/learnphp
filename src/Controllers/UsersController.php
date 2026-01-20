<?php
namespace App\Controllers;
use App\Models\User;


class UsersController
{
    public function __construct(){
        if(!auth()){
            redirect('/login');
            die;
    
    }
}

    public function index()
    {
        $users = User::all();
        view('users/index', compact('users'));
    }

    public function destroy(){
        $user = User::find($_GET['id']);
        $user->delete();
        redirect('/users');
    }

    public function create(){
        view('users/create');
    }

    public function store(){
        $user = User::where('email', $_POST['email'])[0] ?? null;
        if($user  || $_POST['password' !== $_POST['password_confirm']]){
            return redirect('/users/create');
        }

        $user = new User();
        $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $user->email = $_POST['email'];
        $user->save();
        redirect('/users');
    }
    


}