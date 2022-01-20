<?php
 $name = $_POST['inputName'];
 $contact = $_POST['inputcontact'];
 $basicDetails = $_POST['basicdetails'];
 $meetings = $_POST['meetingdate'];
 $time = $_POST['inputtime'];

//database
$conn = new mysqli('localhost','root','','shubham');
if($conn->connect_error){
    echo "$conn->connect_error";
    die('error'. $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into meetings(inputname, inputcontact, basicdetails, meetingDate,inputTime) values(?, ?, ?,?, ?)");
    $stmt->bind_param("sssss", $name, $contact, $basicDetails, $meetingDate, $time);
    $execval = $stmt->execute();
   
    $stmt->close();
    $conn->close();
}
?>