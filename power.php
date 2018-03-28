<?php
session_start(); //Nicht vergessen
$name = $_POST['name'];

$_SESSION['username'] = $name;

?>




<!DOCTYPE html>
<html lang="en">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>

<head>
    <title>Power Management</title>
</head>
<style>
    body {
        background-color: #d0d6e2;
    }
</style>
<body>
<div class="container">
        <div class="card p-2 m-2 animated fadeIn">
            <h1 class="h1-responsive p-1 animated slideInLeft">Hallo <?php echo $name ?></h1>
            <h5 class="h5-responsive p-1 animated slideInRight">Das MagicMonk Tool für das Powermanagement</h5>
        </div>
        <div class="row" id="mainrow">
            <div class="col" id="startcol">
                <div class="card p-2 m-2 animated fadeInUp" id="startcontainer">
                    <p class="text-center"><b>Arbeit starten</b></p>
                    <div class="my-2">
                        <label for="dateinput">Art der Arbeit:</label>
                        <div class="form-check">
                            <input name="artwork" value="Verpacken" type="radio" class="with-gap artwork" id="radio106" checked>
                            <label for="radio106">Verpacken</label>
                        </div>
                        <div class="form-check">
                            <input name="artwork" value="Kundenanliegen" type="radio" class="with-gap artwork" id="radio107">
                            <label for="radio107">Kundenanliegen</label>
                        </div>
                        <div class="form-check">
                            <input name="artwork" value="Prestashop" type="radio" class="with-gap artwork" id="radio108">
                            <label for="radio108">Prestashop</label>
                        </div>
                        <div class="my-2">
                            <label for="dateinput">Datum:</label>
                            <input type="date" name="startdate" class="dateinput form-control" id="startdate">
                        </div>
                        <div class="my-2">
                            <label for="timeinput">Startuhrzeit:</label>
                            <input type="time" name="starttime" class="timeinput form-control" id="starttime">
                        </div>
                        <div class="my-2">
                            <button type="submit" class="btn btn-unique" onclick="savestart()">Starten</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" id="endcol">
                <div class="card p-2 m-2 animated fadeInUp" id="endcontainer">
                    <p class="text-center"><b>Arbeit beenden</b></p>
                    <div class="my-2">
                        <label for="dateinput">Datum:</label>
                        <input type="date" class="dateinput form-control" id="enddate">
                    </div>
                    <div class="my-2">
                        <label for="timeinput">Enduhrzeit:</label>
                        <input type="time" class="timeinput form-control" id="endtime">
                    </div>
                    <div class="my-2">
                        <button type="button" class="btn btn-unique" onclick="saveend()">Beenden</button>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card p-2 m-2 animated rotateInDownRight">
                    <p class="">Übersicht</p>
                    <div id="uebersicht">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            $('.dateinput').each(function () {
                var today = new Date();
                var day = today.getDate();
                var month = today.getMonth();
                month += 1;
                if (month < 10) {
                    month = "0" + month;
                }
                var year = today.getFullYear();
                $(this).val(year + "-" + month + "-" + day)
            });

            $('.timeinput').each(function () {
                var today = new Date();
                var hour = today.getHours();
                if (hour < 10) {
                    hour = "0" + hour;
                }
                var minute = today.getMinutes();
                if (minute < 10) {
                    minute = "0" + minute;
                }
                $(this).val(hour + ":" + minute)
            });
        });

        function savestart() {
            var artwork = $('.artwork:checked').val();
            var starttime = $('#starttime').val();
            var startdate = $('#startdate').val();
            $.ajax ({
                type: "POST",
                url: "savedata.php",
                data: {"artwork":artwork, "starttime":starttime, "startdate":startdate},
                success: function(data) {
                    $('#mainrow').after(inseractualtask(data))
                }
            });
        }

        function inseractualtask(data) {
            var dataarr = data.split(",");
            return '<div class="text-center"><div class="card p-2 m-2 animated fadeIn"><h3 class="h3-responsive animated bounceInLeft m-2 p-2"><b>Arbeit gestartet!</b></h3>' +
                '<p class="animated rotateInDownLeft">Art der Arbeit: ' + dataarr[0] + '</p>' +
                '<p class="animated rotateInDownRight">Arbeit gestartet am: ' + dataarr[2] + ' um ' + dataarr[1] + ' Uhr.</p>' +
                '</div></div>'
        }


    </script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
</body>
</html>