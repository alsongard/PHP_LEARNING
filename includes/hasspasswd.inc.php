<?php

$salt = bin2hex(random_bytes(16));

$pepper = "StringToBeUsed";

$sensitiveData = "Dragon of Love";

$dataToHash =  $sensitiveData . $salt . $pepper;

echo $salt;
echo "<br>" . $pepper;
echo "<br>" . $sensitiveData;


$hash = hash("sha256", $dataToHash);

echo "<br>" . $hash;


//Confirm Verification

$storedSalt = $salt;
$storedPeper = $pepper;
$storedSensitiveData = "Dragon of Love";

$storedDataToHash =  $storedSensitiveData. $storedSalt . $storedPeper;
$storedHash = hash("sha256", $storedDataToHash);
echo "<br>" . $storedHash;
if ($storedHash === $hash)
{
    echo "<br>" . "<p>Correct Password";
}
else
{
    echo "<br>" . "<p>Wrong password</p>";
}