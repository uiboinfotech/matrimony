<?php 
include "config.php";
session_start();
    if (!isset($_SESSION["mobile_no"]))
    {
        header("Location:login.php");
    }
	else{
// 		$mobile_no=$_SESSION["mobile_no"];
// 		$sql="SELECT * FROM register WHERE mobile_no='$mobile_no'";
// 		$res=$con->query($sql);
// 		$row=$res->fetch_assoc();

	}
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
               if(isset($_GET["view_id"])){
                $view_id=$_GET["view_id"];
               
               $sql="SELECT * FROM register WHERE id='$view_id'";
               $res=$con->query($sql);
               $i=0;
               while($row=$res->fetch_assoc())
               {
                   $i=$i+1;
                   $id=$row["id"];
                   $name=$row["name"];
                   $father_name=$row["father_name"];
                   $profile=$row["profile"];
                   $payment=$row["payment"];
                   $dob=$row["dob"];
                   $age=$row["age"];
                   $study=$row["study"];
                   $work=$row["work"];
                   $salary=$row["salary"];
                   $color=$row["color"];
                   $height=$row["height"];
                   $rasi=$row["rasi"];
                   $lakunam=$row["lakunam"];
                   $jathagam=$row["jathagam"];
                   $kattam=$row["kattam"];
                   $kattam_amsam=$row["kattam_amsam"];

                   $najathiram=$row["najathiram"];
                   $father_work=$row["father_work"];
                   $assets=$row["assets"];
                   $purvegam=$row["purvegam"];
                   $kulatheivam=$row["kulatheivam"];
                   $kuttam=$row["kuttam"];
                   $like_status=$row["like_status"];
                   $thosam=$row["thosam"];
                   $password=$row["password"];
                   $reg_date=$row["reg_date"];
                   $reg_time=$row["reg_time"];
                   
                //    $address=$row["address"];
                    $door_no=$row["door_no"];
                    $district=$row["district"];
                    $state=$row["state"];
                    $pincode=$row["pincode"];
                    $area=$row["area"];
                   $mobile_no=$row["mobile_no"];
                   $gender=$row["gender"];
               
                 
           ?>
           <div class="row" style="border: 1px solid black; padding:30px 20px">
           <h1 class="text-center mt-2" style="font-weight:bold">சான்றோர்குல நாடார் திருமண தகவல் மையம்</h1>
           <h3 class="text-center mt-2" style="font-weight:bold">சான்றோர்குல நாடார் திருமண மண்டபம்
            48-B, மலையடிவாரம், நாமக்கல் ரோடு
                </h3>
            <p class="text-center" style="font-weight:bold"> திருசெங்கோடு, திருச்செங்கோடு (Tk), நாமக்கல் (Dt) - 637 211.
</p>
                <div class="col-lg-6 mt-3">
                    
                            <div class="d-flex justify-content-between tab">

                            <h3>பெயர்:</h3>
                            <h3><span><?php echo "$name";?></span></h3>
                            </div> 
                            
                            <div class="d-flex justify-content-between mt-3  tab1">

                            <h3>த/பெயர்:</h3>
                            <h3><span><?php echo "$father_name";?></span></h3>
                            </div>
                           
                            <div class="d-flex justify-content-between tab">

                            <h3>பிறந்த தேதி:</h3>
                            <h3><span><?php echo "$dob";?></span></h3>
                            </div>
                            
                            <div class="d-flex justify-content-between mt-3 tab1">

                            <h3>நேரம்:</h3>
                            <h3><span class="text-end"><?php echo "$reg_time";?></span></h3>

                            </div>
                           
                            <div class="d-flex justify-content-between tab">

                            <h3>வயது:</h3>
                            <h3><span><?php echo "$age";?></span></h3>

                            </div>
                           
                            <div class="d-flex justify-content-between mt-3 tab1">

                            <h3>தேதி:</h3>
                            <h3><span><?php echo "$reg_date";?></span></h3>

                            </div>
                            
                            <div class="d-flex justify-content-between  tab">

                            <h3>உத்தியோகம்:</h3>
                            <h3><span><?php echo "$work";?></span></h3>

                            </div>
                            
                            <div class="d-flex justify-content-between mt-3 tab1">

                            <h3>சம்பளம்:</h3>
                            <h3><span><?php echo "$salary";?></span></h3>

                            </div>
                           
                            <div class="d-flex justify-content-between tab">

                            <h3>நிறம்:</h3>
                            <h3><span><?php echo "$color";?></span></h3>

                            </div>
                            
                            <div class="d-flex justify-content-between mt-3 tab1">

                            <h3>உயரம்:</h3>
                            <h3><span><?php echo "$height";?></span></h3>
                                
                            </div>
                           
                           

                            <div class="d-flex justify-content-between tab">

<h3>தந்தை வேலை:</h3>
<h3><span><?php echo "$father_work";?></span></h3>
</div>
                          
                            <!-- <div class="d-flex justify-content-between mt-3 tab1">
                    <h3>மாநிலம்:</h3>
                    <h3><span><?php echo "$state";?></span></h3>
                    </div> -->
                    
                    <div class="d-flex justify-content-between tab1">
                    <h3>பகுதி:</h3>
                    <h3><span><?php echo "$area";?></span></h3>
                    </div>

                    <div class="d-flex justify-content-between mt-3 tab">
                    <h3>அஞ்சல் குறியீடு:</h3>
                    <h3><span><?php echo "$pincode";?></span></h3>
                    </div>
                    
                <!-- </div> -->
               
                <!-- <div class="col-lg-4"> -->
                
                            <div class="d-flex justify-content-between tab1">
                    <h3>லக்கினம்:</h3>
                    <h3><span><?php echo "$lakunam";?></span></h3>
                    </div>

                    <div class="d-flex justify-content-between  tab">

<h3>ராசி:</h3>
<h3><span><?php echo "$rasi";?></span></h3>
    
</div>
                            
                            <div class="d-flex justify-content-between mt-3 tab1">
                    <h3>நட்சத்திரம்: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                    <h3><span><?php echo "$najathiram";?></span></h3>
                    </div> 
                           
                           



                            
                            <div class="d-flex justify-content-between mt-3 tab">

                    <h3>சொத்து விபரம்:</h3>
                        <h3><span><?php echo "$assets";?></span></h3>
                    </div>  
                           
                            <div class="d-flex justify-content-between tab1">

                    <h3>பூர்வீகம்:</h3>
                        <h3><span><?php echo "$purvegam";?></span></h3>
                    </div>  
                           
                            <div class="d-flex justify-content-between mt-3 tab">

                    <h3>குலதெய்வம்:</h3>
                        <h3><span><?php echo "$kulatheivam";?></span></h3>
                    </div>  
                            
                            <div class="d-flex justify-content-between tab1">

                    <h3>கூட்டம்:</h3>
                        <h3><span><?php echo "$kuttam";?></span></h3>
                    </div>  
                           
                            <!-- <div class="d-flex justify-content-between mt-3 tab1">

                    <h3>விரும்பும் தகுதி:</h3>
                       <h3><span><?php echo "$like_status";?></span></h3> 
                    </div> -->
                         
                            <div class="d-flex justify-content-between tab">

                    <h3>தொலைபேசி:</h3>
                        <h3><span><?php echo "$mobile_no";?></span></h3>
                    </div>  
                        
                            <div class="d-flex justify-content-between mt-3 tab1">

                    <h3>பாலினம்:</h3>
                    <h3><span><?php echo "$gender";?></span></h3>
                        
                    </div> 
                         
                            <div class="d-flex justify-content-between tab">

                    <h3>தோஷம்:</h3>
                        <h3><span><?php echo "$thosam";?></span></h3>
                    </div> 

                    <div class="d-flex justify-content-between mt-3 tab1">

<h3>மாவட்டம்:</h3>
    <h3><span><?php echo "$district";?></span></h3>
</div> 

<div class="d-flex justify-content-between tab">

<h3>கதவு எண்:</h3>
    <h3><span><?php echo "$door_no";?></span></h3>
</div> 
 
                    <!-- <form action="" class="mt-3" method="POST" enctype="multipart/form-data"> -->
                        <!-- <h3 class="mt-3">Kattam:</h3> -->
                        <!-- <input type="file" class="form-control" name="kattam"> -->
                        <!-- <button class="buton1 mt-5" type="submit" name="submit" >Upload Kattam</button> -->
                        <!-- <a href="">Upload Kattam</a> -->
                        <!-- <a style="font-size:18px" class="btn btn-success" href="edit_rasikattam.php?mobile_no=<?php echo "$mobile_no";?>">View Rasi Kattam</a>
                        <a style="font-size:18px"  class="btn btn-success mx-4" href="edit_amsamkattam.php?mobile_no=<?php echo "$mobile_no";?>">View Amsam Kattam</a> -->

                    <!-- </form> -->
                    <!-- <td><a href="view.php?view_id=<?php echo "$id";?>">View</a></td> -->
                  
                   
                </div>

                
                 
                <div class="col-lg-5 mt-3">
                    <div class="border"  style="padding: 10px 10px;">
                    <h3 style="font-weight: bold;">புகைப்படம்:</h3>
                    <img src="../cropimg/<?php echo "$profile";?>"  class="card-img-top" alt="...">
                    </div>
                  
                   
                    <!-- <div class="mt-5 border"  style="padding: 10px 10px;">
                    <h3  style="font-weight: bold;">Kattam கட்டம் புகைப்படம்:</h3>
                    <img src="upload/kattam/<?php echo "$kattam";?>" style="height:400px;" class="card-img-top" alt="...">
                    </div> -->
                    <!-- <div class="mt-5 border"  style="padding: 10px 10px;">
                    <h3  style="font-weight: bold;">Amsam கட்டம் புகைப்படம்:</h3>
                    <img src="upload/kattam/<?php echo "$kattam";?>" class="card-img-top" alt="...">
                    </div> -->
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">

                    <div class="mt-5 border"  style="padding: 10px 10px;">
                    <h3  style="font-weight: bold;">ராசி கட்ட புகைப்படம்:</h3>
                    <img src="../upload/rasi_kattam/<?php echo "$kattam";?>" class="card-img-top" style="height:400px" alt="...">
                    </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">

                    <div class="mt-5 border"  style="padding: 10px 10px;">
                    <h3  style="font-weight: bold;">அம்ச கட்ட புகைப்படம்:</h3>
                    <img src="../upload/amsam_kattam/<?php echo "$kattam_amsam";?>"  style="height:400px"  class="card-img-top" alt="...">
                    </div>
                    </div>
                    <div class="col-lg-3 mt-5">
                    <button class="btn btn-success" style="padding:10px 15px"><a target='_blank' style="color:white; text-decoration:none;"  href="https://api.whatsapp.com/send?phone=<?php echo "$mobile_no"; ?>&text=Name:<?php echo $name;?>%20%20Father Name:<?php echo $father_name;?>%20%20Age:<?php echo $age;?>%20%20Study:<?php echo $study;?>%20%20Work:<?php echo $work;?>%20%20Slary:<?php echo $salary;?>%20%20Color:<?php echo $color;?>%20%20Height:<?php echo $height;?>%20%20Rasi:<?php echo $rasi;?>%20%20Lakunam:<?php echo $lakunam;?>%20%20Najathiram:<?php echo $najathiram;?>%20%20Father Work:<?php echo $father_work;?>%20%20Assets:<?php echo $assets;?>%20%20Purvegam:<?php echo $purvegam;?>%20%20Kulatheivam:<?php echo $kulatheivam;?>%20%20Kuttam:<?php echo $kuttam;?>%20%20Thosam:<?php echo $thosam;?>%20%20Gender:<?php echo $gender;?>">Whatsapp</a> <buton>

                    </div>

                    <!-- <button class="btn btn-success">Register</button> -->
        </div>
        
           
       
            <?php 
               }
        }
            ?>

        </div>
       



        

</body>
</html>

