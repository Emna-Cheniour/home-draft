<?php
include_once 'autoload.php';

class DoctorRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('doctor');
    }

}
?>