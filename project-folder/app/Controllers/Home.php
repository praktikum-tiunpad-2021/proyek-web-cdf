<?php
namespace App\Controllers;

use App\Models\Account;
use App\Models\User;

class Home extends BaseController {
    protected $session=NULL;
    protected $accountModel;
    protected $userModel;

    public function __construct() {
        $this->accountModel=new Account();
        $this->user=new User();
    }

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

        /**
         * Jika hasil query sama dengan NULL atau password tidak cocok
         * maka akan kembali ke halaman login
         */
        if($account == NULL || $account["password"] != $_POST["password"]) {
            return redirect()->to(base_url('/login?invalid=true'));
        } else {
            $this->session=\Config\Services::session();
            $models=new User();
            $user=$models->find($account["npm"]);

            // var_dump($user);
            $this->session->set($user);
            return redirect()->to(base_url('/Users/home'));
        }

        // DEBUGGING
        // var_dump($_POST);
        // dd($account);
    }

    public function logout() {
        /**
         * Destroy the session
         */
        $this->session=\Config\Services::session();
        $this->session->destroy();
        return redirect()->to(base_url('/'));
    }
}
