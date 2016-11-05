<html>
<head>
    <title>Roshan's Ajax dropdown code</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <?
    #### Roshan's Ajax dropdown code with php
    #### Copyright reserved to Roshan Bhattarai - nepaliboy007@yahoo.com
    #### if you have any problem contact me at http://roshanbh.com.np
    #### fell free to visit my blog http://php-ajax-guru.blogspot.com
    ?>




</head>

<body>

<form method="post" action="" name="form1">
    <table width="60%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="150">Country</td>
            <td  width="150"><select name="country" onChange="getCity(this.value)">
                    <option value="">Select Country</option>
                    <option value="1">USA</option>
                    <option value="2">CHINA</option>
                </select></td>
        </tr>
        <tr style="">
            <td>City</td>
            <td ><div id="citydiv">
                    <select name="city">
                        <option>Select City</option>
                    </select>
                </div></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>
</form>
</body>
</html>
<script>
    var obj;



    function checkBrowser() {
        if (window.XMLHttpRequest) {
            obj = new XMLHttpRequest();
        } else {
            obj = new ActiveXobject("Microfoft.ActiveXobject");
        }
    }

    function getCity(strURL) {
        checkBrowser();

        obj.onreadystatechange = function() {

            //alert(obj.responseText);
            //  alert(strURL);
            if (obj.readyState === 4 && obj.status === 200) {

                var text = obj.responseText;

                //alert(obj.responseText);

                document.getElementById('citydiv').innerHTML = text;


            }
        };
        obj.open("POST", "findcity.php", true);
        obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        obj.send("url=" + strURL);
    }
</script>