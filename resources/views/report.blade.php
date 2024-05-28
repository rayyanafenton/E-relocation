<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link href="https://unpkg.com/bootstrap-table@1.17.1/dist/bootstrap-table.min.css" rel="stylesheet">
    <script src="https://unpkg.com/tableexport.jquery.plugin/tableExport.min.js"></script>
    <script src="https://unpkg.com/tableexport.jquery.plugin/libs/jsPDF/jspdf.min.js"></script>
    <script src="https://unpkg.com/tableexport.jquery.plugin/libs/jsPDF-AutoTable/jspdf.plugin.autotable.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.17.1/dist/bootstrap-table.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.17.1/dist/extensions/export/bootstrap-table-export.min.js"></script>

    <title>PT XL AXIATA, Tbk. - Relocation Report</title>

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
            font-family: "Axiata Book";
            margin: 0;
            padding: 0;
        }

        .head {
            margin-bottom: 40px;
            text-align: center;
        }

        .footer {
            background-color: #000;
            color: white;
            font-weight: bold;
            height: 50px;
            bottom: 0;
            width: 100%;
            padding: 20px 0;
            z-index: 4;
            position: fixed;
        }

        .table th {
            background-color: #E5E7E9;
            font-weight: bold;
        }
        .table th,
        .table td{
            text-align: center;
            align-content: center;
            white-space: nowrap;
        }

        .container-fluid {
            height: calc(100% - 70px);
            display: flex;
            flex-direction: column;
        }

        .table-responsive {
            flex: 1;
            overflow-y: auto;
        }

        ::-webkit-scrollbar{
            height: 10px;
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 2px #BFC7D9;
            background-color: #BFC7D9;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: #164396;
            border-radius: 10px;
        }


    </style>
</head>
<body>
        <!--NAVIGATION BAR-->
        <nav class="navbar navbar-default navbar-static-top" style="background-color: #164396; height: 50px">
            <a class="navbar-brand" href="">
                <img src="/navbar-img.png" style="margin-top: -6%; margin-left: -12px" />
            </a>
        </nav>

    <div class="container-fluid" style="width: 95%">
        <div class="head">
            <h2 style="font-weight: bold; margin-top: 40px">Relocation Report</h2>
        </div>
        <div id="toolbar" class="select">
            <select class="form-control">
              <option value="">Export Basic</option>
              <option value="all">Export All</option>
            </select>
          </div>

        <div class="table-responsive">
        <table class="table table-sm table-bordered table-hover" id="table"
            data-toggle="table"
            data-toolbar="#toolbar"
            data-show-export="true"
            data-pagination="true"
            data-search="true"
            data-click-to-select="true"
            data-show-toggle="true"
            data-show-columns="true"
            data-export-types="['excel', 'csv']"
            >
            <thead>
              <tr>
                <th scope="col" rowspan="2" data-valign="middle" data-sortable="true">No</th>
                <th scope="col" rowspan="2" data-valign="middle" data-sortable="true">Effective Date for Relocation</th>
                <th scope="col" rowspan="2" data-valign="middle" data-sortable="true">Relocation Doc ID</th>
                <th scope="col" rowspan="2" data-valign="middle" data-sortable="true">ECN Doc ID</th>
                <th scope="col" rowspan="2" data-valign="middle" data-sortable="true">Employee ID</th>
                <th scope="col" rowspan="2" data-valign="middle" data-sortable="true">Employee Name</th>
                <th scope="col" rowspan="2" data-valign="middle" data-sortable="true">Position Title</th>
                <th scope="col" rowspan="2" data-valign="middle" data-sortable="true">Grade/Group Level</th>
                <th scope="col" rowspan="2" data-valign="middle" data-sortable="true">Superior Name</th>
                <th scope="col" rowspan="2" data-valign="middle" data-sortable="true">Contract Type</th>
                <th scope="col" colspan="2" data-valign="middle" data-sortable="true">Date</th>
                <th scope="col" rowspan="2" data-valign="middle" data-sortable="true">Directorate</th>
                <th scope="col" rowspan="2" data-valign="middle" data-sortable="true">Division</th>
                <th scope="col" rowspan="2" data-valign="middle" data-sortable="true">Department</th>
                <th scope="col" rowspan="2" data-valign="middle" data-sortable="true">Unit</th>
                <th scope="col" rowspan="2" data-valign="middle" data-sortable="true">Previous Relocation Doc ID</th>
                <th scope="col" colspan="3" data-valign="middle" data-sortable="true">Work Relocation</th>
                <th scope="col" rowspan="2" data-valign="middle" data-sortable="true">Date Notified</th>
                <th scope="col" colspan="4" data-valign="middle" data-sortable="true">Type of Dependent</th>
                <th scope="col" rowspan="2" data-valign="middle" data-sortable="true">Type of Relocation</th>
                <th scope="col" colspan="2" data-valign="middle" data-sortable="true">Category</th>
                <th scope="col" colspan="2" data-valign="middle" data-sortable="true">Period of Relocation</th>
                <th scope="col" rowspan="2" data-valign="middle" data-sortable="true">Transportation</th>
                <th scope="col" rowspan="2" data-valign="middle" data-sortable="true">Transportation Fare from Disembarkment to Destination</th>
                <th scope="col" colspan="2" data-valign="middle" data-sortable="true">Shipment of Personal/Household Effects</th>
                <th scope="col" rowspan="2" data-valign="middle" data-sortable="true">School Transfer Fees</th>
                <th scope="col" colspan="2" data-valign="middle" data-sortable="true">Registration Fees</th>
                <th scope="col" colspan="2" data-valign="middle" data-sortable="true">Donation to School Building and Maintenance Fees</th>
                <th scope="col" colspan="2" data-valign="middle" data-sortable="true">First Month's Tuition Fees</th>
                <th scope="col" colspan="2" data-valign="middle" data-sortable="true">Temporary Living Expenses</th>
                <th scope="col" colspan="3" data-valign="middle" data-sortable="true">Per Diems for Maximum 14 Days</th>
                <th scope="col" colspan="2" data-valign="middle" data-sortable="true">Total House Rental</th>
                <th scope="col" rowspan="2" data-valign="middle" data-sortable="true">Employee Statement</th>
                <th scope="col" rowspan="2" data-valign="middle" data-sortable="true">Comment</th>
            </tr>
            <tr>
                <th scope="col" >Start Date</th>
                <th scope="col" >End Date</th>
                <th scope="col" >Point of Hire</th>

                <th scope="col" >From</th>
                <th scope="col" >To</th>

                <th scope="col" >Spouse</th>
                <th scope="col" >Age</th>
                <th scope="col" >Children</th>
                <th scope="col" >Age</th>

                <th scope="col" >Category 1</th>
                <th scope="col" >Category 2</th>

                <th scope="col" >Start Date</th>
                <th scope="col" >End Date</th>

                <th scope="col" >Picklist</th>
                <th scope="col" >Total</th>

                <th scope="col" >Fees</th>
                <th scope="col" >Description</th>

                <th scope="col" >Fees</th>
                <th scope="col" >Description</th>

                <th scope="col" >Fees</th>
                <th scope="col" >Description</th>

                <th scope="col" >Picklist</th>
                <th scope="col" >Description</th>

                <th scope="col" >Per Diems</th>
                <th scope="col" >Employee</th>
                <th scope="col" >Dependent(s)</th>

                <th scope="col" >Picklist</th>
                <th scope="col" >Total</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $record)
                <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $record->relocation_effective_date }}</td>
                        <td>{{ $record->relocation_doc_id }}</td>
                        <td>{{ $record->ecn_doc_id }}</td>

                        <td>{{ $record->employee_id }}</td>
                        <td>{{ $record->employee_name }}</td>
                        <td>{{ $record->position_title }}</td>
                        <td>{{ $record->grade_group_level }}</td>
                        <td>{{ $record->superior_name }}</td>
                        <td>{{ $record->contract_type }}</td>
                        <td>{{ $record->contract_start_date }}</td>
                        <td>{{ $record->contract_end_date }}</td>
                        <td>{{ $record->directorate }}</td>
                        <td>{{ $record->division }}</td>
                        <td>{{ $record->department }}</td>
                        <td>{{ $record->unit }}</td>

                        <td>{{ $record->previous_relocation_doc_id }}</td>

                        <td>{{ $record->point_of_hire }}</td>
                        <td>{{ $record->work_relocation_from }}</td>
                        <td>{{ $record->work_relocation_to }}</td>
                        <td>{{ $record->date_notified }}</td>
                        <td>{{ $record->spouse_name }}</td>
                        <td>{{ $record->spouse_age }}</td>
                        <td>{{ $record->children_name }}</td>
                        <td>{{ $record->children_age }}</td>
                        <td>{{ $record->type_of_relocation }}</td>
                        <td>{{ $record->category_1 }}</td>
                        <td>{{ $record->category_2 }}</td>
                        <td>{{ $record->relocation_start_date }}</td>
                        <td>{{ $record->relocation_end_date }}</td>

                        <td>{{ $record->transportation }}</td>
                        <td>{{ $record->transportation_fare }}</td>
                        <td>{{ $record->shipment_effects_1 }}</td>
                        <td>{{ $record->shipment_effects_2 }}</td>
                        <td>{{ $record->school_transfer_fees }}</td>
                        <td>{{ $record->registration_fees }}</td>
                        <td>{{ $record->registration_fees_desc }}</td>
                        <td>{{ $record->school_donation_fees }}</td>
                        <td>{{ $record->school_donation_fees_desc }}</td>
                        <td>{{ $record->first_month_tuition_fees }}</td>
                        <td>{{ $record->first_month_tuition_fees_desc }}</td>
                        <td>{{ $record->temporary_living_expenses }}</td>
                        <td>{{ $record->temporary_living_expenses_desc }}</td>
                        <td>{{ $record->per_diems }}</td>
                        <td>{{ $record->per_diems_employee }}</td>
                        <td>{{ $record->per_diems_dependents }}</td>
                        <td>{{ $record->total_house_rental_1 }}</td>
                        <td>{{ $record->total_house_rental_2 }}</td>

                        <td>
                            @if($record->statement_checklist == 'on')
                                <input type="checkbox" checked >
                            @else
                                <input type="checkbox" >
                            @endif
                        </td>

                        <td>{{ $record->comment }}</td>

                    </tr>
                    @endforeach
            </tbody>
        </table>
        </div>
    </div>

    <br/><br/>
<div class="footer navbar-fixed-bottom">
    <div style="text-align: center">
        <p>@ 2024 PT XL Axiata, Tbk</p>
    </div>
</div>

</body>
</html>
