<?php
namespace Prote\DBI\DbHelper; 
use DIC\Service;
    
class patient {
    private $Service=NULL;
    public $Db=NULL; 


    public function __construct(Service $Service){
        $this->Service=$Service;
        $this->Db=$this->Service->Database();
    }


    public function add($regDate, $fname, $mname, $lname, $gender, $address, $contact, $treatment, $cost)
    {
        $this->Db->set_parameters(array($regDate,$fname,$mname,$lname,$gender,$address,$contact,$treatment,$cost));
        $this->Db->query("INSERT INTO patients (regDate, fname, mname, lname, gender, address, contact, treatment, cost)values(?,?,?,?,?,?,?,?,?)");
        return 1;
    }

    public function getAllpatients()
    {
        $patients=$this->Db->find_many("SELECT * FROM patients");
        return $patients;
    }

    public function editPatient()
    {
        $id=$_GET['id'];
        
        echo var_dump($id);
        $this->Db->set_parameters(array($id));
        $patient=$this->Db->find_one("SELECT * FROM patients WHERE id=?");
        return $patient;
        echo var_dump($patient);
    }

    public function editPatientSubmit()
    {
        $id=$_GET['id'];
        $this->Db->set_parameters(array($regDate,$fname,$mname,$lname,$gender,$address,$contact,$treatment,$cost,$id));
        $this->Db->query("UPDATE patients SET (regDate, fname, mname, lname, gender, address, contact, treatment, cost)VALUES(?,?,?,?,?,?,?,?,?,?) WHERE id=?");
        return 1;
        
    }

    public function deletePatient()
    {
        $id=$_GET['id'];
        $this->Db->set_parameters(array($id));
        $patientd=$this->Db->find_one("DELETE FROM patients WHERE id=?");
        return $patientd;
    }

    
}