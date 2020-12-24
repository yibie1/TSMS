<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Add User / Register
    public function register($data){
      // Prepare Query
      $this->db->query('INSERT INTO users (name, email,password) 
      VALUES (:name, :email, :password)');

      // Bind Values
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':password', $data['password']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


    public function regl($data){
        $this->db->query("UPDATE users, employee
                      SET users.email = :email, users.password=:pass
               WHERE users.userid = employee.id AND employee.name=:name");
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':pass', $data['password']);
        $this->db->bind(':name', $data['name']);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }

    // Find USer BY Email
    public function findUserByEmail($email){
      $this->db->query("SELECT * FROM employee e , users u WHERE e.name = :name AND u.userid=e.id");
      $this->db->bind(':name', $email);

      $row = $this->db->single();

      //Check Rows
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }

    // Login / Authenticate User
    public function login($email, $password){
      $this->db->query("SELECT * FROM employee,users WHERE users.email = :email");
      $this->db->bind(':email', $email);

      $row = $this->db->single();
      
      $hashed_password = $row->password;
      if(password_verify($password, $hashed_password)){
        return $row;
      } else {
        return false;
      }
    }

    // Find User By ID
    public function getUserById($id){
      $this->db->query("SELECT * FROM users WHERE id = :id");
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }
  }