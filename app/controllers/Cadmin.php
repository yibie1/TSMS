<?php


class Cadmin extends Controller
{
    public function __construct()
    {
        $this->adminModel = $this->model('Admin');
        $this->userModel = $this->model('User');

        if(!$this->isLoggedIn()){
            redirect('login');
        }
        if($_SESSION['role'] != "admin"){
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

        $data = [
            'title' => 'Admin'
        ];

        $this->view('admin/index', $data);
    }

    public function employee(){
        $show = $this->adminModel->show();
        $coun = $this->adminModel->listcounry();
        $r = $this->adminModel->listr();
        $z = $this->adminModel->listz();
        $w = $this->adminModel->listw();
        $data = ['shows' => $show, 'clist'=>$coun, 'r'=>$r, 'z' => $z, 'w'=>$w];
        $this->view('admin/employee', $data);

   }
public function empall(){
    $show = $this->adminModel->showall();
    $data = ['shows' => $show];
    $this->view('admin/employee', $data);
}
   public function address(){
        $this->view('admin/address');
   }
public function empun(){
    $show = $this->adminModel->showun();
    $data = ['shows' => $show];
    $this->view('admin/employee', $data);
}
    public function showemp($id){
        $more = $this->adminModel->getEmpById($id);
        $data = ['more' => $more];
        $this->view('admin/sample', $data);
    }

    public function edit($id){
        $more = $this->adminModel->getEmpById($id);
        $data = ['more' => $more];
        $this->view('admin/editemp', $data);

    }
    public function back(){
        $this->view('admin/back_res');
    }

    public function restore(){
        $conn = mysqli_connect("localhost", "root", "123456", "tsmsproject");
        if (! empty($_FILES)) {
            // Validating SQL file type by extensions
            if (! in_array(strtolower(pathinfo($_FILES["backup_file"]["name"], PATHINFO_EXTENSION)), array(
                "sql"
            ))) {
                $response = array(
                    "type" => "error",
                    "message" => "Invalid File Type"
                );
            } else {
                if (is_uploaded_file($_FILES["backup_file"]["tmp_name"])) {
                    move_uploaded_file($_FILES["backup_file"]["tmp_name"], $_FILES["backup_file"]["name"]);
                    $response = restoreMysqlDB($_FILES["backup_file"]["name"], $conn);
                }
            }
        }

        function restoreMysqlDB($filePath, $conn)
        {
            $sql = '';
            $error = '';

            if (file_exists($filePath)) {
                $lines = file($filePath);

                foreach ($lines as $line) {

                    // Ignoring comments from the SQL script
                    if (substr($line, 0, 2) == '--' || $line == '') {
                        continue;
                    }

                    $sql .= $line;

                    if (substr(trim($line), - 1, 1) == ';') {
                        $result = mysqli_query($conn, $sql);
                        if (! $result) {
                            $error .= mysqli_error($conn) . "\n";
                        }
                        $sql = '';
                    }
                } // end foreach

                if ($error) {
                    $response = array(
                        "type" => "error",
                        "message" => $error
                    );
                } else {
                    $response = array(
                        "type" => "success",
                        "message" => "Database Restore Completed Successfully."
                    );
                }
            } // end if file exists
            return $response;
            $this->view('admin/back_res', $response);
        }

    }

    public function addEmp(){
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Sanitize POST
            $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'name' => trim($_POST['name']." ".$_POST['lname']),
                'lname' => trim($_POST['lname']),
                'sex' => trim($_POST['sex']),
                'dob' => trim($_POST['dob']),
                'phone' => trim($_POST['phone']),
                'edustatus' => trim($_POST['edu']),
                'salary' => trim($_POST['salary']),
                'pro' => trim($_POST['pro']),
                'role' => trim($_POST['role']),
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
                if($this->adminModel->register($data)){


                    flash('register_success', 'Employee Registered Successfully');
                    redirect('Cadmin/employee');
                } else {
                    die('Something went wrong');
                }

            } else {
                // Load View
                $this->view('admin/addemp', $data);
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
            $this->view('admin/addemp', $data);
        }
    }


    public function addcountry(){
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = ['name', $_POST['came']];

        if ($this->adminModel->addcountry($data)){
            flash('country', "Country Added");
        }
        $this->view('admin/address', $data);
    }
    public function addregion(){

    }
    public function addzone(){

    }
    public function addworda(){

    }

     public function listcountry(){
      $list =  $this->adminModel->listcounry();
      $data = ['clist', $list];
      $this->view('admin/address', $data);
        }
public function unactive($id){
    $this->adminModel->unactive($id);
    $show = $this->adminModel->show();
    $data = ['shows' => $show];
    $this->view('admin/employee', $data);

}

}