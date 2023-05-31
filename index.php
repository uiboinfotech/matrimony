<?php
    include "config.php";
	session_start();
    if (!isset($_SESSION["username"]))
    {
        header("Location:login.php?mes=login_error");
    }
	else{
        $username=$_SESSION["username"];
    }
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
   <?php include "header.php"; ?>
   <style>
  
body{
    background-color: orange;
}

.ocean {
    height: 5%;
    width:100%;
    position:absolute;
    bottom:0;
    left:0;
    background: #015871;
}

.wave {
    background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/85486/wave.svg) repeat-x;
    position: absolute;
    top: -198px;
    width: 6400px;
    height: 198px;
    animation: wave 5s cubic-bezier( 0.36, 0.45, 0.63, 0.53) infinite;
    transform: translate3d(0, 0, 0);
}

.wave:nth-of-type(2) {
    top: -175px;
    animation: wave 7s cubic-bezier( 0.36, 0.45, 0.63, 0.53) -.125s infinite, swell 7s ease -1.25s infinite;
    opacity: 1;
}

@keyframes wave {
    0% {
        margin-left: 0;
    }
    100% {
        margin-left: -1600px;
    }
}

@keyframes swell {
    0%, 100% {
        transform: translate3d(0,-25px,0);
    }
    50% {
        transform: translate3d(0,5px,0);
    }
}

   </style>
</head>

<body class="sticky-header">
   


    <div id="main-wrapper" class="main-wrapper">

        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        <!--=====================================-->
        <?php include "nav.php"; ?>
        <!--=====================================-->
        <!--=       Breadcrumb Area Start      =-->
        <!--=====================================-->


       

        

        <div class="container">
            <div class="row" style="margin-top: 100px;">
          
              
                <div class="col-lg-4 admin">
                <h2 class="admin-hd">Total Number of Registered Persons</h2>
                <hr>
                <p class="num">
                <?php
                                            $sql1="SELECT * FROM register";
                                            $res=$con->query($sql1);
                                            $status=$res->num_rows;
                                            echo $status;
                                        ?>
                </p>
  </div>
  <div class="col-lg-1 mt-3"></div>

                <div class="col-lg-3 col-md-12 col-12 admin">
             
                <h2 class="admin-hd">Verified Persons</h2>
                <hr>
                <p class="num">
                <?php
                                            $sql1="SELECT * FROM register WHERE status='Verified'";
                                            $res=$con->query($sql1);
                                            $status=$res->num_rows;
                                            echo $status;
                                        ?>
                </p>
                   
                
                </div>
    <div class="col-lg-1 mt-3"></div>
                <div class="col-lg-3 admin1">
                
                    <h5 class="admin-hd">Un Verified Persons</h5>
                    <hr>
                    <p class="num">
                    <?php
                                            $sql1="SELECT * FROM register WHERE status='Unverified'";
                                            $res=$con->query($sql1);
                                            $status=$res->num_rows;
                                            echo $status;
                                        ?>
                    </p>
             
</div>
                </div>
               

            </div>
        </div>

                    <?php
                                            $sql1="SELECT * FROM register WHERE status='Verified'";
                                            $res=$con->query($sql1);
                                            $status=$res->num_rows;
                                            echo $status;
                                        ?>
                    </p>
  </div>
</div>
                </div>
             
            </div>
        </div>
        <!-- End Why Choose Area  -->

        <!-- Start Footer Area  -->
        <!-- <?php include "footer.php"; ?> -->
        <!-- End Footer Area  -->



    </div>


    <!-- <?php include "f_script.php"; ?>  -->

    <script>

    </script>
</body>
</html>