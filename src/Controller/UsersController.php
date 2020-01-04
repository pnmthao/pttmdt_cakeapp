<?php
namespace App\Controller;
use App\Controller\AppController;
class UsersController extends AppController{
    public function index()
    {
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
    }
     var $uses = array('User');
     public $name = "Users"; // tên của Controller User
     
}