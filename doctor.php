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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <?php include_once('menu.php');?>
<style type="text/css">
.doctor_result_div {
    padding: 20px 0;
    border-top: 2px solid #D0D0D0;
    text-align: center;
}
.img-responsive, .thumbnail a>img, .thumbnail>img {
    display: inline;
    max-width: 100%;
    height: auto;
}

</style>
    

    <div class="container">
<div class="row">
     <div class="col-sm-12>
<?php 
include_once("dbconnect.php");
$sql_sem = "select distinct specialty from doctor where specialty is not null order by specialty asc";
$res_sem = mysql_query($sql_sem);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['btnShow'])) {
            //$sql = "select * from hospital where 1 = 1 ";
            $sql="SELECT doctor.doctor_id,doctor.doctor_name, doctor.chamber_location,doctor.specialty,hospital.hospital_name
FROM doctor
INNER JOIN hospital ON doctor.hospital_id =hospital.hospital_id where 1 = 1";

            if (isset($_POST['ptname'])) {
                $buyername = $_POST['ptname'];
                if ($buyername <> "") { 
                    $sql .= " and specialty = '$buyername' "; 
                }
            } 
                if (isset($_POST['buyerorderno'])) {
                $buyerorderno = $_POST['buyerorderno'];
                if ($buyerorderno <> "") { 
                    $sql .= " and doctor_name = '$buyerorderno' ";                 
                }
            } 
                if (isset($_POST['buyerorderno'])) {
                $buyerorderno = $_POST['buyerorderno'];
                if ($buyerorderno <> "") { 
                    $sql .= " and hospital_id = '$buyerorderno' ";              
                }}
                if (isset($_POST['buyerorderno'])) {
                $buyerorderno = $_POST['buyerorderno'];
                if ($buyerorderno <> "") { 
                    $sql .= " and add_phone = '$buyerorderno' ";                
                }}
                if (isset($_POST['buyerorderno'])) {
                $buyerorderno = $_POST['buyerorderno'];
                if ($buyerorderno <> "") { 
                    $sql .= " and add_email = '$buyerorderno' ";                
                }}
                if (isset($_POST['buyerorderno'])) {
                $buyerorderno = $_POST['buyerorderno'];
                if ($buyerorderno <> "") { 
                    $sql .= " and add_gender = '$buyerorderno' ";               
                }}
                if (isset($_POST['buyerorderno'])) {
                $buyerorderno = $_POST['buyerorderno'];
                if ($buyerorderno <> "") { 
                    $sql .= " and add_dept = '$buyerorderno' ";                 
                }}
                if (isset($_POST['buyerorderno'])) {
                $buyerorderno = $_POST['buyerorderno'];
                if ($buyerorderno <> "") { 
                    $sql .= " and add_semister = '$buyerorderno' ";                 
                }
            }   
            if (isset($_POST['buyerorderno'])) {
                $buyerorderno = $_POST['buyerorderno'];
                if ($buyerorderno <> "") { 
                    $sql .= " and add_dob = '$buyerorderno' ";              
                }
            }       
            
            if (isset($_POST['buyerorderno'])) {
                $buyerorderno = $_POST['buyerorderno'];
                if ($buyerorderno <> "") { 
                    $sql .= " and add_sscroll = '$buyerorderno' ";              
                }
            }       if (isset($_POST['buyerorderno'])) {
                $buyerorderno = $_POST['buyerorderno'];
                if ($buyerorderno <> "") { 
                    $sql .= " and add_sscpass = '$buyerorderno' ";              
                }
            }       if (isset($_POST['buyerorderno'])) {
                $buyerorderno = $_POST['buyerorderno'];
                if ($buyerorderno <> "") { 
                    $sql .= " and add_hscroll = '$buyerorderno' ";              
                }
            }       if (isset($_POST['buyerorderno'])) {
                $buyerorderno = $_POST['buyerorderno'];
                if ($buyerorderno <> "") { 
                    $sql .= " and add_hscpass = '$buyerorderno' ";              
                }
            }                           
            $result = mysql_query($sql);
        }
    } 

?>
<?php
include_once("dbconnect.php");
?>
   <div class="container search-padding">
<div class="row">
    <div class="col-sm-12">        
<form id="form1" name="form1" method="post" action="">
  <table class="table">
    <tr> 
      <td>
      <select class="form-control" id="sel1" name="ptname" id="ptname">
        <option>Select Doctor</option>
        <?php 
            if ($res_sem <> null) {
                 while ($row_sem = mysql_fetch_assoc($res_sem)) {           
            ?>
       
        <option value="<?php echo $row_sem['specialty']; ?>" ?><?php echo $row_sem['specialty']; ?></option>
        <?php
                }
            }
          ?>
      </select>
      </td>
      <td>
<button name="btnShow" type="submit" class="btn btn-danger" id="btnShow">Search</button>
      </td>
    </tr>
  </table>    

  <?php 
  if($_POST) { 
    ?>
  <table class="table" id="datashow">
    <thead>
      <tr>
        
        <th>Doctor Name</th>
        <th>Hospital Name</th>
        <th>Location</th>
        <th>specialty</th>
        
      </tr>
    </thead>
    <tbody>
    <?php 
        if ($result <> null) { 
            while ($row = mysql_fetch_assoc($result)) {   


           // print_r($row);      
    ?> 
      <tr>
        <td><?php echo $row["doctor_name"]; ?></td>
        <td><?php echo $row["hospital_name"]; ?></td>
        <td><?php echo $row["chamber_location"]; ?></td>
        <td><?php echo $row["specialty"]; ?></td>
        <td><?php echo $row["doctor_id"]; ?></td>

        <td><a href='doctorprofile.php?doctor_id=<?php echo $row['doctor_id'];?>'><button type="button" class="btn btn-primary">Doctor Profile</button></a></td>
        
    
    
   
  </tr>
  <?php
                  }
                  }
                  ?>
    </tbody>
  </table>

  <?php } ?>

</form>



 


<!--Dynamic code here -->


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
