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
            <form method="get"> 
            @csrf
                <input name="__RequestVerificationToken" type="hidden" value="CfDJ8BmJyn5dLmxGr8ylXHLR-fKz7GnM29u6OAeyEshS4KCyCbPwswuiPhbDYkWFDiqTvcQYlXsxMj2DqyVR_x654_3NLOg-hSICesDXKaLKEN8E55jZX3H-pproLgLWEHmbaEy4ABbngJx6cfbiY_B-ZZg">
                <div class="row">
                    <div class="col-12 p-3 pt-4">

                        <div class="card">
                            <div class="card-body">
                                <h2 class="sfh-heading"><b><i class="bi bi-journal-check"></i> Personal Protection Act Consent Agreement</b></h2>
                                        <p>
                                            Check the box next to the following statements to indicate that you understand and agree to the following, then click on "Start Report" button:
                                        </p>
                                        <table>
                                            <tbody><tr class="">
                                                <td class="pe-2 pt-1" style="vertical-align: top;"><input type="checkbox" class="jumbo-checkbox" required=""></td>
                                                <td>
                                                    I consent to the collection, use and disclosure of this information by Accident Support Services International Ltd., and its related corporations and their successors and assign, Ontario Government and Municipal employees, police, insurance companies and interested third parties related to my collision.<br><br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pe-2 pt-1" style="vertical-align: top;"><input type="checkbox" class="jumbo-checkbox" required=""></td>
                                                <td>I understand it is an offence to provide false information.</td>
                                            </tr>
                                        </tbody></table>
                                <br>
                                <h3>
                                    <b>
                                        Requirements</b></h3>
                                <p>
                                    Before we get started, please confirm you have the following ready:
                                    </p><ul>
                                        <li>Driver's Licence</li>
                                        <li>Vehicle Ownership/Registration</li>
                                        <li>Proof of Insurance</li>
                                    </ul>

                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-9 col-md-6 offset-md-6 col-12 pt-2">
                        <button type="button" onClick="submitForm()" class="btn btn-lg btn-success w-100 bg-sfh-green">Start Report <i class="bi bi-pencil-square"></i></button>
                    </div>
                </div>
            </form>
        </main>
    </div>
@endsection

<script>
    function submitForm() {
        $.ajax({
            type:'GET',
            url:'/startReport',
            data: {
                _token: "{!! csrf_token() !!}"
            },
            success:function(data) {
                $("body").html(data);
            }
        });
    }
</script>
