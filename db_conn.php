<?php 
  
$conn = mysqli_connect('localhost','manas','V1975@1m1m','users');
if($conn){
    echo "connection successful";
}
else {
    echo "connection failed";
}



?>