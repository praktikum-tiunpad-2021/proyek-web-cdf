<?php namespace App\Controllers;

use App\Models\User;
use App\Models\Account;
use App\Models\ToDoList;

class Users extends BaseController {
    protected $session=null;
    protected $user=null;
    protected $account=null;
    protected $list=null;

    public function __construct() {
        $this->user=new User();
        $this->account=new Account();
        $this->list=new ToDoList();
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
        if($this->user->save($newData)) {
            $data=$this->user->find($this->session->get('npm'));
            $this->session->set($data);
            return redirect()->to(base_url('/Users/profile'));
        } else {
            return redirect()->to(base_url('/Users/editProfile'));
        }

    }

    public function savePW() {
        function isTheSameValue($old, $new) {
            return $old === $new;
        }

        $newPassword = [
            'input' => $this->request->getVar('new-pw'),
            'confirm' => $this->request->getVar('confirm-pw')
        ];

        $oldPassword = [
            'input' => $this->request->getVar('old-pw'),
            'data' => $this->account->find($this->session->npm)["password"]
        ];

        // DEBUGGING
        // var_dump($newPassword, $oldPassword);
        // dd($account);

        if(isTheSameValue($oldPassword['input'], $oldPassword['data'])) {
            if(isTheSameValue($newPassword["input"], $newPassword["confirm"])) {
                return redirect()->to(base_url('/Users/profile'));
            } else {
                return redirect()->to(base_url('/Users/profile/edit?invalid=true'));
            }
        } else {
            return redirect()->to(base_url('/Users/profile/edit?invalid=true'));
        }
    }

    public function calendar() {
        return view('User/calendar', ["session" => $this->session]);
    }

    public function list() {
        // $lists=$this->list->find($this->session->npm);
        $lists=$this->list->where('npm', $this->session->npm)->findAll();
        $data=[
            "session" => $this->session,
            "lists" => $lists
        ];
        return view('User/list', $data);
    }

    public function addList() {
        $newData=[
            "isi" => $this->request->getVar("isi"),
            "keterangan" => $this->request->getVar("keterangan"),
            "status" => 0,
            "npm" => $this->session->get("npm"),
        ];

        $this->list->insert($newData);  
        return redirect()->to(base_url('/Users/list'));
    }

    public function deleteList() {
        $idList=$this->request->getVar("id");
        $this->list->delete($idList);
        return redirect()->to(base_url('/Users/list'));
    }

    public function updateList() {

    }
}

?>