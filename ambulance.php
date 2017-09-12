<?php require_once('database.php');?>
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
    <link href="css/ambulance.css" rel="stylesheet">
    <link href="css/agency.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <?php include_once('menu.php');?>

    

    <!-- Services Section -->
    <!-- <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
				
				<form>
    <div class="form-group row">
      <div class="col-xs-4">
        <label for="ex1">Select City</label>
        <input class="form-control" id="ex1" type="text">
      </div>
      <div class="col-xs-4">
        <label for="ex2">Select Hospital</label>
        <input class="form-control" id="ex2" type="text">
      </div>
      <div class="col-xs-4">
        <label for="ex3">Total Number of Ambulance</label>
        <input class="form-control" id="ex3" type="text">
      </div>
    </div>
	<div class="col-xs-4">
        <a href="ambulance-booking.html"><button type="button" class="btn btn-warning">Booking A Ambulance</button></a>
      </div>
	
  </form>
				
				
				
				
                    </div>
            </div>
            
        </div>
    </section> -->

    <script type="text/javascript">
$(document).ready(function()
{  
    $('#country').on('change',function()
    {
var countryID =$(this).val();
if(countryID)

{
$.ajax
({
type:'POST',
url:'ajax.php',
data:'city_id='+countryID,
success:function(html)
{

$('#state').html(html);
$('#city').html('<option value="">Select State First</option>');
}


});
}else
{
$('#state').html('<option value="">Select Country First</option>');
$('#city').html('<option value="">Select State First</option>');



}

    })

$('#state').on('change',function()
    {
var stateID =$(this).val();
if(stateID)

{
$.ajax
({
type:'POST',
url:'ajax.php',
data:'hospital_id='+stateID,
success:function(html)
{
    
$('#city').html(html);
}


});
}else
{
$('#city').html('<option value="">Select State First</option>');




}

    })  

});




</script>



    <div class="main">
        
          <div id="wrapper" class="w3ls_wrapper w3layouts_wrapper">
            <div id="steps" style="margin:0 auto;" class="agileits w3_steps">
                <form id="formElem" name="formElem" action="#" method="post" class="w3_form w3l_form_fancy">
                    
                    <fieldset class="step w3_agileits">
                        
                        <p>

                            <?php 
$query=$db->query("Select * From cities Where status='1' ORDER BY city_name ASC");
$rowcount=$query->num_rows;

                            ?>
                            <!-- Select Box for county where data is fetch through select query!-->
                            <label for="country">City</label>
                            <select name="country" id="country" >
                                <option value="">Select City</option>
                                <?php 
                                if($rowcount>0){

                                    while($row=$query->fetch_assoc()){
                                        echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>';
                                    }
                                    
                                }
else{
                                        echo '<option value="">Country Not Available</option>';

                                    }
                                ?>
                                
                            </select>
                        </p>
                        <!-- Select Box for state where data is fetch through ajax -->
                                    <p>
                                    <label for="state">Hospital</label>
                                    <select name="state" id="state" >
                                    <option value="">Select Hospital</option>
                                    </select>
                                </p>
                        <!-- Select Box for city where data is fetch through ajax !-->
                                    <p>
                                    <label for="city">Total Ambulance</label>
                                    <select name="city" id="city" >
                                    <option value="">Total Ambulance</option>
                                    <!-- <input type="text" id="city" name="city"> -->
                                    </select>
                                    
                                    </p>
                                    <p>
                                    <label for="city">Available Ambulance</label>
                                    <select name="city" id="city" >
                                    <option value="">Total Ambulance</option>
                                     <option value="">20</option>
                                     <option value="">4</option>
                                     <option value="">3</option>
                                     <option value="">2</option>
                                    <!-- <input type="text" id="city" name="city"> -->
                                    </select>
                                    
                                    </p>


                                    <div class="col-xs-12">
        <a href="ambulance-booking.php"><button type="button" class="btn btn-warning">Booking A Ambulance</button></a>
      </div>
                    
                    </fieldset>
                    
                    
                </form>
            </div>
            
        </div>
        
    </div>

  


   

  

   

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
