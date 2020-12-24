<?php
class Officer
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function register($data){

        $this->db->query('INSERT INTO address(country_id, region_id, zone_id, worda_id) VALUES (:c, :r, :z, :w)');
        $this->db->bind(':c', $data['c']);
        $this->db->bind(':r', $data['r']);
        $this->db->bind(':z', $data['z']);
        $this->db->bind(':w', $data['w']);
        $this->db->execute();
        $aid = $this->db->lastInsertId();

        $this->db->query('INSERT INTO applicant(name, sex, dob,address_id, edu_status,health_status ,phone, result_id) 
      VALUES (:name, :sex, :dob, :address_id, :edu_status, :health_status, :phone, 1)');


        // Bind Values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':sex', $data['sex']);
        $this->db->bind(':dob', $data['dob']);
        $this->db->bind(':address_id', $aid);
        $this->db->bind(':edu_status', $data['edustatus']);
        $this->db->bind(':health_status', $data['health_status']);
        $this->db->bind(':phone', $data['phone']);






        //Execute
        if($this->db->execute()){
            // $this->id = $this->emp_id($data['name'], $data['lname']);
            // $this->login_detail($data['email'], $data['password'], $data['role']);


            return true;
        } else {
            return false;
        }
    }

    public function show(){
        $this->db->query("SELECT * FROM applicant");

        $results = $this->db->resultset();

        return $results;
    }
    public function showapo(){
        $this->db->query("SELECT * FROM appointment, applicant WHERE appointment.userid=applicant.id");

        $results = $this->db->resultset();

        return $results;
    }
    public function addresslist(){
        $this->db->query("SELECT * FROM address a, country c, region r , zone z, worda w WHERE a.country_id=c.id AND a.region_id=r.id
        AND a.zone_id=z.id AND a.worda_id=w.id");
    }


public function delete($id){
        $this->db->query("DELETE FROM appointment WHERE aid= :id");
        $this->db->bind(':id', $id);
    if($this->db->execute()){
        return true;
    } else {
        return false;
    }
}
    public function appo($data){
        $this->db->query("INSERT INTO appointment(userid, description, rdate) VALUES(:userid, :description, :rdate)");
        $this->db->bind(':userid', $data['userid']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':rdate', $data['rdate']);

        if ($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

}