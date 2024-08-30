<?php

class DbConnection
{

    private $server = "mysql:host=localhost;dbname=email_server";
    private $user = "admin";
    private $password = "password";
    private $options = array();

    protected $con;

    public function openConnection()
    {

        try {
            $this->con = new PDO($this->server, $this->user, $this->password, $this->options);
        } catch (PDOException $e) {
            echo "There was an error opening the connection: " . $e->getMessage();
        }

    }

    public function closeConnection()
    {
        $this->con = null;
    }

    public function insertApplicantDetails()
    {

        if (isset($_POST['submit'])) {
            //declare variables to insert
            $firstName = $_POST['firstName'];
            $email = $_POST['email'];
            $lastName = $_POST['lastName'];
            $mobileNo = $_POST['contactNumber'];
            $mobileNo = $_POST['gender'];
            $mobileNo = $_POST['gender'];

        }

    }

    public function insertLoanDetails()
    {

        if (isset($_POST['submit'])) {
            $mobileNo = $_POST['loan_value'];
            $mobileNo = $_POST['loan_purpose'];
            $mobileNo = $_POST['loan_term'];
            $mobileNo = $_POST['interest'];
            $mobileNo = $_POST['total_repayment'];

        }
    }

}
