<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-size: 14px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid black;
            table-layout: fixed;
        }

        td {
            border: 1px solid black;
            border-collapse: collapse;
            width: fit-content;
            padding: 0.3rem 0.2rem;
        }
    </style>
</head>

<body>
    <table>
        <tbody>
            <tr>
                <td>issues to</td>
                <td colspan="2"></td>
                <td>mark on Sample</td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td rowspan="2">Address</td>
                <td colspan="2" rowspan="2"></td>
                <td>Drawn By</td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Received Date</td>
            </tr>
            <tr>
                <td>Contact Person</td>
                <td colspan="2"></td>
                <td>Analysis Date</td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Sample Details</td>
                <td colspan="2"></td>
                <td>Report No.</td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Sample No.</td>
                <td colspan="2"></td>
                <td>Report Date</td>
                <td colspan="2"></td>
            </tr>
        </tbody>
    </table>
    <p style="  width: fit-content; 
                color: white; 
                background-color: #0069c3; 
                text-align: center; 
                padding: 0.5rem 2rem;
                display: flex;
                margin: 1rem auto;
                border-radius: 5px">
        ANALYSIS REPORT - NUTRITION -NIRS
    </p>
    <textarea name="" id="" style="width: 100%;" rows="30"></textarea>
    <h3 style="text-align: center; margin: 1rem 0rem; font-weight: bold">-END OF REPORT-</h3>
    <table style="border: none;">
        <tbody>
            <tr style="display: table-row; height: 120px; vertical-align: top">
                <td style="width:20%">Observation <br>(if any)</td>
                <td style="width:50%; font-weight: bold">NA</td>
                <td style="width:30%; text-align: right; font-weight: bold">reviewed & Authorised by</td>
            </tr>
            <tr>
                <td>Unit of Measurement:</td>
                <td>As mentioned above</td>
                <td style="border-bottom: none; text-align: right">Dr. Anirvid Sarkar</td>
            </tr>
            <tr>
                <td>Instrument Used</td>
                <td></td>
                <td style="border-top: none; text-align: right">Authorised Signatory</td>
            </tr>
        </tbody>
    </table>
</body>

</html>