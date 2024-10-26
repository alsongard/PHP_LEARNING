<?php

    // creating a connection using MySQLI Object Oriented
    $conn = new mysqli("localhost", "root","", "campaign_feedback");
    if ($conn->connect_errno){
        echo ("Connection failed : ".$conn->connect_error);
        die();
    }

    $candidataName  = $_POST["fullName"];
    $userEmail = $_POST["email"];
    $candidateFeedBack = $_POST["feedback"];
    $candidateRank = $_POST["rank"];


    if (empty($candidataName) || empty($candidateFeedBack) || empty($candidateRank) || empty($userEmail))
    {
        echo '<p class="erro">Enter all fields</p>';
        die();
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST")
    {
        $stmt = $conn->prepare("INSERT INTO feedback (fname, email, feedback, rating) VALUES (?, ?, ?, ?);");

        $stmt->bind_param("sssi",$candidataName, $userEmail, $candidataName, $candidateRank);
        $stmt->execute();
        echo "<p>Records successfully added</p>";
    }
    else{
        header("Location: feedback_form.html");
        die();
    }