
<?php
require_once('controllers/BaseController.php');
require_once('helpers/session_helper.php');
class PagesController extends BaseController
{

  public function login()
  {
    if(isset($_SESSION['usersName'])){
      $this->index();
    }else {
      $this->render('login');
    }
  }

  public function signup()
  {
    $this->render('signup');
  }

  public function index()
  {
    $this->render('index');
    // if(!isset($_SESSION['usersName'])){
    //   $this->login();
    // }else {
    //   $this->render('index');
    // }
  }

}

