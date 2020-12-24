<?php


class Cofficer extends Controller
{
    public function __construct()
    {
        $this->officerModel = $this->model('Officer');
        $this->userModel = $this->model('User');
        $this->adminModel = $this->model('Admin');
        if(!$this->isLoggedIn()){
            redirect('login');
        }
        if($_SESSION['role'] != "officer"){
            redirect('login');
        }
    }

    public function isLoggedIn(){
        if(isset($_SESSION['user_id'])){
            return true;
        } else {
            return false;
        }
    }
    public function index()
    {
        $coun = $this->adminModel->listcounry();
        $r = $this->adminModel->listr();
        $z = $this->adminModel->listz();
        $w = $this->adminModel->listw();
        $show= $this->officerModel->show();
        $app = $this->officerModel->showapo();
        $data = [
            'shows' => $show, 'clist'=>$coun, 'r'=>$r, 'z' => $z, 'w'=>$w,
            'appo'=>$app
        ];

        $this->view('it_officer/index', $data);
    }
public function delete($id){

        if($this->officerModel->delete($id)){
            redirect('Cofficer/index');


    }

}
public function appo(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST
            $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = ['userid' => $_POST['userid'],

                'description' => $_POST['description'],
                'rdate' => $_POST['date']];

                    if ($this->officerModel->appo($data)){
                        redirect('Cofficer/index');
                    }
        }
}
    public function regigster(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST
            $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'name' => trim($_POST['name']." ".$_POST['lname']." ".$_POST['gname']),
                'lname' => trim($_POST['lname']),
                'sex' => trim($_POST['sex']),
                'dob' => trim($_POST['dob']),
                'c' =>trim($_POST['c']),
                'r' =>trim($_POST['r']),
                'z' =>trim($_POST['z']),
                'w' =>trim($_POST['w']),
                'phone' => trim($_POST['phone']),
                'edustatus' => trim($_POST['edu']),
                'health_status' => trim($_POST['health_status']),
                'name_err' => '',
                'last_err' => '',

            ];

            // Validate email
            if(empty($data['name'])){
                $data['email_err'] = 'Please enter an name';
                // Validate name
                if(empty($data['lname'])){
                    $data['last_err'] = 'Please enter a last name';
                }
            }

            // Validate password
            /* if(empty($data['password'])){
                 $password_err = 'Please enter a password.';
             } elseif(strlen($data['password']) < 6){
                 $data['password_err'] = 'Password must have atleast 6 characters.';
             }

             // Validate confirm password
             if(empty($data['confirm_password'])){
                 $data['confirm_password_err'] = 'Please confirm password.';
             } else{
                 if($data['password'] != $data['confirm_password']){
                     $data['confirm_password_err'] = 'Password do not match.';
                 }
             }
 */
            // Make sure errors are empty
            if(empty($data['name_err']) && empty($data['last_err'])){

                //Execute
                if($this->officerModel->register($data)){


                    flash('register_success', 'Employee Registered Successfully');
                    redirect('Cofficer/index');
                } else {
                    die('Something went wrong');
                }

            } else {
                // Load View
                $this->view('it_officer/index', $data);
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
            $this->view('it_officer/index', $data);
        }
    }
}