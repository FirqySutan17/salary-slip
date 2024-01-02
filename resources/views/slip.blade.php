<html>

<head>
    <title>Biztrip Request</title>
    <link rel="icon" type="image/png" href="var:icon" sizes="16x16">
    <link rel="icon" type="image/png" href="var:icon" sizes="32x32">
    <link rel="icon" href="var:icon" type="image/x-icon" />
    {{-- <style type="text/css" media="all">
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            font-family: 'Montserrat', sans-serif;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cke_wordcountLimitReached {
            color: red ! important
        }

        .cke_textarea_inline {
            padding: 0px;
            height: 100%;
            overflow: auto;

            border: 1px solid gray;
            -webkit-appearance: textfield;
        }

        @page {
            margin: 20px;
            border: thin solid black;

            @bottom-center {
                content: element(footer);
            }

            @top-center {
                content: element(header);
            }

        }

        #page-header {
            display: block;
            position: running(header);
            text-align: center;
        }

        #page-footer {
            display: block;
            position: running(footer);
        }

        .page-number:before {
            content: counter(page);
        }

        .page-count:before {
            content: counter(pages);
        }

        .report-title {
            letter-spacing: 4px;
            font-weight: bold;
            font-size: 24px;
            text-align: center;
        }

        #table-header .border-bottom {
            border-bottom-color: #000;
            border-bottom-style: solid;
            border-bottom-width: 1px;
        }

        #table-header .border-top {
            border-top-color: #000;
            border-top-style: solid;
            border-top-width: 1px;
        }

        #table-header .border-left {
            border-left-color: #000;
            border-left-style: solid;
            border-left-width: 1px;
        }

        #table-header .border-right {
            border-right-color: #000;
            border-right-style: solid;
            border-right-width: 1px;
        }

        #table .border-double-bottom {
            border-bottom-color: black;
            border-bottom-style: double;
            border-bottom-width: 3px;
        }

        #table .border-dashed-bottom {
            border-bottom-color: black;
            border-bottom-style: dashed;
            border-bottom-width: 1px;
        }

        #table .border-dashed-top {
            border-top-color: black;
            border-top-style: dashed;
            border-top-width: 1px;
        }

        #table {
            /*border: 1px solid #000;
          border-spacing: 0;*/
        }

        table {
            /*border-collapse: collapse;*/
            border-spacing: 0;
        }

        #table .header-table {
            border: 1px solid #000;

        }

        #table .close-header-table {
            border-color: #000;
            border-style: solid;
            border-width: 1px 1px 2px 1px;

        }

        .no-border {
            border: none;
        }

        .border-top {
            border-top-color: #000;
            border-top-style: solid;
            border-top-width: 1px;
            "

        }

        .border-bottom {
            border-bottom-color: #000;
            border-bottom-style: solid;
            border-bottom-width: 1px;
        }


        .border-left {
            border-left-color: #000;
            border-left-style: solid;
            border-left-width: 1px;
        }

        .border-right {
            border-right-color: #000;
            border-right-style: solid;
            border-right-width: 1px;
        }

        .no-border-right {
            border-left-color: #000;
            border-bottom-color: #000;
            border-top-color: #000;
            border-left-style: solid;
            border-bottom-style: solid;
            border-right-style: none;
            border-top-style: solid;
            border-left-width: 1px;
            border-bottom-width: 1px;
            border-right-width: 0px;
            border-top-width: 1px;
            "

        }

        .no-border-left {
            border-right-color: #000;
            border-bottom-color: #000;
            border-top-color: #000;
            border-right-style: solid;
            border-bottom-style: solid;
            border-left-style: none;
            border-top-style: solid;
            border-left-width: 0px;
            border-bottom-width: 1px;
            border-right-width: 1px;
            border-top-width: 1px;
            "

        }


        .no-border-top {
            border-left-color: #000;
            border-bottom-color: #000;
            border-right-color: #000;
            border-left-style: solid;
            border-bottom-style: solid;
            border-right-style: solid;
            border-top-style: none;
            border-left-width: 1px;
            border-bottom-width: 1px;



            border-right-width: 1px;
            border-top-width: 0px;
            "

        }

        .no-border-bottom {
            border-left-color: #000;
            border-right-color: #000;
            border-top-color: #000;
            border-left-style: solid;
            border-bottom-style: none;
            border-right-style: solid;
            border-top-style: solid;
            border-left-width: 1px;
            border-bottom-width: 0px;
            border-right-width: 1px;
            border-top-width: 1px;
            "

        }

        .border-solid {
            border-left-color: #000;
            border-bottom-color: #000;
            border-right-color: #000;
            border-top-color: #000;
            border-left-style: solid;
            border-bottom-style: solid;
            border-right-style: solid;
            border-top-style: solid;
            border-left-width: 1px;
            border-bottom-width: 1px;
            border-right-width: 1px;
            border-top-width: 1px;
            "

        }

        .page-content {
            font-size: 12px;
        }

        textarea {
            resize: none;
        }

        .center {
            text-align: center;
        }

        .right {
            text-align: right;
        }

        input[name=patient_status] {
            display: none;
        }

        label.radio {
            cursor: pointer;
        }

        input:checked+label.radio {
            /*        background: red; */
            border-radius: 5px;
            border: 2px solid #73AD21;
            padding: 4px;
        }

        .checked {
            text-decoration: line-through;
        }

        .unchecked {
            text-decoration: none;
        }

        #page-header {
            display: flex;
            align-content: center;
            justify-content: center;
            align-items: center;
        }

        .content-header td {
            padding: 12px 10px;
            font-size: 12px;
        }

        h1 {
            padding: 0px;
            margin: 0;
            font-size: 18px;
        }
    </style> --}}
    <style>
        body {
            background: rgb(204, 204, 204);
            padding: 0;
            margin: 0;
            border: none;
        }

        table {
            border-spacing: 0px;
            border-collapse: collapse;
        }

        page {
            background: white;
            display: block;
            margin: 0 auto;
            margin-bottom: 0.5cm;
            box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
        }

        page[size="A4"] {
            width: 21cm;
            height: 29.7cm;
        }

        page[size="A4"][layout="landscape"] {
            width: 29.7cm;
            height: 21cm;
        }

        page[size="A3"] {
            width: 29.7cm;
            height: 42cm;
        }

        page[size="A3"][layout="landscape"] {
            width: 42cm;
            height: 29.7cm;
        }

        page[size="A5"] {
            width: 14.8cm;
            height: 21cm;
        }

        page[size="A5"][layout="landscape"] {
            width: 21cm;
            height: 14.8cm;
        }

        tr {
            width: 100%;
            border: none;
            background: #fff
        }

        th,
        td {
            padding: 5px 5px
        }

        .border-show tr {
            border: solid thin;
        }

        @media print {

            body,
            page {
                background: white;
                margin: 0;
                box-shadow: 0;
            }
        }
    </style>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
    <div id="page-header">
        <div style="display: block">
            <table class="table-form" style="width: 100%">
                <tr style="width: 100%">
                    <th style="width: 100%; text-align: left" colspan="2">plant_nm</th>
                </tr>
                <tr style="width: 100%">
                    <th style="width: 72%; text-align: left">PAYROLL SLIP</th>
                    <th style="width: 28%; text-align: center; border: 1px solid #000">Exchange Rate</th>
                </tr>
            </table>
            <table style="width: 100%">
                <tr style="width: 100%">
                    <th style="width: 15%; text-align: left">Name</th>
                    <td style="width: 1%">:</td>
                    <td style="width: 56%">empno - npkname</td>
                    <td
                        style="width: 14%; border: 1px solid #000; border-top: 0px solid #000; border-right: 0px solid #000">
                        K Won/USD</td>
                    <td
                        style="width: 14%; text-align: right; border: 1px solid #000; border-top: 0px solid #000; border-top: 0px solid #000">
                        0000.1
                    </td>
                </tr>
                <tr style="width: 100%">
                    <th style="width: 15%; text-align: left">Position</th>
                    <td style="width: 1%">:</td>
                    <td style="width: 56%">empno - npkname</td>
                    <td
                        style="width: 14%; border: 1px solid #000; border-top: 0px solid #000; border-right: 0px solid #000">
                        K Won/USD</td>
                    <td
                        style="width: 14%; text-align: right; border: 1px solid #000; border-top: 0px solid #000; border-top: 0px solid #000">
                        0000.1</td>
                </tr>
                <tr style="width: 100%">
                    <th style="width: 15%; text-align: left">Period</th>
                    <td style="width: 1%">:</td>
                    <td style="width: 56%">empno - npkname</td>
                    <td
                        style="width: 14%; border: 1px solid #000; border-top: 0px solid #000; border-right: 0px solid #000">
                        K Won/USD</td>
                    <td
                        style="width: 14%; text-align: right; border: 1px solid #000; border-top: 0px solid #000; border-top: 0px solid #000">
                        0000.1</td>
                </tr>
            </table>
            <table class="table-form border-show" style="width: 100%; margin-top: 10px">
                <tr style="width: 100%">
                    <td style="width: 2%">1.</td>
                    <td style="width: 74%">Salary</td>
                    <td style="width: 24%">Rp base_amt</td>
                </tr>
                <tr>
                    <td style="width: 2%">2.</td>
                    <td style="width: 74%">Allowance &nbsp; :</td>
                </tr>
                <tr>
                    <td style="width: 2%"></td>
                    <td style="padding-left: 20px">Position</td>
                    <td>Rp </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="padding-left: 20px">Transportation</td>
                    <td>Rp </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="padding-left: 20px">Meal</td>
                    <td>Rp </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="padding-left: 20px">Communication</td>
                    <td>Rp </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="padding-left: 20px">Overtime</td>
                    <td>Rp </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="padding-left: 20px">Shift</td>
                    <td>Rp </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="padding-left: 20px">Full day</td>
                    <td>Rp </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="padding-left: 20px">Other Allow</td>
                    <td>Rp </td>
                </tr>
                <tr>
                    <td></td>
                    <td style="padding-left: 20px">Etc</td>
                    <td>Rp </td>
                </tr>
                <tr style="width: 100%">
                    <th style="width: 2%; text-align: left; padding-bottom: 20px"></th>
                    <th style="width: 74%; text-align: left; padding-bottom: 20px">Total Allowance</th>
                    <th style="width: 24%; text-align: left; padding-bottom: 20px">Rp </th>
                </tr>
                <tr>
                    <th style="width: 2%; text-align: left; padding: 7px 5px">3.</th>
                    <th style="text-align: left; padding: 10px 5px">Salary Paid (IDR)</th>
                    <th style="text-align: left; padding: 7px 5px">Rp</th>
                </tr>
                <tr>
                    <td style="width: 2%; padding-top: 20px">4.</td>
                    <td style="padding-top: 20px">WHT Art 21</td>
                    <td style="padding-top: 20px">Rp</td>
                </tr>
                <tr>
                    <td style="width: 2%">5.</td>
                    <td>Insurance</td>
                    <td>Rp</td>
                </tr>
                <tr>
                    <td style="width: 2%">6.</td>
                    <td>Accident Insurance (JKK)</td>
                    <td>Rp</td>
                </tr>
                <tr>
                    <td style="width: 2%">7.</td>
                    <td>Death Insurance (JKM)</td>
                    <td>Rp</td>
                </tr>
                <tr>
                    <td style="width: 2%">8.</td>
                    <td>Old Age Insurance (JHT)</td>
                    <td>Rp</td>
                </tr>
                <tr>
                    <td style="width: 2%">9.</td>
                    <td>Health Insurance</td>
                    <td>Rp</td>
                </tr>
                <tr>
                    <td style="width: 2%">10.</td>
                    <td>Pension Guarantee</td>
                    <td>Rp</td>
                </tr>
                <tr>
                    <td style="width: 2%">11.</td>
                    <td>Deduct Etc</td>
                    <td>Rp</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0px"></td>
                </tr>
                <tr style="width: 100%">
                    <th style="width: 2%; text-align: left;"></th>
                    <th style="width: 74%; text-align: left;">Deduct Amount</th>
                    <th style="width: 24%; text-align: left;">Rp </th>
                </tr>
                <tr>
                    <td style="padding: 10px 0px"></td>
                </tr>
                <tr>
                    <th style="width: 2%; text-align: left;">12.</th>
                    <th style="text-align: left;">Nett Salary Paid (IDR)</th>
                    <th style="text-align: left;">Rp</th>
                </tr>
            </table>
            <table class="table-form" style="margin-top: 20px; width: 20%">
                <tr style="text-align: center">
                    <td style="text-align: center">Approved By ,</td>
                </tr>
                <tr style="text-align: center">
                    <td style="height: 35px;text-align: center"></td>
                </tr>
                <tr style="text-align: center">
                    <td style="text-align: center">
                        Achmad Furgon
                        <br>
                        <hr style="border: 1.5px solid #000; margin: auto">
                        HR Manager
                    </td>
                </tr>
            </table>
        </div>


    </div>
    <div id="page-content">

        <div id="page-footer">

        </div>
    </div>
    </form>
</body>

</html>