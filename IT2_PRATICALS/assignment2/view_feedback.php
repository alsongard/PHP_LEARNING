<?php

    $conn = new mysqli("localhost", "root", "", "campaign_feedback");

    //MySQLi object oriented displaying errors
    if($conn->connect_errno)
    {
        echo "CONNECTION FAILED: ". $conn->connect_error;
        die();
    }

    $candidateName = $_POST["candidate"];

    if(empty($candidateName)){
        echo "<p class='error'>Enter name of a candidate</p>";
        die();
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $sql = "SELECT * FROM feedback WHERE fname = '$candidateName';";

        $result = $conn->query($sql);

        if ($result->num_rows > 0)
        {
            while ($row = $result->fetch_assoc()){
                echo "Id : ". $row["id"] . "<br>" . "Candidate Name ". $row["fname"] . "<br> UserEmail ". $row["email"] . "<br> Feedback: ". $row["feedback"]. "<br> Rating ". $row["rating"];
            }
        }
        else{
            echo '<p class="view-message"> 0 results</p>';
        }
    }




    