<?php 
include "config.php";

?>

<!Doctype html>
<html class="no-js" lang="zxx">
 <head>
    
       <?php include "header.php";?>
       <style>
     
        body{
            background: url('assets/img/hero/mehn.jpeg') !important;

        }
        
        .main1{
            width: 100% !important;

        }
        .main10{
            background: url('assets/img/hero/mehn.jpeg') !important;
            width: 100% !important;
        }
        .register{
            background-color: #9a1447;
            color: white;
            font-size: 14px;
            border: none;
            border-radius: 8px;
            width: 100%;
            padding: 10px 20px;
        }
        .img1{
            border-radius: 12px;
            height:580px;
            width: 548px;
        }
        /* .frm input{
            background-color: lightgray !important;
        } */
        .frm option{
            background-color: lightgray !important;
        }
        .frm input::placeholder{
            font-size: 14px;
            color: black;
        }
        .frm-login{
            font-size: 16px;
            text-decoration: none;
            color: #9a1447;
            font-weight: bold;
        }
        .selec{
            background: lightgray;
        }
        .main0{
            width: 100% !important;

        }
        .thali{
            width: 100% !important;
        }
        .process{
            color: #9a1447;
        }
        .verified{
            width: 100px;
        }
        .abc{
            background-color: white;
        }
        .home-hd{
            font-size: 30px;
        }

       </style>
    </head>
    
    <body>

        <!-- preloader -->
        

        <!-- mobile-menu-start -->
        <!-- header-area-end -->


      
        <div class="container">
            <div class="row">
                <div class="col-lg-10 d-flex align-content-center">
        <img src="assets/img/logo/logo.png" style="width:100px" class="mt-5" alt="">
        <h3 style="color: #9a1447; font-weight:bold; margin-top:80px;font-size:30px">சான்றோர்குல நாடார் திருமண தகவல் மையம்</h3>
                </div>
                <div class="col-lg-9"></div>
            </div>
        </div>
        
        <div class="container mt-5 mb-5 main1">
        <div class="row">
            <div class="col-lg-6 abc" style="padding:0px;">
           
         <img src="assets/img/hero/register.jpg" class="img1" style="border-radius: 8px 0px 0px 8px;"  alt="">
        
        </div>
            <div class="col-lg-6 col-md-6 col-12" style="background-color: white;border-radius: 0px 8px 8px 0px;">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-5">
                <img src="assets/img/logo/logo.png" style="width:100px" class="mt-3 d-flex justify-content-center" alt="">

                </div>
                <div class="col-lg-3"></div>

            </div>
      
                <h3 class="mt-3 text-center"><span class="ml-5" style="color: #9a1447; font-size:29px; font-weight:bold">சான்றோர்குல நாடார் திருமண தகவல் மையம்</span> </h3>
            
                <h6 class="mt-2 text-center">Register Now</h6>
                <form action="" class="frm"  method="POST">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                        <input type="text" class="form-control"  style="background-color: white;" name="name"  placeholder="Name"><br>
                        
                        <div class="row">
                            <div class="col-lg-5">
                            <select name="gender" class="form-select" style="background-color: white;">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        </select>
                            </div>
                            <div class="col-lg-2"></div>
                            <div class="col-lg-5">
                            <select name="who" id="" class="form-select ">
                        <option value="self">Self</option>
                        <option value="my son">My son</option>
                        <option value="my daughter">My Daughter</option>
                        <option value="my brother">My Brother</option>
                        <option value="my sister">My Sister</option>
                        <option value="my relative">My Relative</option>
                        <option value="my friend">My Friend</option>
                        <option value="neighbour">Neighbour</option>
                    </select>
                            </div>

                        </div>
                      
                        
                        <!-- <label for="">Who has registered</label><br> -->
                  
                    
    <br>
                   
                    <input type="text" name="mobile_no"  class="form-control mt-2" placeholder="Mobile number"><br>
                    <input type="text" name="password"  class="form-control" placeholder="Create Password">
                    <p class="mt-2" style="font-size:12px">I agree the <a href="user/terms.php">T&C</a> & <a href="user/privacy.php">Privacy Policy</a></p>

                    <button class="register mt-3" name="submit">Register</button>
                    <p class="mt-3 text-center">Already a member ? <a href="user/login.php" class="frm-login">Login Now</a></p>
                        </div>
                    
                    <div class="col-lg-2"></div>

                    </div>
                  
            </form>
            <?php 
                                if (isset($_POST["submit"])){
                                $name=$_POST["name"];
                                $gender=$_POST["gender"];
                                $mobile_no=$_POST["mobile_no"];
                                $who=$_POST["who"];
                                $password1=$_POST["password"];
								$password=md5($password1);
								$reg_date=date('d-m-Y');
                // $due_date = date("Y-m-d", strtotime(date("Y-m-d", strtotime($reg_date)) . " + 365 day"));

								$reg_time=time();

                                // user already register check
                                $checkUser="SELECT * FROM register WHERE mobile_no='$mobile_no'";

                                $result = mysqli_query($con,$checkUser);
                                $count=mysqli_num_rows($result);
                                if($count>0){
                                    echo"<script>alert('You Registered Mobile Number Already Exist ! Please Enter Different Mobile Number ');</script>";
                                }
                                else{
                                    $sql="INSERT INTO register(id, name, profile, payment, father_name, dob, time, age, study, work, aadhar, area, pincode, taluka, state, door_no, district, salary, thosam, color, height, rasi, lakunam, najathiram, father_work, assets, purvegam,  mobile_no, alternate_no, kulatheivam, disability, kuttam, kattam, kattam_amsam, married_status, who, password, reg_date, reg_time,  gender, jathagam, expect_study, expect_salary, expect_color, expect_message, status, nachathira_eng) VALUES 
                                    (Null, '$name', Null, Null, Null, Null, Null, Null, Null, Null, Null, Null, Null, Null, Null, Null, Null, Null, Null, Null, Null, Null, Null, Null, Null, Null, Null, '$mobile_no', Null, Null, Null, Null, Null, Null, Null, '$who', '$password', '$reg_date', '$reg_time', '$gender', Null, Null, Null, Null, Null, 'Unverified', Null)";
                                      if($con->query($sql))   
                                    {
                                        echo "<script>alert('Registration Successfull');window.location.replace('user/update_profile.php?mobile_no=$mobile_no')</script>";
    
                                        echo $con;
                                    
                                    }
                                    // end
                                    else{
                                            
                                        echo "<script>alert('Not Registered!'); window.location.replace('index.php');</script>";                         
                                    }
                                    }
                                }
                                                            
					
                               

                            ?>
                </div>
            <!-- <div class="col-lg-1"></div> -->

        </div>
    </div>

     <!-- footer area start -->

       <!-- footer area end -->
       
        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top end -->

	
        
    </body>
</html>