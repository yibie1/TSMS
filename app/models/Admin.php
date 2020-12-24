<?php
class Admin
{
    private $db;
    private $id;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function register($data){
        // Prepare Query
        $this->db->query('INSERT INTO employee (name, sex, dob, phone, edu_status, address_id, salary, profession, active) 
      VALUES (:name, :sex, :dob, :phone, :edu_status, :address_id, :salary, :profession, 1)');


        // Bind Values


        $this->db->bind(':name', $data['name']);
        $this->db->bind(':sex', $data['sex']);
        $this->db->bind(':dob', $data['dob']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':edu_status', $data['edustatus']);
        $this->db->bind(':address_id', '1');
        $this->db->bind(':salary', $data['salary']);
        $this->db->bind(':profession', $data['pro']);
        $this->db->execute();

        $id = $this->db->lastInsertId();
        $this->db->query('INSERT INTO users(userid, role ) VALUES (:user_id, :role)');
        $this->db->bind(':user_id', $id);
        $this->db->bind(':role', $data['role']);

        //Execute
        if($this->db->execute()){
           // $this->id = $this->emp_id($data['name'], $data['lname']);
           // $this->login_detail($data['email'], $data['password'], $data['role']);


            return true;
        } else {
            return false;
        }
    }
public function emp_id($name, $last){
    $this->db->query("SELECT * FROM employee WHERE name = :name ");
    $this->db->bind(':name', $name);
    //$this->db->bind(':last_name', $last);
    $row = $this->db->single();
    return $row->empid;

}

public function login_detail($email, $password, $role){

        $this->db->query('INSERT INTO users (userid, email, password,  role)
      VALUES (:userid, :email, :password, :role)');

        // Bind Values

        $this->db->bind(':userid', '2');
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
        $this->db->bind(':role', $role);
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function show(){
        $this->db->query("SELECT * FROM employee WHERE active='1'");

        $results = $this->db->resultset();

        return $results;
    }
    public function showall(){
        $this->db->query("SELECT * FROM employee");

        $results = $this->db->resultset();

        return $results;
    }

    public function unactive($id){
        $this->db->query('UPDATE employee SET active=0 WHERE id=:id');
        $this->db->bind(':id', $id);
        if ($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function showun(){
        $this->db->query("SELECT * FROM employee WHERE active='0'");

        $results = $this->db->resultset();

        return $results;
    }
    public function getEmpById($id){
        $this->db->query("SELECT * FROM employee WHERE id = :id");

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function addcountry($name){
        $this->db->query("INSERT INTO country(name) VALUES (:cname)");
        $this->db->bind(':cname', $name);
        $this->db->execute();
    }
    public function addregion(){

    }
    public function addzone(){

    }
    public function addworda(){

    }
    public function listcounry(){
        $this->db->query("SELECT * FROM country");
        $result = $this->db->resultset();
        return $result;
    }
    public function listr(){
        $this->db->query("SELECT * FROM region");
        $result = $this->db->resultset();
        return $result;
    }
    public function listz(){
        $this->db->query("SELECT * FROM zone");
        $result = $this->db->resultset();
        return $result;
    }
    public function listw(){
        $this->db->query("SELECT * FROM worda");
        $result = $this->db->resultset();
        return $result;
    }

}