<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />

    <title>PT XL AXIATA, Tbk. - Relocation Form</title>
    <style type="text/css">
        @font-face{
            font-family: 'Axiata Book';
            src: url('/AXIATA\ BOOK.TTF')
        }

        html {
            height: 100%;
        }

        body {
            width: 100%;
            height: 100%;
            min-height: 100vh;
            margin: auto;
            font-family: "Axiata Book";
        }

        .head {
            margin-bottom: 40px;
            text-align: center;
        }

        .control-label {
            text-align: left !important;
            min-width: 30%;
        }

        .form-control {
            border-radius: 20px;
            margin-bottom: 30px;
            width: 100%;
        }

        .section {
            margin-top: 30px;
            margin-bottom: 20px;
            font-weight: bold;
            color: #fff;
            padding: 10px 15px;
        }

        .title-no-input {
            width: 100%;
            margin-bottom: 15px;
            margin-top: 10px;
            font-weight: bold;
            font-size: 16px;
        }

        .select-input {
            height: 33px;
            width: 100%;
            border-radius: 20px;
            border: 1px solid #c0c0c0;
            margin-bottom: 30px;
        }

        textarea {
            border-radius: 20px;
            width: 100%;
            min-height: 80px;
            padding-top: 10px;
            margin-bottom: 40px;
        }

        .td-margin {
            padding-right: 15px;
        }

        .footer {
            background-color: #000;
            color: white;
            font-weight: bold;
            height: 50px;
            left: 0;
            bottom: 0;
            width: 100%;
            padding: 20px 0;
            z-index: 4;
        }
    </style>
</head>

<body>
    <!--NAVIGATION BAR-->
    <nav class="navbar navbar-default navbar-static-top" style="background-color: #164396;">
        <a class="navbar-brand" href="">
            <img src="/navbar-img.png" style="margin-top: -6%; margin-left: -12px" />
        </a>
    </nav>

    <div class="head">
        <h2 style="font-weight: bold; margin-top: 40px">Relocation Form</h2>
    </div>

    <div class="container">
        <form class="form-horizontal" action="{{ route('store') }}" method="post">
            @csrf
            @if($draftData)
                <input type="hidden" class="form-control" name="id" value="{{ $draftData->id }}"/>
            @endif
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="relocation_effective_date">Effective Date for Relocation</label>
                        <div class="col-sm-8">
                            @if($draftData)
                                <input type="date" class="form-control" name="relocation_effective_date" value="{{ $draftData->relocation_effective_date }}"/>
                            @else
                                <input type="date" class="form-control" name="relocation_effective_date" required/>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!--EMPLOYMENT INFORMATION-->
            <div class="row">
                <div style="background-color: #164396">
                    <h4 class="section">Employment Information</h4>
                </div>
                <!--col 1-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="relocation_doc_id" ;>Relocation Doc ID</label>
                        <div class="col-sm-8">
                            @if($draftData)
                                <input type="text" class="form-control" name="relocation_doc_id" value="{{ $draftData->relocation_doc_id }}"/>
                                @else
                                <input type="text" class="form-control" name="relocation_doc_id" required/>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4" for="ecn_doc_id">ECN Document ID</label>
                        <div class="col-sm-8">
                            @if($draftData)
                                <input type="text" class="form-control" name="ecn_doc_id" value="{{ $draftData->ecn_doc_id }}"/>
                            @else
                                <input type="text" class="form-control" name="ecn_doc_id" required/>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="employee_id">Employee ID</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="employee_id" value="{{ $employeeData->data02 }}" readonly />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="employee_name">Employee Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="employee_name" value="{{ $employeeData->data03 }}" readonly/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="position_title">Position Title</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="position_title" value="{{ $employeeData->data06 }}" readonly/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="grade_group_level">Grade / Group Level</label>
                        <div class="col-sm-8">
                            @if($draftData)
                                <input type="text" class="form-control" name="grade_group_level" value="{{ $draftData->grade_group_level }}"/>
                            @else
                                <input type="text" class="form-control" name="grade_group_level" required/>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="superior_name">Superior Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="superior_name" value="{{ $employeeData->data12 }}" readonly/>
                        </div>
                    </div>
                </div>
                <!--col2-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="contract_type">Contract Type</label>
                        <div class="col-sm-8">
                            @if($draftData)
                                <input type="text" class="form-control" name="contract_type" value="{{ $draftData->contract_type }}"/>
                            @else
                                <input type="text" class="form-control" name="contract_type" required/>
                            @endif
                        </div>
                    </div>
                    <table class="table-responsive" style="border: none; width: 100%">
                        <td class="td-margin">
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="contract_start_date">Start Date</label>
                                <div class="col-sm-8">
                                    @if($draftData)
                                        <input type="date" class="form-control" name="contract_start_date" value="{{ $draftData->contract_start_date }}"/>
                                    @else
                                        <input type="date" class="form-control" name="contract_start_date" required/>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="contract_end_date">End Date</label>
                                <div class="col-sm-8">
                                    @if($draftData)
                                        <input type="date" class="form-control" name="contract_end_date" value="{{ $draftData->contract_end_date }}"/>
                                    @else
                                        <input type="date" class="form-control" name="contract_end_date" required/>
                                    @endif
                                </div>
                            </div>
                        </td>
                    </table>

                    <div class="form-group">
                        <label class="control-label col-sm-4" for="directorate">Directorate</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="directorate" value="{{ $employeeData->data07 }}" readonly/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="division">Division</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="division" value="{{ $employeeData->data08 }}" readonly/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="department">Department</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="department" value="{{ $employeeData->data09 }}" readonly/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="unit">Unit</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="unit" value="{{ $employeeData->data10 }}" readonly/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="previous_relocation_doc_id">Previous Relocation Doc ID</label>
                        <div class="col-sm-8">
                            @if($draftData)
                                <input type="text" class="form-control" name="previous_relocation_doc_id" value="{{ $draftData->previous_relocation_doc_id }}"/>
                            @else
                                <input type="text" class="form-control" name="previous_relocation_doc_id" required/>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!--DETAILS OF RELOCATION-->
            <div class="row">
                <div style="background-color: #164396">
                    <h4 class="section">Details of Relocation</h4>
                </div>
                <!--col 1-->
                <div class="col-md-6">

                    <p class="title-no-input">Work Relocation</p>

                    <div class="form-group" style="margin-left: 2%">
                        <div class="col-sm-4">
                            <label class="control-label" for="point_of_hire">Point of Hire</label>
                        </div>
                        <div class="col-sm-8">
                            @if($draftData)
                                <input type="text" class="form-control" name="point_of_hire" value="{{ $draftData->point_of_hire }}"/>
                            @else
                                <input type="text" class="form-control" name="point_of_hire" required/>
                             @endif
                        </div>
                    </div>
                    <div class="form-group" style="margin-left: 2%">
                        <div class="col-sm-4">
                            <label class="control-label" for="work_relocation_from">From</label>
                        </div>
                        <div class="col-sm-8">
                            @if($draftData)
                                <input type="text" class="form-control" name="work_relocation_from" value="{{ $draftData->work_relocation_from }}"/>
                            @else
                                <input type="text" class="form-control" name="work_relocation_from" required/>
                            @endif
                        </div>
                    </div>
                    <div class="form-group" style="margin-left: 2%">
                        <div class="col-sm-4">
                            <label class="control-label" for="work_relocation_to">To</label>
                        </div>
                        <div class="col-sm-8">
                            @if($draftData)
                                <input type="text" class="form-control" name="work_relocation_to" value="{{ $draftData->work_relocation_to }}"/>
                            @else
                                <input type="text" class="form-control" name="work_relocation_to" required/>
                             @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="date_notified">Date Notified</label>
                        <div class="col-sm-8">
                            @if($draftData)
                                <input type="date" class="form-control" name="date_notified" value="{{ $draftData->date_notified }}"/>
                            @else
                                <input type="date" class="form-control" name="date_notified" required/>
                             @endif
                        </div>
                    </div>
                    <p class="title-no-input">Legal Dependant</p>
                    <div style="margin-left: 2%">
                        <p class="title-no-input" style="font-size: 15px;">
                            Type of Dependant
                        </p>
                    </div>

                    <div class="form-group" style="margin-left: 2%; margin-bottom: 0;">
                        <div class="col-sm-4">
                            <label class="control-label" for="spouse_name">Spouse</label>
                        </div>
                        <div class="col-lg-8">
                            <table class="table-responsive" style="border: none; width: 100%; ">
                                <td class="td-margin">
                                    @if($draftData)
                                        <input type="text" class="form-control" name="spouse_name" value="{{ $draftData->spouse_name }}"/>
                                    @else
                                        <input type="text" class="form-control" name="spouse_name" required/>
                                    @endif
                                </td>
                                <td>
                                    @if($draftData)
                                        <input type=" text" class="form-control" name="spouse_age" value="{{ $draftData->spouse_age }}"/>
                                    @else
                                        <input type=" text" class="form-control" name="spouse_age" required/>
                                    @endif
                                </td>
                            </table>
                        </div>
                    </div>

                    <div class="form-group" style="margin-left: 2%;">
                        <div class="col-sm-4">
                            <label class="control-label" for="children_name">Children</label>
                        </div>
                        <div class="col-lg-8">
                            <table class="table-responsive" style="border: none; width: 100%; ">
                                <td class="td-margin">
                                    @if($draftData)
                                        <input type="text" class="form-control" name="children_name" value="{{ $draftData->children_name }}"/>
                                    @else
                                        <input type="text" class="form-control" name="children_name" required/>
                                    @endif
                                </td>

                                <td>
                                    @if($draftData)
                                        <input type=" text" class="form-control" name="children_age" value="{{ $draftData->children_age }}"/>
                                    @else
                                        <input type=" text" class="form-control" name="children_age" required/>
                                    @endif
                                </td>
                            </table>
                        </div>
                    </div>
                </div>

                <!--col 2-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="type_of_relocation">Type of Relocation</label>
                        <div class="col-sm-8">
                            @if($draftData)
                                <select class="select-input" name="type_of_relocation">
                                    <option  @if($draftData->type_of_relocation == 'Long Term Relocation') selected @endif>
                                        Long Term Relocation
                                    </option>
                                    <option @if($draftData->type_of_relocation == 'Short Term Relocation') selected @endif>
                                        Short Term Relocation
                                    </option>
                                </select>
                             @else
                                <select class="select-input" name="type_of_relocation" required>
                                    <option>
                                        Long Term Relocation
                                    </option>
                                    <option>
                                        Short Term Relocation
                                    </option>
                                </select>
                             @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="category_1">Category</label>
                        <div class="col-sm-8">
                            @if($draftData)
                                <select class="select-input" style="margin-bottom: 15px;" name="category_1">
                                    <option @if($draftData->category_1 == 'Company Assignment') selected @endif>Company Assignment</option>
                                    <option @if($draftData->category_1 == 'Own Request') selected @endif>Own Request</option>
                                </select>
                            @else
                                <select class="select-input" style="margin-bottom: 15px;" name="category_1" required>
                                    <option>Company Assignment</option>
                                    <option>Own Request</option>
                                </select>
                             @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="category_2" ></label>
                        <div class="col-sm-8">
                            @if($draftData)
                                <select class="select-input" name="category_2">
                                    <option @if($draftData->category_2 == 'Relocate to new POO') selected @endif>Relocate to new POO</option>
                                    <option @if($draftData->category_2 == 'Back to POH') selected @endif>Back to POH</option>
                                </select>
                            @else
                                <select class="select-input" name="category_2" required>
                                    <option>Relocate to new POO</option>
                                    <option>Back to POH</option>
                                </select>
                             @endif
                        </div>
                    </div>

                    <p class="title-no-input">Period of Relocation</p>

                    <table class="table-responsive" style="border: none; width: 100%">
                        <td class="td-margin">
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="relocation_start_date">Start Date</label>
                                <div class="col-sm-8">
                                    @if($draftData)
                                        <input type="date" class="form-control" name="relocation_start_date" value="{{ $draftData->relocation_start_date }}"/>
                                    @else
                                        <input type="date" class="form-control" name="relocation_start_date" required/>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td style="padding-right: 0px">
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="relocation_end_date">End Date</label>
                                <div class="col-sm-8">
                                    @if($draftData)
                                        <input type="date" class="form-control" name="relocation_end_date" value="{{ $draftData->relocation_end_date }}"/>
                                     @else
                                        <input type="date" class="form-control" name="relocation_end_date" required/>
                                     @endif
                                </div>
                            </div>
                        </td>
                    </table>
                </div>
            </div>

            <!--ENTITLEMENTS-->
            <div class="row">
                <div style="background-color: #164396">
                    <h4 class="section">Entitlements</h4>
                </div>
                <div style="
              padding: 10px 20px;
              border: 1px solid #808080;
              border-radius: 20px;
              margin: 20px;
              display: block;
            ">
                    <p style="font-weight: bold">Disclaimer:</p>
                    <p>
                        This relocation document is intended for internal purposes only.
                        Based on the Company Rules and Regulations and Administrative as
                        the authoritative documents on this document
                    </p>
                </div>
                <div class="container">
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="transportation">a. Transportation</label>
                        <div class="col-sm-7">
                            @if($draftData)
                                <select class="select-input" name="transportation">
                                    <option @if($draftData->transportation == 'Airplane - Business Class') selected @endif>Airplane - Business Class</option>
                                    <option @if($draftData->transportation == 'Airplane - Economy Class') selected @endif>Airplane - Economy Class</option>
                                    <option @if($draftData->transportation == 'Train - Business Class') selected @endif>Train - Business Class</option>
                                    <option @if($draftData->transportation == 'Train - Economy Class') selected @endif>Train - Economy Class</option>
                                    <option @if($draftData->transportation == 'Car') selected @endif>Car</option>
                                </select>
                             @else
                                <select class="select-input" name="transportation" required>
                                    <option>Airplane - Business Class</option>
                                    <option>Airplane - Economy Class</option>
                                    <option>Train - Business Class</option>
                                    <option>Train - Economy Class</option>
                                    <option>Car</option>
                                </select>
                             @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="transportation_fare">b. Transportation Fare from Disembarkment to Destination</label>
                        <div class="col-sm-7">
                            @if($draftData)
                                <input type="text" class="form-control" name="transportation_fare" value="{{ $draftData->transportation_fare }}"/>
                            @else
                                <input type="text" class="form-control" name="transportation_fare" required/>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="shipment_personal">c. Shipment of Personal/household effects</label>
                        <div class="col-sm-7">
                            <table class="table-responsive" style="border: none; width: 100%">
                                <td class="td-margin">
                                    @if($draftData)
                                        <input type="text" class="form-control" name="shipment_effects_1" value="{{ $draftData->shipment_effects_1 }}"/>
                                    @else
                                        <input type="text" class="form-control" name="shipment_effects_1" required/>
                                    @endif
                                </td>
                                <td>
                                    @if($draftData)
                                        <input type="text" class="form-control" name="shipment_effects_2" value="{{ $draftData->shipment_effects_2 }}"/>
                                    @else
                                        <input type="text" class="form-control" name="shipment_effects_2" required/>
                                    @endif
                                </td>
                            </table>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-5" for="school_transfer_fees">d. School Transfer Fees</label>
                        <div class="col-sm-7">
                            @if($draftData)
                                <input type="text" class="form-control" name="school_transfer_fees" value="{{ $draftData->school_transfer_fees }}"/>
                            @else
                                <input type="text" class="form-control" name="school_transfer_fees" required/>
                             @endif
                        </div>
                    </div>


                    <div class="form-group" style="margin-left: 2%;">
                        <div class="col-sm-5">
                            <label class="control-label" for="registration_fees">Registration Fees</label>
                        </div>
                        <div class="col-sm-7">
                            <table class="table-responsive" style="border: none; width: 100%">
                                <td class="td-margin">
                                    @if($draftData)
                                        <input type="text" class="form-control" name="registration_fees" value="{{ $draftData->registration_fees }}"/>
                                    @else
                                        <input type="text" class="form-control" name="registration_fees" required/>
                                    @endif
                                </td>
                                <td>
                                    @if($draftData)
                                        <input type="text" class="form-control" name="registration_fees_desc" value="{{ $draftData->registration_fees_desc }}"/>
                                    @else
                                        <input type="text" class="form-control" name="registration_fees_desc" required/>
                                    @endif
                                </td>
                            </table>
                        </div>
                    </div>

                    <div class="form-group" style="margin-left: 2%;">
                        <div class="col-sm-5">
                            <label class="control-label" for="school_donation_fees">Donation to School building and maintenance fees</label>
                        </div>
                        <div class="col-sm-7">
                            <table class="table-responsive" style="border: none; width: 100%">
                                <td class="td-margin">
                                    @if($draftData)
                                        <input type="text" class="form-control" name="school_donation_fees" value="{{ $draftData->school_donation_fees }}"/>
                                    @else
                                        <input type="text" class="form-control" name="school_donation_fees" required/>
                                     @endif
                                </td>
                                <td>
                                    @if($draftData)
                                        <input type="text" class="form-control" name="school_donation_fees_desc" value="{{ $draftData->school_donation_fees_desc }}"/>
                                    @else
                                        <input type="text" class="form-control" name="school_donation_fees_desc" required/>
                                    @endif
                                </td>
                            </table>
                        </div>
                    </div>

                    <div class="form-group" style="margin-left: 2%;">
                        <div class="col-sm-5">
                            <label class="control-label" for="first_month_tuition_fees">First month's tuition fees</label>
                        </div>
                        <div class="col-sm-7">
                            <table class="table-responsive" style="border: none; width: 100%">
                                <td class="td-margin">
                                    @if($draftData)
                                        <input type="text" class="form-control" name="first_month_tuition_fees" value="{{ $draftData->first_month_tuition_fees }}"/>
                                    @else
                                        <input type="text" class="form-control" name="first_month_tuition_fees" required/>
                                    @endif
                                </td>
                                <td>
                                    @if($draftData)
                                        <input type="text" class="form-control" name="first_month_tuition_fees_desc" value="{{ $draftData->first_month_tuition_fees_desc }}"/>
                                    @else
                                        <input type="text" class="form-control" name="first_month_tuition_fees_desc" required/>
                                    @endif
                                </td>
                            </table>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-5" for="temporary_living_expenses">e. Temporary Living Expenses</span></label>
                        <div class="col-sm-7">
                            <table class="table-responsive" style="border: none; width: 100%">
                                <td class="td-margin">
                                    @if($draftData)
                                        <select class="select-input" name="temporary_living_expenses">
                                            <option @if($draftData->temporary_living_expenses == 'Hotel/Lumpsum') selected @endif>Hotel/Lumpsum</option>
                                            <option @if($draftData->temporary_living_expenses == 'Based on Travel Management Policy') selected @endif>Based on Travel Management Policy</option>
                                        </select>
                                    @else
                                        <select class="select-input" name="temporary_living_expenses" required>
                                            <option>Hotel/Lumpsum</option>
                                            <option>Based on Travel Management Policy</option>
                                        </select>
                                    @endif
                                </td>
                                <td style="width: 50%;">
                                    @if($draftData)
                                        <input type="text" class="form-control" name="temporary_living_expenses_desc" value="{{ $draftData->temporary_living_expenses_desc }}"/>
                                    @else
                                        <input type="text" class="form-control" name="temporary_living_expenses_desc" required/>
                                    @endif
                                </td>
                            </table>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-5" for="per_diems">f. Per Diems for Maximum of 14 days</label>
                        <div class="col-sm-7">
                            @if($draftData)
                                <input type="text" class="form-control" name="per_diems" value="{{ $draftData->per_diems }}"/>
                            @else
                                <input type="text" class="form-control" name="per_diems" required/>
                            @endif
                        </div>
                    </div>

                    <div class="form-group" style="margin-left: 2%;">
                        <div class="col-sm-5">
                            <label class="control-label" for="per_diems_employee">Employee</label>
                        </div>
                        <div class="col-sm-7">
                            @if($draftData)
                                <input type="text" class="form-control" name="per_diems_employee" value="{{ $draftData->per_diems_employee }}"/>
                            @else
                                <input type="text" class="form-control" name="per_diems_employee" required/>
                            @endif
                        </div>
                    </div>

                    <div class="form-group" style="margin-left: 2%;">
                        <div class="col-sm-5">
                            <label class="control-label" for="per_diems_dependents">Dependent(s)</label>
                        </div>
                        <div class="col-sm-7">
                            @if($draftData)
                                <input type="text" class="form-control" name="per_diems_dependents" value="{{ $draftData->per_diems_dependents }}"/>
                            @else
                                <input type="text" class="form-control" name="per_diems_dependents" required/>
                            @endif
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-5" for="total_house_rental_1">g. Total House Rental</label>
                        <div class="col-sm-7">
                            <table class="table-responsive" style="border: none; width: 100%">
                                <td class="td-margin">
                                    @if($draftData)
                                        <select class="select-input" name="total_house_rental_1" value="{{ $draftData->total_house_rental_1 }}">
                                            <option @if($draftData->total_house_rental_1 == 'Yes') selected @endif>Yes</option>
                                            <option @if($draftData->total_house_rental_1 == 'No') selected @endif>No</option>
                                        </select>
                                    @else
                                        <select class="select-input" name="total_house_rental_1" required>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    @endif
                                </td>
                                <td style="width: 50%;">
                                    @if($draftData)
                                        <input type="text" class="form-control" name="total_house_rental_2" value="{{ $draftData->total_house_rental_2 }}"/>
                                    @else
                                        <input type="text" class="form-control" name="total_house_rental_2" required/>
                                    @endif
                                </td>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

            <!--EMPLOYEE STATEMENT-->
            <div class="row">
                <div style="background-color: #164396">
                    <h4 class="section">Employee Statement</h4>
                </div>
                <div class="col-sm-12">
                    <div style="margin-bottom: 30px">
                        @if($draftData && $draftData->statement_checklist == 'on')
                            <input type="checkbox" name="statement_checklist" checked/>
                        @else
                            <input type="checkbox" name="statement_checklist" />
                        @endif
                     <span>
                         I have understood and accept the terms and conditions of this
                            relocation and shall abide by the decision based on existing
                            regulation and company rules</span>
                    </div>
                    @if($draftData)
                        <textarea placeholder="Comment" name="comment" style="padding-left: 10px"> {{ $draftData->comment }} </textarea>
                    @else
                        <textarea placeholder="Comment" name="comment" style="padding-left: 10px"></textarea>
                    @endif
                </div>
            </div>

            <div class="container-button" style="
            display: flex;
            justify-content: flex-end;
            text-align: center;
            padding-top: 10px;
            margin: auto;
          ">
                <button type="submit" class="btn" name="action" value="submit" style="
              font-weight: bold;
              background-color: #53a653;
              color: #FFFFFF;
              font-size: 14px;
              height: 35px;
              width: 100px;
              border-radius: 5px;
            ">
                    SUBMIT
                </button>
                <button type="submit" class="btn" name="action" value="saveDraft" style="
              border: 1px solid #808080;
              background-color: #dedede;
              font-weight: bold;
              font-size: 14px;
              height: 35px;
              width: 150px;
              border-radius: 5px;
              margin-left: 10px;
            ">
                    SAVE DRAFT
                </button>
            </div>
            <br /><br />
        </form>
    </div>

    <!--FOOTER-->
    <div class="footer">
        <div style="text-align: center">
            <p>@ 2024 PT XL Axiata, Tbk</p>
        </div>
    </div>
</body>

</html>




