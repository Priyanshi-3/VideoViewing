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
        <!-- submit form -->
        <form action="insert.php" method="POST" name="form" id="form">
            <label>SECTION:</label>
            <select name="section" id="section" required selected="selected">
                <option>SELECT SECTION</option>  
            </select><br>
            <label>COURSE ID:</label>
            <select name="course" id="course" required selected="selected">
                <option>SELECT COURSE</option>   
            </select><br>
            <label>YOUTUBE (SHORTHAND) URL:</label>
            <input type="text" name="yurl" id="yurl" required reset><br>
            <input type="submit" name="submit" id="submit"> 
        </form>
        <form action="view.php">
            <input type="submit" name="view" id="view" value="view">
        </form>
    </body>
</html>