<?php 
include "config.php";
session_start();
    // if (!isset($_SESSION["mobile_no"]))
    // {
    //     header("Location:login.php");
    // }
	// else{
	// 	$mobile_no=$_SESSION["mobile_no"];
		// $sql="SELECT * FROM register WHERE mobile_no='$mobile_no'";
		// $res=$con->query($sql);
		// $row=$res->fetch_assoc();

	// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
<!-- <link rel="stylesheet" href="../assets/css/index.css"> -->
<?php include "header.php";?>

</head>


<body>



    <!-- ================> header section start here <================== -->
	<?php include "nav.php";?>
    <button class="btn btn-success mt-5 mx-5"> <a class="nav-link" style="text-decoration: none; font-size:18px" href="user.php"> Back</a></button>

        <div class="container">
        <?php
               if(isset($_GET["view_id1"])){
                $view_id1=$_GET["view_id1"];
               
               $sql="SELECT * FROM register WHERE id='$view_id1'";
               $res=$con->query($sql);
               $i=0;
               while($row=$res->fetch_assoc())
               {
                   $i=$i+1;
                   $id=$row["id"];
                  
                   $payment=$row["payment"];
                  
               ?>
           <div class="row" style="border: 1px solid black; padding:30px 20px">
           <h1 class="text-center mt-2" style="font-weight:bold">சான்றோர்குல நாடார் திருமண தகவல் மையம்</h1>
           <h3 class="text-center mt-2" style="font-weight:bold">சான்றோர்குல நாடார் திருமண மண்டபம்
            48-B, மலையடிவாரம், நாமக்கல் ரோடு
                </h3>
            <p class="text-center" style="font-weight:bold"> திருசெங்கோடு, திருச்செங்கோடு (Tk), நாமக்கல் (Dt) - 637 211.
</p>
               <div class="col-lg-3"></div>
               <div class="col-lg-6">
               <div class="mt-5 border"  style="padding: 10px 10px;">
                    <h3  style="font-weight: bold;">கட்டணம் புகைப்படம்:</h3>
                    <img src="../upload/payment/<?php echo "$payment";?>" style="height:500px" class="card-img-top" alt="...">
                    </div>
               </div>
               <div class="col-lg-3"></div>
                   
                   
                    
                    
        </div>
        
           
       
            <?php 
               }
        }
            ?>

        </div>



        

</body>
</html>

