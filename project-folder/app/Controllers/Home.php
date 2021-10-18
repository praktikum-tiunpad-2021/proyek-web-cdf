<?php
namespace App\Controllers;

use App\Models\Account;
use App\Models\User;

class Home extends BaseController {
    public function index() {
        $models=new User();
        $users=$models->findAll();
        return view('home', ["users" => $users]);
    }

    public function login() {
        return view('login');
    }

    public function validateLogin() {
        $models=new Account();
        $account=$models->find($_POST["npm"]);

        if($account == NULL || $account["password"] != $_POST["password"]) {
            return redirect()->to(base_url('/login?invalid=true'));
        } else {
            return redirect()->to(base_url('/Users/home'));
        }

        // DEBUGGING
        // var_dump($_POST);
        // dd($account);
    }
}
