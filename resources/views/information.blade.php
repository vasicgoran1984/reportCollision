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
                        <h2 class="sfh-heading"><b><i class="bi bi-info-circle-fill"></i> Your Information</b></h2>
                    Please provide your details.
                    <hr>


                        <input name="__RequestVerificationToken" type="hidden" value="CfDJ8EuPeuubNPVMtgIlonMQjI9s-sbSDLGfHVvM1RSmQ7vatNOw-bijV2nQSGNsNmj314kujWk2cIGTXTQJASWJ6tkOeAdX6iM-961B1WKDW-pW4pdO0JU1DeJHBNQWOWo3EMVcjclbgke-pj6fRtG1yWo">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="col-12 float-start fw-bold pb-2 pt-3 ps-1">
                                    First Name<span class="text-danger">&nbsp;*</span>
                                </div>
                                <div class="col-12 float-start">
                                    <input name="FirstName" id="firstName" type="text" class="form-control" required="">
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="col-12 float-start fw-bold pb-2 pt-3 ps-1">
                                    Last Name<span class="text-danger">&nbsp;*</span>
                                </div>
                                <div class="col-12 float-start">
                                    <input name="LastName" type="text" class="form-control" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 col-12">
                                <div class="col-12 float-start fw-bold pb-2 pt-3 ps-1">
                                    Gender<span class="text-danger">&nbsp;*</span>
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
                                    Date Of Birth<span class="text-danger">&nbsp;*</span>
                                </div>
                                <div class="col-12 float-start">
                                    <input name="DateOfBirth" type="date" class="form-control" min="1924-08-30" max="2024-08-30" required="">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="col-12 float-start fw-bold pb-2 pt-3 ps-1">
                                    Phone<span class="text-danger">&nbsp;*</span>
                                </div>
                                <div class="col-12 float-start">
                                    <input id="phoneNumber" name="phoneNumber" type="text" class="form-control"  maxlength="14" required="" inputmode="text" placeholder="(XXX) XXX-XXXX">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="col-12 float-start fw-bold pb-2 pt-3 ps-1">
                                    Email Address<span class="text-danger">&nbsp;*</span>
                                </div>
                                <div class="col-12 float-start">
                                    <input name="EmailAddress id="email" type="email" class="form-control" required="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <div class="col-4 col-lg-12 float-start fw-bold pb-2 pt-3 ps-1">
                                    Country<span class="text-danger">&nbsp;*</span>
                                </div>
                                <div style="min-height: 33px;" class="col-8 col-lg-12 float-start fw-bold pb-2 pt-3 pb-lg-2 ps-lg-1 pt-lg-0 text-danger fsize16">
                                    Start typing to select a country from the list
                                </div>
                                <div class="col-12 float-start">
                                    <input id="cfv" name="Country" type="text" class="form-control pac-target-input" required="" placeholder="Enter a location" autocomplete="off">
                                    <input id="CountryCode" name="CountryCode" type="hidden">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">

                                <div class="col-4 col-lg-12 float-start fw-bold pb-2 pt-3 ps-1">
                                    Address<span class="text-danger">&nbsp;*</span>
                                </div>
                                <div style="min-height: 33px;" class="col-8 col-lg-12 float-start fw-bold pb-2 pt-3 pb-lg-2 ps-lg-1 pt-lg-0 text-danger fsize16">
                                    <span id="AddressSelectAlert" style="display:none;">Start typing to select an address from the list</span>
                                </div>
                                <div class="col-12 float-start">
                                    <input id="Address1" name="Address1" type="text" class="form-control" required="" disabled="">
                                </div>
                            </div>
                            <div class="col-lg-2 col-12">
                                <div class="col-6 col-lg-12 float-start fw-bold pb-2 pt-3 ps-1">
                                    Apartment/Unit
                                </div>
                                <div style="min-height: 33px;" class="col-8 col-lg-12 float-start fw-bold pb-2 pt-3 pb-lg-2 ps-lg-1 pt-lg-0 text-danger fsize16">

                                </div>
                                <div class="col-12 float-start">
                                    <input id="Address2" name="Address2" type="text" class="form-control" maxlength="10" disabled="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="col-12 float-start fw-bold pb-2 pt-3 ps-1">
                                    City
                                </div>
                                <div class="col-12 float-start">
                                    <input id="CityValue" type="text" class="form-control" disabled="">
                                    <input id="City" name="City" type="hidden" class="form-control">

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="col-12 float-start fw-bold pb-2 pt-3 ps-1">
                                    Province
                                </div>
                                <div class="col-12 float-start">
                                    <input id="ProvinceValue" type="text" class="form-control" disabled="">
                                    <input id="Province" type="hidden" class="form-control" name="Province">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="col-12 float-start fw-bold pb-2 pt-3 ps-1">
                                    Postal Code
                                </div>
                                <div class="col-12 float-start">
                                    <input id="PostalCodeValue" type="text" class="form-control" required="" disabled="" maxlength="10">
                                    <input id="PostalCode" type="hidden" class="form-control" name="PostalCode">
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
$(document).ready(function () {

    // Validate FirstName
    $("#usercheck").hide();
    let usernameError = true;
    $("#firstName").keyup(function () {
        validateUsername();
    });

    function validateUsername() {
        let firstName = $("#firstName").val();
        if (firstName.length === "") {
            $("#usercheck").show();
            usernameError = false;
            return false;
        } else if (firstName.length < 3 || firstName.length > 10) {
            $("#usercheck").show();
            $("#usercheck").html("**length of username must be between 3 and 10");
            usernameError = false;
            return false;
        } else {
            $("#usercheck").hide();
            usernameError = true;
        }
    }

    // Phone Number
    $('#phoneNumber')

	.keydown(function (e) {
		var key = e.which || e.charCode || e.keyCode || 0;
		$phone = $(this);

    // Don't let them remove the starting '('
    if ($phone.val().length === 1 && (key === 8 || key === 46)) {
			$phone.val('(');
      return false;
		}
    // Reset if they highlight and type over first char.
    else if ($phone.val().charAt(0) !== '(') {
			$phone.val('('+String.fromCharCode(e.keyCode)+'');
		}

		// Auto-format- do not expose the mask as the user begins to type
		if (key !== 8 && key !== 9) {
			if ($phone.val().length === 4) {
				$phone.val($phone.val() + ')');
			}
			if ($phone.val().length === 5) {
				$phone.val($phone.val() + ' ');
			}
			if ($phone.val().length === 9) {
				$phone.val($phone.val() + '-');
			}
		}

		// Allow numeric (and tab, backspace, delete) keys only
		return (key == 8 ||
				key == 9 ||
				key == 46 ||
				(key >= 48 && key <= 57) ||
				(key >= 96 && key <= 105));
	})

	.bind('focus click', function () {
		$phone = $(this);

		if ($phone.val().length === 0) {
			$phone.val('(');
		}
		else {
			var val = $phone.val();
			$phone.val('').val(val); // Ensure cursor remains at the end
		}
	})

	.blur(function () {
		$phone = $(this);

		if ($phone.val() === '(') {
			$phone.val('');
		}
	});

    // Submit button
    $("#submitbtn").click(function () {
        validateUsername();
        if (
            usernameError &&
            emailError
        ) {
            return true;
        } else {
            return false;
        }
    });
});

function submitForm() {
    $.ajax({
        type:'GET',
        url:'/drivers',
        data: {
            _token: "{!! csrf_token() !!}"
        },
        success:function(data) {
            $("body").html(data);
        }
    });
}
</script>
