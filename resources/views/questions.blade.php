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
                <style>
                    .form-control {
                        background-color: #fcfcfc !important;
                    }

                    .form-control:disabled {
                        background-color: #efefef !important;
                    }
                </style>
                <div class="row">
                    <form action="/Report/InformationPost" method="post">
                        <div class="col-12 p-lg-3 pt-lg-4 pt-3">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="sfh-heading"><b><i class="bi bi-info-circle-fill"></i> Questions</b></h2>
                                    Please answer the following questions to the best of your knowledge.
                                    <hr>
                                    <h2 class="sfh-heading"><b>General</b></h2>
                                    <input name="__RequestVerificationToken" type="hidden" value="CfDJ8EuPeuubNPVMtgIlonMQjI9s-sbSDLGfHVvM1RSmQ7vatNOw-bijV2nQSGNsNmj314kujWk2cIGTXTQJASWJ6tkOeAdX6iM-961B1WKDW-pW4pdO0JU1DeJHBNQWOWo3EMVcjclbgke-pj6fRtG1yWo">
                                    <div class="row">
{{--                                        <div class="col-md-6 col-12">--}}
{{--                                            <div class="col-12 float-start fw-bold pb-2 pt-3 ps-1">--}}
{{--                                                First Name<span class="text-danger">&nbsp;*</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-12 float-start">--}}
{{--                                                <input name="FirstName" id="firstName" type="text" class="form-control" required="">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="col-md-6 col-12">--}}
{{--                                            <div class="col-12 float-start fw-bold pb-2 pt-3 ps-1">--}}
{{--                                                Last Name<span class="text-danger">&nbsp;*</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-12 float-start">--}}
{{--                                                <input name="LastName" type="text" class="form-control" required="">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="col-md-6 col-lg-3 col-12">
                                            <div class="col-12 float-start fw-bold pb-2 pt-3 ps-1">
                                                What where you doing?<span class="text-danger">&nbsp;*</span>
                                            </div>
                                            <div class="col-12 float-start">
                                                <select name="Gender" class="form-select" required="">
                                                    <option disabled="" selected="" value="">--- Please Select ---</option>
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                    <option value="X">Gender Neutral</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3 col-12">
                                            <div class="col-12 float-start fw-bold pb-2 pt-3 ps-1">
                                                Your Condition<span class="text-danger">&nbsp;*</span>
                                            </div>
                                            <div class="col-12 float-start">
                                                <select name="Gender" class="form-select" required="">
                                                    <option disabled="" selected="" value="">--- Please Select ---</option>
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                    <option value="X">Gender Neutral</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3 col-12">
                                            <div class="col-12 float-start fw-bold pb-2 pt-3 ps-1">
                                                Vehicle Condition<span class="text-danger">&nbsp;*</span>
                                            </div>
                                            <div class="col-12 float-start">
                                                <select name="Gender" class="form-select" required="">
                                                    <option disabled="" selected="" value="">--- Please Select ---</option>
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                    <option value="X">Gender Neutral</option>
                                                </select>
                                            </div>
                                        </div>

                                        <h2 class="sfh-heading"><b>Environment</b></h2>

                                        <div class="col-md-6 col-lg-3 col-12">
                                            <div class="col-12 float-start fw-bold pb-2 pt-3 ps-1">
                                                Weather Conditions<span class="text-danger">&nbsp;*</span>
                                            </div>
                                            <div class="col-12 float-start">
                                                <select name="Gender" class="form-select" required="">
                                                    <option disabled="" selected="" value="">--- Please Select ---</option>
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                    <option value="X">Gender Neutral</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3 col-12">
                                            <div class="col-12 float-start fw-bold pb-2 pt-3 ps-1">
                                                Light Conditions<span class="text-danger">&nbsp;*</span>
                                            </div>
                                            <div class="col-12 float-start">
                                                <select name="Gender" class="form-select" required="">
                                                    <option disabled="" selected="" value="">--- Please Select ---</option>
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                    <option value="X">Gender Neutral</option>
                                                </select>
                                            </div>
                                        </div>

                                        <h2 class="sfh-heading"><b>Road</b></h2>

                                        <div class="col-md-6 col-lg-3 col-12">
                                            <div class="col-12 float-start fw-bold pb-2 pt-3 ps-1">
                                                Road Alignment<span class="text-danger">&nbsp;*</span>
                                            </div>
                                            <div class="col-12 float-start">
                                                <select name="Gender" class="form-select" required="">
                                                    <option disabled="" selected="" value="">--- Please Select ---</option>
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                    <option value="X">Gender Neutral</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3 col-12">
                                            <div class="col-12 float-start fw-bold pb-2 pt-3 ps-1">
                                                Road Condition<span class="text-danger">&nbsp;*</span>
                                            </div>
                                            <div class="col-12 float-start">
                                                <select name="Gender" class="form-select" required="">
                                                    <option disabled="" selected="" value="">--- Please Select ---</option>
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                    <option value="X">Gender Neutral</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3 col-12">
                                            <div class="col-12 float-start fw-bold pb-2 pt-3 ps-1">
                                                Road Pavement Marking<span class="text-danger">&nbsp;*</span>
                                            </div>
                                            <div class="col-12 float-start">
                                                <select name="Gender" class="form-select" required="">
                                                    <option disabled="" selected="" value="">--- Please Select ---</option>
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                    <option value="X">Gender Neutral</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3 col-12">
                                            <div class="col-12 float-start fw-bold pb-2 pt-3 ps-1">
                                                Road Surface<span class="text-danger">&nbsp;*</span>
                                            </div>
                                            <div class="col-12 float-start">
                                                <select name="Gender" class="form-select" required="">
                                                    <option disabled="" selected="" value="">--- Please Select ---</option>
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                    <option value="X">Gender Neutral</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3 col-12">
                                            <div class="col-12 float-start fw-bold pb-2 pt-3 ps-1">
                                                Road Surface Condition<span class="text-danger">&nbsp;*</span>
                                            </div>
                                            <div class="col-12 float-start">
                                                <select name="Gender" class="form-select" required="">
                                                    <option disabled="" selected="" value="">--- Please Select ---</option>
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                    <option value="X">Gender Neutral</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3 col-12">
                                            <div class="col-12 float-start fw-bold pb-2 pt-3 ps-1">
                                                Road Character<span class="text-danger">&nbsp;*</span>
                                            </div>
                                            <div class="col-12 float-start">
                                                <select name="Gender" class="form-select" required="">
                                                    <option disabled="" selected="" value="">--- Please Select ---</option>
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                    <option value="X">Gender Neutral</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12  p-lg-3 pt-lg-4 pt-3">
                            <a href="{{ route('backPrequalification') }}" class="btn btn-lg btn-secondary w-100 bg-sfh-maroon float-start w-auto"> <i class="bi bi-arrow-left-circle"></i> Back</a>
                            <button id="submitbtn" type="button" onClick="submitForm()" class="btn btn-lg btn-success w-100 bg-sfh-green float-end w-auto">Next <i class="bi bi-arrow-right-circle"></i></button>
                        </div>
                    </form>
                </div>

            </div>
        </main>
    </div>
@endsection

<script>


</script>
