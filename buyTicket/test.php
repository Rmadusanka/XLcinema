<html>
<script>
    <script type="text/javascript">

</script>


<body>

<form id="member-registration" action="/register?task=registration.register" method="post" class="form-validate">
<table>
<tbody><tr>
    <td><div class="form_label"><label id="jform_title-lbl" for="jform_title" class="hasTip required" title="">Title :<span class="star">&nbsp;*</span></label></div></td>
    <td><div class="form_input"><select id="jform_title" name="jform[title]" class="required">
                <option value="Mr.">Mr.</option>
                <option value="Ms.">Ms.</option>
                <option value="Dr.">Dr.</option>
                <option value="Prof.">Prof.</option>
                <option value="Rev.">Rev.</option>
            </select>
        </div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="jform_name-lbl" for="jform_name" class="hasTip required" title="">First Name :<span class="star">&nbsp;*</span></label></div></td>
    <td><div class="form_input"><input type="text" name="jform[name]" id="jform_name" value="" class="required" size="30"></div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="jform_last_name-lbl" for="jform_last_name" class="hasTip required" title="">Last Name<span class="star">&nbsp;*</span></label></div></td>
    <td><div class="form_input"><input type="text" name="jform[last_name]" id="jform_last_name" value="" class="required" size="30"></div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="jform_gender-lbl" for="jform_gender" class="hasTip required" title="">Gender :<span class="star">&nbsp;*</span></label></div></td>
    <td><div class="form_input"><select id="jform_gender" name="jform[gender]" class="required">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div></td>
</tr>
<tr>
    <td><div class="form_label"><label>Date of Birth:</label><span class="star">&nbsp;*</span></div></td>
    <td><div class="form_input">
		<span>
  		<!--<select id="date" class="date">
    		<option value="1">1</option>
    		<option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
  		</select>
        </span>
        <span>
        <select class="month" name="month" id="month">
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select>
        </span>
        <span>
       	<select class="year" name="year" id="year">
            <option value="1988">1988</option>
            <option value="1989">1989</option>
            <option value="1990">1990</option>
            <option value="1991">1991</option>
            <option value="1992">1992</option>
            <option value="1993">1993</option>
            <option value="1994">1994</option>
            <option value="1995">1995</option>
            <option value="1996">1996</option>
            <option value="1997">1997</option>
            <option value="1998">1998</option>
            <option value="1999">1999</option>
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
            <option value="2006">2006</option>
            <option value="2007">2007</option>
            <option value="2008">2008</option>
            <option value="2009">2009</option>
            <option value="2010">2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
        </select> -->

        <select class="date" id="date" name="date">
            <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>        </select>

        <select class="month" id="month" name="month">
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select>

        <select class="year" id="year" name="year">
            <option value="1930">1930</option><option value="1931">1931</option><option value="1932">1932</option><option value="1933">1933</option><option value="1934">1934</option><option value="1935">1935</option><option value="1936">1936</option><option value="1937">1937</option><option value="1938">1938</option><option value="1939">1939</option><option value="1940">1940</option><option value="1941">1941</option><option value="1942">1942</option><option value="1943">1943</option><option value="1944">1944</option><option value="1945">1945</option><option value="1946">1946</option><option value="1947">1947</option><option value="1948">1948</option><option value="1949">1949</option><option value="1950">1950</option><option value="1951">1951</option><option value="1952">1952</option><option value="1953">1953</option><option value="1954">1954</option><option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option>        </select>
        </span>
            <script>
                function displayDateVals()
                {
                    var dateValues = $("#date").val();
                    var monthValues = $("#month").val();
                    var yearValues = $("#year").val();

                    var dobarray = [yearValues,monthValues,dateValues];
                    $("#jform_date_of_birth").val(dobarray);
                }

                $("select#date").change(displayDateVals);
                displayDateVals();
                $("select#month").change(displayDateVals);
                displayDateVals();
                $("select#year").change(displayDateVals);
                displayDateVals();

                //	function dateDifference(){
                //
                //		var yearValues = $("#year").val();
                //		var currentYear = (new Date).getFullYear();
                //		var reminder = 	(currentYear - yearValues)
                //
                //		if (reminder <= 18){
                //			alert('You are under Age');
                //			return false;
                //			}
                //			return true;
                //			}

            </script>


            <input type="hidden" name="jform[date_of_birth]" id="jform_date_of_birth" value="" class="required"><br><span class="small_text">(A person should be over 18 years of age at the date of registering)</span></div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="jform_nic_no-lbl" for="jform_nic_no" class="hasTip required" title="">National Identity Card No: <span class="star">&nbsp;*</span></label></div></td>
    <td><div class="form_input"><input type="text" name="jform[nic_no]" id="jform_nic_no" value="" class="required" size="30" maxlength="10"></div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="jform_address-lbl" for="jform_address" class="hasTip required" title="">Address: <span class="star">&nbsp;*</span></label></div></td>
    <td><div class="form_input"><input type="text" name="jform[address]" id="jform_address" value="" class="required" size="30"></div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="jform_city-lbl" for="jform_city" class="hasTip required" title="">City : <span class="star">&nbsp;*</span></label></div></td>
    <td><div class="form_input"><input type="text" name="jform[city]" id="jform_city" value="" class="required" size="30"></div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="jform_district-lbl" for="jform_district" class="hasTip required" title="">District :<span class="star">&nbsp;*</span></label></div></td>
    <td><div class="form_input"><select id="jform_district" name="jform[district]" class="required">
                <option value="Ampara">Ampara</option>
                <option value="Anuradhapura">Anuradhapura</option>
                <option value="Badulla">Badulla</option>
                <option value="Batticaloa">Batticaloa</option>
                <option value="Colombo">Colombo</option>
                <option value="Galle">Galle</option>
                <option value="Gampaha">Gampaha</option>
                <option value="Hambantota">Hambantota</option>
                <option value="Jaffna">Jaffna</option>
                <option value="Kalutara">Kalutara</option>
                <option value="Kandy">Kandy</option>
                <option value="Kegalle">Kegalle</option>
                <option value="Kilinochchi">Kilinochchi</option>
                <option value="Kurunegala">Kurunegala</option>
                <option value="Mannar">Mannar</option>
                <option value="Matale">Matale</option>
                <option value="Matara">Matara</option>
                <option value="Moneragala">Moneragala</option>
                <option value="Nuwara Eliya">Nuwara Eliya</option>
                <option value="Puttalam">Puttalam</option>
                <option value="Polonnaruwa">Polonnaruwa</option>
                <option value="Ratnapura">Ratnapura</option>
                <option value="Trincomalee">Trincomalee</option>
                <option value="Vavuniya">Vavuniya</option>
            </select>
        </div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="jform_mobile-lbl" for="jform_mobile" class="hasTip" title="">Mobile : </label></div></td>
    <td><div class="form_input"><input type="text" name="jform[mobile]" id="jform_mobile" value="" size="30" maxlength="12"></div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="jform_subscribe_sms-lbl" for="jform_subscribe_sms" class="hasTip" title="">Subscribe for SMS Alerts</label></div></td>
    <td><div class="form_input"><fieldset id="jform_subscribe_sms" class="radio"><input type="radio" id="jform_subscribe_sms0" name="jform[subscribe_sms]" value="1"><label for="jform_subscribe_sms0">Yes</label><input type="radio" id="jform_subscribe_sms1" name="jform[subscribe_sms]" value="0"><label for="jform_subscribe_sms1">No</label></fieldset><span class="small_text">(Enter your mobile number if you wish to receive ticket confirmation / updates via SMS – valid for limited operators)</span></div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="jform_contact_phone-lbl" for="jform_contact_phone" class="hasTip required" title="">Contact Phone Number: <span class="star">&nbsp;*</span></label></div></td>
    <td><div class="form_input"><input type="text" name="jform[contact_phone]" id="jform_contact_phone" value="" class="required" size="30" maxlength="12"></div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="jform_username-lbl" for="jform_username" class="hasTip required" title="">Username:<span class="star">&nbsp;*</span></label></div></td>
    <td><div class="form_input"><input type="text" name="jform[username]" id="jform_username" value="" class="validate-username required" size="30"><br><span class="small_text">(Minimum 6 characters)</span></div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="jform_password1-lbl" for="jform_password1" class="hasTip required" title="">Password:<span class="star">&nbsp;*</span></label></div></td>
    <td><div class="form_input"><input type="password" name="jform[password1]" id="jform_password1" value="" autocomplete="off" class="validate-password required" size="30"></div><span class="small_text">(Should be a minimum of 4 characters)</span></td>
</tr>
<tr>
    <td><div class="form_label"><label id="jform_password2-lbl" for="jform_password2" class="hasTip required" title="">Confirm Password:<span class="star">&nbsp;*</span></label></div></td>
    <td><div class="form_input"><input type="password" name="jform[password2]" id="jform_password2" value="" autocomplete="off" class="validate-password required" size="30"></div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="jform_email1-lbl" for="jform_email1" class="hasTip required" title="">Email Address:<span class="star">&nbsp;*</span></label></div></td>
    <td><div class="form_input"><input type="text" name="jform[email1]" class="validate-email required" id="jform_email1" value="" size="30"></div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="jform_email2-lbl" for="jform_email2" class="hasTip required" title="">Confirm email Address:<span class="star">&nbsp;*</span></label></div></td>
    <td><div class="form_input"><input type="text" name="jform[email2]" class="validate-email required" id="jform_email2" value="" size="30"></div></td>
</tr>
<tr>
    <td><div class="form_label"><label>Verification code:</label></div></td>
    <td><div class="form_input"> <label id="nums">1+7 =  </label>
            <input class="required" type="text" name="captchavalue" id="captchavalue" onchange="checkCapture()" value="">
        </div></td>
</tr>
<tr>
    <td><div class="form_label"><label id="jform_newsletter_subscribe-lbl" for="jform_newsletter_subscribe" class="hasTip" title="">Subscribe for Newsletter: </label></div></td>
    <td><div class="form_input"><fieldset id="jform_newsletter_subscribe" class="radio"><input type="radio" id="jform_newsletter_subscribe0" name="jform[newsletter_subscribe]" value="1"><label for="jform_newsletter_subscribe0">Yes</label><input type="radio" id="jform_newsletter_subscribe1" name="jform[newsletter_subscribe]" value="0" checked="checked"><label for="jform_newsletter_subscribe1">No</label></fieldset></div></td>
</tr>
<tr>
    <td></td>
    <td><span id="ValidCheckbox"><input type="checkbox" name="termscond" id="rg_termscond">
          <span class="agree">I Agree to <a href="http://eapmovies.com/index.php?option=com_content&amp;view=article&amp;layout=edit&amp;id=45&amp;Itemid=124">Terms &amp; Conditions</a></span></span></td>
</tr>
<tr>
    <td></td>
    <td><div id="register-button"><button id="account-register" type="submit">Submit</button></div></td>
    <input type="hidden" name="option" value="com_users">
    <input type="hidden" name="task" value="registration.register">
    <input type="hidden" name="c38d51c6fffd2262c59b9398c7a71b94" value="1">        </tr>
</tbody></table>
</form>
</body>
</html>