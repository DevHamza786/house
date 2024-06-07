<html>
<head>
<style>
.tbl-bordered{
border:1px solid black;
}
</style>
</head>
<body>
    <center><h2>AMNA CO-OPRATIVE HOUSING SOCIETY LTD.</h2>
    <table class="tbl-bordered" style="width:700px">
        <tbody>
            <tr class="tbl-bordered">
                <td class="tbl-bordered"> &nbspPlot</td>
                <td class="tbl-bordered"> &nbsp{{$entry->plot}}</td>
                <td class="tbl-bordered"> &nbspS/#</td>
                <td class="tbl-bordered"> &nbsp{{$entry->serial}}</td>
                <td class="tbl-bordered"> &nbspA/#</td>
                <td class="tbl-bordered"> &nbsp{{$entry->area}}</td>
            </tr>
            <tr class="tbl-bordered">

                <td class="tbl-bordered"> &nbspD/P</td>
                <td class="tbl-bordered"> &nbsp{{$entry->dp}}</td>
                <td class="tbl-bordered"> &nbspPH</td>
                <td class="tbl-bordered"> &nbsp{{$entry->phase}}</td>
                <td class="tbl-bordered"> &nbspM.S (D)</td>
                <td class="tbl-bordered">&nbsp{{$entry->msd}}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <table class="tbl-bordered" style="width:700px">
        <tbody>
            <tr class="tbl-bordered">
                <td class="tbl-bordered">W/C</td>
                <td class="tbl-bordered"> &nbsp{{$entry->wp}}</td>

                <td class="tbl-bordered">Name</td>
                <td class="tbl-bordered" style="width:40%"> &nbsp{{$entry->name}}</td>

            </tr>

            <tr class="tbl-bordered">
                <td class="tbl-bordered">C/L</td>
                <td class="tbl-bordered"> &nbsp{{$entry->cost_of_land}}</td>

                <td class="tbl-bordered">O/C</td>
                <td class="tbl-bordered" style="width:40%"> &nbsp{{$entry->other_charges}}</td>

            </tr>

            <tr class="tbl-bordered">
                <td class="tbl-bordered">B/C</td>
                <td class="tbl-bordered" style="width:40%"> &nbsp{{$entry->bounder_wall_charges}}</td>

                <td class="tbl-bordered">Balance</td>
                <td class="tbl-bordered" style="width:40%"> &nbsp{{$entry->balance}}</td>

            </tr>

            <!--<tr class="tbl-bordered">-->
            <!--    <td class="tbl-bordered">Name6</td>-->
            <!--    <td class="tbl-bordered" style="width:40%"> &nbsp{{$entry->name6}}</td>-->

            <!--    <td class="tbl-bordered">Name7 </td>-->
            <!--    <td class="tbl-bordered" style="width:40%"> &nbsp{{$entry->name7}} </td>-->

            <!--</tr>-->

            <!-- <tr class="tbl-bordered">-->
            <!--    <td class="tbl-bordered">Name8</td>-->
            <!--    <td class="tbl-bordered" style="width:40%"> &nbsp{{$entry->name8}}</td>-->


            <!--    <td class="tbl-bordered">Name9</td>-->
            <!--    <td class="tbl-bordered" style="width:40%"> &nbsp{{$entry->name9}}</td>-->

            </tr>

        </tbody>
    </table>
    <br>
    <br>
    <table class="tbl-bordered" style="width:700px">
        <tbody>
            <tr class="tbl-bordered">
                <td class="tbl-bordered">N.I.C</td>
                <td class="tbl-bordered"> &nbsp{{$entry->name10}}</td>

                <td class="tbl-bordered">Address</td>
                <td class="tbl-bordered"> &nbsp{{$entry->address}}</td>

            </tr>

            <tr class="tbl-bordered">
                <td class="tbl-bordered">Cell #</td>
                <td class="tbl-bordered"> &nbsp{{$entry->phone}}</td>

                <td class="tbl-bordered">Date</td>
                <td class="tbl-bordered"> &nbsp{{$entry->date}}</td>

            </tr>

            <tr class="tbl-bordered">
                <td class="tbl-bordered">Upto</td>
                <td class="tbl-bordered"> &nbsp{{$entry->upto}}</td>

                <td class="tbl-bordered">Ms</td>
                <td class="tbl-bordered"> &nbsp{{$entry->ms}}</td>

            </tr>

        </tbody>
    </table>
    <p>SHOP # 40, DECENT GARDEN GULISTAN-E-JAUHAR BLOCK 7 KARACHI <br> CELL# 03337012229  </p>
    </center>
</body>
</html>

<script>
window.print();
</script>
