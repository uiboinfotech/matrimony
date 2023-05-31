<?php
    include "config.php";
	session_start();
    // if (!isset($_SESSION["username"]))
    // {
    //     header("Location:login.php?mes=login_error");
    // }
	// else{
    //     $username=$_SESSION["username"];
    // }
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
   <?php include "header.php"; ?>
   <style>
    .container {
  margin-top: 30px;
  margin-bottom: 30px;
}

.list {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.list--list-item {
  padding-bottom: 20px;
  margin-bottom: 20px;
  border-bottom: 1px solid #cccccc;
}
.list--list-item:last-child {
  border-bottom: 0;
  margin: 0;
}

.no-result {
  display: none;
}
.input[type="checkbox"], input[type="radio"] {
    opacity: 1;
}
input {
    height: 12px;
}
input, select, textarea {
    
    width: 30%;
}
    </style>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" >
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" rel="stylesheet" >
</head>

<body class="sticky-header">
    

    <!-- <div id="edublink-preloader">
        <div class="loading-spinner">
            <div class="preloader-spin-1"></div>
            <div class="preloader-spin-2"></div>
        </div>
        <div class="preloader-close-btn-wraper">
            <span class="btn btn-primary preloader-close-btn">
                Cancel Preloader</span>
        </div>
    </div> -->

    <div id="main-wrapper" class="main-wrapper">

        <!--=====================================-->
        <!--=        Header Area Start          =-->
        <!--=====================================-->
        <?php include "nav.php"; ?>
        <!--=====================================-->
        <!--=       Breadcrumb Area Start      =-->
        <!--=====================================-->

        <div class="edu-breadcrumb-area breadcrumb-style-2 bg-image bg-image--19" style="padding: 0px 0 0px ;">
            <div class="container">
                <div class="breadcrumb-inner">
                    <div class="page-title">
                        <h1 class="title">User Details</h1>
                    </div>
                </div>
            </div>
        </div>
        

        <!--=====================================-->
        <!--=       Checkout Area Start         =-->
        <!--=====================================-->
        <section class="checkout-page-area section-gap-equal" style="padding:60px 0;">
            <div class="container" style="border: 1px solid #333;
    border-radius: 10px;
    padding: 25px;">
	<div class="row">
        <div class="col-lg-3">
    <button onclick="window.location.href='export.php';" class="btn btn-primary">Export Excel Sheet</button>

        </div>
        <div class="col-lg-9"></div>
		<div id="users" class="col-xs-12 mt-3">
			<div class="filter-group row">

				<div class="form-group col-xs-12 col-sm-12 col-md-4">
					<div class="radio-inline">
						<label>
							<input class="filter-all" type="radio" value="all" name="gender" id="gender-all" checked /> All
						</label>
					</div>
					<div class="radio-inline">
						<label>
							<input class="filter" type="radio" value="Verified" name="gender" id="gender-female" /> Verified
						</label>
					</div>
					<div class="radio-inline">
						<label>
							<input class="filter" type="radio" value="Unverified" name="gender" id="gender-male" /> Unverified
						</label>
					</div>
				</div>
			
				<div class="form-group col-xs-12 col-sm-12 ">
					<button class="btn btn-danger" onclick="resetList();">Clear</button>
				</div>
			</div>
			<table class="table">
				<thead>
					<tr>
                    <th>S.No</th>
                    <th>Name</th> 
                    <th>DOB</th>
                    <th>Gender</th> 
                    <th>Mobile No</th>
                    <th>Who</th>
                    <th>View</th>
                    <th>Payment</th>
                    <th>Status</th>
                    <th>Approval</th>
                    <th>Update</th>
                   </tr>
				</thead>
				<tbody class="list">
                <?php
                            $sql="SELECT * FROM register";
                            $res=$con->query($sql);
                            $i=0;
                            while($row=$res->fetch_assoc()){
                                $i=$i+1;
                                $id=$row["id"];
                                $name=$row["name"];
                                $profile=$row["profile"];
                                $payment=$row["payment"];
                                $father_name=$row["father_name"];
                                $dob=$row["dob"];
                                $time=$row["time"];
                                $age=$row["age"];
                                $study=$row["study"];
                                $work=$row["work"];
                                $salary=$row["salary"];
                                $color=$row["color"];
                                $height=$row["height"];
                                $rasi=$row["rasi"];
                                $lakunam=$row["lakunam"];
                                $najathiram=$row["najathiram"];
                                $father_work=$row["father_work"];
                                $assets=$row["assets"];
                                $purvegam=$row["purvegam"];
                                $kulatheivam=$row["kulatheivam"];
                                $kuttam=$row["kuttam"];
                                $like_status=$row["like_status"];
                                $mobile_no=$row["mobile_no"];
                                // $address=$row["address"];
                                $thosam=$row["thosam"];
                                $password=$row["password"];
                                $reg_date=$row["reg_date"];
                                $reg_time=$row["reg_time"];
                                $gender=$row["gender"];
                                // $view=$row["view"];
                                $status=$row["status"];
                                $who=$row["who"];
                        ?>
						<tr class="list--list-item" data-gender="<?php echo $status ?>">
                       
							<td><?php echo "$i"; ?></td>
                            <td><?php echo "$name"; ?></td>
                            <td><?php echo "$dob"; ?></td>
                            <td><?php echo "$gender"; ?></td>
                            <td><?php echo "$mobile_no"; ?></td>
                            <td><?php echo "$who"; ?></td>
                            <!-- <td><?php echo "$password"; ?></td> -->
                            <!-- <td class="address"><?php echo "$address"; ?></td> -->
                            <td><a href="view.php?view_id=<?php echo "$id";?>">View</a></td>
                            <td><a href="view1.php?view_id1=<?php echo "$id";?>">Payment</a></td>

                            <!-- <a style="color:black" href="admin_edit.php?view_id=<?php echo "$id";?>">View</a> -->

                            <td class="status"><?php echo "$status"; ?></td>
                            <td><a href="user.php?edit_id=<?php echo "$id";?>">Approval</a></td>
                            <td><a href="admin_edit.php?view_id2=<?php echo "$id";?>">Update</a></td>
                            

                            <!-- <td><a href="check_kattam.php?mobile_no=<?php echo "$mobile_no";?>">Add Rasi kattam</a></td> -->
                            <!-- <td><a href="check1_kattam.php?mobile_no=<?php echo "$mobile_no";?>">Add amsam kattam</a></td> -->
                            <!-- <td><button onclick="window.location.href='export.php';" class="btn btn-primary">Export Excel Sheet</button>   </td> -->
                         

						</tr>
   
                        <?php } ?>
						
				</tbody>
			</table>
            <?php 
            if(isset($_GET["edit_id"])){
                $edit_id=$_GET["edit_id"];
                echo $sql="UPDATE register SET status='Verified' WHERE id='$edit_id'";

                if($con->query($sql)){
                    echo "<script>alert('Approval updated'); window.location.replace('user.php')</script>";
                }else{
                    echo "<script>alert('Not Approval updated');</script>";
                }
            }
        ?>
			<div class="no-result">No Results</div>
			<ul class="pagination"></ul>
		</div>
	</div>
</div>

          
        </section>
        <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/list.pagination.js/0.1.1/list.pagination.js"></script>
<script>
    var options = {
	valueNames: [
		'name',
		'born',
		'address',
		{ data: ['gender']}
	],
	page: 10,
	pagination: true
};
var userList = new List('users', options);

function resetList(){
	userList.search();
	userList.filter();
	userList.update();
	$(".filter-all").prop('checked', true);
	$('.filter').prop('checked', false);
	$('.search').val('');
	//console.log('Reset Successfully!');
};
  
function updateList(){
  var values_gender = $("input[name=gender]:checked").val();
	var values_address = $("input[name=address]:checked").val();
	console.log(values_gender, values_address);

	userList.filter(function (item) {
		var genderFilter = false;
		var addressFilter = false;
		
		if(values_gender == "all")
		{ 
			genderFilter = true;
		} else {
			genderFilter = item.values().gender == values_gender;
			
		}
		if(values_address == null)
		{ 
			addressFilter = true;
		} else {
			addressFilter = item.values().address.indexOf(values_address) >= 0;
		}
		return addressFilter && genderFilter
	});
	userList.update();
	//console.log('Filtered: ' + values_gender);
}
                               
$(function(){
  //updateList();
  $("input[name=gender]").change(updateList);
	$('input[name=address]').change(updateList);
	
	userList.on('updated', function (list) {
		if (list.matchingItems.length > 0) {
			$('.no-result').hide()
		} else {
			$('.no-result').show()
		}
	});
});
</script>
        <!--=====================================-->
        <!--=        Footer Area Start          =-->
        <!--=====================================-->
        <!-- Start Footer Area  -->
    
        <!-- End Footer Area  -->

    </div>

    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

   <?php include "f_script.php"; ?>
</body>

</html>