<?php

class DbConnection
{

    private $server = "mysql:host=db;dbname=email_server";
    private $user = "admin";
    private $password = "password";
    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

    protected $conn;

    public function openConnection()
    {

        try {
            $this->conn = new PDO($this->server, $this->user, $this->password, $this->options);
        } catch (PDOException $e) {
            echo "There was an error opening the connection: " . $e->getMessage();
        }

    }


    public function closeConnection()
    {
        $this->conn = null;
    }

    public function getUsers()
    {
        $this->openConnection();
        $statement = $this->conn->prepare("SELECT * FROM applicants");
        $statement->execute();
        $applicants = $statement->fetchAll();

        return $applicants;

    }
    public function insertApplicantDetails($firstName, $lastName, $email, $contactNumber, $gender)
    {

        //declare variables to insert
        // $firstName = $_POST['firstName'];
        // $lastName = $_POST['lastName'];
        // $email = $_POST['email'];
        // $contactNumber = $_POST['contactNumber'];
        // $gender = $_POST['gender'];

        try {
            $this->openConnection();
            $statement = $this->conn->prepare('INSERT INTO applicants(`first_name`, `last_name`, `email`, `contact_number`, `gender`) VALUES (?,?,?,?,?)');
            $statement->execute([$firstName, $lastName, $email, $contactNumber, $gender]);
          
            echo "New record created successfully";
            header('Location: homepage.php');
        } catch (PDOException $e) {

            echo $statement . "<br>" . $e->getMessage();

        }
   

    }

    // public function insertLoanDetails()
    // {

    //     if (isset($_POST['apply_now'])) {
    //         $loanValue = $_POST['loan_value'];
    //         $loanPurpose = $_POST['loan_purpose']; //text
    //         $loanTerm = $_POST['loan_term']; //text
    //         $interest = $_POST['interest'];
    //         $totalRepayment = $_POST['total_repayment'];

    //         $this -> openConnection();
    //         $statement = $this -> con -> prepare('INSERT INTO `applicant_loan_details`(`applicant_id`, `loan_value`, `loan_purpose`, `loan_term`, `interest`, `total_repayment`) VALUES (?,?,?,?,?,?)');
    //         $$statement-> execute([$firstName,$lastName,$email,$contactNumber,$gender]);

    //     }
    // }

}

$openDb = new DbConnection();
