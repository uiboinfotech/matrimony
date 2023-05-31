<?php 
include "config.php";
session_start();
    // if (!isset($_SESSION["mobile_no"]))
    // {
    //     header("Location:login.php");
    // }
	// else{
	// 	$mobile_no=$_SESSION["mobile_no"];
	// 	$sql="SELECT * FROM register WHERE mobile_no='$mobile_no'";
	// 	$res=$con->query($sql);
	// 	$row=$res->fetch_assoc();

	// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include "header.php";?>
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


<body>



    <!-- ================> header section start here <================== -->
	<?php include "nav.php";?>



    <div class="edu-breadcrumb-area breadcrumb-style-2 bg-image bg-image--19" style="padding: 40px 0 40px ;">
            <div class="container">
                <div class="breadcrumb-inner">
                    <div class="page-title">
                        <h1 class="title">Requested Details</h1>
                    </div>
                </div>
            </div>
        </div>
        
        <section class="checkout-page-area section-gap-equal" style="padding:60px 0;">
            <div class="container" style="border: 1px solid #333;
    border-radius: 10px;
    padding: 25px;">
	<div class="row">
    <div id="users" class="col-xs-12">
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
                <table class="table tab mt-5" style="border-radius:18px;">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <!-- <th>Age</th> -->
                            <th>Mobile No</th>
                            <!-- <th>Intrested</th> -->
                            <th>Approval</th>
                            <th>Status</th>
                            <th>Intrest id</th>
                            <!-- <th>Request Name</th> -->
                            <th>View</th>
                            <!-- <th>Hover</th> -->
                        </tr>
                    </thead>
                    <tbody class="list">
                    <?php
                    
                    
                 $sql="SELECT * FROM intrest";
                // $sql="SELECT * FROM intrest INNER JOIN register on ";

               $res=$con->query($sql);
               $i=0;
               while($row=$res->fetch_assoc())
               {
                $i=$i+1;
                $id=$row["id"];
                // $name=$row["name"];
                $my_number=$row["my_number"];
                // $profile=$row["profile"];
                // $age=$row["age"];
                // $mobile_no=$row["mobile_no"];
                // $intrest_name=$row["intrest_name"];
                $my_name=$row["my_name"];
                // $mobile_no1=$row["mobile_no"];
                $intrest_id=$row["intrest_id"];
                
                // $work=$row["work"];
                $status=$row["status"];
                 
           ?>
                      <tr class="list--list-item" data-gender="<?php echo $status ?>">

                            <td><?php echo "$i";?></td>
                            <td><?php echo "$my_name";?></td>
                            <td><?php echo "$my_number";?></td>
                            <!-- <td><?php echo "$work";?></td> -->
                            <td><a href="request.php?edit_id=<?php echo "$id";?>">Approval</a></td>
                            <td><?php echo "$status"; ?></td>
                            <td><?php echo "$intrest_id"; ?></td>
                            <!-- <td><?php echo "$intrest_name"; ?></td> -->
                          <td><a href="request_view.php?mobile_no=<?php echo$intrest_id;?>">View</a></td>
                           
                           <!-- <td><button style="border:none; box-shadow:2px 2px 3px lightgray; padding:8px"><a style="text-decoration: none;padding:8px 12px" href="../user/view_user.php?mobile_no=<?php echo "$mobile_no1";?>">View</a></button></td> -->
                        
                        </tr>
                         <?php 
                             }
                            // }
            ?>
                    </tbody>
             
                </table>
              
                <?php 
if(isset($_GET["edit_id"])){
    $edit_id=$_GET["edit_id"];
    echo $sql="UPDATE intrest SET status='Verified' WHERE id='$edit_id'";

    if($con->query($sql)){
        echo "<script>alert('Approval updated'); window.location.replace('request.php')</script>";
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
<script src="https://cdn.jsdelivr.net/npm/@oppperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<script>
    let triggerElement=document.getElementById('welcome');

    // let popover=new bootstrap.Popover(triggerElement);
    var popover = new bootstrap.Popover(document.querySelector('.example-popover'), {
  container: 'body'
})
</script>
 

    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

   <?php include "f_script.php"; ?>


     

</body>
</html>

