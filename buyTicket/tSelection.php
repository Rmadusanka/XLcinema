

<!DOCTYPE HTML>
<html>
<head>
    <title>Excel Cinema</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



</head>
<body>




<br><br>
<form method="post" action="" name="form1">
    <table width="60%" border="0" cellspacing="0" cellpadding="0">

        <tr>
            <td width="150">Select Theater</td>
            <td  width="150"><select name="theater" onChange="getMovie(this.value)">
                    <option value="">Select Theater</option>
                    <option value="1">Savoy-2-Wallawatta</option>
                    <option value="2">Savoy-3D-Wallawatta</option>
                    <option value="3">Nikado-Kadawata</option>
                </select></td>
        </tr>
        <tr style="">
            <td>Select Movie</td>
            <td ><div id="moviediv">
                    <select name="movie" onChange="getShowtime(this.value)">
                        <option>Select Movie</option>
                    </select>
                </div></td>
        </tr>

        <!--get show time -->
        <tr style="">
            <td>Select Show Time</td>
            <td ><div id="showtimediv">
                    <select name="showtime">
                        <option>Select Show time</option>
                    </select>
                </div></td>
        </tr>


        <tr style="">
            <td>Select Date</td>
            <td ><div id="selectDate">
                    <input type="datetime-local" name="pickup_time">
                </div></td>
        </tr>





        <tr>
            <td width="150">Select Category</td>
            <td  width="150"><select name="theater">
                    <option value="">Select Category</option>
                    <option value="1">ODC BOX</option>
                    <option value="2">ODC</option>
                    <option value="3">Balcony BOX</option>
                </select></td>
        </tr>

        <tr>
            <td width="150">No Of Seats/ Boxes</td>
            <td  width="150"><select name="noSeats">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select></td>
        </tr>

        <tr>
            <td width="150">Number Of Full Tickets</td>
            <td  width="150"><select name="nofTickets">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select></td>
        </tr>

        <tr>
            <td width="150">No Of Half Tickets</td>
            <td  width="150"><select name="nohTickets">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select></td>
        </tr>










        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>

        <tr>
            <td></td>
            <td>
            <button name="next1"><a href="selectPreferences.php"/> Next</button>
            </td>
         </tr>

    </table>
</form>

<br><br>
<script>
    var obj;
    var obj2;



    function checkBrowser() {
        if (window.XMLHttpRequest) {
            obj = new XMLHttpRequest();
        } else {
            obj = new ActiveXobject("Microfoft.ActiveXobject");
        }
    }

    function checkBrowser2() {
        if (window.XMLHttpRequest) {
            obj2 = new XMLHttpRequest();
        } else {
            obj2 = new ActiveXobject("Microfoft.ActiveXobject");
        }
    }


    function getMovie(strURL) {
        checkBrowser();

        obj.onreadystatechange = function() {

            //alert(obj.responseText);
            //  alert(strURL);
            if (obj.readyState === 4 && obj.status === 200) {

                var text = obj.responseText;

                //alert(obj.responseText);

                document.getElementById('moviediv').innerHTML = text;


            }
        };
        obj.open("POST", "findMovie.php", true);
        obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        obj.send("url=" + strURL);
    }

    //get show time
    function getShowtime(strURL) {
        checkBrowser2();

        obj2.onreadystatechange = function() {

            //alert(obj.responseText);
            //  alert(strURL);
            if (obj2.readyState === 4 && obj2.status === 200) {

                var textt = obj2.responseText;

                //alert(obj.responseText);

                document.getElementById('showtimediv').innerHTML = textt;


            }
        };
        obj2.open("POST", "findShowtime.php", true);
        obj2.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        obj2.send("url=" + strURL);
    }
</script>





</body>
</html>