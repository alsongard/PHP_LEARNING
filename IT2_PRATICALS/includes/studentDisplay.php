<?php

    $conn = new mysqli("localhost", "root", "", "phpLearning");
    if ($_SERVER["REQUEST_METHOD"] === "POST"){

        $sql = "SELECT * FROM studentRegistration";

        $result = $conn->query($sql);
        if ($result){
            "echo <p>Fetched the data successfull</p>";

            if ($result->num_rows > 0)
            {
                while ($row = $result->fetch_assoc()){
                    echo "<table style='border-collapse: collapse;  border: 1px solid'>
                            <tr style='border: 1px solid'>
                                <th style='border: 1px solid'>Student Registration Number</th>
                                <th style='border: 1px solid'>Student Name </th>
                                <th style='border: 1px solid'>Date of Submission</th>
                            </tr>
                            <tr style='border: 1px solid'>
                                <td style='border: 1px solid'> ". $row["idNumber"] . "</td>
                                <td style='border: 1px solid'> ". $row["studentName"]. "</td>
                                <td style='border: 1px solid'> " .  $row["dateSubmittin"]. " </td>
                            </tr>
                    
                    </table>";
                }
            }
            else{
                echo '<p class="view-message"> 0 results</p>';
            }
        }
    }