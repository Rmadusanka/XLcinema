
<div class="row">
<div class="login-form" style="height: auto">
 
    <div class="row">
        <br>
        <h1 style="margin-left: 140px ;font-size: large;color: #cd0000"><b>Make your Selection</b></h1>

    </div>




    <form method="post" id ="form" action="" name="form1">
        <fieldset id="first" class="my-fieldset">
            <div class="container-form">



            <div class="col-md-5">Select Movie :</div>
            <div class="col-md-7">
            <li >

                        <select name="movie" >
                            <option>Select Movie</option>
                            <option>Maya</option>
                            <option>Address Na</option>
                            <option>Sayapethi kusuma</option>
                            <option>Sakura</option>
                        </select>

            </li>
                </div>

            <!--get show time -->

            <div class="col-md-5">Select Show Time :</div>
            <div  class="col-md-7">
            <li>
                        <select name="showtime">
                            <option>Select Show time</option>
                            <option>10.30 AM</option>
                            <option>12.30 PM</option>
                            <option>2.30 PM</option>
                            <option>4.30 PM</option>
                            <option>7.00 PM</option>
                        </select>

            </li>
                </div>

            <div class="col-md-5">Select Date :</div>
            <div class="col-md-7">
            <li>
                <input type="datetime-local" name="pickup_time">

            </li>
            </div>





            <div class="col-md-5">Select Category</div>
            <div class="col-md-7">
                <li>
                <select name="theater">
                        <option value="">Select Category</option>
                        <option value="1">ODC BOX</option>
                        <option value="2">ODC</option>
                        <option value="3">Balcony BOX</option>
                    </select></li>
            </div>

            <div class="col-md-5">No Of Seats/ Boxes :</div>
            <div class="col-md-7">
                <li>
                <select name="noSeats">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select></li>
            </div>
                <div class="col-md-5">Select Booking Side :</div>
                <div class="col-md-7">
                    <li>
                        <select name="noSeats">
                            <option value="1">Left</option>
                            <option value="2">Center</option>
                            <option value="3">Right</option>

                        </select></li>
                </div>

                <div class="col-md-5">Select Row Nu : </div>
                <div class="col-md-7">
                    <li>
                        <select name="noSeatsRow">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="6">7</option>
                            <option value="6">8</option>
                            <option value="6">9</option>
                            <option value="6">10</option>
                            <option value="6">11</option>
                            <option value="6">12</option>

                        </select></li>
                </div>



            <div class="col-md-5">Number Of Full Tickets</div>
            <div class="col-md-7">
                <li>
                <select name="nofTickets">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select></li>
            </div>

            <div class="col-md-5">No Of Half Tickets</div>
            <div class="col-md-7">
                <li>
                <select name="nohTickets">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select></li>
            </div>





                   <!-- <button style="margin-left: auto"><a href="selectPreferences.php"/> Previous</button>
                    <button style="margin-left: 350px"><a href="selectPreferences.php"/> Next</button>-->

            <div class="form-group ">
                <input type="button" id="next_btn1"  class="my-button next-btn-1 " value="Next >" onclick="next_step1()" /></br>
            </div>

            </fieldset>

        <fieldset id="second" class="my-fieldset">
            <div class="col-md-5">No Of Half Tickets</div>
            <div class="col-md-7">
                <li>
                    <select name="nohTickets">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select></li>
            </div>
            <div class="col-md-5">No Of Half Tickets</div>
            <div class="col-md-7">
                <li>
                    <select name="nohTickets">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select></li>
            </div>

            <div class="form-group">
                <input type="button" id="pre_btn1"  class="my-button  prev-btn-2 " value="< Previous" onclick="prev_step1()"/>
                <input type="button" name="next" class="my-button next-btn-2" id="next_btn2" value="Next >" onclick="next_step2()" />
            </div>


            </fieldset>

        <fieldset id="third" class="my-fieldset">

            <div class=" col-xs-8">
                <input type="button" id="pre_btn2" class="prev-btn-3 my-button" value="< Previous" onclick="prev_step2()"/>
                </div>
            </fieldset>




    </form>
    </div>
</div>
</div>


