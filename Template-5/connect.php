 <?php
$servername = "localhost";
$username = "root";
$password = "";
$database="my_db";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if (mysqli_connect_error()) {
  die("Database connection failed: " . mysqli_connect_error());
}
else {
          
     $id= $_POST['id'];
     $fname=$_POST['fname'];
     $lname=$_POST['lname'];
     $email=$_POST['email'];
     $number=$_POST['number'];
     $address=$_POST['address'];
     $gender=$_POST['gender'];
     $country=$_POST['country'];
     $city=$_POST['city'];
     $state=$_POST['state'];
     $qualification=$_POST['qualification']; 
     $hobbies=$_POST['hobbies'];
     $pin=$_POST['pin'];
     $course=$_POST['course'];
     $dob=$_POST['dob'];


		$query = mysql_query("insert into prof (id,fname,lname,gender,email,number,address,country,city,state,pin,course,hobbies,dob,qualification) values(id,$fname,$lname,$gender,$email,$number,$address,$country,$city,$state,$pin,$course,$hobbies,$dob,$qualification)");
		echo "<br/><br/><span>Data Inserted successfully...!!</span>";
                                 }
		else{
		echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
		}
		}
		mysql_close($connection); // Closing Connection with Server
	?>

 

