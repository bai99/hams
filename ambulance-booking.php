<?php
include_once("dbconnect.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/agency.min.css" rel="stylesheet">
    <link href="css/ambulance-booking.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

    <style type="text/css">
        
        h4{


            color: red;
        }
    </style>

</head>

<body id="page-top" class="index">

    <?php include_once('menu.php');?>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">

                <h1>Booking A Ambulance</h1>
<?php
include_once("dbconnect.php");
if(isset($_POST['btnsave']))

{
$q="insert into am_book(
uname,
uphone,
uemail,
ambulancetype,
extras,
pickup_time,
pickup_place,
dropoff_place,
comments

)values(
'".$_POST['uname']."',
'".$_POST['uphone']."',
'".$_POST['uemail']."',
'".$_POST['ambulancetype']."',
'".$_POST['extras']."',
'".$_POST['pickup_time']."',
'".$_POST['pickup_place']."',
'".$_POST['dropoff_place']."',
'".$_POST['comments']."'
)";
$e=mysql_query($q);
//header('Location: /index.php?page=login');

}
if($e)
{
echo "<h4>Your Data Successfully Inserted</h4>";
echo "<script type='text/javascript'>  window.location='ambulance-invoice.php'; </script>";
}

?>




                
<form class="myForm" method="post" enctype="application/x-www-form-urlencoded" action="">


<div class="form-inline">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="uname" name="uname">
      </div>
    </div>



<div class="form-inline">
      <label class="control-label col-sm-2" for="email">Phone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="uphone" name="uphone">
      </div>
    </div>

<div class="form-inline">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="uemail" name="uemail">
      </div>
    </div>

<p>Which Ambulance do you require?</p>
<p><label class="choice"> <input type="radio" name="ambulancetype"> AC </label>
<label class="choice"> <input type="radio" name="ambulancetype"> Non AC </label>
<label class="choice"> <input type="radio" name="ambulancetype">Hiace Ambulance </label></p>




<label>Extras</label>
<label class="choice"> <input type="checkbox" name="extras" value="baby"> Baby Seat </label>
<label class="choice"> <input type="checkbox" name="extras" value="wheelchair"> Wheelchair Access </label>
<label class="choice"> <input type="checkbox" name="extras" value="tip"> Oxigen </label></p>


<p>
<label>Pickup Date/Time
<input type="date" name="pickup_time">
</label>

<label>Pickup Place
<select id="pickup_place" name="pickup_place">
<option value="" selected="selected">Select One</option>
<!-- <option value="office" >Taxi Office</option>
<option value="town_hall" >Town Hall</option>
<option value="telepathy" >We'll Guess!</option> -->
</select>
</label> 
</p>

<p>
<label>Dropoff Place
<input type="text" name="dropoff_place">
</label>

<datalist id="destinations">
<!-- <option value="Airport">
<option value="Beach">
<option value="Fred Flinstone's House"> -->
</datalist>
</p>

<p>
<label>Special Instructions
<textarea name="comments" maxlength="500"></textarea>
</label>
</p>

<p><input type="submit" name="btnsave" value="Submit"></p>

</form>
                
                
                
                
                    </div>
            </div>
            
        </div>
    </section>

   

    

   

  

   

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; HAMS Website 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

   
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
