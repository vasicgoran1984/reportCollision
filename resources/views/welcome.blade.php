@extends('main')

@section('content')

    <div class="container-fluid" style="background-image: linear-gradient(#0086a6,#002836); background-size: cover; min-height: 100vh;">
        <div class="row ps-md-2 pe-md-2 ps-1 pe-1 bg-white">
            <div class="col-md-6 col-4 float-start p-md-1 pe-0">

            </div>
            <div class="col-md-6 col-8 float-start p-md-1 ps-0">


            </div>
        </div>
        <main role="main">

            <div class="container pb-4">
                <style>
                    .chosen-single {
                        height: 44px !important;
                        background: #fff !important;
                        box-shadow: none !important;
                        border-color: #a0a0a0 !important;
                        line-height: 44px !important;
                        font-size: 22px;
                        border-radius: 25px !important;
                        padding-left: 16px !important;
                        padding-right: 16px !important;
                    }

                    .chosen-single > span {
                        margin: 0px !important;
                    }

                    .btn-lg {
                        font-size: 18px !important;
                        font-weight: bold !important;
                        letter-spacing: 0.5px;

                    }

                    .btn-secondary {
                        --bs-btn-active-bg: #333333;

                    }

                    .make {
                        display: list-item;
                        line-height: 18px;
                        font-size: 16px;
                        padding: 6px;
                        text-align: center;
                        list-style-type: none;
                    }

                    .make:hover {
                        cursor: pointer;
                        background-color: black;
                        color: white;
                    }

                    .select2 .select2-selection .select2-selection__rendered {
                        height: 44px !important;
                        line-height: 44px !important;
                        border-radius: 22px !important;

                    }

                    .radi {
                        border-radius: 25px !important;
                    }

                </style>

                <!-- <script src="https://www.google.com/recaptcha/enterprise.js?render=6LdWeropAAAAAHD1gHBzR9-cXx0ttNgPv27Uw5kZ"></script> -->
                <form id="StartForm" method="get">
                    @csrf
                    <input name="__RequestVerificationToken" type="hidden" value="CfDJ8K54_zVZXGVBjTw5jv_bcfjpMzAx80WplwiUQaD4irOgpvBo-qB8NF3o3a0JiELjJUZG7u0dEVKwirfNonflL9B2hdJmT73HodY8mnnujMIpaAs-1wlQWf8x5G4uHUqkLcceIpts3JuTRcm4FhwajZk">
                    <div class="row text-lg-center">
                        <div class="col-xl-2 col-lg-2 col-md-2 col-0"></div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 p-3">

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 ps-4 pe-4">
                                            <h1><b>Welcome</b></h1>
                                            to start the first steps of reporting your collision
                                        </div>
                                        <div class="col-12 pt-2 pb-1 ps-4 pe-4">
                                            <h5 class="m-0"><b>Please select the preferred language</b></h5>
                                        </div>
                                    </div>
                                    <div class="row p-3 pt-1">
                                        <div class="col-lg-4 col-12 m-auto mt-1 pt-0 p-1 float-start">
                                            <input type="radio" class="btn-check" name="LanguageID" id="LanguageID081b8bd6-a3c7-4da0-bf1a-73a96c2fdc69" value="081b8bd6-a3c7-4da0-bf1a-73a96c2fdc69" autocomplete="off" required="">
                                            <label class="btn btn-lg btn-fw btn-orange mb-1" for="LanguageID081b8bd6-a3c7-4da0-bf1a-73a96c2fdc69">Arabic</label>
                                        </div>
                                        <div class="col-lg-4 col-12 m-auto mt-1 pt-0 p-1 float-start">
                                            <input type="radio" class="btn-check" name="LanguageID" id="LanguageID00000000-0000-0000-0000-000000000000" value="00000000-0000-0000-0000-000000000000" autocomplete="off" required="">
                                            <label class="btn btn-lg btn-fw btn-orange mb-1" for="LanguageID00000000-0000-0000-0000-000000000000">English</label>
                                        </div>
                                        <div class="col-lg-4 col-12 m-auto mt-1 pt-0 p-1 float-start">
                                            <input type="radio" class="btn-check" name="LanguageID" id="LanguageID1936be41-25ad-449d-a553-c09c3388aefd" value="1936be41-25ad-449d-a553-c09c3388aefd" autocomplete="off" required="">
                                            <label class="btn btn-lg btn-fw btn-orange mb-1" for="LanguageID1936be41-25ad-449d-a553-c09c3388aefd">French</label>
                                        </div>
                                        <div class="col-lg-4 col-12 m-auto mt-1 pt-0 p-1 float-start">
                                            <input type="radio" class="btn-check" name="LanguageID" id="LanguageID5e945274-ee1c-4822-97ac-6cfa0909d4f5" value="5e945274-ee1c-4822-97ac-6cfa0909d4f5" autocomplete="off" required="">
                                            <label class="btn btn-lg btn-fw btn-orange mb-1" for="LanguageID5e945274-ee1c-4822-97ac-6cfa0909d4f5">Hindi</label>
                                        </div>
                                        <div class="col-lg-4 col-12 m-auto mt-1 pt-0 p-1 float-start">
                                            <input type="radio" class="btn-check" name="LanguageID" id="LanguageID8980bcfd-4015-40ac-9315-291168400787" value="8980bcfd-4015-40ac-9315-291168400787" autocomplete="off" required="">
                                            <label class="btn btn-lg btn-fw btn-orange mb-1" for="LanguageID8980bcfd-4015-40ac-9315-291168400787">Italian</label>
                                        </div>
                                        <div class="col-lg-4 col-12 m-auto mt-1 pt-0 p-1 float-start">
                                            <input type="radio" class="btn-check" name="LanguageID" id="LanguageID91dc98a6-c602-4867-9f41-7497a0756e80" value="91dc98a6-c602-4867-9f41-7497a0756e80" autocomplete="off" required="">
                                            <label class="btn btn-lg btn-fw btn-orange mb-1" for="LanguageID91dc98a6-c602-4867-9f41-7497a0756e80">Mandarin</label>
                                        </div>
                                        <div class="col-lg-4 col-12 m-auto mt-1 pt-0 p-1 float-start">
                                            <input type="radio" class="btn-check" name="LanguageID" id="LanguageID09aed26b-4dda-47de-a901-6f72acedea3e" value="09aed26b-4dda-47de-a901-6f72acedea3e" autocomplete="off" required="">
                                            <label class="btn btn-lg btn-fw btn-orange mb-1" for="LanguageID09aed26b-4dda-47de-a901-6f72acedea3e">Portuguese</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 pt-2 pb-1 ps-4 pe-4">
                                            <h5 class="m-0"><b>Please select the location the collision took place in</b></h5>
                                        </div>
                                    </div>
                                    <div class="row p-3 pt-1">
                                        <div class="col-lg-6 col-12 m-auto mt-1 pt-0 p-1 float-start">
                                            <input type="radio" class="btn-check" name="SFHProvinceID" id="SFHProvinceID2" value="2" autocomplete="off" onchange="onProvinceChange(2)" required="">
                                            <label class="btn btn-lg btn-fw btn-secondary mb-1" for="SFHProvinceID2" onclick="onProvinceChange(2)">Alberta</label>
                                        </div>
                                        <div class="col-lg-6 col-12 m-auto mt-1 pt-0 p-1 float-start">
                                            <input type="radio" class="btn-check" name="SFHProvinceID" id="SFHProvinceID1" value="1" autocomplete="off" onchange="onProvinceChange(1)" required="">
                                            <label class="btn btn-lg btn-fw btn-secondary mb-1" for="SFHProvinceID1" onclick="onProvinceChange(1)">Ontario</label>
                                        </div>
                                        <div class="col-lg-6 col-12 m-auto mt-1 pt-0 p-1 float-start">
                                            <input type="radio" class="btn-check" name="SFHProvinceID" id="SFHProvinceID3" value="3" autocomplete="off" onchange="onProvinceChange(3)" required="">
                                            <label class="btn btn-lg btn-fw btn-secondary mb-1" for="SFHProvinceID3" onclick="onProvinceChange(3)">Prince Edward Island</label>
                                        </div>
                                    </div>
                                    <div id="HighwayDiv" style="display: none;" class="row">
                                        <div class="col-12 pt-2 pb-1 ps-4 pe-4">
                                            <h5 class="m-0"><b>Did your collision happen on a 400 series highway?</b></h5>
                                        </div>
                                        <div class="col-12 pt-2 pb-1 ps-4 pe-4">
                                            <input type="radio" class="btn-check Highway" name="Highway" id="Highway1" value="true" autocomplete="off">
                                            <label class="btn btn-secondary" for="Highway1">Yes</label>
                                            <input type="radio" class="btn-check Highway" name="Highway" id="Highway0" value="false" autocomplete="off">
                                            <label class="btn btn-secondary" for="Highway0">No</label>
                                        </div>
                                    </div>
                                    <div id="NoHighwayDiv" style="display: none;" class="row">
                                        <div class="col-12 pt-2 pb-1 ps-4 pe-4">
                                            <div class="row alert alert-warning radi" role="alert">
                                                <div class="col-12">
                                                    <h6 class="m-0">
                                                        <b>
                                                            Collisions that occurred on a 400-series highway, such as Highway
                                                            427, 400 or 404 should be reported to the <a href="https://www.opp.ca/" target="_blank">Ontario Provincial Police</a>.
                                                        </b>
                                                    </h6>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div id="SFHDivLabel" style="display: none;" class="row">
                                        <div class="col-12 pt-2 pb-1 ps-4 pe-4">
                                            <h5 class="m-0"><b>Select the city</b></h5>
                                        </div>
                                        <div class="col-12 pt-2 pb-1 ps-4 pe-4">
                                            <select id="SFHCityID" name="SFHCityID" class="form-select form-select-lg" required="">
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 pt-3 ps-4 pe-4 pb-3">
                                    <a href="https://accsupport.com/contact/" target="_blank" class="float-end">Contact us</a>
                                </div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-xl-2 col-lg-2 col-md-2 col-0"></div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 p-3 text-end">
                            <div><div data-style="none" style="width: 256px; height: 60px; position: fixed; visibility: hidden;"><div class="grecaptcha-logo"><iframe title="reCAPTCHA" width="256" height="60" role="presentation" name="a-hcaqrmx0vphj" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/enterprise/anchor?ar=1&amp;k=6LdWeropAAAAAHD1gHBzR9-cXx0ttNgPv27Uw5kZ&amp;co=aHR0cHM6Ly9yZXBvcnRhY29sbGlzaW9uLmNvbTo0NDM.&amp;hl=en&amp;v=i7X0JrnYWy9Y_5EYdoFM79kV&amp;size=invisible&amp;sa=submit&amp;cb=py2wle24t2f4"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                            <button  onClick="submitForm()" id="SubmitBtn" style="display: none;" type="button" class="g-recaptcha btn btn-lg btn-fw w-auto btn-success bg-sfh-green">
                                Continue <i class="bi bi-arrow-right-circle"></i>
                            </button>

                        </div>
                    </div>
                </form>


            </div>
        </main>
    </div>
@endsection

<script>
    function onProvinceChange(location) {
        $.ajax({
            dataType: 'json',
            type:'GET',
            url:'/getCity',
            data: {
                _token: "{!! csrf_token() !!}",
                locationId: location,
            },
            success:function(data) {
                $("#SFHCityID").html('');
                $.each(data.city,function(key, value)
                {
                    $("#SFHCityID").append('<option value=' + key + '>' + value.city_name + '</option>');
                });
                $("#SFHDivLabel").show();
                $("#SubmitBtn").show();
            }
        });
    }

    function submitForm() {
        $.ajax({
            type:'GET',
            url:'/startPost',
            data: {
                _token: "{!! csrf_token() !!}"
            },
            success:function(data) {
                $("body").html(data);
            }
        });
    }

</script>
