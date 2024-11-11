<?php
    $conn = new mysqli("localhost", "root", "", "phpLearning");

    if ($conn->connect_errno){
        echo "Connection Failed :". $conn->connect_error;
        die();
    }
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $studentIdNumber = $_POST["idNumber"];
        $studentName = $_POST["studentName"];
        $submissionDate = $_POST["dateSubmission"];

        if (empyt($studentIdNumber) || empty($studentName) || empty($submissionDate)){
            echo "<p style='color:red; font-size:20px;`> Enter all fields </p>";
            die();
        }

        $sql =  $conn->prepare("INSERT INTO studentRegistration (idNumber, studentName, dateSubmittin)  VALUES(?, ?, ?);");

        $stmt->bindParam("isd", $studentIdNumber, $studentName, $submissionDate);
        $stmt->execute();


        $result = $conn->query($sql);
        if ($result){
            echo "<p>Data was submitted successfully </p>";
        }
        else {
            echo "<p>Failed to Submit data : ". mysqli_error($conn) . "</p>";
        }

        $stmt = close();
        $conn= close();
    };
    // $stmt = bindParam("isd");
    // $stmt=>execute();