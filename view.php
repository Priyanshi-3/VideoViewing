<!DOCTYPE html>
<html>
    <head>
        <script>
            // store values for cascading dropbox
            var sectionCourse = {
                    "I": [
                            "112",
                            "113"   
                        ],
                    "II": [
                            "221",
                            "223"
                        ],
                    "III": [
                            "331",
                            "322"
                            ],
                    "IV": [
                            "442",
                            "448"
                        ]
            }
            // function called when page loads
            window.onload = function() {
                var sectionSel = document.getElementById("section");
                //   define values in section dropbox
                for (var x in sectionCourse) {
                    sectionSel.options[sectionSel.options.length] = new Option(x, x);
                }
                //   function called when section dropbox value changes
                sectionSel.onchange = function() {
                    var courseSel = document.getElementById("course");
                    // length is set to unity
                    courseSel.length = 1;
                    var z = sectionCourse[this.value];
                    //   define values in course dropbox
                    for (var i = 0; i < z.length; i++) {
                        courseSel.options[courseSel.options.length] = new Option(z[i], z[i]);
                    }
                }
            }
        </script>

    </head>
    <body>
   
        <form action="viewSpecific.php" method="POST" name="form" id="form">
            <label>SECTION:</label>
            <select name="section" id="section" required selected="selected">
                <option>SELECT SECTION</option>
            </select>
            <label>COURSE ID:</label>
            <select name="course" id="course" required selected="selected">
                <option>SELECT COURSE</option>
            </select>
            <input type="submit" id="submit" name="submit" >
        </form>
    </body>
</html>
<?php
// connection file
    include_once('connection.php');
	$sql = "SELECT Section, CourseId, URL FROM videos
        ORDER BY Section, CourseId";
    $result=$conn->query($sql);
    $t1=0;$t11=0;$t12=0;$t2=0;$t21=0;$t22=0;$t3=0;$t31=0;$t32=0;$t4=0;$t41=0;$t42=0;$b1=0;$b2=0;$b3=0;$b4=0;
    echo "<br><br>";
    // display all the stored videos
    if($result->num_rows > 0)
    {
        while($row=$result->fetch_assoc())
        {
            $yurl=$row['URL'];
            // complete youtube video path
            $yurl="https://www.youtube.com/embed/".$yurl;
            if(strcmp($row['Section'],"I")==0)
            {
                if($t1==0)
                {
                    echo "<br>SECTION-I<br>";
                    $t1=1;
                }
                if(strcmp($row['CourseId'],"112")==0)
                {
                    if($t11==0)
                    {
                        echo "<br>COURSE-112<br>";
                        $t11=1;
                    }
                }
                else if(strcmp($row['CourseId'],"113")==0)
                {
                    if($t12==0)
                    {
                        echo "<br>COURSE-113<br>";
                        $t12=1;
                    }
                    
                }
                if($b1==4)
                echo "<br";
                echo "<iframe width=". 290 ."px src=".$yurl."></iframe>";
                $b1++;

            }
            else if(strcmp($row['Section'],"II")==0)
            {
                if($t2==0)
                {
                    echo "<br>SECTION-II<br>";
                    $t2=1;
                }
                if(strcmp($row['CourseId'],"221")==0)
                {
                    if($t21==0)
                    {
                        echo "<br>COURSE-221<br>";
                        $t21=1;
                    }
               }
                else if(strcmp($row['CourseId'],"223")==0)
                {
                    if($t22==0)
                    {
                        echo "<br>COURSE-223<br>";
                        $t22=1;
                    }
                    
                }
                if($b2==4)
                echo "<br";
                echo "<iframe width=". 290 ."px src=".$yurl."></iframe>";
                $b2++;

            }
            else if(strcmp($row['Section'],"III")==0)
            {
                if($t3==0)
                {
                    echo "<br>SECTION-III<br>";
                    $t3=1;
                }
                if(strcmp($row['CourseId'],"331")==0)
                {
                    if($t31==0)
                    {
                        echo "<br>COURSE-331<br>";
                        $t31=1;
                    }
                    
                }
                else if(strcmp($row['CourseId'],"322")==0)
                {
                    if($t32==0)
                    {
                        echo "<br>COURSE-332<br>";
                        $t32=1;
                    }
                    
                }
                if($b3==4)
                echo "<br";
                echo "<iframe width=". 290 ."px src=".$yurl."></iframe>";
                $b3++;

            }
            else if(strcmp($row['Section'],"IV")==0)
            {
                if($t4==0)
                {
                    echo "<br>SECTION-IV<br>";
                    $t4=1;
                }
                if(strcmp($row['CourseId'],"442")==0)
                {
                    if($t41==0)
                    {
                        echo "<br>COURSE-442<br>";
                        $t41=1;
                    }
                    
                }
                else if(strcmp($row['CourseId'],"448")==0)
                {
                    if($t42==0)
                    {
                        echo "<br>COURSE-448<br>";
                        $t42=1;
                    }
                    
                }
                if($b4==4)
                echo "<br";
                echo "<iframe width=". 290 ."px src=".$yurl."></iframe>";
                $b4++;

            }
        }
    }

	$conn->close();
?>
    