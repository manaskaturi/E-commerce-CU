<?php

$con = mysqli_connect('localhost','manas','V1975@1m1m','users');
if(!$con){
    echo " connection failed";
}
else {
    echo "connection successful";
}
$fname = $_POST['firstname'];
$lname =$_POST['lastname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$query="INSERT INTO credentials (firstname,lastname,email,password) VALUES('$fname','$lname','$email','$pass')";
		
		$result=mysqli_query($con,$query);
        if(!mysqli_query($con,$query)) {
            echo mysqli_error($con);
        }

		if(!$result)
		{
			die("<br>Can't Insert Data : " .mysqli_connect_error());
		}
		echo "<script>alert('Successfully registered..!!');
                window.location='login1.html'</script>";

















?>