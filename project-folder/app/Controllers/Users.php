<?php namespace App\Controllers;

use App\Models\User;
use App\Models\Account;
use App\Models\Announcement;
use App\Models\Calendar;
use App\Models\Comments;
use App\Models\ToDoList;

class Users extends BaseController {
    protected $session=null;
    protected $user=null;
    protected $account=null;
    protected $list=null;
    protected $announcement=null;
    protected $comment=null;
    protected $calendar=null;

    public function __construct() {
        $this->user=new User();
        $this->account=new Account();
        $this->list=new ToDoList();
        $this->announcement=new Announcement();
        $this->comment=new Comments();
        $this->calendar=new Calendar();
        $this->session=\Config\Services::session(); // Session start
    }

    public function home() {
        return view('User/dashboard', ["session" => $this->session]);
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
        $calendar=$this->calendar->where('npm', $this->session->npm)
                                 ->findAll();
        $data=[
            "session" => $this->session,
            "calendar" => $calendar
        ];
        return view('User/calendar', $data);
    }

    public function addCalendar() {
        $isi=$this->request->getVar("isi");
        $tanggal=date("Y-m-d");
        $npm=$this->session->npm;
        $data=[
            "isi" => $isi,
            "tanggal" => $tanggal,
            "npm" => $npm
        ];
        $this->calendar->insert($data);
        return redirect()->to(base_url('/Users/calendar'));
    }

    public function deleteCalendar() {
        $id=$this->request->getVar("id");
        $this->calendar->delete($id);
        return redirect()->to(base_url("/Users/calendar"));
    }

    public function list() {
        // $lists=$this->list->find($this->session->npm);
        $lists=$this->list->where('npm', $this->session->npm)
                          ->findAll();
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

    public function announcement() {
        $lists=$this->announcement->findAll();
        $komentar=$this->comment->findAll();
        $data=[
            "session" => $this->session,
            "announcement" => $lists,
            "comments" => $komentar
        ];
        return view('User/announcement', $data);
    }

    public function addAnnouncement() {
        $isi=$this->request->getVar('isi');
        $tglPost=date("Y-m-d");
        $data=[
            "isi" => $isi,
            "tgl_post" => $tglPost,
        ];
        $this->announcement->insert($data);

        return redirect()->to(base_url('/Users/announcement'));
    }

    public function addComment() {
        $isi=$this->request->getVar("isi");
        $idAnnouncement=$this->request->getVar("id_announcement");
        $data=[
            "isi" => $isi,
            "id_announcement" => $idAnnouncement
        ];
        $this->comment->insert($data);
        return redirect()->to(base_url("/Users/announcement"));
    }
}

?>