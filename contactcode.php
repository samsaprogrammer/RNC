<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace these values with your actual API credentials and other details
    $user = 'BRIJESH';
    $key = '066c862acdXX';
    $senderId = 'UPDSMS';
    $entityId = '1201159543060917386';
    $tempId = '1207169476099469445';

    $name=$_POST['name'];
    //echo $name;
    $email=$_POST['email'];
    //echo $email;
    $mobile=$_POST['number'];
    //echo $mobile;
    $message=$_POST['message'];
    //echo $message;
    // Compose the SMS message
    $smsMessage = "Thanks for enquiry we will contact you soon.
    
    -Bulk SMS";
    // Prepare API data
    $apiData = "user=$user&key=$key&mobile=$mobile&message=$smsMessage&senderid=$senderId&accusage=1&entityid=$entityId&tempid=$tempId";
    // API URL
    $apiUrl = "http://sms.bulkssms.com/submitsms.jsp?";
    // Initialize cURL
    $ch = curl_init($apiUrl);
    // Set cURL options
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $apiData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // Execute cURL and close
    $output = curl_exec($ch);
    curl_close($ch);

    // Display API response
    // Process the API response (you can add error handling here)

    //print_r($output);
    include("admin/connection.php");
$query="insert into tbl_contact (name,email,mobile,message,status,doc) VALUES ('$name', '$email', '$mobile', '$message','Y',curdate() )";
mysqli_query($con,$query);
header("Location:contact.php?msg=1");
}
else 
{
    // Redirect to the form if accessed directly
    header("Location:index.php");
    exit();
}