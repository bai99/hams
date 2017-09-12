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
.search-padding{

    padding-top: 50px;
    padding-bottom: 60px;
}

</style>
    
<?php 
include_once("dbconnect.php");
$sql_sem = "select distinct hospital_cat from hospital where hospital_cat is not null order by hospital_cat asc ";
$res_sem = mysql_query($sql_sem);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['btnShow'])) {
            //$sql = "select * from hospital where 1 = 1 ";
            $sql = "SELECT hospital.hospital_name, hospital.hospital_cat,hospital.hospital_location,cities.city_name
FROM hospital
INNER JOIN cities ON hospital.city_id=cities.city_id where 1 = 1 ";

            if (isset($_POST['ptname'])) {
                $buyername = $_POST['ptname'];
                if ($buyername <> "") { 
                    $sql .= " and hospital_cat = '$buyername' "; 
                }
            } 
                if (isset($_POST['buyerorderno'])) {
                $buyerorderno = $_POST['buyerorderno'];
                if ($buyerorderno <> "") { 
                    $sql .= " and hospital_name = '$buyerorderno' ";                 
                }
            } 
                if (isset($_POST['buyerorderno'])) {
                $buyerorderno = $_POST['buyerorderno'];
                if ($buyerorderno <> "") { 
                    $sql .= " and add_address = '$buyerorderno' ";              
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
        <option>Select Hospital</option>
        <?php 
            if ($res_sem <> null) {
                 while ($row_sem = mysql_fetch_assoc($res_sem)) {           
            ?>
        <option value="<?php echo $row_sem['hospital_cat']; ?>" ?><?php echo $row_sem['hospital_cat']; ?></option>
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
        
        <th>Hospital Name</th>
        <th>Address</th>
        <th>City</th>
        <th>location</th>
        
      </tr>
    </thead>
    <tbody>
    <?php 
        if ($result <> null) { 
            while ($row = mysql_fetch_assoc($result)) {         
    ?> 
      <tr>
        
        <td><?php echo $row["hospital_name"]; ?></td>
    <td><?php echo $row["hospital_location"]; ?></td>
    <td><?php echo $row["city_name"]; ?></td>
    <td><?php echo $row["hospital_location"]; ?></td>
    
   
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


    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
