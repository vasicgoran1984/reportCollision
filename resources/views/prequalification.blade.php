@extends('main')

@section('content')

    <div class="container-fluid" style="background-image: linear-gradient(#0086a6,#002836); background-size: cover; min-height: 100vh;">
        <div class="row ps-md-2 pe-md-2 ps-1 pe-1 bg-white">
            <div class="col-md-6 col-4 float-start p-md-1 pe-0">

            </div>
            <div class="col-md-6 col-8 float-start p-md-1 ps-0"></div>
        </div>
        <main role="main">
            <div class="container pb-4">
            <form action="/Report/PrequalificationPost" method="post" id="PreQuaForm">
                <div class="row">

                    <div class="col-12 p-3 pt-4">
                        <div class="card">
                            <div class="card-body">
                                    <h2 class="sfh-heading"><b><i class="bi bi-ui-checks"></i> Prequalification</b></h2>
                                <span>Provide the following information about you and the collision to determine your eligibility.</span>
                                <hr>
                            

                                    <input name="__RequestVerificationToken" type="hidden" value="CfDJ8Py7Y-13A-RDoivckhA_F8ZIb74bk4Ocdc98bb1MIu7TA1spCCnGmZ-KzjgEKvBEeIHwpHf0tAx3WXXDTx9lMtm8Z2Oa2A5uh6YrrNOYw-sa3r-vXmbVTHhiiiPkfhlYJLlDgeq0Qp8OY1p6IXscM-c">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="alert alert-primary" role="alert">
                                                If your collision occurred more than 60 days ago, please report directly to the local Collision Reporting Center.
                                            </div>
                                        </div>
                                        <div class="col-xl-5 col-12 pb-lg-3 pt-2 pt-lg-2">
                                            <h6><b>I am reporting as a<span class="text-danger">&nbsp;*</span></b></h6>

                                            <input type="radio" class="btn-check ReportType" name="ReportType" id="ReportType1" value="1" autocomplete="off" required="">
                                            <label class="btn btn-outline-dark mt-1" for="ReportType1"><i class="bi bi-car-front-fill"></i> Driver</label>

                                            <input type="radio" class="btn-check ReportType" name="ReportType" id="ReportType2" value="2" autocomplete="off" required="">
                                            <label class="btn btn-outline-dark mt-1" for="ReportType2"><i class="bi bi-person-walking"></i> Pedestrian</label>

                                            <input type="radio" class="btn-check ReportType" name="ReportType" id="ReportType3" value="3" autocomplete="off" required="">
                                            <label class="btn btn-outline-dark mt-1" for="ReportType3"><i class="bi bi-bicycle"></i> Cyclist</label>

                                        </div>
                                        <div class="col-xl-3 col-12 pb-lg-3 pt-4 pt-lg-2">
                                            <h6><b>Accident Date<span class="text-danger">&nbsp;*</span></b></h6>
                                            <div class="col-12 float-start">
                                                <input type="date" class="form-control mt-1" id="AccidentDate" name="AccidentDate" min="2024-05-31" max="2024-08-29" required="">
                                            </div>
                                        
                                        </div>
                                        <div class="col-xl-3 col-12 pb-lg-3 pt-4 pt-lg-2">
                                            <h6><b>Accident Time<span class="text-danger">&nbsp;*</span></b></h6>
                                            <div class="col-4 float-start pe-1">
                                                <select name="AccidentHour" class="form-select col-4 mt-1" required="">
                                                    <option disabled="" value="" selected="">--</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                            </div>
                                            <div class="col-4 float-start pe-1">
                                                <select name="AccidentMinute" class="form-select col-4 mt-1" required="">
                                                    <option disabled="" value="" selected="">--</option>
                                                    <option value="00">00</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
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
                                                    <option value="32">32</option>
                                                    <option value="33">33</option>
                                                    <option value="34">34</option>
                                                    <option value="35">35</option>
                                                    <option value="36">36</option>
                                                    <option value="37">37</option>
                                                    <option value="38">38</option>
                                                    <option value="39">39</option>
                                                    <option value="40">40</option>
                                                    <option value="41">41</option>
                                                    <option value="42">42</option>
                                                    <option value="43">43</option>
                                                    <option value="44">44</option>
                                                    <option value="45">45</option>
                                                    <option value="46">46</option>
                                                    <option value="47">47</option>
                                                    <option value="48">48</option>
                                                    <option value="49">49</option>
                                                    <option value="50">50</option>
                                                    <option value="51">51</option>
                                                    <option value="52">52</option>
                                                    <option value="53">53</option>
                                                    <option value="54">54</option>
                                                    <option value="55">55</option>
                                                    <option value="56">56</option>
                                                    <option value="57">57</option>
                                                    <option value="58">58</option>
                                                    <option value="59">59</option>
                                                </select>
                                            </div>
                                            <div class="col-4 float-start ps-md-1">
                                                <select name="AccidentAMPM" class="form-select col-4 mt-1" required="">
                                                    <option disabled="" value="" selected="">--</option>
                                                    <option value="AM">AM</option>
                                                    <option value="PM">PM</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <br>
                                            <h6><b>Were you injured?<span class="text-danger">&nbsp;*</span></b></h6>
                                            <input type="radio" class="btn-check" name="IsInjured" id="IsInjured1" value="true" autocomplete="off" required="">
                                            <label class="btn btn-outline-dark" for="IsInjured1">Yes</label>
                                            <input type="radio" class="btn-check" name="IsInjured" id="IsInjured0" value="false" autocomplete="off" required="">
                                            <label class="btn btn-outline-dark" for="IsInjured0">No</label>
                                        </div>
                                        <div id="HasDriverLicenceDiv" class="col-md-6 col-12" style="display: none;">
                                            <br>
                                            <h6><b>Do you have a driver's licence?<span class="text-danger">&nbsp;*</span></b></h6>
                                            <input type="radio" class="btn-check" name="HasDriverLicence" id="HasDriverLicence1" value="true" autocomplete="off">
                                            <label class="btn btn-outline-dark" for="HasDriverLicence1">Yes</label>
                                            <input type="radio" class="btn-check" name="HasDriverLicence" id="HasDriverLicence0" value="false" autocomplete="off">
                                            <label class="btn btn-outline-dark" for="HasDriverLicence0">No</label>
                                        </div>
                                    
                                    </div>
                                    <div class="row">
                                        <div id="NumberOfVehiclesDiv" class="col-7" style="display: none;">
                                            <br>
                                            <h6 id="HowManyInvolvedDriver"><b>How many vehicles were involved in this collision (excluding your vehicle)?<span class="text-danger">&nbsp;*</span></b></h6>
                                            <h6 id="HowManyInvolvedPedCyclist" style="display: none;"><b>How many vehicles were involved in this collision?<span class="text-danger">&nbsp;*</span></b></h6>
                                            <select id="NumberOfVehicles" name="NumberOfVehicles" class="form-select w-auto" required="">
                                                <option disabled="" value="" selected="">--</option>
                                                <option id="NumberOfVehicles0" value="0">0</option>
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
                                            </select>
                                        </div>
                                        <div id="DidYouStrikePedestrianCyclistDiv" class="col-5" style="display: none;">
                                            <br>
                                            <h6><b>Did you strike a pedestrian or cyclist?<span class="text-danger">&nbsp;*</span></b></h6>
                                            <input type="radio" class="btn-check HitPedestrianOrCyclist" name="HitPedestrianOrCyclist" id="HitPedestrianOrCyclist1" value="true" autocomplete="off">
                                            <label class="btn btn-outline-dark" for="HitPedestrianOrCyclist1">Yes</label>
                                            <input type="radio" class="btn-check HitPedestrianOrCyclist" name="HitPedestrianOrCyclist" id="HitPedestrianOrCyclist0" value="false" autocomplete="off">
                                            <label class="btn btn-outline-dark" for="HitPedestrianOrCyclist0">No</label>
                                            <input type="radio" class="btn-check HitPedestrianOrCyclist" name="HitPedestrianOrCyclist" id="HitPedestrianOrCyclist0" value="false" autocomplete="off">
                                            <label class="btn btn-outline-dark" for="HitPedestrianOrCyclist0">No</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div id="PassengersDiv" class="col-6" style="display: none;">
                                            <br>
                                            <h6><b>Were there any passengers in the vehicle?<span class="text-danger">&nbsp;*</span></b></h6>
                                            <input type="radio" class="btn-check Passengers" name="Passengers" id="Passengers1" value="true" autocomplete="off" required="">
                                            <label class="btn btn-outline-dark" for="Passengers1">Yes</label>
                                            <input type="radio" class="btn-check Passengers" name="Passengers" id="Passengers0" value="false" autocomplete="off" required="">
                                            <label class="btn btn-outline-dark" for="Passengers0">No</label>

                                        </div>
                                        <div id="PassengersCountDiv" class="col-6" style="display: none;">
                                            <br>
                                            <h6><b>How many passengers?<span class="text-danger">&nbsp;*</span></b></h6>
                                            <select id="PassengersCount" name="PassengersCount" class="form-select w-auto" required="">
                                                <option disabled="" value="" selected="">--</option>
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
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div id="CyclistsDiv" class="col-6" style="display: none;">
                                            <br>
                                            <h6><b>Were there any cyclists involved?<span class="text-danger">&nbsp;*</span></b></h6>
                                            <input type="radio" class="btn-check Cyclists" name="Cyclists" id="Cyclists1" value="true" autocomplete="off" required="">
                                            <label class="btn btn-outline-dark" for="Cyclists1">Yes</label>
                                            <input type="radio" class="btn-check Cyclists" name="Cyclists" id="Cyclists0" value="false" autocomplete="off" required="">
                                            <label class="btn btn-outline-dark" for="Cyclists0">No</label>

                                        </div>
                                        <div id="CyclistsCountDiv" class="col-6" style="display: none;">
                                            <br>
                                            <h6><b>How many cyclists?<span class="text-danger">&nbsp;*</span></b></h6>
                                            <select id="CyclistsCount" name="CyclistsCount" class="form-select w-auto" required="">
                                                <option disabled="" value="" selected="">--</option>
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
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div id="PedestriansDiv" class="col-6" style="display: none;">
                                            <br>
                                            <h6><b>Were there any pedestrians involved?<span class="text-danger">&nbsp;*</span></b></h6>
                                            <input type="radio" class="btn-check Pedestrians" name="Pedestrians" id="Pedestrians1" value="true" autocomplete="off" required="">
                                            <label class="btn btn-outline-dark" for="Pedestrians1">Yes</label>
                                            <input type="radio" class="btn-check Pedestrians" name="Pedestrians" id="Pedestrians0" value="false" autocomplete="off" required="">
                                            <label class="btn btn-outline-dark" for="Pedestrians0">No</label>

                                        </div>
                                        <div id="PedestriansCountDiv" class="col-6" style="display: none;">
                                            <br>
                                            <h6><b>How many pedestrians?<span class="text-danger">&nbsp;*</span></b></h6>
                                            <select id="PedestriansCount" name="PedestriansCount" class="form-select w-auto" required="">
                                                <option disabled="" value="" selected="">--</option>
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
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <br>
                                            <h6><b>Were there any witnesses?<span class="text-danger">&nbsp;*</span></b></h6>
                                            <input type="radio" class="btn-check Witnesses" name="Witnesses" id="Witnesses1" value="true" autocomplete="off" required="">
                                            <label class="btn btn-outline-dark" for="Witnesses1">Yes</label>
                                            <input type="radio" class="btn-check Witnesses" name="Witnesses" id="Witnesses0" value="false" autocomplete="off" required="">
                                            <label class="btn btn-outline-dark" for="Witnesses0">No</label>

                                        </div>
                                        <div id="WitnessesCountDiv" class="col-6" style="display: none;">
                                            <br>
                                            <h6><b>How many witnesses?<span class="text-danger">&nbsp;*</span></b></h6>
                                            <select id="WitnessesCount" name="WitnessesCount" class="form-select w-auto" required="">
                                                <option disabled="" value="" selected="">--</option>
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
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div id="FailToRemainDiv" class="col-12" style="display: none;">
                                            <hr>
                                            <h6><b>Did the other driver fail to remain at the accident?<span class="text-danger">&nbsp;*</span></b></h6>
                                            <input type="radio" class="btn-check" name="FailToRemain" id="FailToRemain1" value="true" autocomplete="off">
                                            <label class="btn btn-outline-dark" for="FailToRemain1">Yes</label>
                                            <input type="radio" class="btn-check" name="FailToRemain" id="FailToRemain0" value="false" autocomplete="off">
                                            <label class="btn btn-outline-dark" for="FailToRemain0">No</label>
                                        </div>
                                        
                                    </div>

                            
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pt-2">

                        <a href="/Report/NavigateBack/2" class="btn btn-lg btn-secondary w-100 bg-sfh-maroon float-start w-auto"> <i class="bi bi-arrow-left-circle"></i> Back</a>
                        <button type="submit" class="btn btn-lg btn-success w-100 bg-sfh-green float-end w-auto">Next <i class="bi bi-arrow-right-circle"></i></button>
                    </div>
                </div>
            </form>
        </div>
        </main>
    </div>
@endsection

<script>

    $("#ReportType1").change(function() {
        $("#NumberOfVehiclesDiv").show();
        $("#HowManyInvolvedPedCyclist").hide();
        $("#HowManyInvolvedDriver").show();
        $("#PassengersDiv").show();
        $("#CyclistsDiv").show();
        $("#PedestriansDiv").show();
        $("#CyclistsDiv").show();
        $("#FailToRemainDiv").hide();
    });

    $("#Passengers1").change(function() {
        $("#PassengersCountDiv").show();
    });

    $("#Passengers0").change(function() {
        $("#PassengersCountDiv").hide();
    });

    
    $("#Cyclists1").change(function() {
        $("#CyclistsCountDiv").show();
    });

    $("#Cyclists0").change(function() {
        $("#CyclistsCountDiv").hide();
    });
    
    $("#Pedestrians1").change(function() {
        $("#PedestriansCountDiv").show();
    });

    $("#Pedestrians0").change(function() {
        $("#PedestriansCountDiv").hide();
    });

    $("#Witnesses1").change(function() {
        $("#WitnessesCountDiv").show();
    });

    $("#Witnesses").change(function() {
        $("#WitnessesCountDiv").hide();
    });

    $("#ReportType2").change(function() {
        $("#NumberOfVehiclesDiv").hide();
        $("#HowManyInvolvedDriver").hide();
        $("#HowManyInvolvedPedCyclist").show();
        $("#NumberOfVehiclesDiv").show();
        $("#PassengersDiv").hide();
        $("#CyclistsDiv").hide();
        $("#PedestriansDiv").hide();
        $("#FailToRemainDiv").show();
    });
    ReportType2
</script>
