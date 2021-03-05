<?php
// connection file
    include_once('connection.php');
	
	$sec=$_POST['section'];
    $id=$_POST['course'];
    $yurl=$_POST['yurl'];
	
	if(strcmp($sec,"SELECT SECTION")==0 || strcmp($id,"SELECT COURSE")==0){
		echo "SELECT SECTION/COURSE";
	}


    else{
		//insert values
		$sql = "INSERT INTO videos (Section, CourseId, URL)
		VALUES ('$sec', '$id', '$yurl')";

		if ($conn->query($sql) === TRUE) {
  		echo "New record created successfully";
		} else {
  			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
   
	$conn->close();
    
	?>
    