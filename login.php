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
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
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
        <h1 class="h1-responsive text-center py-3 animated fadeIn">Userlogin</h1>
        <div class="row">
            <div class="col animated slideInLeft">
                <div class="card">
                    <div class="view overlay">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%287%29.jpg" class="img-fluid" alt="">
                        <div class="mask rgba-white-slight waves-effect waves-light"></div>
                    </div>
                    <div class="card-body text-center">
                        <h4 class="card-title">Fabian</h4>
                        <p class="card-text">Log dich als Fabian ein</p>
                        <form action="power.php" method="POST">
                            <input type="text" hidden name="name" value="Fabian">
                            <button class="btn btn-primary" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col animated slideInRight">
                <div class="card">
                    <div class="view overlay">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%287%29.jpg" class="img-fluid" alt="">
                        <div class="mask rgba-white-slight waves-effect waves-light"></div>
                    </div>
                    <div class="card-body text-center">
                    <h4 class="card-title">Julian</h4>
                        <p class="card-text">Log dich als Julian ein</p>
                        <form action="power.php" method="POST">
                            <input type="text" hidden name="name" value="Julian">
                            <button class="btn btn-primary" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card my-5 animated slideInUp">
            <div class="view overlay">
                <img src="https://mdbootstrap.com/img/Photos/Slides/1.jpg" class="img-fluid" alt="">
                <div class="mask rgba-white-slight waves-effect waves-light"></div>
            </div>
            <div class="card-body text-center">
                <h4 class="card-title">Statistik</h4>
                <p class="card-text">Springe zu den Statisktiken</p>
                <a href="#" class="btn btn-primary">Login</a>
            </div>
        </div>
    </div>
</body>
</html>