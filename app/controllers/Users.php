<?php
  class Users extends Controller{
    public function __construct(){
      $this->userModel = $this->model('User');
    }

    public function index(){
        $this->view('welcome', ['title' => 'Welcome']);
    }

public function register()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
            'name' => trim($_POST['name']),
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'confirm_password' => trim($_POST['confirm_password']),
            'name_err' => '',
            'email_err' => '',
            'password_err' => '',
            'confirm_password_err' => ''
        ];

        if (empty($data['email'])) {
            $data['email_err'] = 'Please enter an email';
            // Validate name
            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter a name';
            }
        } else {
            $n  = $this->userModel->findUserByEmail($data['name']);
            // Check Email
            if ( $n == false) {
                $data['name_err'] = 'Name is not registered .';
            }
        }
        if (empty($data['password'])) {
            $data['password_err'] = 'Please enter a password.';
        } elseif (strlen($data['password']) < 6) {
            $data['password_err'] = 'Password must have atleast 6 characters.';
        }

        // Validate confirm password
        if (empty($data['confirm_password'])) {
            $data['confirm_password_err'] = 'Please confirm password.';
        } else {
            if ($data['password'] != $data['confirm_password']) {
                $data['confirm_password_err'] = 'Password do not match.';
            }
        }

        // Make sure errors are empty
        if (empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
            // SUCCESS - Proceed to insert

            // Hash Password
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

            //Execute
            if ($this->userModel->regl($data)) {
                // Redirect to login
                flash('register_success', 'You are now registered and can log in');
                redirect('users/login');
            } else {
                die('Something went wrong');
            }

        } else {
            // Load View
            $this->view('users/register', $data);
        }
    } else {
        // IF NOT A POST REQUEST

        // Init data
        $data = [
            'name' => '',
            'email' => '',
            'password' => '',
            'confirm_password' => '',
            'name_err' => '',
            'email_err' => '',
            'password_err' => '',
            'confirm_password_err' => ''
        ];

        // Load View
        $this->view('users/register', $data);


    }
}

    public function login(){
      // Check if logged in
      if($this->isLoggedIn()){


      }

      // Check if POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        $data = [       
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),        
          'email_err' => '',
          'password_err' => '',       
        ];

        // Check for email
        if(empty($data['email'])){
          $data['email_err'] = 'Please enter email.';
        }

        // Check for name
        if(empty($data['password'])){
          $data['password_err'] = 'Please enter password.';
        }




        // Make sure errors are empty
        if(empty($data['email_err']) && empty($data['password_err'])){

          // Check and set logged in user
          $loggedInUser = $this->userModel->login($data['email'], $data['password']);

          if($loggedInUser){
            // User Authenticated!
            $this->createUserSession($loggedInUser);

              if ($loggedInUser->role == 'manager'){
                  redirect('cmanager');

              }
              elseif ($loggedInUser->role == 'admin'){
                  redirect('cadmin');
                  exit();
              }
              elseif ($loggedInUser->role == 'examiner'){
                  redirect('cexaminer');
                  exit();
              }
              elseif ($loggedInUser->role== 'officer'){
                  redirect('cofficer');
                  exit();
              }
              elseif($loggedInUser->role== 'officer_head'){
                  redirect('cofficer_head');
                  exit();
              }
              elseif ($loggedInUser->role == 'mahiberat'){
                  redirect('cmahibrat');
                  exit();
              }
              else redirect('pages');
           
          } else {
            $data['password_err'] = 'Password incorrect.';
            // Load View
            $this->view('users/login', $data);
          }
           
        } else {
          // Load View
          $this->view('users/login', $data);
        }

      } else {
        // If NOT a POST

        // Init data
        $data = [
          'email' => '',
          'password' => '',
          'email_err' => '',
          'password_err' => '',
        ];

        // Load View
        $this->view('users/login', $data);
      }
    }

    // Create Session With User Info
    public function createUserSession($user){
      $_SESSION['user_id'] = $user->id;
      $_SESSION['user_email'] =$user->name;
      $_SESSION['role']= $user->role;
      $_SESSION['name'] = $user->name;

 }

    // Logout & Destroy Session
    public function logout(){
      unset($_SESSION['user_id']);
      unset($_SESSION['user_email']);
      unset($_SESSION['user_name']);
      unset($_SESSION['role']);
      session_destroy();
      redirect('users/login');
    }

    // Check Logged In
    public function isLoggedIn(){
      if(isset($_SESSION['user_id'])){
         return true;
      } else {
        return false;
      }
    }
 public function forgotepass(){
     $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
     $email = $_POST['email'];
       // $msg =  URLROOT.'/users/forgote_password/'.$email;
     $to      = $email;
     $subject = 'the subject';
     $message = 'http://localhost/tsms/users/forgote_password/'.$email;
     $headers = array(
         'From' => 'hagergnatube@gmail.com',
         'Reply-To' => 'hagergnatube@gmail.com',
         'X-Mailer' => 'PHP/' . phpversion());

     mail($to, $subject, $message, $headers);

       $this->view('users/login');

 }

    public function forgote_password($email){

        $this->view('users/recover_pass');

    }
  }