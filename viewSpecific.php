<?php
// connection file
    include_once('connection.php');
	
	$sect=$_POST['section'];
    $cid=$_POST['course'];
    // fire query
    $sql = "SELECT URL FROM videos WHERE Section='".$sect."' AND CourseId='".$cid."'";
    $result=$conn->query($sql);
    $b=0;
    if($result->num_rows > 0)
    {
        echo "SECTION-".$sect."<br><br>";
        echo "COURSE ID-".$cid."<br><br>";
        while($row=$result->fetch_assoc())
        {
            $yurl=$row['URL'];
            // complete youtube url
            $yurl="https://www.youtube.com/embed/".$yurl;
            if($b==4)
                echo "<br";
            echo "<iframe width=". 290 ."px src=".$yurl."></iframe>";
            $b++;
        }
    }
    else{
        echo "NO RESULTS FOUND";
    }
	$conn->close();
    
?>
    