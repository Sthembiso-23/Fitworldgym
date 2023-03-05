<?php

namespace Phppot;
session_start();
use Phppot\DataSource;

$type = $_SESSION['type'];
class courseSubject
{
    private $ds;
    
    function __construct()
    {
        require_once __DIR__ . '../../lib/DataSource.php';
        $this->ds = new DataSource();
    }
    
 
    public function getAllCourses()
    {
        $query = "SELECT * FROM plans";
        $result = $this->ds->select($query);
        return $result;
    }
    
    
    public function getSubject($countryId)
    {
        $type = $_SESSION['type'];
        if($type == 'Adult'){
           $query = "SELECT * FROM packages WHERE planID = ? AND package <> '12 Months Scholar Package' AND package <> '12 Months Student Package' ";
        }elseif($type == 'Student'){
            $query = "SELECT * FROM packages WHERE planID = ? AND package = '12 Months Student Package' ";
        }else{
            $query = "SELECT * FROM packages WHERE planID = ? AND package = '12 Months Scholar Package' ";
        }
        $paramType = 'd';
        $paramArray = array(
            $countryId
        );
        $result = $this->ds->select($query, $paramType, $paramArray);
        return $result;
    }

   
}