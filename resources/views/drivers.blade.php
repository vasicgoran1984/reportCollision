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
                    .pac-container {
                        z-index: 10000 !important;
                    }
                    @media (min-width: 992px){
                        .modal-lg, .modal-xl {
                            --bs-modal-width: 980px !important;
                        }
                    }

                </style>
                <style>
                    .select2-container--default .select2-selection--single {
                        background-color: #fff;
                        border: 1px solid #aaa !important;
                        border-radius: 22px !important;
                    }

                    .select2-container {
                        width: 100% !important;
                    }

                    .select2-container .select2-selection--single {
                        box-sizing: border-box;
                        cursor: pointer;
                        display: block;
                        height: 41px !important;
                    }

                    .select2-container--default .select2-selection--single .select2-selection__arrow {
                        height: 26px;
                        position: absolute;
                        top: 8px !important;
                        right: 12px !important;
                        width: 20px;
                    }

                    .select2-container--default .select2-selection--single .select2-selection__rendered {
                        color: #444;
                        line-height: 40px !important;
                    }

                    .select2-container .select2-selection--single .select2-selection__rendered {
                        display: block;
                        padding-left: 16px !important;
                        padding-right: 20px;
                        overflow: hidden;
                        text-overflow: ellipsis;
                        white-space: nowrap;
                    }
                </style>
                <div class="row">

                    <div class="col-12 p-3 pt-4">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="sfh-heading"><b><i class="bi bi-people-fill"></i> Other Drivers</b></h2>
                                Please provide information about the driver who collided with you. If there were additional drivers involved please share their details too.
                                <hr>

                                <div class="row">
                                    <div class="col-12 pb-2">


                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-12 pt-3">
                        <form action="/Report/DriversPost" method="post">
                            <input name="__RequestVerificationToken" type="hidden" value="CfDJ8EQZef4XDapKuknpLhlEo-L7rAj5I0X50ZEp0XYTQZa0HVFRZufEkL44r9UxiRAiVG4a9sfeg9Ed5lmDlLhoqKC62d7Yq1ktgWbL-e0EpBUzWGdxO5bn2AP-2jh6I2DBp3vf-lK9rDQOQ_aG6XnOhDY">
                            <a href="/Report/NavigateBack/6" class="btn btn-lg btn-secondary w-100 bg-sfh-maroon float-start w-auto"> <i class="bi bi-arrow-left-circle"></i> Back</a>
                            <button type="button" onclick="NoOtherDriverAlert()" class="btn btn-lg btn-success w-100 bg-sfh-green float-end w-auto">Next <i class="bi bi-arrow-right-circle"></i></button>
                        </form>
                    </div>

                </div>



                <div class="modal fade show" id="AddEditModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="AddEditLabel" aria-modal="true" role="dialog" style="display: block;">
                    <div class="modal-dialog modal-xl">
                        <form id="AddEditForm" action="/Report/AddDriver" method="post">
                            <input name="__RequestVerificationToken" type="hidden" value="CfDJ8EQZef4XDapKuknpLhlEo-L7rAj5I0X50ZEp0XYTQZa0HVFRZufEkL44r9UxiRAiVG4a9sfeg9Ed5lmDlLhoqKC62d7Yq1ktgWbL-e0EpBUzWGdxO5bn2AP-2jh6I2DBp3vf-lK9rDQOQ_aG6XnOhDY">
                            <input type="hidden" id="SFHOtherDriverID" name="SFHOtherDriverID">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 float-start" id="AddEditLabel">Add Other Driver</h1>  <h1 class="modal-title fs-5 float-end addOnly">1 of 1</h1>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="alert alert-primary d-flex align-items-center" role="alert">
                                                <i class="bi bi-info-circle-fill"></i> &nbsp;&nbsp;
                                                <div>
                                                    Please provide information about the driver who collided with you.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-2 col-xl-2 float-start pb-2 fw-bold lho">
                                            First Name <span class="text-danger">&nbsp;*</span>
                                        </div>
                                        <div class="col-12 col-lg-4 col-xl-4 float-start pb-2">
                                            <input type="text" id="FirstName" name="FirstName" class="form-control" required="">
                                        </div>
                                        <div class="col-12 col-lg-2 col-xl-2 float-start pb-2 fw-bold lho">
                                            Last Name <span class="text-danger">&nbsp;*</span>
                                        </div>
                                        <div class="col-12 col-lg-4 col-xl-4 float-start pb-2">
                                            <input type="text" id="LastName" name="LastName" class="form-control" required="">
                                        </div>
                                        <div class="col-12 col-lg-2 col-xl-2 float-start pb-2 fw-bold lho">
                                            Gender
                                        </div>
                                        <div class="col-12 col-lg-4 col-xl-4 float-start pb-2">
                                            <select id="Gender" name="Gender" class="form-select">
                                                <option disabled="" selected="" value="">--- Please Select ---</option>
                                                <option value="M">Male</option>
                                                <option value="F">Female</option>
                                                <option value="X">Gender Neutral</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-lg-2 col-xl-2 float-start pb-2 fw-bold lho">
                                            Date Of Birth
                                        </div>
                                        <div class="col-12 col-lg-4 col-xl-4 float-start pb-2">
                                            <input type="date" id="DateOfBirth" name="DateOfBirth" class="form-control" min="1924-08-31" max="2024-08-31">
                                        </div>

                                        <div class="col-12 col-lg-2 col-xl-2 float-start pb-2 fw-bold lho">
                                            Phone Number
                                        </div>
                                        <div class="col-12 col-lg-4 col-xl-4 float-start pb-2">
                                            <input type="text" id="PhoneNumber" name="PhoneNumber" class="form-control" inputmode="text">
                                        </div>
                                        <div class="col-12 pb-0">
                                            <hr>
                                        </div>
                                        <div class="col-12 float-start fw-bold pb-2 text-danger fsize16 lho">
                                            Start typing to select a country/address from the list
                                        </div>
                                        <div class="col-12 col-lg-2 col-xl-2 float-start pb-2 fw-bold lho">
                                            Country
                                        </div>
                                        <div class="col-12 col-lg-4 col-xl-4 float-start pb-2">
                                            <input id="Country" name="Country" type="text" class="form-control pac-target-input" placeholder="Enter a location" autocomplete="off">
                                            <input id="CountryCode" name="CountryCode" type="hidden">
                                        </div>
                                        <div class="col-12 col-lg-2 col-xl-2 float-start pb-2 fw-bold lho">
                                            Address
                                        </div>
                                        <div class="col-12 col-lg-4 col-xl-4 float-start pb-2">
                                            <input id="Address1" name="Address1" type="text" class="form-control" disabled="">
                                        </div>
                                        <div class="col-12 col-lg-3 col-xl-3 float-start pb-2 fw-bold lho">
                                            Apartment/Unit
                                        </div>
                                        <div class="col-12 col-lg-3 col-xl-3 float-start pb-2">
                                            <input id="Address2" name="Address2" type="text" class="form-control" maxlength="10" disabled="">
                                        </div>


                                        <div class="col-12 col-lg-2 col-xl-2 float-start pb-2 fw-bold lho">
                                            City
                                        </div>
                                        <div class="col-12 col-lg-4 col-xl-4 float-start pb-2">
                                            <input id="CityValue" type="text" class="form-control" disabled="">
                                            <input id="City" name="City" type="hidden" class="form-control" value="">
                                        </div>
                                        <div class="col-12 col-lg-2 col-xl-2 float-start pb-2 fw-bold lho">
                                            Province
                                        </div>
                                        <div class="col-12 col-lg-4 col-xl-4 float-start pb-2">
                                            <input id="ProvinceValue" type="text" class="form-control" disabled="">
                                            <input id="Province" name="Province" type="hidden" class="form-control" value="">
                                        </div>
                                        <div class="col-12 col-lg-2 col-xl-2 float-start pb-2 fw-bold lho">
                                            Postal Code
                                        </div>
                                        <div class="col-12 col-lg-4 col-xl-4 float-start pb-2">
                                            <input id="PostalCodeValue" type="text" class="form-control" disabled="">
                                            <input id="PostalCode" type="hidden" class="form-control" name="PostalCode" value="">
                                        </div>


                                        <div class="col-12 pb-2">
                                            <hr>
                                        </div>
                                        <div class="w-100"></div>
                                        <div class="col-12 col-lg-2 col-xl-2 float-start pb-2 fw-bold">
                                            Driver Licence Number
                                        </div>
                                        <div class="col-12 col-lg-4 col-xl-4 float-start pb-2">
                                            <input type="text" class="form-control" id="DriverLicenceNumber" name="DriverLicenceNumber">
                                        </div>
                                        <div class="col-12 col-lg-2 col-xl-2 float-start pb-2 fw-bold">
                                            Driver Licence Province
                                        </div>
                                        <div class="col-12 col-lg-4 col-xl-4 float-start pb-2">
                                            <select class="form-select" id="DriverLicenceProvinceID" name="DriverLicenceProvinceID" style="display: none;">
                                                <option disabled="" selected="" value="">--- Please Select ---</option>
                                                <optgroup label="CANADA">
                                                    <option value="04E9B3C1-E911-4A19-A72F-DF1156A8A36D">Alberta</option>
                                                    <option value="116AA1D6-B20B-4A64-A421-3B3B27CC9835">British Columbia</option>
                                                    <option value="9DEEED97-8124-42CF-B3D7-5017DDB9E646">Manitoba</option>
                                                    <option value="80184CE8-289D-4C63-B138-E24442D50B3F">New Brunswick</option>
                                                    <option value="6EF53BF8-22A5-4907-AED7-C6F498C84BDB">Newfoundland and Labrador</option>
                                                    <option value="19C75E04-538B-4C1D-BC29-D7AF094F922B">Northwest Territories</option>
                                                    <option value="67D3BB58-CDFD-4A79-A5D6-F80E705DAF77">Nova Scotia</option>
                                                    <option value="F73DCF5B-D044-478F-9101-03B063393A24">Nunavut</option>
                                                    <option value="AA7CFE9C-3133-4CF9-9BD8-C22355B9FE2C">Ontario</option>
                                                    <option value="E4A26F64-7957-4C2B-8024-ED37E2258F2F">Prince Edward Island</option>
                                                    <option value="E051617E-B437-48B5-8199-0B71342DF9DD">Quebec</option>
                                                    <option value="DF00E67D-BCF9-4ACA-8E42-2E1B8FABB233">Saskatchewan</option>
                                                    <option value="E70D06FF-E321-4061-B366-5DAFC2589F24">Yukon</option>
                                                    <option value="00000000-0000-0000-0000-000000000000">Other</option>
                                                </optgroup>
                                                <optgroup label="USA">
                                                    <option value="0400D1D6-3CB6-4443-8CE0-1477321E0DC6">Alabama</option>
                                                    <option value="C270C7A0-65DC-421C-8FD6-A596B48029A0">Alaska</option>
                                                    <option value="03BB39DD-13D7-4D8D-942F-59EE80B1F7FF">Arizona</option>
                                                    <option value="79DB47A7-400B-4538-8F50-13C1718882F1">Arkansas</option>
                                                    <option value="81DDA4BB-B00D-415C-9559-67FB2D5D79C3">California</option>
                                                    <option value="F82A187F-04F0-46C8-AC06-943BCD48F93E">Colorado</option>
                                                    <option value="05EE056D-E421-4DCC-8759-32980DC50426">Connecticut</option>
                                                    <option value="815BBD8F-BA38-49B3-9743-474966AD2977">Delaware</option>
                                                    <option value="EDC9DEC1-0DEA-49EB-9048-040ADC663015">District of Columbia</option>
                                                    <option value="ADE78F90-DB4F-46CF-A696-27A23F9A5D0B">Florida</option>
                                                    <option value="8392EE8B-4AC4-4044-9142-DD6F55B5C011">Georgia</option>
                                                    <option value="901F78CC-07C1-4F29-8FD0-D543CB445B20">Hawaii</option>
                                                    <option value="E00783C1-9B60-4C79-B777-B1B949BE00C4">Idaho</option>
                                                    <option value="CDF02314-A0BE-425D-B363-D4D75B0F8B71">Illinois</option>
                                                    <option value="75DEBB83-4BAF-452A-98D5-76C738B754A0">Indiana</option>
                                                    <option value="16A74CE1-C74B-44D5-81AC-32E2522F0F19">Iowa</option>
                                                    <option value="462CACD0-8CD4-46B6-918B-CAD07B6D41DF">Kansas</option>
                                                    <option value="066560A0-EDC3-4D13-ACDA-AC162A8A31E6">Kentucky</option>
                                                    <option value="9978F3AF-CBDF-4E32-ACC8-206BEF444C15">Louisiana</option>
                                                    <option value="C1FACE16-868C-4CD7-8385-239F8708A525">Maine</option>
                                                    <option value="526041FC-5A73-444B-9C0F-D2B6CE112F3B">Maryland</option>
                                                    <option value="307BE7A1-BA57-45EA-9C86-CC7E5533AF7C">Massachusetts</option>
                                                    <option value="3967FC32-5206-415F-828A-A6C3DD4B6E70">Michigan</option>
                                                    <option value="2C92FBC2-BCCF-46A9-9A7F-47161B20E82E">Minnesota</option>
                                                    <option value="D0A319CB-6650-4F9F-B438-B4DBDFBAD36B">Mississippi</option>
                                                    <option value="12D4BEDD-3DB5-4BE2-B465-FBA320525AE0">Missouri</option>
                                                    <option value="EC8A4E4F-800E-4C02-91CA-65EFBC6C72A5">Montana</option>
                                                    <option value="88A637CE-FF5E-4551-9D08-B7F0BA103E7E">Nebraska</option>
                                                    <option value="84BECB90-1687-4F9B-8BEB-BB26DB4C0556">Nevada</option>
                                                    <option value="C0870257-8689-497F-8B20-FC992D6224A6">New Hampshire</option>
                                                    <option value="F5616D8B-D354-4F07-995D-73EC8ACC8635">New Jersey</option>
                                                    <option value="69DE0FEA-C0E7-413D-9082-459DA977E444">New Mexico</option>
                                                    <option value="466B3439-4FBD-4370-9E4E-A28C6B1F1B5A">New York</option>
                                                    <option value="EF5B34E9-AB5F-47FF-BFF7-67A7BA44EF81">North Carolina</option>
                                                    <option value="2554FAF1-67E5-4C4C-96B6-92932A39EF91">North Dakota</option>
                                                    <option value="489EFC42-88BC-4D9D-8F8E-0BD59E5C8F9D">Ohio</option>
                                                    <option value="7FAC42B3-5BEC-4978-A39C-D1306EF916BB">Oklahoma</option>
                                                    <option value="34A216A9-5A8F-4170-B6E2-03E0E57DD16F">Oregon</option>
                                                    <option value="6925B525-96C7-4355-9FD0-8558F034AAB0">Pennsylvania</option>
                                                    <option value="7000D146-432F-4EBC-A426-2424AE513699">Puerto Rico</option>
                                                    <option value="54ADA54D-E425-447E-99D3-829CBFA50A41">Rhode Island</option>
                                                    <option value="AAC6899B-ADFB-450F-BC0C-8BB122027C89">South Carolina</option>
                                                    <option value="1A6A37F2-4B24-4792-98F7-FEE3D769CF5E">South Dakota</option>
                                                    <option value="4AED2F22-9410-4BA8-AE71-17B22DE914E6">Tennessee</option>
                                                    <option value="D35A582E-13D2-40C5-A14A-08BBB875D028">Texas</option>
                                                    <option value="CD93980F-03CD-4974-84BF-2046AC594156">Utah</option>
                                                    <option value="5AC02659-B45E-4ABA-8B1D-9B47B1384702">Vermont</option>
                                                    <option value="7044BDDE-DA59-4483-906F-405C6F05D8B4">Virginia</option>
                                                    <option value="ABAAA4C0-B98F-467A-A132-44AC862AD090">Washington</option>
                                                    <option value="53339993-416B-499B-B701-2AB45EA27A98">West Virginia</option>
                                                    <option value="312ADAEC-D31E-4897-943D-088B4D2337B9">Wisconsin</option>
                                                    <option value="A7923E16-8914-4FEB-9B55-E738C39116CF">Wyoming</option>
                                                    <option value="00000000-0000-0000-0000-000000000000">Other</option>
                                                </optgroup>
                                            </select><div class="chosen-container chosen-container-single" title="" id="DriverLicenceProvinceID_chosen" style="width: 0px;"><a class="chosen-single">
                                                    <span>--- Please Select ---</span>
                                                    <div><b></b></div>
                                                </a>
                                                <div class="chosen-drop">
                                                    <div class="chosen-search">
                                                        <input class="chosen-search-input" type="text" autocomplete="off">
                                                    </div>
                                                    <ul class="chosen-results"></ul>
                                                </div></div>
                                        </div>


                                    </div>
                                    <div class="col-12 pb-2">
                                        <hr>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-lg-2 col-xl-2 float-start pb-2 fw-bold">
                                            Vehicle Licence Plate
                                        </div>
                                        <div class="col-12 col-lg-4 col-xl-4 float-start pb-2">
                                            <input type="text" id="VehicleLicencePlate" name="VehicleLicencePlate" class="form-control" minlength="4" maxlength="10">
                                        </div>
                                        <div class="col-12 col-lg-2 col-xl-2 float-start pb-2 fw-bold">
                                            Vehicle Licence Province
                                        </div>
                                        <div class="col-12 col-lg-4 col-xl-4 float-start pb-2">
                                            <select class="form-select" id="VehicleLicenceProvinceID" name="VehicleLicenceProvinceID" style="display: none;">
                                                <option disabled="" selected="" value="">--- Please Select ---</option>
                                                <optgroup label="CANADA">
                                                    <option value="04E9B3C1-E911-4A19-A72F-DF1156A8A36D">Alberta</option>
                                                    <option value="116AA1D6-B20B-4A64-A421-3B3B27CC9835">British Columbia</option>
                                                    <option value="9DEEED97-8124-42CF-B3D7-5017DDB9E646">Manitoba</option>
                                                    <option value="80184CE8-289D-4C63-B138-E24442D50B3F">New Brunswick</option>
                                                    <option value="6EF53BF8-22A5-4907-AED7-C6F498C84BDB">Newfoundland and Labrador</option>
                                                    <option value="19C75E04-538B-4C1D-BC29-D7AF094F922B">Northwest Territories</option>
                                                    <option value="67D3BB58-CDFD-4A79-A5D6-F80E705DAF77">Nova Scotia</option>
                                                    <option value="F73DCF5B-D044-478F-9101-03B063393A24">Nunavut</option>
                                                    <option value="AA7CFE9C-3133-4CF9-9BD8-C22355B9FE2C">Ontario</option>
                                                    <option value="E4A26F64-7957-4C2B-8024-ED37E2258F2F">Prince Edward Island</option>
                                                    <option value="E051617E-B437-48B5-8199-0B71342DF9DD">Quebec</option>
                                                    <option value="DF00E67D-BCF9-4ACA-8E42-2E1B8FABB233">Saskatchewan</option>
                                                    <option value="E70D06FF-E321-4061-B366-5DAFC2589F24">Yukon</option>
                                                    <option value="00000000-0000-0000-0000-000000000000">Other</option>
                                                </optgroup>
                                                <optgroup label="USA">
                                                    <option value="0400D1D6-3CB6-4443-8CE0-1477321E0DC6">Alabama</option>
                                                    <option value="C270C7A0-65DC-421C-8FD6-A596B48029A0">Alaska</option>
                                                    <option value="03BB39DD-13D7-4D8D-942F-59EE80B1F7FF">Arizona</option>
                                                    <option value="79DB47A7-400B-4538-8F50-13C1718882F1">Arkansas</option>
                                                    <option value="81DDA4BB-B00D-415C-9559-67FB2D5D79C3">California</option>
                                                    <option value="F82A187F-04F0-46C8-AC06-943BCD48F93E">Colorado</option>
                                                    <option value="05EE056D-E421-4DCC-8759-32980DC50426">Connecticut</option>
                                                    <option value="815BBD8F-BA38-49B3-9743-474966AD2977">Delaware</option>
                                                    <option value="EDC9DEC1-0DEA-49EB-9048-040ADC663015">District of Columbia</option>
                                                    <option value="ADE78F90-DB4F-46CF-A696-27A23F9A5D0B">Florida</option>
                                                    <option value="8392EE8B-4AC4-4044-9142-DD6F55B5C011">Georgia</option>
                                                    <option value="901F78CC-07C1-4F29-8FD0-D543CB445B20">Hawaii</option>
                                                    <option value="E00783C1-9B60-4C79-B777-B1B949BE00C4">Idaho</option>
                                                    <option value="CDF02314-A0BE-425D-B363-D4D75B0F8B71">Illinois</option>
                                                    <option value="75DEBB83-4BAF-452A-98D5-76C738B754A0">Indiana</option>
                                                    <option value="16A74CE1-C74B-44D5-81AC-32E2522F0F19">Iowa</option>
                                                    <option value="462CACD0-8CD4-46B6-918B-CAD07B6D41DF">Kansas</option>
                                                    <option value="066560A0-EDC3-4D13-ACDA-AC162A8A31E6">Kentucky</option>
                                                    <option value="9978F3AF-CBDF-4E32-ACC8-206BEF444C15">Louisiana</option>
                                                    <option value="C1FACE16-868C-4CD7-8385-239F8708A525">Maine</option>
                                                    <option value="526041FC-5A73-444B-9C0F-D2B6CE112F3B">Maryland</option>
                                                    <option value="307BE7A1-BA57-45EA-9C86-CC7E5533AF7C">Massachusetts</option>
                                                    <option value="3967FC32-5206-415F-828A-A6C3DD4B6E70">Michigan</option>
                                                    <option value="2C92FBC2-BCCF-46A9-9A7F-47161B20E82E">Minnesota</option>
                                                    <option value="D0A319CB-6650-4F9F-B438-B4DBDFBAD36B">Mississippi</option>
                                                    <option value="12D4BEDD-3DB5-4BE2-B465-FBA320525AE0">Missouri</option>
                                                    <option value="EC8A4E4F-800E-4C02-91CA-65EFBC6C72A5">Montana</option>
                                                    <option value="88A637CE-FF5E-4551-9D08-B7F0BA103E7E">Nebraska</option>
                                                    <option value="84BECB90-1687-4F9B-8BEB-BB26DB4C0556">Nevada</option>
                                                    <option value="C0870257-8689-497F-8B20-FC992D6224A6">New Hampshire</option>
                                                    <option value="F5616D8B-D354-4F07-995D-73EC8ACC8635">New Jersey</option>
                                                    <option value="69DE0FEA-C0E7-413D-9082-459DA977E444">New Mexico</option>
                                                    <option value="466B3439-4FBD-4370-9E4E-A28C6B1F1B5A">New York</option>
                                                    <option value="EF5B34E9-AB5F-47FF-BFF7-67A7BA44EF81">North Carolina</option>
                                                    <option value="2554FAF1-67E5-4C4C-96B6-92932A39EF91">North Dakota</option>
                                                    <option value="489EFC42-88BC-4D9D-8F8E-0BD59E5C8F9D">Ohio</option>
                                                    <option value="7FAC42B3-5BEC-4978-A39C-D1306EF916BB">Oklahoma</option>
                                                    <option value="34A216A9-5A8F-4170-B6E2-03E0E57DD16F">Oregon</option>
                                                    <option value="6925B525-96C7-4355-9FD0-8558F034AAB0">Pennsylvania</option>
                                                    <option value="7000D146-432F-4EBC-A426-2424AE513699">Puerto Rico</option>
                                                    <option value="54ADA54D-E425-447E-99D3-829CBFA50A41">Rhode Island</option>
                                                    <option value="AAC6899B-ADFB-450F-BC0C-8BB122027C89">South Carolina</option>
                                                    <option value="1A6A37F2-4B24-4792-98F7-FEE3D769CF5E">South Dakota</option>
                                                    <option value="4AED2F22-9410-4BA8-AE71-17B22DE914E6">Tennessee</option>
                                                    <option value="D35A582E-13D2-40C5-A14A-08BBB875D028">Texas</option>
                                                    <option value="CD93980F-03CD-4974-84BF-2046AC594156">Utah</option>
                                                    <option value="5AC02659-B45E-4ABA-8B1D-9B47B1384702">Vermont</option>
                                                    <option value="7044BDDE-DA59-4483-906F-405C6F05D8B4">Virginia</option>
                                                    <option value="ABAAA4C0-B98F-467A-A132-44AC862AD090">Washington</option>
                                                    <option value="53339993-416B-499B-B701-2AB45EA27A98">West Virginia</option>
                                                    <option value="312ADAEC-D31E-4897-943D-088B4D2337B9">Wisconsin</option>
                                                    <option value="A7923E16-8914-4FEB-9B55-E738C39116CF">Wyoming</option>
                                                    <option value="00000000-0000-0000-0000-000000000000">Other</option>
                                                </optgroup>
                                            </select><div class="chosen-container chosen-container-single" title="" id="VehicleLicenceProvinceID_chosen" style="width: 0px;"><a class="chosen-single">
                                                    <span>--- Please Select ---</span>
                                                    <div><b></b></div>
                                                </a>
                                                <div class="chosen-drop">
                                                    <div class="chosen-search">
                                                        <input class="chosen-search-input" type="text" autocomplete="off">
                                                    </div>
                                                    <ul class="chosen-results"></ul>
                                                </div></div>
                                        </div>
                                        <div class="col-12 col-lg-2 col-xl-2 float-star pb-2 fw-bold">
                                            Vehicle Model
                                        </div>
                                        <div class="col-12 col-lg-4 col-xl-4 float-start pb-2">
                                            <select id="VehicleModelID" name="VehicleModelID" class="form-select w-100 select2-hidden-accessible" data-select2-id="select2-data-VehicleModelID" tabindex="-1" aria-hidden="true">

                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-1-n0st" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-VehicleModelID-container" aria-controls="select2-VehicleModelID-container"><span class="select2-selection__rendered" id="select2-VehicleModelID-container" role="textbox" aria-readonly="true"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                        <div class="col-12 col-lg-2 col-xl-2 float-start pb-2 fw-bold">
                                            Colour
                                        </div>
                                        <div class="col-12 col-lg-4 col-xl-4 float-start">
                                            <select class="form-select" id="VehicleColour" name="VehicleColour">
                                                <option disabled="" selected="" value="">--- Please Select ---</option>
                                                <option value="BGE">BEIGE</option>
                                                <option value="BLK">BLACK</option>
                                                <option value="BLU">BLUE</option>
                                                <option value="BRN">BROWN</option>
                                                <option value="BRZ">BRONZE</option>
                                                <option value="CPR">COPPER</option>
                                                <option value="CRM">CREAM</option>
                                                <option value="GLD">GOLD</option>
                                                <option value="GRN">GREEN</option>
                                                <option value="GRY">GRAY</option>
                                                <option value="MLT">MULTI-COLOUR</option>
                                                <option value="MRN">MAROON</option>
                                                <option value="ONG">ORANGE</option>
                                                <option value="PLE">PURPLE</option>
                                                <option value="PNK">PINK</option>
                                                <option value="RED">RED</option>
                                                <option value="SIL">SILVER</option>
                                                <option value="TAN">TAN</option>
                                                <option value="TRQ">TURQUOISE</option>
                                                <option value="WHI">WHITE</option>
                                                <option value="YEL">YELLOW</option>
                                                <option value="UNK">UNKNOWN</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-lg-2 col-xl-2 float-start pb-2 fw-bold">
                                            Model Year
                                        </div>
                                        <div class="col-12 col-lg-4 col-xl-4 float-start pb-2">
                                            <input id="VehicleYear" name="VehicleYear" type="number" min="1900" max="2027" class="form-control">
                                        </div>
                                        <div class="col-12 pb-2">
                                            <hr>
                                        </div>
                                        <div class="col-12 col-lg-2 col-xl-2 float-start pb-2 fw-bold">
                                            Number Of Occupants
                                        </div>
                                        <div class="col-12 col-lg-4 col-xl-4 float-start pb-2">
                                            <input id="NumberOfOccupants" name="NumberOfOccupants" type="number" min="0" max="100" class="form-control">
                                        </div>
                                        <div class="col-12 col-lg-2 col-xl-2 float-start pb-2 fw-bold">
                                            Vehicle Type
                                        </div>
                                        <div class="col-12 col-lg-4 col-xl-4 float-start pb-2">
                                            <select id="VehicleType" name="VehicleType" class="form-select" style="display: none;">
                                                <option disabled="" value="">--- Please Select ---</option>
                                                <option value="1">Car/SUV</option>
                                                <option value="2">Motorcycle</option>
                                                <option value="5">Pick up truck</option>
                                                <option value="36">Bicycle</option>
                                                <option value="37">E-bike</option>
                                                <option value="38">E-scooter</option>
                                                <option value="3">Moped</option>
                                                <option value="4">Passenger van</option>
                                                <option value="6">Delivery van</option>
                                                <option value="13">Truck - tractor (transport truck)</option>
                                                <option value="11">Truck - dump</option>
                                                <option value="12">Truck - car carrier</option>
                                                <option value="9">Truck - enclosed (box truck)</option>
                                                <option value="7">Tow truck</option>
                                                <option value="28">Construction equipment</option>
                                                <option value="21">Off road-2 wheels</option>
                                                <option value="23">Off road-4 wheels</option>
                                                <option value="25">Motorized snow vehicle</option>
                                                <option value="99">Other</option>
                                            </select><div class="chosen-container chosen-container-single" title="" id="VehicleType_chosen" style="width: 0px;"><a class="chosen-single">
                                                    <span>--- Please Select ---</span>
                                                    <div><b></b></div>
                                                </a>
                                                <div class="chosen-drop">
                                                    <div class="chosen-search">
                                                        <input class="chosen-search-input" type="text" autocomplete="off">
                                                    </div>
                                                    <ul class="chosen-results"></ul>
                                                </div></div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-lg-2 col-xl-2 float-start pb-2 fw-bold">
                                            Insurance Company
                                        </div>
                                        <div class="col-12 col-lg-4 col-xl-4 float-start pb-2">
                                            <select id="CustomerID" name="CustomerID" class="form-select" style="display: none;">
                                                <option disabled="" selected="" value="">--- Please Select ---</option>
                                                <optgroup label="CANADA">
                                                    <option value="BDE74CB9-2480-4B32-ABF5-363E3A07DB63">ABORIGINAL INS. SERVICE INC.</option>
                                                    <option value="5CB91907-A1E3-4BBF-B200-04A25F783638">ACE AMERICAN INSURANCE</option>
                                                    <option value="8413FE47-344A-4AB5-A668-DB816FCCAABF">ACE INA INSURANCE</option>
                                                    <option value="CC5785DC-4410-4BB6-B907-FFB7A2FB9FCC">ADVANTAGE CAR &amp; TRUCK RENTALS</option>
                                                    <option value="06D5C790-646F-43C0-A0E7-9C29A760912B">AEROPORT TAXI &amp; LIMOUSINE</option>
                                                    <option value="BF1FF684-90B4-45C4-A91C-EF50AC4699FB">AFFINITY CAR &amp; TRUCK RENTALS</option>
                                                    <option value="2FC0B11A-B243-4745-8E3E-33C14FDC5B67">AHA INSURANCE CO</option>
                                                    <option value="F32D253B-BB10-46C7-A09A-56A259EE8B00">AI TRANSPORT AM. INS CO</option>
                                                    <option value="81BAB276-42C5-421E-9364-EA1C1C4C3ECC">AIG INSURANCE COMPANY</option>
                                                    <option value="9E8D9534-79B6-46BB-B33D-70587D25A09D">ALAMO RENT A CAR (CANADA) INC</option>
                                                    <option value="341CBDCF-76BA-4900-BDB4-F5CAFFCAFE43">ALBERTA MOTOR ASSOCIATION</option>
                                                    <option value="05C40120-3542-47BA-A689-D1B43D6A817A">ALECTRA UTILITIES</option>
                                                    <option value="8EDD275D-0B9C-4698-AC41-A2001EB94005">ALGOMA MUTUAL INSURANCE</option>
                                                    <option value="8E7DE837-42FC-4125-9170-067440B8E0DB">ALLIANZ INSURANCE</option>
                                                    <option value="3A8EB5D1-D457-4FD5-98A6-081F137D5462">ALLSTATE INSURANCE</option>
                                                    <option value="41CEEC01-D717-4375-AF6D-3864D4A8F4FF">ALPINA INSURANCE</option>
                                                    <option value="EAE58009-A759-4BA4-B4D9-0FC4E39B4F33">AMERICAN BANKERS INSURANCE</option>
                                                    <option value="E7C9A48C-02BA-429D-8D07-BFC1CE4EEFDE">AMERICAN HOME</option>
                                                    <option value="4E99F551-90E2-485D-8BA1-61E0684DECB0">AMERICAN NATIONAL FIRE INS.</option>
                                                    <option value="C814260B-DE10-4FCD-AB2C-24B51313DBB8">AMERICAN SELECT INSURANCE COMPANY</option>
                                                    <option value="DDAC4888-2ACD-4E07-88C1-E1B858823593">ANGLO CANADA</option>
                                                    <option value="8255061B-9D6C-49A2-AC96-FCB333BB9F2A">APOLLO FLEET MANAGEMENT</option>
                                                    <option value="954301A6-9771-4AD9-B201-602B286611C2">APPROVED CAR &amp; TRUCK RENTALS</option>
                                                    <option value="554405A2-AA5E-4AA5-AF9A-B030E389A48F">ARCH INSURANCE COMPANY</option>
                                                    <option value="0F4CE31F-8DD1-42BD-AE3A-A2A64FEAFC18">ASCENTUS INSURANCE</option>
                                                    <option value="FD5044B7-7A93-4F7E-9181-A77100644150">ASSURANCE CONCORDE INC.</option>
                                                    <option value="B6AE5355-753E-4F13-B99D-EFFA03C81E95">ASSURANCE GENERALES BANQUE NATIONALE</option>
                                                    <option value="30076F06-464C-4CE1-8CA4-D6F0B62B3041">ASSURANCE GENERALES DES CAISSE DESJARDINS</option>
                                                    <option value="BFE22454-9F1B-40DB-93E5-D07751D74206">ASSURANCIA GATINEAU INC</option>
                                                    <option value="D63F231A-C337-42EE-B79F-A1857696FAD1">ASSUREWAY INSURANCE</option>
                                                    <option value="5FD962A2-4041-4E07-9907-C430BBEF5E78">AUGUST GROUP RISK MGNT LTD.</option>
                                                    <option value="D22D6434-3C03-473C-89AD-3883AAAE8C4F">AUTO RENTAL INSURANCE</option>
                                                    <option value="8EDF4376-A71C-4E11-ADF0-9B6718BB3577">AVIS CAR INC</option>
                                                    <option value="99AF479F-D7F3-4C17-BEF7-5F1088CD2A90">AVIS RENT A CAR (BA)</option>
                                                    <option value="0200A3F6-3646-4431-B151-681F531FE8EB">AVIVA ELITE</option>
                                                    <option value="14453F51-EFBC-4146-80E2-F5EA3F032B71">AVIVA GENERAL INSURANCE</option>
                                                    <option value="BCE291E3-2B0C-405B-975A-632CB9CEAE9D">AVIVA INSURANCE</option>
                                                    <option value="671EA277-F163-4DD5-8A4C-55CAB3F62730">AVIVA TRADERS GENERAL</option>
                                                    <option value="BAF56632-A45E-418B-96AD-A54B66E5FFA5">AXA ASSURANCES</option>
                                                    <option value="262778C5-D44F-4851-9DC5-84D531DB977B">AXA GLOBAL RISKS</option>
                                                    <option value="17D26E29-6749-41F4-8552-297262F69ED9">AXA INSURANCE</option>
                                                    <option value="CCCE7375-21D0-4F55-8B47-FDF8590D6E25">AXIOM MUTUAL INS CO</option>
                                                    <option value="2C061A62-7E08-4C5E-A066-4B03584DD213">AYE CO. LTD. O/A CENTRAL TAXI</option>
                                                    <option value="53C75D94-1E96-4E0F-A14A-8D7C3EFC763D">AYR FARMERS MUTUAL</option>
                                                    <option value="B71DE7E1-498B-42F7-8D6C-7ECF5D98E275">B&amp;G FLEET MANAGEMENT</option>
                                                    <option value="EADE6EE0-1176-46DD-98C9-C5646993F4F1">BANQUE NATIONALE ASSURANCE</option>
                                                    <option value="9B800AFB-B6A8-4BE5-8EB4-0C109B190D45">BAY OF QUINTE MUTUAL INS.</option>
                                                    <option value="58BD85AA-6716-4EA1-8FC6-92FA271269D3">BCM INSURANCE CO.</option>
                                                    <option value="3C15A7FC-8490-4F19-8303-27F5364C563E">BELAIR</option>
                                                    <option value="97534EDA-B211-4FCC-9097-F139125BF6E2">BELL CANADA</option>
                                                    <option value="E61669C9-E5DF-451D-A78C-E8BF5BB42F7B">BENEVA INSURANCE</option>
                                                    <option value="8780EC89-DE07-41A8-9091-B50C719D81F0">BENNETT SEAMAN</option>
                                                    <option value="3CF6FBBA-3263-4F9C-9D1B-491C08F5EF8E">BERKSHIRE HATHAWAY SPECIALTY</option>
                                                    <option value="0CCBEF48-70CD-4D18-B037-E0AC2E73ED4F">BICYCLE</option>
                                                    <option value="5AE78EFA-8537-484D-97E7-33EC301B6D9A">BLANSHARD MUTUAL INSURANCE CO.</option>
                                                    <option value="465C2C1D-3D43-4A77-BAC8-14C38496FFEA">BLANSHARD MUTUAL(BR)</option>
                                                    <option value="7152A6AB-9393-4E5C-9641-D4CB1355B142">BMC INSURANCE</option>
                                                    <option value="45E4768A-5C31-4903-836E-5BAEDE496FEF">BOOMERANG ASSURANCES</option>
                                                    <option value="84E4F80E-2B9F-4B62-B9E1-0A23710AD9A1">BOW VALLEY INSURANCE</option>
                                                    <option value="DA2781A8-7900-4D14-9096-868A7F4B2B9E">BRANT MUTUAL</option>
                                                    <option value="9D02576E-2976-42C9-B2CB-C7A0B9F23C03">BRISTOL RENTAL LTD.</option>
                                                    <option value="F93FE063-0A23-4BF8-80C5-C6D18C0E199C">BUDGET  CAR RENTAL</option>
                                                    <option value="3EE7E138-C110-4A8E-836A-F0E7D2F60E05">C.N.R.</option>
                                                    <option value="904E18FE-C4AD-4DDE-8DF8-C5CA70CE1F17">CAA INSURANCE COMPANY</option>
                                                    <option value="F4BDBBFE-5B33-4B61-A2EB-2D3EB3AB0FC6">CANADA LIFE INSURANCE COPR</option>
                                                    <option value="DBBA5A54-2042-4753-9D25-FFC3683DB02D">CANADIAN DIRECT INSURANCE</option>
                                                    <option value="F18597D6-3435-435A-87A2-5D4AD9852B50">CANADIAN GROUP UNDERWRITERS</option>
                                                    <option value="D16C5666-2E43-473F-A038-01877AFC5F8A">CANADIAN HOME INSURANCE</option>
                                                    <option value="5693A6E6-AEA5-47B6-93D8-83A10CFE2717">CANADIAN PACIFIC RAILWAY</option>
                                                    <option value="23893616-9ACC-4504-99F8-7497B68068E9">CANADIAN REINSURANCE</option>
                                                    <option value="A3E07A40-0DAB-4969-A757-886C35FC1708">CARADOC DELAWARE MUTUAL FIRE</option>
                                                    <option value="D6277660-4189-41DB-A14F-C5ADAC4C8D14">CARADOC TOWNSEND MUTUAL</option>
                                                    <option value="B21EBBDF-04F0-4269-8816-2866DABE299C">CASH ON DELIVERY</option>
                                                    <option value="A7928212-F251-4D0A-8B6D-D5856DFB2ED9">CAYUGA MUTUAL FIRE INSURANCE</option>
                                                    <option value="C54961E8-9166-44C9-8207-34283721BF93">CENTRAL UNDERWRITERS INC.</option>
                                                    <option value="0966726A-C994-44D0-8D13-BCF9F6CEFC60">CERTAS  DIRECT INSURANCE COMPANY</option>
                                                    <option value="C43AD751-4E7C-4D92-9EAC-238E5C5018FC">CERTAS HOME &amp; AUTO INS</option>
                                                    <option value="DCADE9DD-9B0F-4458-AB78-D7739DA861A2">CGU INSURANCE</option>
                                                    <option value="3875CE95-98C5-4951-801B-DDEBAF05E1B4">CHARTIS INSURANCE CO.</option>
                                                    <option value="CD03F2D1-119F-4C77-8D0D-9B27AB37ADD7">CHATEAU INSURANCE</option>
                                                    <option value="8EEA92F1-34F5-46F7-9286-57492FAC946D">CHIEFTAIN INSURANCE</option>
                                                    <option value="44372A34-ACF0-4FAB-83DA-CE01E736E70D">CHUBB INSURANCE</option>
                                                    <option value="0DDD2A04-433E-4F2C-821A-6023475A6AB3">CHUBB INSURANCE COM</option>
                                                    <option value="FD2E93A9-0FA6-4333-A02A-C029883AC133">CHURCH INSURANCE CO.</option>
                                                    <option value="E6FBEF1F-E143-4D50-A4D2-2F43B5609F4A">CIBC INSURANCE</option>
                                                    <option value="B533C8E6-1B98-4A37-9C47-90E24702210A">CITADEL GENERAL ASSURANCE</option>
                                                    <option value="8BB979A4-EBC4-42A8-A7F7-49AFEDBD602A">CITY OF GUELPH</option>
                                                    <option value="2899627F-EA87-4388-9364-9D76E7444C52">CITY OF OTTAWA</option>
                                                    <option value="9A77C276-09B7-44F1-9ADC-DF0CDFE09044">CITY VEHICLES</option>
                                                    <option value="916A0998-C435-4BF0-A9E3-27F430E3EEAD">CLUB ASSURANCE INC</option>
                                                    <option value="87953256-F0A7-41AE-9DBD-05724405CBC0">CNA CANADA</option>
                                                    <option value="B06A2B91-2E7A-43DE-9B15-78EDBB2F6553">COACHMAN</option>
                                                    <option value="EA6A22FA-8EF7-4602-82D7-A9583B5AF11F">COLONIAL FIRE &amp; GENERAL INS.CO. LTD</option>
                                                    <option value="9B99AB78-C488-4679-89C7-B6C72A365C0D">COMBINED INS. CO. OF AMERICA</option>
                                                    <option value="D7E2FEC4-9580-4724-838A-230940B3D671">COMMERCE &amp; INDUSTRY</option>
                                                    <option value="F6CFF33D-CA11-4A41-8808-E9F34D220779">COMMONWEALTH INSURANCE COMPANY</option>
                                                    <option value="D0D1D6AC-11F5-4CE2-8D89-37BA1FA5D5EF">CONSERVATIVE MENNONITE</option>
                                                    <option value="5D23F1EF-F30F-4B0D-A204-737B8294766C">CONSTITUTION INSURANCE</option>
                                                    <option value="BB0171BC-8F3A-4A4E-93D4-20FC2D22EFF0">CONTINENTAL CASUALTY</option>
                                                    <option value="3C320A93-0375-4536-910E-300CD098C395">COOPERATORS CANADA</option>
                                                    <option value="EF414E41-7FF9-470F-8958-011E4DA52E04">CORE INSURANCE</option>
                                                    <option value="333ACB27-23C5-4030-9CB0-BD97C2BB4F04">CRAWFORD</option>
                                                    <option value="99DCCBCD-6DB3-4890-A5D2-EADB9A8A4F23">CRAWFORD LOSS ADJUSTERS</option>
                                                    <option value="B93CB144-1E23-4F81-B915-E7BE8F4F74AC">CT DIRECT</option>
                                                    <option value="96FAAF34-38B1-4717-B846-203FF83E4E07">CUMIS</option>
                                                    <option value="24E7EFA1-FB1E-483B-8AB0-65E04836F9DE">CUNNINGHAM LINDSEY CANADA LIMITED</option>
                                                    <option value="5256053D-C454-441A-8725-5E93736B3C0B">DEFINITY INSURANCE COMPANY</option>
                                                    <option value="29CA4B91-3F98-45D8-8F6F-670786C94945">DESJARDINS GENERAL INSURANCE</option>
                                                    <option value="66A3FCA6-D378-435D-97FE-D4B45DB1D3B8">DOLLAR THRIFTY CAR RENTAL</option>
                                                    <option value="4D916C2D-593A-4FB9-9788-14E7A368252D">DUFFERIN MUTUAL</option>
                                                    <option value="6305C8A8-7AD9-4186-A504-4095C6D3735C">DUMFRIES MUTUAL INS</option>
                                                    <option value="07F033D4-FBF9-4BD9-AC9F-1F55E04B76AE">E-CARS NORTH BAY</option>
                                                    <option value="2F558F9B-0523-403C-B020-E5949887E101">ECCLESIASTICAL</option>
                                                    <option value="132A7567-F1B8-4B04-A2E9-600DACAB69C6">ECHELON INSURANCE</option>
                                                    <option value="825C6E57-5A20-4F63-B8B1-47CD626C8D62">ECONOMICAL INSURANCE</option>
                                                    <option value="E25C942C-86CA-4D0F-B342-A731F4D54284">EDGE MUTUAL INSURANCE</option>
                                                    <option value="AEC064D7-2582-43BE-921E-9CE0F22A812F">ELCO INSURANCE</option>
                                                    <option value="7451698D-4970-453D-B3A4-4DC0D7FC9518">ELECTRIC INSURANCE COMPANY</option>
                                                    <option value="69FFE2A9-CA69-4DE4-BAB7-C1C2A135A78D">ELITE INSURANCE COMPANY</option>
                                                    <option value="92D08651-D697-44A0-98EB-4087D1AA903C">ELMA MUTUAL</option>
                                                    <option value="324417D7-BD96-495C-B1DE-C675B61AC506">ENERGI OF CANADA LTD</option>
                                                    <option value="F1BC1B4B-4D57-4AF9-B567-1C2148588741">ENOVA POWER CORP</option>
                                                    <option value="B403DC8C-F1AF-454B-A938-BBE545ABAFBC">ENTERPRISE  CAR RENTAL</option>
                                                    <option value="9C08FBBF-F9F5-47BA-A0F7-B419EC707EA0">ENTERPRISE CAR RENTAL</option>
                                                    <option value="E754ADAC-66FF-46E9-A621-64426F78EAAC">ENTERPRISE CAR RENTALS</option>
                                                    <option value="EA77916C-7ABB-4028-A0C1-634C81FAF984">ERIE MUTUAL INSURANCE</option>
                                                    <option value="7D72B8D5-F60F-49C4-956C-177BE1E2D10A">EVEREST INSURANCE CO</option>
                                                    <option value="EAAA9C67-C985-4396-863D-954CEB874B3C">FACILITY ASSOCIATION</option>
                                                    <option value="BB95A08F-EE9A-4A29-8171-D468D056524E">FARMERS MUTUAL</option>
                                                    <option value="CCDB37B0-65E5-4E82-8B22-F7F79F267C2D">FEDERAL</option>
                                                    <option value="CE5693E6-6896-453A-8D10-8DEE2DADD7E8">FEDERATED INSURANCE</option>
                                                    <option value="8D1A89A4-8A28-44FC-B315-8FE18D90E1D8">FEDERATION INSURANCE</option>
                                                    <option value="DC3E4F6B-012C-4C4B-A8C4-1C7BA635790C">FENCHURCH GENERAL INSURANCE</option>
                                                    <option value="669BAB87-B2B2-40AC-9799-75644DFBE310">FIRST CANADIAN INSURANCE CORP</option>
                                                    <option value="F65B2C96-3CEF-4A11-8476-6AD6A5F1A22E">FORMOSA MUTUAL</option>
                                                    <option value="65758DDF-731E-45E2-9F9C-E9E5F46DA072">FORTRESS INSURANCE COMPANY</option>
                                                    <option value="FA3E7EE2-4092-4011-9EFE-F518D80FD913">FORWARD INSURANCE MANAGERS</option>
                                                    <option value="DE2975F3-E5FA-4291-B72B-73DF6073DE9A">GCAN INSURANCE COMPANY</option>
                                                    <option value="0B801E06-29A1-47BA-828A-B44C0F7AC0B8">GERLING GLOBAL GENERAL INS CO.</option>
                                                    <option value="6C376221-652B-42B8-9C0B-5FFF02F62BC8">GERMANIA MUTUAL INSURANCE</option>
                                                    <option value="EB00A0F3-42A8-423B-845C-08157D51CD62">GLENGARRY MUTUAL INSURANCE</option>
                                                    <option value="AE5441EB-CA37-4716-8F08-6F879BB3A26D">GMAC INSURANCE</option>
                                                    <option value="5D7092E6-417B-4125-A594-B36950789CA9">GORE MUTUAL</option>
                                                    <option value="6DA3ED8E-7F71-4979-96A9-FADEBC7CA887">GOVERNMENT OF CANADA</option>
                                                    <option value="431AE841-01C7-43CB-83E5-BA72E425B03B">GRANDBRIDGE ENERGY</option>
                                                    <option value="2F750DAB-B2ED-4764-A82D-38CF2D7E5517">GRENVILLE MUTUAL INSURANCE</option>
                                                    <option value="DC99A687-D508-47F7-B711-B7DF12F14813">GREY &amp; BRUCE MUTUAL</option>
                                                    <option value="EA4DEDD1-8395-4FAA-A3D1-C1A77E0594B7">GROUPE COMMERCE</option>
                                                    <option value="AD0242EC-D890-4311-810B-751737BBF547">GUARANTEE CO.</option>
                                                    <option value="5DC66291-7534-4D1A-AEA5-8E216D65768F">GUARDIAN INSURANCE - TORONTO</option>
                                                    <option value="C47D246D-B089-4FBF-B832-B03D69FB767B">HAGERTY INSURANCE COM</option>
                                                    <option value="A60546A7-EB53-49CA-B748-34329D1D635B">HALTON RECYCLING (BR)</option>
                                                    <option value="534C3B70-BECA-452C-A8A9-47C5C207CD1D">HALTON RECYCLING LTD.</option>
                                                    <option value="D0B52B25-676F-4DC4-9BD2-0CC9A47EE73A">HALWELL MUTUAL  INS</option>
                                                    <option value="9534C54F-1484-46B9-9992-719E2DAFA6DA">HARTFORD FIRE INSURANCE</option>
                                                    <option value="70FECB75-9885-4B01-B6BF-3F61109B689E">HAY MUTUAL</option>
                                                    <option value="F6C752E9-C960-4EA1-ADF0-A33C63730DF5">HB GROUP</option>
                                                    <option value="A9B54A33-E280-498C-ADB7-1B45DEB4DA1A">HD MUTUAL INSURANCE</option>
                                                    <option value="DFA5EF93-F37D-4A15-AB55-050DE0B8CE1A">HEARTLAND  MUTUAL  INSURANCE</option>
                                                    <option value="0C1515B0-8873-4FDB-A1D9-0209C1E315EB">HEATH LAMBERT GROUP INT'L</option>
                                                    <option value="063FF91E-4400-4E89-A2CA-D221B75E8FA8">HORACEMANN</option>
                                                    <option value="7AAB0CA9-1739-41BB-AD64-352F9307AE77">HOWARD MUTUAL</option>
                                                    <option value="90F48208-ABFD-45B4-8E71-C9DCEBC7C616">HOWICK MUTUAL INS</option>
                                                    <option value="6927EC58-6732-460B-A540-F44072B5F571">HT&amp;C MUTUAL INS. COMPANY</option>
                                                    <option value="430BB84A-FE87-4D12-9D35-61572CC592D0">HTM (HAMILTON TOWNSHIP MUTUAL)</option>
                                                    <option value="3DBA38C4-74C0-41FA-8738-FC61E622C595">HYDRO OTTAWA LIMITED</option>
                                                    <option value="B0D8C357-FA16-4838-B8C5-B58B0AA448A7">ICPEI</option>
                                                    <option value="75F49F5C-A757-47AA-B168-B82C3A2C5DEE">INDEPENDENT INSURANCE MANAGER</option>
                                                    <option value="A9EDA32F-D52A-483A-AB3C-974093824239">INDUSTRIELLE ALLIANCE</option>
                                                    <option value="31FC6421-CA91-4155-BE23-C7DC3C265222">INOVESCO</option>
                                                    <option value="3CE872E4-2889-453E-B5B0-002165206D45">INSURANCE COMPANY OF PEI</option>
                                                    <option value="C4F05E55-CEE6-4327-BC27-9720D937DE64">INSURANCE CORPORATION OF BRITISH COLUMBIA</option>
                                                    <option value="A8A44D23-67EC-4D31-917A-6D25C4FDE97A">INSURANCE CORPORATION OF NEWFOUNDLAND</option>
                                                    <option value="D087A5C2-47D0-4E89-966F-304D8EB0AC6B">INSURANCE SEARCH BUREAU OF CAN</option>
                                                    <option value="77CE0CDE-AFAD-4435-A944-5AC7B81026F4">INTACT INSURANCE</option>
                                                    <option value="DE89547B-99C7-4E3E-AAF0-5A2F39E044CA">INTERNATIONAL HANNOVER</option>
                                                    <option value="E49C59C4-17C3-455B-B6AE-B69F97C35C41">JEVCO INSURANCE</option>
                                                    <option value="57632006-15FC-425F-91B1-255518C8998F">KEMPER GROUP</option>
                                                    <option value="DC65F286-0205-4D6C-9AF3-74F5AA264E73">KENT &amp; ESSEX MUTUAL</option>
                                                    <option value="D35D443C-0C79-4FEA-B9AF-038C0696613B">KENT NORTH FIRE</option>
                                                    <option value="1302789E-8831-4965-BE95-6A7B0EF8FCF5">KINGSWAY GENERAL</option>
                                                    <option value="BC988B05-FA8D-4FBF-B9F0-6700B3F14562">KITCHENER WILTMOT HYDRO INC</option>
                                                    <option value="59F7EB4C-EBD2-434E-B999-384E2E5B73D1">L'UNION CANADIENNE</option>
                                                    <option value="A9C0A237-7A4F-4226-8567-6176A4CF1781">L'UNIQUE ASSURANCE</option>
                                                    <option value="4281C061-0084-4DB3-9ACA-69DC8F525652">L&amp;A MUTUAL</option>
                                                    <option value="5740E2A6-37CE-4C7A-B437-0A67CE35C986">LA AUTO ET HABITAION</option>
                                                    <option value="51F1E1F9-F319-4B98-8DBE-D23242766423">LA CAPITALE ASSURANCE GENERALE</option>
                                                    <option value="2372D4D7-BE8B-4CBC-A5D3-4AA560565804">LA COMPANIE D'ASSURANCE MISSISQUOI</option>
                                                    <option value="C33E604A-163F-41DE-9A55-917CD62D2517">LA SOUVERAINE COMPAGNIE</option>
                                                    <option value="0EAC1232-A3F3-45A7-9CCE-DC7E7D3E80F4">LAMBTON MUTUAL INSURANCE CO</option>
                                                    <option value="19E217CD-DF6D-4CEF-81EE-A764D94EBA20">LANARK MUTUAL INSURANCE</option>
                                                    <option value="ABD82E74-5302-4612-8074-A3D746846808">LANGDON INSURANCE</option>
                                                    <option value="4DC2D880-98B9-4DEB-9E20-C9DF69B80F9E">LEDOR MUTUELLE D'ASSURANCE</option>
                                                    <option value="0957B16D-99D5-41C7-8DE2-8573C74F12E0">LIBERTY INSURANCE</option>
                                                    <option value="56158EED-C000-4E21-89FC-0D2B9249B39D">LIBERTY INTERNATIONAL</option>
                                                    <option value="C8E243CD-362F-4C28-A4FA-3618F9A8C394">LIBERTY MUTUAL</option>
                                                    <option value="84759757-0458-49F2-9573-F9E93B6D8F1B">LIBERTY MUTUAL</option>
                                                    <option value="6B413FEB-7B0F-468D-A8CD-361415205DB5">LLOYD'S UNDERWRITERS</option>
                                                    <option value="BD514A9D-3F88-4D7F-B7E4-6B9E808015E3">LLOYDS OF LONDON</option>
                                                    <option value="10259425-4075-4D6D-BE70-462A86F0FBAD">LOBO MUTUAL</option>
                                                    <option value="C415EBC1-AECB-4BA8-8DC2-440CCB142F42">LOMBARD CANADA</option>
                                                    <option value="9AF626B7-8D80-4C77-8DFE-9EFCCE0B6A1B">LONDON HYDRO</option>
                                                    <option value="416D2BC3-7496-4B38-9009-7559A92D5307">LONDON TOWNSHIP MUTUAL INS</option>
                                                    <option value="369509D4-B5D7-46ED-8DB9-6DAE6BEE4CA3">LONDON TRANSIT</option>
                                                    <option value="440D7A79-D7B0-4C4E-8BEF-B8DCBF50367A">LOWNDES LAMBERT ONT. LTD</option>
                                                    <option value="B9A81D44-C170-4FC4-A59B-1D4061DE0F5E">LUMBERMENS MUTUAL</option>
                                                    <option value="5571CC99-4405-46B5-B9FC-3BC1006CC492">LYNX INSURANCE UNDERWRITERS INC</option>
                                                    <option value="DDB99906-89A9-4E6A-8FFC-79B8D713779D">MANITOBA PUBLIC INS.</option>
                                                    <option value="DBE07DB9-D11D-4EE5-B748-EA4CDF76EBFB">MAPLE MUTUAL INSURANCE</option>
                                                    <option value="9B4058F9-3CFA-4403-B20A-0FD881FE1A5A">MAPLEX</option>
                                                    <option value="3FA5DDB6-9B65-491E-8FCB-FE62FE00DCCB">MARKEL</option>
                                                    <option value="E1AD5057-2C15-4D00-A306-49117F4C6C34">MASTERS INSURANCE LTD</option>
                                                    <option value="592F4234-5450-46DD-A9F3-5157CBAB3E6A">MCFARLAN ROWLANDS</option>
                                                    <option value="B820B76B-549A-4457-8B97-D343AB6CF73E">MCKILLOP MUTUAL</option>
                                                    <option value="CE114BB4-E3A6-431E-B806-5F08788978D9">MCLARENS TOPLIS - HAMILTON</option>
                                                    <option value="B6093052-581E-4057-A3BF-1FAF2B8D3A81">MCLARENS TOPLIS LONDON</option>
                                                    <option value="E4764975-B10F-47C0-952D-5471C5BFA589">MENNONITE MUTUAL INSURANCE</option>
                                                    <option value="B9DBDED7-8483-463F-A965-05ACDFDE6A3B">METRO GENERAL INS. CORP.</option>
                                                    <option value="98493488-C21B-4DDD-93BE-587A73EE389D">MIDDLESEX MUTUAL  INSURANCE</option>
                                                    <option value="D16FA4D0-6419-4502-B586-347FEE47966A">MILLENIUM INSURANCE CORP</option>
                                                    <option value="EA561AD5-F613-484D-9104-01B97B1E6DB1">MISSISQUOI</option>
                                                    <option value="3B55E948-9F6B-49FC-B5D6-0056EE649470">MITSUI SUMITOMO INSURANCE COMPANY LTD.</option>
                                                    <option value="A722FC3D-0461-4E3F-B62B-3D5275EC011F">MODERN SPECIALTY INS. LTD</option>
                                                    <option value="CA6EB9EE-3BB4-444C-9949-2D0D3E1BF25F">MUNICIPAL ELECTRIC ASSOC. RECIPROCAL INSURANCE</option>
                                                    <option value="8B09D447-B453-43FF-A964-E6706969B707">MUNICIPAL INSURANCE EXCHANGE</option>
                                                    <option value="235D680F-5E4F-4837-9A60-9B6418366433">MURDOCH GROUP INC</option>
                                                    <option value="358D97D0-5BF8-4A7A-BE51-3EA25546F688">MUTUAL ONE</option>
                                                    <option value="74D05244-86A8-441C-8B78-1CDE57962481">NATIONAL BANK INSURANCE</option>
                                                    <option value="558C64F8-08FD-4ACE-AB94-9E700A427240">NATIONAL CAR RENTAL</option>
                                                    <option value="70F02521-2054-4F6E-9858-3D2EFA84ED87">NATIONAL INTERSTATE INSURANCE</option>
                                                    <option value="EC7A2747-4194-4FA4-A5D1-B0804FA0870E">NATIONAL LIABILITY &amp; FIRE INS</option>
                                                    <option value="BE03CAD1-BDD9-4A45-A5BC-1358E42E6DE2">NED INSURANCE</option>
                                                    <option value="AAA28646-34AE-4B8D-881E-15172F436C47">NED INSURANCE</option>
                                                    <option value="938A4D20-4521-49C1-8711-4407FBCB5D62">NEW ENGLAND GUARANTEE INSURANCE</option>
                                                    <option value="72A9C8FB-AB38-4C12-8002-502CA1285841">NIPPON FIRE &amp; MARINE INSURANCE</option>
                                                    <option value="9E00FC0E-1F34-4177-B7C2-DF097B0D384B">NIPPONKOA INSURANCE CO. LTD.</option>
                                                    <option value="3D982A7E-15CE-4764-913E-B1E57AD0ADA2">NOBLE CAR &amp; TRUCK RENTALS</option>
                                                    <option value="78CEA1BB-76EB-474D-877D-73806C38FC1B">NORDIC INSURANCE COMPANY</option>
                                                    <option value="17DFC748-8FEE-4809-B072-A66AE18C487D">NORDIQUE INSURANCE</option>
                                                    <option value="0DF0D356-E3E8-446C-9C16-F6AC2CE02C1F">NORFOLK MUTUAL</option>
                                                    <option value="24DC63A8-9ABA-4F51-B03D-EA7DE1BA1EE7">NORTH BLENHEIM</option>
                                                    <option value="AD68370E-AC8B-4575-9AC6-C7DD9DDF4A93">NORTH KENT MUTUAL FIRE INSURANCE</option>
                                                    <option value="F4AEFB89-FCF5-4C1A-942B-EFAAB71A0088">NORTH WATERLOO FARMERS</option>
                                                    <option value="2AC14110-766D-4D4E-A729-EE7D1E961998">NORTHBRIDGE  INSURANCE</option>
                                                    <option value="36D90050-86BD-413D-8F3F-4839358DEDF8">NORTHBRIDGE COMMERCIAL  INSURANCE</option>
                                                    <option value="33784A37-ADE7-420B-AC0A-35E92C229424">NOVA MUTUAL INSURANCE</option>
                                                    <option value="2BC73F33-34E6-4652-B309-D95BE0AB5156">NOVEX  INSURANCE COMPANY</option>
                                                    <option value="7FE4E8E2-2790-483A-B4A4-5A8205499619">OLD REPUBLIC</option>
                                                    <option value="B1A9DFF9-60B4-49A7-A91E-0302FFD45A28">ONLIA INSURANCE CO</option>
                                                    <option value="B48A9F57-E530-4237-ACC0-4A6E96588225">ONTARIO MUNICIPAL INSURANCE EXCHANGE</option>
                                                    <option value="80E6A51E-E918-4DDE-9CA2-7936611162B4">ONTARIO SCHOOL BOARDS INSURANCE EXCHANGE</option>
                                                    <option value="072BD16E-48C5-4192-B34C-60A96E7FC158">ONTARIO TEACHERS INS. PLAN</option>
                                                    <option value="892D830F-88A9-4D70-8D54-C417883C2E35">OPTIMUM INSURANCE</option>
                                                    <option value="124342E4-6577-44CD-BB01-1405CFF5C776">OUELLET FILLION ASSURANCE</option>
                                                    <option value="001F520A-097C-4766-B33F-F78766EFCEE1">OXFORD MUTUAL INS. CO.</option>
                                                    <option value="4796A296-566F-4FFB-BBC0-8E546B7D0574">P &amp; D INSURANCE</option>
                                                    <option value="BB8809E2-261E-4849-AF50-E79C8CC89FF7">PAFCO INSURANCE</option>
                                                    <option value="6000C61A-DAB3-41D9-B8E0-E306CD299CC8">PEACE HILLS GENERAL INSURANCE COMPANY</option>
                                                    <option value="A7EB7500-980C-4161-9E84-33F32E389939">PEDESTRIAN</option>
                                                    <option value="CEAC1947-D3EE-4A7E-A510-C3D7D5529219">PEEL MARYBOROUGH MUTUAL</option>
                                                    <option value="98AB6EBC-AB4F-4E8E-937E-758F306B5602">PEEL MUTUAL</option>
                                                    <option value="AF198551-85EB-4A6A-B203-75E5E52099ED">PEMBRIDGE</option>
                                                    <option value="51116ED5-80AA-4EEC-935F-6AE635DD18EB">PEOPLEPLUS INSURANCE COMPANY</option>
                                                    <option value="82CC13C3-7369-4A87-854C-7C66D34B6523">PERTH INSURANCE</option>
                                                    <option value="4B012ED6-3700-4439-83F1-679EDAD86F28">PILOT INSURANCE</option>
                                                    <option value="61EAA1D8-A284-4362-B575-190C554FA453">PMT ROY ASSURANCES ET SERVICES</option>
                                                    <option value="E406D51C-CB37-46FB-A143-F93DABD4E0AC">PORTAGE LA PRAIRIE MUTUAL INS</option>
                                                    <option value="6B1C9376-256A-42C3-A44C-C46810DE89E2">PREMIER INSURANCE UNDERWRITING SERVICES</option>
                                                    <option value="5895D8EB-0DE9-4A7A-9AF1-0C7D8B490CB8">PREMIER MARINE INSURANCE</option>
                                                    <option value="4E89D954-4DF3-432B-959F-275092D1B1B0">PREPAID</option>
                                                    <option value="B1E42403-4550-43A4-81E9-10EC97EA229A">PRIMEGUARD</option>
                                                    <option value="39B63117-6B32-4A68-AE8A-61C031D1C976">PRIMMUM INSURANCE COMPANY</option>
                                                    <option value="401204CE-35AD-4F09-B217-6C2BC8CD4069">PROMUTUEL</option>
                                                    <option value="381A924D-5CDF-486E-B3C6-FC3B17DCB966">PROMUTUEL BOREALE</option>
                                                    <option value="BB83E637-C1F2-4FB7-852F-A3DCC3D443C8">PROMUTUEL COATICOOK-SHERBROOKE</option>
                                                    <option value="3086619B-910E-45FC-B623-0D0EE6DCED42">PROMUTUEL DU LAC AU FLEUVE</option>
                                                    <option value="F991B8B4-5492-43AF-BF08-80D5993DD647">PROMUTUEL HAUT ST-LAUREUT</option>
                                                    <option value="26A82C51-9114-4769-B82A-A824358EC53B">PROMUTUEL LANAUDIERE</option>
                                                    <option value="A096154A-DFAF-41AC-A299-BEE25377A62C">PROMUTUEL LES PRAIRIES</option>
                                                    <option value="9B5BD4F0-F40E-4B91-AAA3-26CA4FED9517">PROMUTUEL ROUYN-NORANDA-TERMISCAMINGUE SOCIETE</option>
                                                    <option value="D61C10D9-C388-4CE8-ADAC-EF603B822594">PROMUTUEL VALMONT</option>
                                                    <option value="7CCA2310-C17B-4FDB-8DEB-53F53F4E527E">PROMUTUEL VAUDREUIL</option>
                                                    <option value="0BA360B2-8425-46D3-989A-7DB24AAE7193">PROMUTUELL L'ABITIBIENNE</option>
                                                    <option value="AB04061D-EDE8-4F47-9C8E-B30A03912837">PRYSM</option>
                                                    <option value="98480FCB-20B9-43D6-9EE1-E239DB538CA7">QBE INSURANCE COMPANY</option>
                                                    <option value="3183EB12-5A0C-448F-B270-A16C32C2B756">RANGER INSURANCE COMPANY</option>
                                                    <option value="09A1EC0F-2D80-4726-967D-DFE72B946192">RBC INSURANCE</option>
                                                    <option value="2A9D04FE-D016-43D2-8D03-ADCFCAA2404A">RELIANCE</option>
                                                    <option value="05402EE6-56E4-4DF5-A84C-12197B1960E6">REPUBLIC WEST</option>
                                                    <option value="4CEF7C0E-DEAB-4C06-BF34-EDC2353DDE80">REPUBLIC WESTERN INSURANCE OF ARIZONA</option>
                                                    <option value="AFC346BE-93D8-487B-A248-D49F9378F417">REVAU INSURANCE</option>
                                                    <option value="422F8C05-FE2D-467D-8538-8C3DBB6ADF57">ROYAL &amp; SUNALLIANCE INS.</option>
                                                    <option value="DF676B66-2764-4007-A238-80D5AB446D0D">ROYAL FACILITY</option>
                                                    <option value="D8645F24-EA25-4F48-A06A-E463E0CFDFB8">RSA INSURANCE COMPANY</option>
                                                    <option value="728295E2-0F5D-43FB-98F1-298BAFE6307C">S &amp; Y INSURANCE</option>
                                                    <option value="C50C6F8D-DB24-4C17-B4B3-FCA94954C76D">S.J.CHIP PETRILLO</option>
                                                    <option value="1B331DA2-3BB8-46AB-93E0-BB62E439A760">SAFCO INSURANCE</option>
                                                    <option value="EE2D719C-220E-4614-B465-FCB14A5FBEC7">SAFEWAY INSURANCE</option>
                                                    <option value="C5D88790-7512-4EA5-8FAE-070D73C35068">SALUS MUTUAL</option>
                                                    <option value="43ADAA68-5357-4986-A26A-EDFC271391AF">SANDBOX MUTUAL CO.</option>
                                                    <option value="AA597125-09C4-4A12-BBB7-8FB1083FB65A">SASKATCHEWAN GOVERNMENT INS.</option>
                                                    <option value="FC578C01-598F-4E66-805D-8E6F61CBC150">SCOTTISH &amp; YORK</option>
                                                    <option value="2E74CA13-3FA8-4116-9B83-E105B65F414C">SEAWAY</option>
                                                    <option value="5D82116D-0B58-4460-BAE9-B0CD9C738A45">SECURITY NATIONAL</option>
                                                    <option value="7BC1BB14-0C7D-4476-8D6F-85E969178F40">SEGUROS COMMERCIAL AMERICA</option>
                                                    <option value="0F746135-6477-40BF-9C17-22519967E0F6">SELF INSURED</option>
                                                    <option value="ECE120B1-A0E8-4384-AE74-2AFFF83A4D88">SENTRY INS</option>
                                                    <option value="CD7851E9-C6B4-46D4-957C-F094BF5F2511">SERVIRAP</option>
                                                    <option value="0C7E5420-5816-4CD9-9A6B-4000FAEC472B">SGI CANADA INSURANCE</option>
                                                    <option value="9CF98ACB-E723-47E8-8896-517962B83E9A">SGI CANADA INSURANCE (ON)</option>
                                                    <option value="021A904D-8D3F-449B-B989-F19769B5DE1A">SHUMKA CRAIG &amp; MOORE</option>
                                                    <option value="9E0F56DD-4DDA-45FD-856C-370C158253E9">SOCIETE DE L'ASSURANCE</option>
                                                    <option value="B9C160E5-BCEA-4562-AA1D-E74CC71D7673">SOCIETE MUTUELLE D'ASSURANCE</option>
                                                    <option value="A7DB15C8-CF4A-4676-B573-A2485EF94130">SONNET INSURANCE</option>
                                                    <option value="94A0D1AB-B443-4A93-817F-1C21E923D4E7">SOUSCRIPTEUR DE L'EST</option>
                                                    <option value="3C4A12A2-5A41-4F7F-96C5-79D1CA3C4722">SOUTH EASTHOPE MUTUAL</option>
                                                    <option value="3333C6E0-F72F-488C-8083-261FE015EAED">SOUTH WESTERN INSURANCE GROUP LIMITED</option>
                                                    <option value="70F0E8BD-76F5-4378-8158-49072555BB20">SOVEREIGN GENERAL INS. CO.</option>
                                                    <option value="B764FEA1-489D-44EF-A0C0-4C19EED44410">SSQ AUTO INSURANCE</option>
                                                    <option value="72C4CADB-EFF7-47B5-A12A-088367B819CF">ST. PAUL FIRE &amp; MARINE</option>
                                                    <option value="0DBE6A2E-D836-4F80-A40D-AA534D0F15A1">ST. PAUL FIRE &amp; MARINE INS</option>
                                                    <option value="5E240DF8-2789-41C5-998D-6626125BDB64">ST. PAUL GUARANTEE INSURANCE</option>
                                                    <option value="4038A16D-7636-4485-A38B-29136D78AF53">STARR INSURANCE COMPANY</option>
                                                    <option value="4E34BD9D-5BDD-49B3-961F-073858561B30">STATE FARM (CAN)</option>
                                                    <option value="5683C77D-8B35-4C81-AF54-14F68196BFDB">SUN ALLIAN</option>
                                                    <option value="151EF939-F864-4527-9322-6DF3298AB763">SUREX DIRECT</option>
                                                    <option value="A9670445-4422-4D86-B536-5F52EB1284FE">TD GENERAL</option>
                                                    <option value="AF68F9A9-3192-4B61-A04F-F02871898F05">TECHNOLOGY INSURANCE CO</option>
                                                    <option value="CA88FB88-05F7-4043-A937-E7A055D34E68">TEMPLE INSURANCE</option>
                                                    <option value="C3C29876-DF77-4070-8420-75DE23C347C5">TEST-B CUSTOMER</option>
                                                    <option value="EC366C7A-B50F-490B-81D7-8EA41D54AAB3">TEST-C CUSTOMER</option>
                                                    <option value="1C397E38-583C-43FF-B52D-5969DF48C780">THE COMMONWELL MUTUAL</option>
                                                    <option value="44F65345-9EF5-48EF-BACF-E3A13EA748B9">THE DOMINION INSURANCE</option>
                                                    <option value="258242F6-B017-4657-8669-5C22C41754DB">THE INS. CO. OF PRINCE EDWARD ISLAND</option>
                                                    <option value="03A2159A-7053-4CAA-BDC5-C42EC5DEAE5C">THE MEARIE GROUP</option>
                                                    <option value="BA08C6B3-0DA1-4AF1-9510-E4FA6BF5A398">THE PERSONAL INSURANCE</option>
                                                    <option value="61B51E18-59A0-4A4B-AA89-7754F7FEB8A2">TNT TRUCKING</option>
                                                    <option value="21751113-81E9-4501-BF5F-4F39CDE3FAA6">TOKIO MARINE &amp; NICHIDO FIRE INS</option>
                                                    <option value="24F2292C-0C98-4C0B-8DD3-288A430BB731">TOTTEN INSURANCE GROUP</option>
                                                    <option value="3DF17B72-22F3-43CE-80A2-FA6D33889E24">TRADERS GENERAL (AVIVA)</option>
                                                    <option value="BD3CBABD-DC9B-4FBC-BE05-33E2A49DE932">TRADITION MUTUAL INSURANCE</option>
                                                    <option value="8CCC9DBA-E31F-4FF3-A485-513F860E1426">TRAFALGAR INS. CO.</option>
                                                    <option value="AA7F8189-83D4-40C2-A652-86F5D5721E7E">TRAVELERS COMMERCIAL INS.</option>
                                                    <option value="C075F02E-7B38-4AD1-BF88-8AC90A3469EC">TRAVELERS GUARANTEE CO.</option>
                                                    <option value="C3E030A7-F5C4-4C5C-BD22-6D3CAD7E093E">TRAVELERS INSURANCE CO</option>
                                                    <option value="EA031019-A174-424C-88DA-BCED17073A05">TRIBAL CUSTOM INSURANCE</option>
                                                    <option value="938C5446-97AE-4C09-A9C7-607F0D51CCB2">TRILLIUM MUTUAL</option>
                                                    <option value="C0405218-069B-4353-8EEA-07BE5946C463">TRISURA GUARANTEE INSURANCE</option>
                                                    <option value="9B76FCFE-67D3-498A-843B-AF22DEFBBF92">TTC INSURANCE COMPANY LTD</option>
                                                    <option value="98F2A962-2532-495C-8318-7F6608BB3562">UHAUL CANADA</option>
                                                    <option value="F00E13ED-9395-49C6-93B6-9D04221B275E">ULTIMA ASSURANCE</option>
                                                    <option value="DD5E9F27-C324-455A-AACB-D57E7E4398AD">UNDERWRITERS ADJUSTMENT BUREAU</option>
                                                    <option value="3D7FFFC5-C657-4250-AEC2-09AC7BD7CA02">UNICA INSURANCE</option>
                                                    <option value="E19A55B8-26EC-4868-A263-98FC36B15314">UNIFUND ASSURANCE</option>
                                                    <option value="938B7F7F-EF93-4FD2-891E-C051A96BC460">UNINSURED</option>
                                                    <option value="B530E2E1-36A5-429F-842C-0AE515144C0D">UNION CANADIENNE</option>
                                                    <option value="0CA8D86E-66CC-4D37-A523-4C3AFB4BCF98">UNION GAS</option>
                                                    <option value="9DB03EA7-82CE-48D0-8CF2-21C5A6838B2B">UNIQUE</option>
                                                    <option value="F5865FF5-0BE1-4EB3-867E-04E06CDC968D">UNITED GENERAL INSURANCE</option>
                                                    <option value="0D36FFF9-ACE4-4BD1-B601-7205137063DF">UNKNOWN</option>
                                                    <option value="3F333835-5FD7-457C-8BA1-A5C1AA227E16">USBORNE AND HIBBERT MUTUAL</option>
                                                    <option value="CFCED9A5-155E-4665-AFB8-4796DABC41C4">UTICA MUTUAL INSURANCE</option>
                                                    <option value="CBE36B38-7C94-4B37-ADB1-AB4BD9CBE022">UTICA NATIONAL ASSURANCE</option>
                                                    <option value="B7DBB258-266E-4340-90FE-7E191E0F036A">VALLEY MUTUAL INSURANCE</option>
                                                    <option value="054591CD-2EC9-4121-B9CF-CBC16CF32A9B">VENTURES CAR &amp; TRUCK RENTALS</option>
                                                    <option value="022C8F4F-66BE-458B-8DDE-4D8C3A31C820">VERASSURE INSURANCE CO</option>
                                                    <option value="6CE86253-623A-484F-BA6A-1DACA4A891AF">VICTORIA FIRE &amp; CASUALTY</option>
                                                    <option value="20308772-8A37-4B88-A017-3C8973E65D85">WABISA MUTUAL</option>
                                                    <option value="8F7451A9-0132-4305-9ED7-C7C8A54C6580">WAGNER INTERNATIONAL</option>
                                                    <option value="2316A278-7EA1-4E58-A156-EBD32F962AFC">WATERLOO INSURANCE</option>
                                                    <option value="35F7D897-6A44-4A0B-9C23-FABD2790B14F">WATERLOO NORTH HYDRO INC</option>
                                                    <option value="BD65C2E4-8565-4D17-98A0-C7D633E40433">WAWANESA INSURANCE</option>
                                                    <option value="F1229E80-2B1A-4BCE-BE34-D976F1D6E2AF">WAWANESA INSURANCE</option>
                                                    <option value="20C8DC01-ADCD-4BCC-ADC4-144BFFBCF631">WEST ELGIN MUTUAL</option>
                                                    <option value="0459B2B9-517A-4F6C-AE62-AEE1061E1B01">WEST WAWANOSH MUTUAL INS</option>
                                                    <option value="AD8CB870-14BF-4172-BB66-4B3868200BFB">WESTERN ASSURANCE COMPANY</option>
                                                    <option value="D5895ADB-A597-4376-8638-4FFD9A12EA15">WESTERN GENERAL</option>
                                                    <option value="AB34150D-5142-4627-A3B6-1E48E70AFBAD">WESTMINSTER MUTUAL</option>
                                                    <option value="CDECDF38-CC74-42A6-92A6-6FF6B38FF5D6">WESTPORT INSURANCE CORP.</option>
                                                    <option value="84BBEBFE-9E53-43EC-9305-C4F1381A83EC">XL SPECIALITY INSURANCE</option>
                                                    <option value="FF6E4B00-64B6-4B34-A849-744E262841FD">YARMOUTH MUTUAL</option>
                                                    <option value="928152AA-B9AD-43FE-B6F7-5FDD1ACD51EF">YORK FIRE AND CASUALTY</option>
                                                    <option value="97912181-15A8-4FE5-8664-48C8943DDF22">ZENITH INSURANCE</option>
                                                    <option value="E61A693F-98B2-495B-8C52-397BCDE3A1D0">ZOOM RENT A CAR</option>
                                                    <option value="D15C50A7-8C7B-4AC3-8AB1-98F9D303EE86">ZURICH INSURANCE</option>
                                                </optgroup>
                                                <optgroup label="USA">
                                                    <option value="3FFC778F-6F9A-4F2E-8669-C4221790A8D5">120 FARM FAMILY CASUALTY INSURANCE COMPANY</option>
                                                    <option value="05C106EC-3F26-4CBD-9ABD-20D17AEC04E0">20494 TRANSPORTATION INSURANCE CO.</option>
                                                    <option value="6FC44164-3EFB-4FEF-8DA2-965B7C409452">21st CENTURTY CENTENNIAL INS</option>
                                                    <option value="5278895E-8AD0-42C9-90AC-C477C2523832">21ST CENTURY</option>
                                                    <option value="DE65FC40-9CD3-4F76-86BE-B0DBC7E948CC">A CENTRAL INSURANCE</option>
                                                    <option value="A78E2FBA-C335-4084-B2B4-05B532937E12">AAA INSURANCE</option>
                                                    <option value="540658B6-E01E-43B5-B9D0-D2B4AD52FD99">AAA TEXAS COUNTY MUTUAL INS.</option>
                                                    <option value="7E6C4524-952F-4C28-BFFD-ECE3ECDF92F2">ACCESS GENERAL INSURANCE</option>
                                                    <option value="1B83D1BC-B935-4236-8AC6-05D934759802">ACUITY  INSURANCE</option>
                                                    <option value="59B3ACFC-83C4-4AEE-A50E-D966C3D5B1C6">AFFIRMATIVE INSURANCE CO.</option>
                                                    <option value="6B72BC6D-F9C6-4AC6-AFF1-DBF10A429829">AIU INSURANCE COMPANY</option>
                                                    <option value="ADC0FB06-E037-44DE-9EE5-E42C7646F9BD">ALFA VISION INSURANCE CORP</option>
                                                    <option value="24057E02-3FD1-4BB2-9512-81078822A645">ALLMERICA FIN ALLIANC INS</option>
                                                    <option value="DEAC559F-E542-43CC-99B0-79DE28901214">ALPHA PROPERTY &amp; CASUALTY INS.</option>
                                                    <option value="7194F864-2C58-4574-8B2E-711A2FD82648">AMCO INSURANCE COMPANY</option>
                                                    <option value="EB71B1C8-0452-4C0D-9A1E-DAC993048F1E">AMERICAN COMMERCE INSURANCE</option>
                                                    <option value="2B6DA068-02CB-4120-9A48-D8E603B4BFC3">AMERICAN FAMILY</option>
                                                    <option value="AD0BFCD2-B70D-4086-B714-56628DA97D2B">AMERICAN HEARTLAND INS</option>
                                                    <option value="534F7A91-67D6-47E9-8DF6-24CEB68AE3DF">AMERICAN INTERFIDELITY</option>
                                                    <option value="D48697B7-E365-4D61-979A-350DACB14B6D">AMERICAN INTERNATIONAL INSURANCE</option>
                                                    <option value="F4A194CB-C6FD-4DCB-A6CF-A75793EF1074">AMERICAN MODERN PRO. &amp; CAS.</option>
                                                    <option value="3C4D08C9-22A3-4E1B-995F-9A8E734E2D39">AMERICAN NATIONAL PROP. &amp; CAS</option>
                                                    <option value="670E5911-D0EA-4ECD-9B1C-7D1C888680C3">AMERICAN SOUTHERN INSURANCE CO.</option>
                                                    <option value="F89E7DA0-F5EC-4953-9DB5-7812C7898BB4">AMERICAN STATES INSURANCE</option>
                                                    <option value="8D0EE330-4564-4457-AD78-AA3DD3393D14">AMERISURE PARTNERS INSURANCE</option>
                                                    <option value="DDF6662E-4523-4F2A-894F-37D1757E598D">AMEX ASSURANCE</option>
                                                    <option value="D9C82D99-4B06-4413-BBDF-F55E6DFE531C">AMICA MUTUAL INSURANCE COMPANY</option>
                                                    <option value="65BC6051-7B52-4077-AEC6-5543DBA8283C">AON TRUCK GROUP</option>
                                                    <option value="C55901B5-37B0-485B-A050-083801994607">APOLLO CASUALTY</option>
                                                    <option value="59842FF5-6E6F-45AB-93A4-57ABAC5F8772">ARBELLA MUTUAL INSURANCE</option>
                                                    <option value="F6DC98FC-1D6B-4422-BC14-00D8CF039481">ARGONAUT INSURANCE COMPANY</option>
                                                    <option value="ED5776E1-2611-46A7-B83C-742B22276036">ARROWHEAD GENERAL INSURANCE</option>
                                                    <option value="02031795-D8F7-4AFA-9D4E-71735340D7BB">ASSURANT INSURANCE</option>
                                                    <option value="0469F34C-59C0-449F-93BC-A359E90FB4AF">ATLANTIC MUTUAL INSURANCE</option>
                                                    <option value="BBECA876-DB16-4C87-ABFA-A36CD49ED752">AUTO CLUB GROUP INS. CO.</option>
                                                    <option value="59843912-0CB7-43B4-83E6-FCF8C93DEBF2">AUTO CLUB INS. ASSOCIATION</option>
                                                    <option value="511A58E2-6308-43B4-B218-51D8586B06A4">AUTO OWNERS INSURANCE</option>
                                                    <option value="285945DC-B34D-49EB-A24C-B9D256A2BF19">AUTOONE INSURANCE COMPANY</option>
                                                    <option value="03BC751F-4388-469D-986F-5C7DEFE1FF11">BEAR RIVER MUTUAL INS.</option>
                                                    <option value="528B5F95-9FAE-4ACB-AD0B-B4BF066045FE">BLUE LLINE INSURANCE</option>
                                                    <option value="E38BD618-FD83-4224-9B2E-FBF7BFCE8639">BNC INSURANCE</option>
                                                    <option value="5C12C9C0-110F-448A-AD11-DC08D44F7B4A">BOSTON OLD COLONY</option>
                                                    <option value="4FBDB0A5-1926-4640-BE82-FFD5DA7E59D6">BRISTOL WEST INSURANCE</option>
                                                    <option value="FF7313E4-854C-4B3C-9D44-756EA6D9C22E">BRISTOL WEST PREFERRED</option>
                                                    <option value="3FB2636C-9B9E-4CA0-9F20-C89F5C6F47D7">BURLINGTON MC</option>
                                                    <option value="BF2AB2B0-1C1A-41E2-B607-C977A8D192A8">CALIFORNIA CASUALTY</option>
                                                    <option value="1426A6F4-52B3-4A35-BA64-5F47504823FD">CALIFORNIA STATE AUTOMBILE</option>
                                                    <option value="A00EFB10-790E-4B1D-8E02-385D6DECE7B3">CANAL INSURANCE COMPANY</option>
                                                    <option value="7CBD6751-9F65-4B1D-99EC-898E1818670A">CAROLINA CASUALTY INSURANCE</option>
                                                    <option value="85A5D4D9-AC92-4261-ADCE-652F85072F82">CENTRAL INSURANCE</option>
                                                    <option value="709FAF3E-C0AC-4BEB-A6E7-DE8FB986D7E2">CHEROKEE INS.</option>
                                                    <option value="EBDCDA37-D4F8-4221-8ADE-A5184C93D58D">CINCINNATI INSURANCE COMPANY</option>
                                                    <option value="D0563E4D-203F-494E-97B4-82BE741C86D7">CITIZEN INSURANCE COMPANY</option>
                                                    <option value="D0540094-9E64-4C05-87C8-44E5AE90373D">COLORADO CASUALTY COMPANY</option>
                                                    <option value="16847F9F-22FA-411D-8E89-F6F6CAB664B5">COLORADO FARM BUREAU</option>
                                                    <option value="A2110138-91CA-45CC-9D1E-D41667A3CC9F">COMMERCE INSURANCE</option>
                                                    <option value="94FD7CAB-FCEC-4831-9627-89EDB2A844CE">COMMERCE INSURANCE COMPANY</option>
                                                    <option value="5ED0D216-9E9B-474F-9BFF-56C867CB202A">CONNECT INSURANCE</option>
                                                    <option value="8D78D3B9-29E6-4533-8E11-7DC2E87D0A2C">CONSUMERS COUNTY MUTUAL</option>
                                                    <option value="4543FB1E-5877-417F-ADF4-1F4FE132F628">COTTON STATES MUTUAL INS</option>
                                                    <option value="5A83D673-683A-4C07-B344-10BEA20C563C">COUNTRY MUTUAL INSURANCE</option>
                                                    <option value="A35E6A31-CECD-476D-A5FB-28B1DBEF2388">COUNTRY PREFERRED INS.CO</option>
                                                    <option value="269F1CEF-1129-4F51-90B5-7597412C3220">COUNTRY WIDE INSURANCE COMPANY</option>
                                                    <option value="7D168DCF-14F5-4ACC-BB0B-578E98EAFC1E">CURE INSURANCE CO</option>
                                                    <option value="F7DA751B-3A66-43C0-A476-9A77DA5BE489">DAIMLER CHRYSLER INSURANCE COMPANY</option>
                                                    <option value="386639FD-C30D-4349-B744-8F93108B3431">DAIRYLAND INSURANCE COMPANY</option>
                                                    <option value="53372029-FA1C-41A6-9E57-C291824D8A77">DEERBROOK INSURANCE</option>
                                                    <option value="EC8D82D2-F6B1-4F83-B859-6289D10EDD65">DIRECT AUTO INSURANCE</option>
                                                    <option value="94FB11E3-7987-48F6-A470-7C3501BBF174">DISCOVER PROP &amp; CAS INSURANCE</option>
                                                    <option value="4514D514-DAD7-4934-9123-C999209166D9">DISCOVERY INSURANCE</option>
                                                    <option value="F7390836-0F6C-4C24-BA9F-34D9F4914129">ECONOMY PREMIER ASSUR.CO.</option>
                                                    <option value="DAB9FB81-9F04-4023-A1CE-F722419D4770">EMPIRE FIRE &amp; MARINE INS</option>
                                                    <option value="A625D792-61BF-48FC-BEDC-395689BE13C1">ENCOMPASS</option>
                                                    <option value="2335822B-C0B5-4761-AFA1-A54ADB4AC004">ENCOMPASS INSURANCE</option>
                                                    <option value="49A1EAA2-6A06-465D-B009-A8A29511A6B7">EQUITY INSURANCE</option>
                                                    <option value="0E0EA349-729E-48E0-ABA4-6648B6F58518">ERIE INSURANCE</option>
                                                    <option value="78AF2FC0-1345-43D8-BDAD-366050E0364C">EXPLORER INSURANCE</option>
                                                    <option value="0BF0757D-B77D-44BD-84DD-BC83D283A071">FARM BUREAU INSURANCE</option>
                                                    <option value="4209F76F-B55D-4412-8FB8-D8159173F6F0">FARM FAMILY CAS INS.CO</option>
                                                    <option value="78B35552-FD69-4DE9-B8CE-5EA13149EAC5">FARMERS AUTOMOBILE INS.</option>
                                                    <option value="C63DB255-B05C-418C-843D-43D027EF5D19">FARMERS INSURANCE EXCHANGE</option>
                                                    <option value="9E777507-506C-42F6-A37A-79425A447D55">FARMERS INSURANCE OF COLUMBUS</option>
                                                    <option value="7B529F2B-02EF-4022-9067-AF2ADD583A5B">FARMERS PROPERTY &amp; CASUALTY INS</option>
                                                    <option value="A75A51A9-51B5-4141-9F68-83FDE06B2C37">FIRST ACCEPTANCE INS</option>
                                                    <option value="EF9B9373-3E28-412C-AFB0-B7CCBDABA02A">FIRST TRENTON</option>
                                                    <option value="6DB3DB8E-559B-4D85-9FD6-0CC12B05A2E3">FLORIDA AUTOMOBILE INSURANCE</option>
                                                    <option value="8CEAA87E-CB2A-4BFC-A41D-3546C8940532">FOUNDERS INSURANCE COMPANY</option>
                                                    <option value="C63AEEC6-83F7-4AA2-A85C-8A34A7B595BC">FRANKENMUTH MUTUAL INSURANCE</option>
                                                    <option value="DFE78999-93F4-4EFB-A79C-BA8352C10D08">FREEMONT INSURANCE</option>
                                                    <option value="832ADA8F-1D40-4632-8DF3-79B9297FB556">GARRISON PROP &amp; CAS INS CO</option>
                                                    <option value="2B9D6B0A-FEE5-4A63-8EC1-8E5F3F58974F">GEAUTO &amp; HOME ASSURANCE COMPANY</option>
                                                    <option value="9B2BE947-D8FF-460A-B878-5E40CE9FE355">GEICO GENERAL INSURANCE COMPANY</option>
                                                    <option value="EC6F7B60-90BA-405A-8C61-A58C6A40389D">GENERAL INSURANCE COMPANY</option>
                                                    <option value="F00146EC-2699-44D4-A4DA-5A95C9E90BD2">GEORGEIA FARM BUREAU MUTUAL</option>
                                                    <option value="A9768474-A089-4105-9530-EF60AC76ED42">GLENN FALL INSURANCE</option>
                                                    <option value="C9DB020A-1DC8-4F6B-B774-FC28E0B71DCB">GLOBAL LIBERTY INS  CO.</option>
                                                    <option value="3835D1A3-EEB8-470D-BA62-110B1B41E6FC">GOVERNMENT EMPLOYEES INSURANCE(USA)</option>
                                                    <option value="A75C174A-7E78-44F1-BDDB-B10D2D5B1F36">GRANGE MUTUAL CASUALTY  INS.</option>
                                                    <option value="7047F12F-EF3F-4CB5-9FBC-0FD5D198B4D3">GREAT AMERICAN ASSURANCE</option>
                                                    <option value="0F174588-B3AC-4CE2-B0E2-0E90EEEB3185">GREAT NORTHERN INSURANCE CO.</option>
                                                    <option value="533B07EC-7622-4930-ADFA-30C5B9B05F28">GREAT WEST CASUALTY COMPANY</option>
                                                    <option value="36CEA53E-E9EE-4707-85CD-38C901354168">GREENWICH INSURANCE</option>
                                                    <option value="22041774-6B66-4B5C-B804-0400B657C66B">GULF INSURANCE</option>
                                                    <option value="19842070-0159-45A3-ABDF-CA9A530F06C4">HANOVER INSURANCE COMPANY</option>
                                                    <option value="1BABADC2-59DF-4231-B7DC-77EF3C2978D9">HARCO NATIONAL</option>
                                                    <option value="51477810-5F7B-4275-A337-83697598FE93">HARLEYSVILLE INSURANCE</option>
                                                    <option value="101B94A9-79C8-451F-BBFD-3DD15C873D78">HASTINGS MUTUAL INSURANCE</option>
                                                    <option value="75570597-7FA1-423D-B40A-EA71591E02F9">HERTZ RENTAL CAR</option>
                                                    <option value="F4F3A4A8-F951-4DBA-B3D7-ED188E8EF6B4">HIGH POINT PRO &amp; CAS. INS.</option>
                                                    <option value="64E1BE96-9F98-4E4B-91B5-B4A7B161F931">HOME OWNERS INSURANCE</option>
                                                    <option value="FD4FEDD3-65C6-4B58-83F4-91E14705F67B">HUDSON INSURANCE COMPANY</option>
                                                    <option value="FE72D9EA-5D20-4D6F-A213-1D7093E84833">IDS PROPERTY CASUALTY INS. CO.</option>
                                                    <option value="941B3F39-5461-4C07-AEB4-939308949517">ILLINOIS FARMERS INSURANCE</option>
                                                    <option value="33428911-FE28-44D6-B654-FDCE71A3C573">IMPERIUM INSURANCE COMPANY</option>
                                                    <option value="BDBC7AC5-97E0-4829-AB37-BC7EB64BFA7D">INDEPENDENCE INSURANCE</option>
                                                    <option value="479DF444-A172-4A42-8A7E-78F6E5498B5B">INDIANA FARMERS INSURANCE</option>
                                                    <option value="9C13E583-61DB-4047-84A1-830A7FD2E466">INFINITY INSURANCE</option>
                                                    <option value="76D99AA6-CAF8-4C8D-90B0-F27B986378A1">INSUREMAX INSURANCE</option>
                                                    <option value="029F5C73-7D5B-45ED-834F-FBFE6AB3AE8D">INTEGON NATIONAL INSURANCE</option>
                                                    <option value="6CD33CD9-6324-4558-A513-D1A3FAD486AA">KENTUCKY FARM BUREAU MUTUAL</option>
                                                    <option value="77183058-9824-41DC-8A5D-0B846E7F399E">KEYSTONE INSURANCE COMPNAY</option>
                                                    <option value="6EFC1622-7658-4CE8-89C4-19F834EB4806">LA INSURANCE</option>
                                                    <option value="F0B5A831-7478-4D63-89BA-815903AE96E2">LAKELAND INSURANCE COMPANY</option>
                                                    <option value="837E95DE-3EBF-468A-81B8-331323FFD75D">LANCER INSURANCE COMPANY</option>
                                                    <option value="6E61A63C-AA2F-4024-84F1-62F27619523D">LIBERTY MUTUAL FIRE INSURANCE</option>
                                                    <option value="255B1BDC-F16E-4044-8975-45356F0FB51E">LIGHTNING ROD MUTUAL INS.</option>
                                                    <option value="11DD6FDE-CB83-4710-AC18-F8A279D0A89A">LM GENERAL INSURANCE</option>
                                                    <option value="49BDC8D6-3A68-4B90-BD68-2B7C10F04170">LOCKTON COMPANIES</option>
                                                    <option value="150F18A2-3261-41C0-939E-F8E9FB5A84D6">LYNDDON SOUTHERN INSURANCE</option>
                                                    <option value="BFDF7AE6-F7DA-45E5-B327-A4660FB87C2B">MAIN STREET AMERICA PROTECTION</option>
                                                    <option value="300C992D-1F4B-40D5-8796-8EA101CBFCC6">MAPFRE INSURANCE</option>
                                                    <option value="82669DC0-253C-4429-92D8-0BA47CBBF9B2">MAYA ASSURANCE COMPANY</option>
                                                    <option value="73FF8781-EC06-45D1-90E1-E18CD831EDC4">MEEMIC INSURANCE COMPANY</option>
                                                    <option value="DFED4053-FCC3-4F1D-90F5-59890DE5B068">MENDOTA INSURANCE</option>
                                                    <option value="79BA8790-F325-4EC0-B74C-1B1825317BD3">MERCHANTS INSURANCE</option>
                                                    <option value="1DEEA00C-B90A-4EDF-B8E7-82927F8EF35C">MERCURY INSURANCE</option>
                                                    <option value="1E2AF160-ADA1-4430-9B1B-04A060848A31">METLIFE AUTO &amp; HOME</option>
                                                    <option value="F9BB744D-3F4E-462B-9C79-F164256DFF0E">METROPOLITAN PROPERTY AND CASUALTY</option>
                                                    <option value="3125B325-D36A-4659-BCA8-A56F8BA88E54">MICHIGAN INSURANCE COMPANY</option>
                                                    <option value="935411D7-2C10-4E11-8B57-9108623B6F93">MID CENTURY INSURANCE COMPANY</option>
                                                    <option value="A74AFB38-E8F3-4EF3-BD5E-0AF1F7BE0A62">MILWAUKEE CASUALTY</option>
                                                    <option value="D4636F52-2916-4B52-9C27-2458F94B8A23">MMG INSURANCE</option>
                                                    <option value="73CA7A5C-C252-4D56-B449-F0EE66691C4E">MORANT INSURANCE AGENCY</option>
                                                    <option value="9FD10C26-11E0-42E1-B152-3F4798B33978">MUTUAL FIRE INSURANCE</option>
                                                    <option value="761E906D-FEAC-40C0-8C83-350A8C18B781">NATION WIDE GENERAL INSURANCE COMPANY</option>
                                                    <option value="4BB01D71-E44A-4F87-A8C6-7CA65D63E5AD">NATIONAL CASUALTY INSURANCE</option>
                                                    <option value="A6C34A0B-B0BC-484D-820E-2C5311D159C8">NATIONAL GENERAL INSURANCE</option>
                                                    <option value="E7A8B72D-7832-49FB-85AA-DE5ABBD344FB">NATIONAL GRANGE INSURANCE</option>
                                                    <option value="8642F1B8-5F18-4E35-A0E5-052FE9428D63">NATIONAL SPECIALTY INSURANCE</option>
                                                    <option value="5E9BA149-522A-449B-915B-40E68B711C14">NATIONAL UNION FIRE INSURANCE CO.</option>
                                                    <option value="75FC130A-C299-437E-B6AC-5B67491E8E45">NATIONAL UNITY INSURANCE</option>
                                                    <option value="10414B2C-A8B5-4A8D-83D1-1A0C9208BF98">NATIONWIDE MUTUAL  FIRE</option>
                                                    <option value="3D4A309F-F3C1-4375-8A55-F13049495221">NEW HAMSHIRE INSURANCE</option>
                                                    <option value="6712527C-78EB-4768-AEED-921F46A06A0A">NEW JERSEY MANUFACTURERS INSURANCE</option>
                                                    <option value="81184017-B0BE-48E8-A8F2-07C415E8AE82">NEW JERSEY STATE INS.</option>
                                                    <option value="D7B74B9F-58E2-4FB9-978A-951770A98E55">NEW YORK CENTRAL MUTUAL FIRE</option>
                                                    <option value="2791379F-09A1-42E0-B35C-D0CCBD887F9F">NEW YORK INSURANCE</option>
                                                    <option value="16DDCB4A-5FB2-4B1C-A84E-C555F17ED6D2">NODAK INSURANCE CO</option>
                                                    <option value="0AE85DF4-A555-49A6-B616-3F5534158013">NORTH ASSURANCE COMPANY</option>
                                                    <option value="96917F85-2968-422C-9C1F-E2997FBF10BC">NORTH COUNTRY INSURANCE</option>
                                                    <option value="61965A2F-026D-4415-81A5-05F629EF864A">NORTHLAND INSURANCE</option>
                                                    <option value="FB1AC505-CF5B-43DD-9B0D-E64440502ECE">NY CENTURY MUTUAL FIRE INS. CO</option>
                                                    <option value="74749571-BFB0-4126-95E6-E38F88A0163B">OCCIDENTAL FIRE &amp; CASUALTY INS</option>
                                                    <option value="953ACD20-29AA-4519-9494-5EF84A6D7482">OCEAN HARBOR CASUALTY</option>
                                                    <option value="E16CFA4B-9B2E-4CF5-A85C-7F9E731AEE97">OHIO CASUALTY OF NEW JERSEY INC.</option>
                                                    <option value="4896FD98-D59D-45EA-9A29-B324073AE35F">OHIO MUTUAL INSURANCE</option>
                                                    <option value="C367B120-0C06-4A03-AA27-CB2A78CA6165">OHIO SECURITY INSURANCE</option>
                                                    <option value="6001DCA8-3C15-4338-8B9D-AFA0D578261D">OKLAHOMA FARM BUREAU</option>
                                                    <option value="AC45A4D4-70C8-4279-9648-489C7361F89C">OLD DOMINION INSURANCE</option>
                                                    <option value="DB857C1D-1995-4073-B8F9-444C9274971E">OMNI AG</option>
                                                    <option value="BED47709-CDA9-4F91-8291-469DDF488C4D">ONEBEACON INSURANCE COMPANY</option>
                                                    <option value="1F68F4B1-6C60-4699-A070-A1E9B4F24584">OWNERS INSURANCE CO</option>
                                                    <option value="D3E20E77-376B-4A0D-A876-E3C1B2F40EC1">PACIFIC EMPLOYERS</option>
                                                    <option value="8B841585-87BB-445B-A78D-926BFB63922A">PALISADES SAFETY AND INS. ASSOC</option>
                                                    <option value="98EC4742-04A4-46A1-B1D1-CF4605FD509E">PATHFINDER INSURANCE</option>
                                                    <option value="8E1EA5D7-5B37-4FE8-BC1A-98B632C17A0E">PEEK PROPERTY &amp; CASUALTY</option>
                                                    <option value="A13D917C-569D-4DDB-A59C-47789A89D41B">PEERLESS INSURANCE CO</option>
                                                    <option value="D9FCFEA3-9230-4523-A80B-B887E4537284">PENNCO INSURANCE</option>
                                                    <option value="E73FEF9F-0591-4267-AB29-9CFA2D6D139F">PENNSYLVANIA GENERAL INSURANCE</option>
                                                    <option value="EFF78A54-4DC3-4649-B4EF-32BDA26817B1">PHILADELPHIA INDEMNITY INS. CO.</option>
                                                    <option value="EC3CF433-82E1-4773-BC22-B92094920258">PIONEER STATE MUTUAL</option>
                                                    <option value="E7648796-04C1-4D62-8EFA-D43F15383749">PLYMOUTH ROCK ASSURANCE</option>
                                                    <option value="0EF8FAF5-184B-4A1F-8C8F-9E697FEAB241">PREATORIAN INSURANCE CO</option>
                                                    <option value="D148F056-CF71-4931-9468-80E18D44B245">PREFERRED  MUTUAL</option>
                                                    <option value="E06D35E5-13EA-4F88-96EB-D845D9E4BF66">PRIMUS INSURANCE</option>
                                                    <option value="0DDE5765-552B-4179-9B4B-2C85CB3ECC96">PROGRESSIVE INSURANCE</option>
                                                    <option value="AEE44BAF-358A-462B-97EB-6B8150C71E99">PROP &amp; CASUALTY INS CO</option>
                                                    <option value="92A88EE6-58B0-45C9-889D-04D902A45620">PROTECTIVE INSURANCE COMPANY</option>
                                                    <option value="33DAB12E-CCEE-41AC-87FC-4E4BED0F8F12">PRUDENTIAL FINANCIAL</option>
                                                    <option value="4C3C9F60-B139-471A-99AB-DB18BB10366A">PURE INSURANCE COMPANY</option>
                                                    <option value="2ABF9B00-2E69-4F52-B1F4-897268FEC6F6">QUINCY MUTUAL FIRE</option>
                                                    <option value="773C3AB4-AA18-45C9-A06D-4BDB6B7C5303">REGENT INSURANCE COMPANY</option>
                                                    <option value="724A1AA1-ACC8-491D-8474-AA1D1C6D66A0">RESPONSE WORLDWIDE INS.</option>
                                                    <option value="19EE5F62-893C-49C6-BDA0-81B4D9A00E7B">RLI INSURANCE COMPANY</option>
                                                    <option value="E023BAAF-5498-4E66-A465-D5F1EA619B87">ROCKINGHAM CASUALTY INSURANCE</option>
                                                    <option value="66C78459-574F-43E1-89D8-59CD1BFC06B3">SAFE AUTO INSURANCE</option>
                                                    <option value="E30B6EF5-6418-47D3-8065-55F6AE081EF6">SAFECO INSURANCE COMPANY OF AMERICA</option>
                                                    <option value="E0CDD75C-ADD0-45C7-95F5-929A453CE970">SAFETY INSURANCE (US)</option>
                                                    <option value="B5AD32D4-CED2-4107-80A4-11E184AE9A23">SCOTT INSURANCE COMPANY</option>
                                                    <option value="4C3B2475-29F3-49CF-9B42-C33E7EF9951B">SECURA SUPREME INSURANCE</option>
                                                    <option value="1A6CB447-6D07-496B-9908-ECE711CC7CE7">SELECTIVE INSURANCE</option>
                                                    <option value="BB6C5B7F-A0E4-4FDF-893C-C4682D312C6A">SHELTER MUTUAL INSURANCE</option>
                                                    <option value="6BECE4A6-79A8-4AB1-97C8-74B19490D775">SIRIUS AMERICA INSURANCE</option>
                                                    <option value="6651EC90-87CB-4F0F-BB62-640AA80E3074">SOMPO JAPAN INSURANCE</option>
                                                    <option value="AB16FE97-328B-4BBD-8E9D-026DD4C56EE8">SOUTH DAKOTA AUTOMOTIVE INS</option>
                                                    <option value="83C87C1D-46D5-4707-9907-3CEA2C98B1CE">SOUTHERN COUNTY MUTUAL</option>
                                                    <option value="3669EDAD-AC89-41D0-96A8-B859D3FE8756">SOUTHERN GROUP INDEMNITY INC.</option>
                                                    <option value="66559D8E-F9FF-404D-BA62-4ED77BEE7B00">SOUTHERN-OWNERS INSURANCE</option>
                                                    <option value="6064663E-D835-4195-9382-85420A101D67">STANDARD FIRE INS.</option>
                                                    <option value="2F697B69-37CB-4EB4-B272-09F19188E143">STATE AUTOMOBILE MUTUAL</option>
                                                    <option value="116453A0-5F10-4A51-9900-E4FEEB32E8BB">STATE FARM (USA)</option>
                                                    <option value="CEFC1B7D-93CC-4808-B31B-A83A49EA29C9">TENNESSEE FARMERS MUTUAL</option>
                                                    <option value="47696751-2F4A-4EAB-8DA0-977DCFB49246">TESLA INSURANCE</option>
                                                    <option value="5AEB51A0-C24C-4E30-90F7-5352C1F40257">TEXAS FARM BUREAU INS</option>
                                                    <option value="C4582AE0-D1E8-45C5-BD24-DD83726FE1B9">THE AMERICAN ROAD INS CO</option>
                                                    <option value="44F68D39-3E80-4113-8284-8FABCE1C97F4">THE AUTO BOND</option>
                                                    <option value="E7865C5D-B9E1-4EC7-9925-345A2DB6DA8D">THE GENERAL AUTO INS.</option>
                                                    <option value="0454FE18-6E3B-4CE1-A2E4-269B9CC57E24">THE PHOENIX INSURANCE</option>
                                                    <option value="56C631F1-8ADB-4222-8CDB-88F817D3FBB6">TITAN INSURANCE</option>
                                                    <option value="A8303BD2-4606-428D-8E29-59A31FEA9ABE">TOWER GROUP INSURANCE</option>
                                                    <option value="7CB6D0D6-A3B2-4B5D-982B-B6FA811A042E">TRANSGUARD INSURANCE CO</option>
                                                    <option value="5568A83D-BA44-4803-A580-DF1740EFF851">TRAVCO INSURANCE CO.</option>
                                                    <option value="D3C3CF01-2963-4B8B-AA6D-095DD3932905">TRAVELERS INSURANCE</option>
                                                    <option value="5C20ED51-0681-4D75-B644-16D715831E21">TRUMBULL INSURANCE CO.</option>
                                                    <option value="A8813039-9E80-4431-A659-D41FA9AC1941">UNITED FARM FAMILY MUTUAL INSURANCE COMPANY</option>
                                                    <option value="02F3D58D-7FB4-48A7-B716-5B12FEEEF038">UNITED FIRE CASUALTY</option>
                                                    <option value="12C70C4D-5A88-4284-8346-CC63E8654D64">UNITED SERVICES AUTO. ASSN.</option>
                                                    <option value="55C7988A-FEC8-4829-863D-7795227D1709">UNITRIN DIRECT INSURANCE</option>
                                                    <option value="2EBD267F-3C3F-4F21-AC78-7DF1C586BF53">UNIVERSAL CASUALTY COMPANY</option>
                                                    <option value="51225DA6-2CC3-4191-ACDE-D34E029ACE11">UNIVERSAL UNDERWRITERS</option>
                                                    <option value="E5036327-B010-490E-8435-218FD22E70E1">USAA CASUALTY INS. COMPANY</option>
                                                    <option value="01CE8EAF-2C79-4358-B778-C3A3F3E104FE">VERMONT AUTOMOBILE INSURANCE</option>
                                                    <option value="318B6C54-E508-44FD-AE94-14BC4485F386">VERMONT MUTUAL INSURANCE</option>
                                                    <option value="A41925F7-6916-41A6-B1C4-D3178280CA2B">VIRGINA STATE INSURANCE</option>
                                                    <option value="355076DF-A06F-4D18-BD11-673F93E4EF20">WAYNE MUTUAL INSURANCE CO</option>
                                                    <option value="4DD6B015-2B49-49B9-8F59-6AF0BB5401BB">WEST AMERICAN INS CO</option>
                                                    <option value="943A1DFE-A12F-4925-9EF4-0B6DAF9F25A5">WESTERN  NATIONAL MUTUAL</option>
                                                    <option value="4148BC4A-84B8-4B7E-8106-ACB1509A6E48">WESTFIELD INSURANCE</option>
                                                    <option value="21FE8B9C-81E7-4308-B5EE-80F97D45827A">WHIMS INSURANCE</option>
                                                    <option value="3173A21E-F3DC-4F6E-BA28-59477EE1C8A6">WOLVERINE MUTUAL INSURANCE</option>
                                                    <option value="3EF162B3-3EAF-400E-848A-ED50CA34DFD9">ZZING INSURANCE CO. OF CANADA</option>
                                                </optgroup>
                                            </select><div class="chosen-container chosen-container-single" title="" id="CustomerID_chosen" style="width: 0px;"><a class="chosen-single">
                                                    <span>--- Please Select ---</span>
                                                    <div><b></b></div>
                                                </a>
                                                <div class="chosen-drop">
                                                    <div class="chosen-search">
                                                        <input class="chosen-search-input" type="text" autocomplete="off">
                                                    </div>
                                                    <ul class="chosen-results"></ul>
                                                </div></div>
                                        </div>
                                        <div class="col-12 col-lg-2 col-xl-2 float-start pb-2 fw-bold">
                                            Policy Number
                                        </div>
                                        <div class="col-12 col-lg-4 col-xl-4 float-start pb-2">
                                            <input id="PolicyNumber" name="PolicyNumber" type="text" maxlength="20" class="form-control">
                                        </div>
                                        <div class="col-12 col-lg-2 col-xl-2 float-start pb-2 fw-bold">
                                            Policy Expiry Date
                                        </div>
                                        <div class="col-12 col-lg-4 col-xl-4 float-start pb-2">
                                            <input id="PolicyExpiryDate" name="PolicyExpiryDate" type="date" min="2023-08-31" max="2034-08-31" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="CloseBtn" class="btn btn-secondary" data-bs-dismiss="modal" style="display: none;">Close</button>
                                    <button type="submit" id="AddBtn" class="btn btn-success bg-sfh-green">Add</button>
                                    <button type="submit" id="UpdateBtn" class="btn btn-success bg-sfh-green" style="display: none;">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="DeleteModalLabel" aria-hidden="true">

                    <form id="DeleteForm" action="/Report/DeleteDriver" method="post">
                        <input name="__RequestVerificationToken" type="hidden" value="CfDJ8EQZef4XDapKuknpLhlEo-L7rAj5I0X50ZEp0XYTQZa0HVFRZufEkL44r9UxiRAiVG4a9sfeg9Ed5lmDlLhoqKC62d7Yq1ktgWbL-e0EpBUzWGdxO5bn2AP-2jh6I2DBp3vf-lK9rDQOQ_aG6XnOhDY">
                        <input type="hidden" id="DeleteSFHOtherDriverID" name="id">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="DeleteModalLabel">Delete Other Driver</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this driver?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


                <script>

                    $(document).ready(function () {

                        var otherDrivers = [];

                        $("#DriverLicenceProvinceID").chosen();
                        $("#DriverLicenceProvinceID").trigger("chosen:updated");
                        $("#VehicleLicenceProvinceID").chosen();
                        $("#VehicleLicenceProvinceID").trigger("chosen:updated");
                        $("#VehicleType").chosen();
                        $("#VehicleType").trigger("chosen:updated");
                        $("#CustomerID").chosen();
                        $("#CustomerID").trigger("chosen:updated");
                    });
                    function addDialog() {
                        $('#AddEditForm').prop("action", "/Report/AddDriver");
                        $('#AddEditLabel').text("Add Other Driver");
                        $("#AddBtn").show();
                        $("#UpdateBtn").hide();
                        $("#CloseBtn").hide();

                        $("#FirstName").val(null);
                        $("#LastName").val(null);
                        $("#Gender").val(null);
                        $("#DateOfBirth").val(null);
                        $("#PhoneNumber").val(null);

                        $("#Country").val(null);
                        $("#Address1").val(null);
                        $("#Address2").val(null);
                        $("#Address1").prop('disabled', true);
                        $("#Address2").prop('disabled', true);
                        $(".addOnly").show();

                        $("#City").val(null);
                        $("#Province").val(null);
                        $("#PostalCode").val(null);
                        $("#CityValue").val(null);
                        $("#ProvinceValue").val(null);
                        $("#PostalCodeValue").val(null);

                        $("#DriverLicenceNumber").val(null);
                        $("#DriverLicenceProvinceID").val(null);
                        $("#VehicleLicencePlate").val(null);
                        $("#VehicleLicenceProvince").val(null);
                        $("#VehicleColour").val(null);
                        $("#VehicleYear").val(null);
                        $("#NumberOfOccupants").val(null);
                        $("#VehicleType").val(null);
                        $("#CustomerID").val(null);
                        $("#PolicyNumber").val(null);
                        $("#PolicyExpiryDate").val(null);
                        $("#VehicleType").chosen();
                        $("#VehicleType").trigger("chosen:updated");

                        $("#DriverLicenceProvinceID").chosen();

                        $('#AddEditModal').modal('show');

                    }

                    function editDialog(id,i) {
                        $('#AddEditForm').prop("action", "/Report/UpdateDriver");
                        $('#AddEditLabel').text("Edit Other Driver");
                        var od = otherDrivers[i];
                        console.log(od);
                        $("#AddBtn").hide();
                        $("#UpdateBtn").show();
                        $("#CloseBtn").show();
                        $("#SFHOtherDriverID").val(od.SFHOtherDriverID);
                        $("#FirstName").val(od.FirstName);
                        $("#LastName").val(od.LastName);
                        $("#Gender").val(od.Gender);
                        $("#DateOfBirth").val(od.DateOfBirthString);
                        $("#PhoneNumber").val(od.PhoneNumber);

                        $("#Address1").val(od.Address1);
                        $("#Address2").val(od.Address2);
                        $(".addOnly").hide();
                        if(od.CountryCode != null) {
                            countryShortCode = od.CountryCode;
                            $("#CountryCode").val(od.CountryCode);
                            $("#Country").val(od.Country);
                            initAutocompleteAddress();
                        }
                        else {
                            $("#Country").val(null);
                            $("#CountryCode").val(null);
                            $("#Address1").val(null);
                            $("#Address2").val(null);
                            $("#Address1").prop('disabled', true);
                            $("#Address2").prop('disabled', true);
                        }
                        if (od.City != null){
                            $("#City").val(od.City);
                            $("#CityValue").val(od.City);

                            $("#Province").val(od.Province);
                            $("#ProvinceValue").val(od.Province);

                            $("#PostalCode").val(od.PostalCode);
                            $("#PostalCodeValue").val(od.PostalCode);
                        }

                        $("#DriverLicenceNumber").val(od.DriverLicenceNumber);
                        $("#DriverLicenceProvinceID").val(od.DriverLicenceProvinceID?.toUpperCase());
                        $("#VehicleLicencePlate").val(od.VehicleLicencePlate);
                        $("#VehicleLicenceProvinceID").val(od.VehicleLicenceProvinceID?.toUpperCase());
                        $("#VehicleModelID").val(od.VehicleModelID?.toUpperCase());
                        $("#VehicleColour").val(od.VehicleColour);
                        $("#VehicleYear").val(od.VehicleYear);
                        $("#NumberOfOccupants").val(od.NumberOfOccupants);
                        $("#VehicleType").val(od.VehicleType);
                        $("#CustomerID").val(od.CustomerID?.toUpperCase());
                        $("#PolicyNumber").val(od.PolicyNumber);
                        $("#PolicyExpiryDate").val(od.PolicyExpiryDateString);
                        console.log(od.VehicleType);
                        $("#DriverLicenceProvinceID").chosen();
                        $("#DriverLicenceProvinceID").trigger("chosen:updated");
                        $("#VehicleLicenceProvinceID").chosen();
                        $("#VehicleLicenceProvinceID").trigger("chosen:updated");
                        $("#VehicleType").chosen();
                        $("#VehicleType").trigger("chosen:updated");
                        $("#CustomerID").chosen();
                        $("#CustomerID").trigger("chosen:updated");

                        $('#AddEditModal').modal('show');


                        if(od.MakeModel != null) {
                            console.log(od.MakeModel);
                            $("#VehicleModelID").empty();
                            $("#VehicleModelID").append('<option value="' + od.MakeModel.MakeModelID + '">' + od.MakeModel.MakeModelName + '</option>')
                            $("#VehicleModelID").val(od.MakeModel.MakeModelID);
                        }

                    }

                    function deleteDialog(id, i) {
                        var od = otherDrivers[i];
                        $("#DeleteSFHOtherDriverID").val(od.SFHOtherDriverID);
                        $('#DeleteModal').modal('show');
                    }

                    function NoOtherDriverAlert() {
                        window.alert("Please enter 1 other driver(s) before continuing.");
                    }

                    $('#VehicleModelID').select2({
                        dropdownParent: $('#AddEditModal .modal-content'),
                        ajax: {
                            url: '/VIN/SearchMakeModel',
                            processResults: function (data) {
                                // Transforms the top-level key of the response object from 'items' to 'results'
                                return {
                                    results: data
                                };
                            }
                        }
                    });
                </script>

                <script async="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAP_4hvM9VRvWig_xGQqn5JOZV2hM4Aoy0&amp;loading=async&amp;libraries=places&amp;callback=initAutocomplete"></script>


                <script>
                    $(document).ready(function () {
                        let autocomplete;
                        let autocompleteAddress;
                        let address1Field;
                        let postalField;
                        let cityField;
                        let cityValue;
                        let provinceField;
                        let provinceValue;
                        let countryField;
                        let countryCodeField;
                        let postalCodeValue;

                        var countryShortCode = null;

                        var IsplaceChange = true;
                        var IsCountryChange = true;

                    });
                    function initAutocomplete() {

                        let autocomplete;
                        let countryField;
                        let countryCodeField;
                        var countryShortCode = null;

                        countryField = document.querySelector("#Country");
                        countryCodeField = document.querySelector("#CountryCode");
                        autocomplete = new google.maps.places.Autocomplete(countryField, {

                            fields: ["address_components", "geometry"],
                            types: ["country"],
                        });

                        autocomplete.addListener("place_changed", fillInCountry);
                        if(countryShortCode != null){
                            initAutocompleteAddress();
                        }
                    }

                    function initAutocompleteAddress() {
                        //$("#AddressSelectAlert").show();
                        $("#Address1").prop('disabled', false);
                        $("#Address2").prop('disabled', false);
                        address1Field = document.querySelector("#Address1");
                        cityField = document.querySelector("#City");
                        provinceField = document.querySelector("#Province");
                        postalField = document.querySelector("#PostalCode");
                        cityValue = document.querySelector("#CityValue");
                        provinceValue = document.querySelector("#ProvinceValue");
                        postalCodeValue = document.querySelector("#PostalCodeValue");

                        autocompleteAddress = new google.maps.places.Autocomplete(address1Field, {

                            fields: ["address_components", "geometry"],
                            types: ["address"],
                            componentRestrictions: { country: [countryShortCode] }
                        });
                        address1Field.focus();

                        autocompleteAddress.addListener("place_changed", fillInAddress);
                    }


                    function fillInCountry() {
                        IsCountryChange = true;
                        $("#Address1").prop('disabled', false);
                        $("#Address2").prop('disabled', false);
                        const place = autocomplete.getPlace();
                        for (const component of place.address_components) {
                            const componentType = component.types[0];
                            switch (componentType) {
                                case "country":
                                    countryShortCode = component.short_name;
                                    $("#CountryCode").val(component.short_name);
                                    console.log(component.short_name);
                                    break;
                            }
                        }
                        $("#Address1").val(null);
                        $("#Address2").val(null);
                        $("#City").val(null);
                        $("#CityValue").val(null);
                        $("#Province").val(null);
                        $("#ProvinceValue").val(null);
                        $("#PostalCode").val(null);
                        $("#PostalCodeValue").val(null);
                        initAutocompleteAddress();
                    }


                    function fillInAddress() {
                        IsplaceChange = true;
                        const place = autocompleteAddress.getPlace();
                        let address1 = "";
                        let postcode = "";
                        let city = "";
                        console.log(place.address_components);
                        for (const component of place.address_components) {
                            const componentType = component.types[0];

                            switch (componentType) {
                                case "street_number": {
                                    address1 = `${component.long_name} ${address1}`;
                                    break;
                                }

                                case "route": {
                                    address1 += component.short_name;
                                    break;
                                }

                                case "postal_code": {
                                    postcode = `${component.long_name}${postcode}`;
                                    break;
                                }

                                case "postal_code_suffix": {
                                    postcode = `${postcode}-${component.long_name}`;
                                    break;
                                }
                                case "locality":
                                    cityValue.value = component.long_name;
                                    cityField.value = component.long_name;
                                    break;

                                case "administrative_area_level_1": {
                                    provinceValue.value = component.long_name
                                    provinceField.value = component.long_name;

                                    break;
                                }
                                case "country":

                                    break;
                            }
                        }

                        address1Field.value = address1;
                        $("#PostalCodeValue").prop('disabled', false);
                        postalField.value = postcode;
                        postalCodeValue.value = postcode;
                    }


                    $("#Address1").keydown(function () {
                        IsplaceChange = false;
                    });

                    $("#Country").keydown(function () {
                        IsCountryChange = false;
                    });

                    window.initAutocomplete = initAutocomplete;

                    $(document).ready(function () {
                        $(window).keydown(function (event) {
                            if (event.keyCode == 13) {
                                event.preventDefault();
                                return false;
                            }
                        });
                    });
                    $("#PostalCodeValue").blur(function () {
                        if ($("#PostalCodeValue").val() != '') {
                            $("#PostalCode").val($("#PostalCodeValue").val());
                        }
                    });
                    var selector = document.getElementById("PhoneNumber");
                    Inputmask({ "mask": "(999) 999-9999" }).mask(selector);
                </script>

                <script>
                    $(document).ready(function () {
                        addDialog();
                    });

                </script>

            </div>
        </main>
    </div>
@endsection

<script>
    $(document).ready(function () {
        console.log('open');
        $('#staticBackdrop').modal('show');
    });
</script>
