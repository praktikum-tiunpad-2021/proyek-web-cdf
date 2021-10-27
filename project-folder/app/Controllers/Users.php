<?php namespace App\Controllers;

use App\Models\User;
use App\Models\Account;

class Users extends BaseController {
    protected $session=null;
    protected $userModel=null;
    protected $accountModel=null;

    public function __construct() {
        $this->userModel=new User();
        $this->accountModel=new Account();
        $this->session=\Config\Services::session(); // Session start
    }

    public function home() {
        return view('User/dashboard', ["session" => $this->session]);
    }

    public function announcement() {
        return view('User/announcement', ["session" => $this->session]);
    }

    public function profile() {
        return view('User/profile', ["session" => $this->session]);
    }

    public function editProfile() {
        return view('User/edit', ["session" => $this->session]);
    }

    public function saveProfile() {
        $newData=array(
            'npm' => $this->session->get('npm'),
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),
            'alamat' => $this->request->getVar('alamat'),
        );

        // var_dump($newData);

        /**
         * Update Table
         * Query = {
         * UPDATE user 
         * SET 
         *  nama={nama} AND 
         *  kelas={kelas} AND
         *  tgl_lahir={tgl_lahir} AND
         *  alamat={alamat}
         * WHERE
         *  npm={npm}
         * }
         */
        if($this->userModel->save($newData)) {
            $data=$this->userModel->find($this->session->get('npm'));
            $this->session->set($data);
            return redirect()->to(base_url('/Users/profile'));
        } else {
            return redirect()->to(base_url('/Users/editProfile'));
        }

    }

    public function savePW() {

    }

    public function calendar() {
        return view('User/calendar', ["session" => $this->session]);
    }

    public function list() {
        return view('User/list', ["session" => $this->session]);
    }
}

?>