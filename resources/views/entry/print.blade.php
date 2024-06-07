<html>
<head>
<style>
.tbl-bordered{
border:1px solid black;
}
</style>
</head>
<body>
    <h2>AMNA CO-OPRATIVE HOUSING SOCIETY LTD.</h2>
    <table class="tbl-bordered">
        <tbody>
            <tr class="tbl-bordered">
                <td class="tbl-bordered">Name</td>
                <td class="tbl-bordered">{{$entry->name}}</td>

            </tr>
            <tr class="tbl-bordered">
                <td class="tbl-bordered">Date</td>
                <td class="tbl-bordered">{{$entry->date}}</td>

            </tr>
            <tr class="tbl-bordered">
                <td class="tbl-bordered">Dues</td>
                <td class="tbl-bordered"></td>

            </tr>
            <tr class="tbl-bordered">
                <td class="tbl-bordered">Transfer Fee</td>
                <td class="tbl-bordered">12500</td>

            </tr>
            <tr class="tbl-bordered">
                <td class="tbl-bordered">Reg    #</td>
                <td class="tbl-bordered"></td>

            </tr>
            <tr class="tbl-bordered">
                <td class="tbl-bordered">Plot #</td>
                <td class="tbl-bordered">{{$entry->plot}}</td>

            </tr>

            <tr class="tbl-bordered">
                <td class="tbl-bordered">ALLOTMENT S/C  Is Submitted In </td>
                <td class="tbl-bordered">Office for TRANSFER </td>

            </tr>

            <tr class="tbl-bordered">
                <td class="tbl-bordered">Delivered On </td>
                <td class="tbl-bordered"> </td>

            </tr>

            <tr class="tbl-bordered">
                <td class="tbl-bordered">Bounder Wall Charges</td>
                <td class="tbl-bordered">{{ $entry->bounder_wall_charges }}</td>
            </tr>

            <tr class="tbl-bordered">
                <td class="tbl-bordered">Other Charges</td>
                <td class="tbl-bordered">{{ $entry->other_charges }}</td>
            </tr>

            <tr class="tbl-bordered">
                <td class="tbl-bordered">Cost Of Land</td>
                <td class="tbl-bordered">{{ $entry->cost_of_land }}</td>
            </tr>

             <tr class="tbl-bordered">
                <td class="tbl-bordered">Balance</td>
                <td class="tbl-bordered">{{ $entry->balance }}</td>
            </tr>

            <tr class="tbl-bordered">
                <td class="tbl-bordered">Authorised Sign</td>
                <td class="tbl-bordered"></td>

            </tr>

        </tbody>
    </table>
    <p>SHOP # 40, DECENT GARDEN GULISTAN-E-JAUHAR BLOCK 7 KARACHI <br> CELL# 03337012229  </p>
</body>
</html>

<script>
window.print();
</script>
