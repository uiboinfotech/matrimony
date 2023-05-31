<?php 
include "config.php";
session_start();
    if (!isset($_SESSION["mobile_no"]))
    {
        header("Location:login.php");
    }
	else{
		$mobile_no=$_SESSION["mobile_no"];
		

	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php $page="profile"; include "header.php";?>


<style>
	.tile{
		color:#9a1447;
	}
	.container {
    /* max-width: 960px; */
    /* margin: 30px auto; */
    padding: 20px;
  }
  .form-select{
    font-size:16px;
  }
  .form-control{
    font-size: 18px;
  }
 b{
    font-size: 16px;
  }

</style>


</head>


<body>
  <script>

	function FindAge(){
		var day = document.getElementById("dob").value;
		var DOB= new Date(day);
		var today= new Date();
		var Age= today.getTime() - DOB.getTime();
		Age = Math.floor(Age / (1000 * 60 * 60 * 24 * 365.25));
		document.getElementById("age").value = Age;
		
	}


	

  </script>

    <!-- ================> header section start here <================== -->
	   <!-- mobile-menu-start -->
	   <?php include "nav.php"; ?>
        <!-- header-area-end -->
 
    <!-- ================> header section end here <================== -->
	
	<!-- <div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12">
				<img src="assets/images/update.jpg" class="img-fluid" alt="">
			</div>
		</div>
	</div> -->

	<!-- profile picture -->



	<!-- end -->

  		
    <!-- <button onclick="window.location.href='export.php';" class="btn btn-primary">Export Excel Sheet</button> -->


		<div class="container">
		<?php
               if(isset($_GET["view_id2"])){
                $view_id2=$_GET["view_id2"];
			   $sql="SELECT * FROM register WHERE id='$view_id2'";
			   $res=$con->query($sql);
			   $i=0;
			   if($row=$res->fetch_assoc())
			   {
				   $i=$i+1;
				   $id=$row["id"];
				   $name=$row["name"];
				   $father_name=$row["father_name"];
				   $dob=$row["dob"];
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
				//    $like_status=$row["like_status"];
				   $thosam=$row["thosam"];
				   $password=$row["password"];
				   $reg_date=$row["reg_date"];
				   $reg_time=$row["reg_time"];
				   // $address=$row["address"];
				//    $state=$row["state"];
				   $district=$row["district"];
				   $pincode=$row["pincode"];
				   $taluka=$row["taluka"];

				   $area=$row["area"];
				   $door_no=$row["door_no"];
				   $mobile_no=$row["mobile_no"];
				   $alternate_no=$row["alternate_no"];
				   $married_status=$row["married_status"];
				   $gender=$row["gender"];
				//    $expect_age=$row["expect_age"];
				   $expect_study=$row["expect_study"];
				   $expect_salary=$row["expect_salary"];
				   $expect_color=$row["expect_color"];
				   $expect_message=$row["expect_message"];
 
			   }
            }
		   ?>
		<div class="h2 text-center text-bold tile" style="font-weight:bold;">உங்கள் சுயவிவரத்தைப் புதுப்பிக்கவும்</div>
		
		
	<div class="row mt-5">
	<!-- <div class="col-lg-6" style="background-color: #f1f1f1; border-radius:12px 0px 0px 12px;">
		<img src="<?php echo "../upload/profile/$profile";?>"  alt="">
	</div> -->
	<div class="col-lg-1"></div>
		<div class="col-lg-10" style=" border-radius:0px 12px 12px 0px; padding:10px 35px; border:1px solid lightgray">
			<form action="" method="POST" enctype="multipart/form-data">
				<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
				<label class="text-dark"><b>பெயர்</b></label>
				<div class="mt-2">
				<input type="text" class="form-control" value="<?php echo "$name";?>" name="name" >
			</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<label class="text-dark"><b>தந்தை பெயர்</b></label>
				<div class="mt-2">
				<input type="text" class="form-control" value="<?php echo "$father_name";?>" name="father_name" >
			</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6 ">
				<label class="text-dark"><b>பிறந்த தேதி</b></label>
				<div class="mt-2">
				<input type="date" class="form-control" id="dob" value="<?php echo "$dob"; ?>" name="dob" >
			</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<label class="text-dark"><b>வயது</b></label>
				<div class="mt-2">
					<input type="text" id="age" onmousemove="FindAge()" name="age" value="<?php echo "$age"; ?>" readonly class="form-control bg-white" >
			</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6 mt-3">
				<label class="text-dark"><b>நேரம்</b></label>
				<div class="mt-2">
				<input type="time" class="form-control" name="reg_time" min="00:00" max="12:00" value="<?php echo "$reg_time";?>">
			</div>
			</div>

			

			<div class="col-lg-3 col-md-6 col-sm-6 mt-3">
				<label class="text-dark"><b>பாலினம்</b></label>
				<div class="mt-2">
					<select name="gender" class="form-select" id="" required>
					<option value="<?php echo "$gender";?>">-- <?php echo "$gender";?> --</option>

						<option value="male">ஆண்</option>
						<option value="female">பெண்</option>
					</select>
			</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6 mt-3">
				<label class="text-dark"><b>படிப்பு</b></label>
				<div class="mt-2">
				<!-- <input type="text" class="form-control" value="<?php echo "$study";?>" name="study" > -->
				<select name="study" class="form-select"> 
<option value="<?php echo "$study";?>">-- <?php echo "$study";?> --</option>

	<option value="10th/ S.S.L.C.">10th/ S.S.L.C.</option>
	<option value="12th / H.S.S.">12th / H.S.S.</option>
	<option value="A.M.E. Aircraft Maintenance Engineering">A.M.E. Aircraft Maintenance Engineering</option>
	<option value="Advance Diploma">Advance Diploma</option>
	<option value="Advance Diploma in Aviation And Hospitality Management
	">Advance Diploma in Aviation And Hospitality Management
	</option>
	<option value="Advance Diploma in Aviation and Tourism Management">Advance Diploma in Aviation and Tourism Management</option>
	<option value="Advanced Diploma in Hotel Management">Advanced Diploma in Hotel Management</option>
	<option value="Associated Degree">Associated Degree</option>
	<option value="B.A.">B.A.</option>
	<option value="B.A. (Hons) English Language and Communication">B.A. (Hons) English Language and Communication</option>
	<option value="B.A. Accountancy">B.A. Accountancy</option>
	<option value="B.A. Ancient Indian History and Archaeology">B.A. Ancient Indian History and Archaeology</option>
	<option value="B.A. Bengali">B.A. Bengali</option>
	<option value="B.A. Business Economics">B.A. Business Economics</option>
	<option value="B.A. Carnatic Music">B.A. Carnatic Music</option>
	<option value="B.A. Co-Operative Studies">B.A. Co-Operative Studies</option>
	<option value="B.A. Comparative Literature">B.A. Comparative Literature</option>
	<option value="B.A. Corporate Economics">B.A. Corporate Economics</option>
	<option value="B.A. Corporate Secretaryship">B.A. Corporate Secretaryship</option>
	<option value="B.A. Criminology and Police Administration"></option>
	<option value="B.A. Defence and Strateqic Studies">B.A. Defence and Strateqic Studies</option>
	<option value="B.A. Digital Media">B.A. Digital Media</option>
	<option value="B.A. Drawing and Painting">B.A. Drawing and Painting</option>
	<option value="B.A. Economics">B.A. Economics</option>
	<option value="B.A. Economics With Computer Application">B.A. Economics With Computer Application</option>
	<option value="B.A. Economics with Logistics and Freight Management">B.A. Economics with Logistics and Freight Management</option>
	<option value="B.A. Education">B.A. Education</option>
	<option value="B.A. English Literature">B.A. English Literature</option>
	<option value="B.A. French">B.A. French</option>
	<option value="B.A. Geography">B.A. Geography</option>
	<option value="B.A. Hindi">B.A. Hindi</option>
	<option value="B.A. Historical Studies">B.A. Historical Studies</option>
	<option value="B.A. History">B.A. History</option>
	<option value="B.A. History and Tourism">B.A. History and Tourism</option>
	<option value="B.A. Honours In Economics">B.A. Honours In Economics</option>
	<option value="B.A. Hotel Management
	">B.A. Hotel Management
	</option>
	<option value="B.A. Human Rights">B.A. Human Rights</option>
	<option value="B.A. Indian Culture">B.A. Indian Culture</option>
	<option value="B.A. Indian Culture and Tourism">B.A. Indian Culture and Tourism</option>
	<option value="B.A. Journalism">B.A. Journalism</option>
	<option value="B.A. Journalism and Mass Communication">B.A. Journalism and Mass Communication</option>
	<option value="B.A. Mathematics">B.A. Mathematics</option>
	<option value="B.A. Music">B.A. Music</option>
	<option value="B.A. Natya(Music, Dance and Theatre)">B.A. Natya(Music, Dance and Theatre)</option>
	<option value="B.A. Philosophy">B.A. Philosophy</option>
	<option value="B.A. Police Administration">B.A. Police Administration</option>
	<option value="BA. Political Science">BA. Political Science</option>
	<option value="B.A. Population Studies">B.A. Population Studies</option>
	<option value="B.A. Psychology">B.A. Psychology</option>
	<option value="B.A. Public Administration">B.A. Public Administration</option>
	<option value="B.A. Rural Development">B.A. Rural Development</option>
	<option value="B.A. Sanskrit">B.A. Sanskrit</option>
	<option value="B.A. Social and Civic Studies">B.A. Social and Civic Studies</option>
	<option value="B.A. Social Science">B.A. Social Science</option>
	<option value="B.A. Social Welfare Administration">B.A. Social Welfare Administration</option>
	<option value="OB.A. Social Work">OB.A. Social Work</option>
	<option value="B.A. Sociology">B.A. Sociology</option>
	<option value="B.A. Sociology with Computer Applications">B.A. Sociology with Computer Applications</option>
	<option value="B.A. Tamil Literature">B.A. Tamil Literature</option>
	<option value="B.A. Tamil Literature with Computer Applications">B.A. Tamil Literature with Computer Applications</option>
	<option value="B.A. Tourism">B.A. Tourism</option>
	<option value="B.A. Tourism and Travel Management">B.A. Tourism and Travel Management</option>
	<option value="B.A. Vedic Science">B.A. Vedic Science</option>
	<option value="B.A. Yoga">B.A. Yoga</option>
	<option value="B.A.M.S. Bachelor of Ayurvedic Medicine and Surgery">B.A.M.S. Bachelor of Ayurvedic Medicine and Surgery</option>
	<option value="B.Arch">B.Arch</option>
	<option value="B.B.A. Airport Management">B.B.A. Airport Management</option>
	<option value="B.B.A. (CA)">B.B.A. (CA)</option>
	<option value="B.B.A. AViation">B.B.A. AViation</option>
	<option value="B.B.A. Bachelor of Business Administration">B.B.A. Bachelor of Business Administration</option>
	<option value="B.B.A. Banking">B.B.A. Banking</option>
	<option value="| B.B.A. Integrated Shipping and Logistics Management">| B.B.A. Integrated Shipping and Logistics Management</option>
	<option value="B.B.E Bachelor in Business Economics">B.B.E Bachelor in Business Economics</option>
	<option value="B.B.M. Bachelor of Business Management">B.B.M. Bachelor of Business Management</option>
	<option value="B.C.A. Bachelor of Computer Application">B.C.A. Bachelor of Computer Application</option>
	<option value="B.C.S.">B.C.S.</option>
	<option value="DB.C.S. with Computer Application">DB.C.S. with Computer Application</option>
	<option value="B.Com.">B.Com.</option>
	<option value="B.Com. (Computer Application)">B.Com. (Computer Application)</option>
	<option value="B.Com. Accounting and Finance">B.Com. Accounting and Finance</option>
	<option value="B.Com. Actuarial Management">B.Com. Actuarial Management</option>
	<option value="B.Com. Advanced Accountancy">B.Com. Advanced Accountancy</option>
	<option value="B.Com. Applied Business Accounting">B.Com. Applied Business Accounting</option>
	<option value="B.Com. Bank Management">B.Com. Bank Management</option>
	<option value="B.Com. Banking and Finance Management">B.Com. Banking and Finance Management</option>
	<option value="B.Com. Banking and Insurance Management
">B.Com. Banking and Insurance Management
</option>
	<option value="B.Com. Business Analytics">B.Com. Business Analytics</option>
	<option value="B.Com. Business Process Services">B.Com. Business Process Services</option>
	<option value="B.Com. Co-Operation">B.Com. Co-Operation</option>
	<option value="B.Com. Co-Operative Management">B.Com. Co-Operative Management</option>
	<option value="B.Com. Commerce with Tax Procedure and Practice">B.Com. Commerce with Tax Procedure and Practice</option>
	<option value="B.Com. Corporate Secretaryship">B.Com. Corporate Secretaryship</option>
	<option value="B.Com. Corporate Secretaryship With CA">B.Com. Corporate Secretaryship With CA</option>
	<option value="B.Com. E-Commerce">B.Com. E-Commerce</option>
	<option value="B.Com. Financial Accounting">B.Com. Financial Accounting</option>
	<option value="B.Com. Financial Management">B.Com. Financial Management</option>
	<option value="B.Com. Foreign Trade Management">B.Com. Foreign Trade Management</option>
	<option value="B.Com. Garment Cost Accounting">B.Com. Garment Cost Accounting</option>
	<option value="B.Com. Honours">B.Com. Honours</option>
	<option value="B.Com. Information And System Management">B.Com. Information And System Management</option>
	<option value="B.Com. Information Technology">B.Com. Information Technology</option>
	<option value="B.Com. International Business">B.Com. International Business</option>
	<option value="B.Com. Management">B.Com. Management</option>
	<option value="B.Com. Marketing Management">B.Com. Marketing Management</option>
	<option value="B.Com. Professional Accounting">B.Com. Professional Accounting</option>
	<option value="B.Com. Taxation">B.Com. Taxation</option>
	<option value="B.D.S. Bachelor of Dental Surgery">B.D.S. Bachelor of Dental Surgery</option>
	<option value="B.Des. Digital Media">B.Des. Digital Media</option>
	<option value="B.E.">B.E.</option>
	<option value="B.E. Architecture And Offshore Engineering">B.E. Architecture And Offshore Engineering</option>
	<option value="B.E. Agricultural and Irrigation Engineering (SS)">B.E. Agricultural and Irrigation Engineering (SS)</option>
	<option value="B.E. Architecture Engineering">B.E. Architecture Engineering</option>
	<option value="B.E. Automobile Engineering">B.E. Automobile Engineering</option>
	<option value="B.E. Bio Medical Engineering">B.E. Bio Medical Engineering</option>
	<option value="B.E. Biotechnology">B.E. Biotechnology</option>
	<option value="B.E. Chemical Engineering">B.E. Chemical Engineering</option>
	<option value="B.E. Civil Engineering">B.E. Civil Engineering</option>
	<option value="B.E. Computer Science and Communication Engineering">B.E. Computer Science and Communication Engineering</option>
	<option value="B.E. Computer Science and Engineering">B.E. Computer Science and Engineering</option>
	<option value="B.E. Electrical and Electronics Engineering">B.E. Electrical and Electronics Engineering</option>
	<option value="B.E. Electronics and Communication Engineering">B.E. Electronics and Communication Engineering</option>
	<option value="B.E. Electronics and Instrumentation Engineering">B.E. Electronics and Instrumentation Engineering</option>
	<option value="B.E. Electronics and Telecommunication Engineering">B.E. Electronics and Telecommunication Engineering</option>
	<option value="B.E. Environmental Engineering">B.E. Environmental Engineering</option>
	<option value="B.E. Genetic Engineering">B.E. Genetic Engineering</option>
	<option value="B.E. Geo Informatics">B.E. Geo Informatics</option>
	<option value="B.E. Industrial Engineering">B.E. Industrial Engineering</option>
	<option value="B.E. Industrial Engineering and Management">B.E. Industrial Engineering and Management</option>
	<option value="B.E. Industrial Microbiology">B.E. Industrial Microbiology</option>
	<option value="OB.E. Information Science">OB.E. Information Science</option>
	<option value="B.E. Information Technology">B.E. Information Technology</option>
	<option value="B.E. Instrumentation and Control Engineering">B.E. Instrumentation and Control Engineering</option>
	<option value="B.E. Irrigation and Water Management
">B.E. Irrigation and Water Management
</option>
	<option value="B.E. Manufacturing Engineering">B.E. Manufacturing Engineering</option>
	<option value="B.E. Marine Erngineering">B.E. Marine Erngineering</option>
	<option value="B.E. Material Science and Engineering">B.E. Material Science and Engineering</option>
	<option value="B.E. Mechanical and Automation Engineering">B.E. Mechanical and Automation Engineering</option>
	<option value="B.E. Mechanical Engineering">B.E. Mechanical Engineering</option>
	<option value="B.E. Mechatronics">B.E. Mechatronics</option>
	<option value="B.E. Medical Electronics Engineering">B.E. Medical Electronics Engineering</option>
	<option value="B.E. Metallurgical Engineering">B.E. Metallurgical Engineering</option>
	<option value="B.E. Mining Engineering">B.E. Mining Engineering</option>
	<option value="B.E. Naval Architecture And Offshore Engineering">B.E. Naval Architecture And Offshore Engineering</option>
	<option value="B.E. Petrochemical Engineering">B.E. Petrochemical Engineering</option>
	<option value="B.E. Plastic Engineering">B.E. Plastic Engineering</option>
	<option value="B.E. Polymer Engineering">B.E. Polymer Engineering</option>
	<option value="B.E. Power Electronics">B.E. Power Electronics</option>
	<option value="B.E. Printing Technology">B.E. Printing Technology</option>
	<option value="B.E. Production Engineering">B.E. Production Engineering</option>
	<option value="B.E. Robotics">B.E. Robotics</option>
	<option value="B.E. Robotics and Automation">B.E. Robotics and Automation</option>
	<option value="B.E. Software Engineering">B.E. Software Engineering</option>
	<option value="B.E. Space Technology">B.E. Space Technology</option>
	<option value="B.E. Structural Engineering">B.E. Structural Engineering</option>
	<option value="B.E. Telecommunication Engineering">B.E. Telecommunication Engineering</option>
	<option value="B.E. Textile Engineering">B.E. Textile Engineering</option>
	<option value="B.E.M.S. Bachelor of Electro-homeopathy Medicine and Surgery">B.E.M.S. Bachelor of Electro-homeopathy Medicine and Surgery</option>
	<option value="B.Ed">B.Ed</option>
	<option value="B.H.M.S. Bachelor of Homeopathic Medicine and Surgery">B.H.M.S. Bachelor of Homeopathic Medicine and Surgery</option>
	<option value="B.H.M.S. Hotel Management">B.H.M.S. Hotel Management</option>
	<option value="B.I.S.M. Bachelor of Information Systems Management">B.I.S.M. Bachelor of Information Systems Management</option>
	<option value="B.L. LLB. (Bachelor of Law / Bachelor of Legislative Law)">B.L. LLB. (Bachelor of Law / Bachelor of Legislative Law)</option>
	<option value="B.Lit">B.Lit</option>
	<option value="B.M.C. Basic Mountaineering Course">B.M.C. Basic Mountaineering Course</option>
	<option value="B.M.M. Multimedia and Animation">B.M.M. Multimedia and Animation</option>
	<option value="B.N.Y.S. Bachelor of Naturopathy and Yogic Sciences">B.N.Y.S. Bachelor of Naturopathy and Yogic Sciences</option>
	<option value="B.O.T. Bachelor of Occupational Therapy">B.O.T. Bachelor of Occupational Therapy</option>
	<option value="B.Optom. Bachelor of Optometry">B.Optom. Bachelor of Optometry</option>
	<option value="B.P.Ed. Bachelor of Physical Education">B.P.Ed. Bachelor of Physical Education</option>
	<option value="B.P.T. Bachelor of Physiotherapy">B.P.T. Bachelor of Physiotherapy</option>
	<option value="B.Pharm. Bachelor of Pharmacy">B.Pharm. Bachelor of Pharmacy</option>
	<option value="B.S.M.S. Bachelor of Siddha Medicine and Surgery">B.S.M.S. Bachelor of Siddha Medicine and Surgery</option>
	<option value="B.S.W. Bachelor of Social Work">B.S.W. Bachelor of Social Work</option>
	<option value="B.SC">B.SC</option>
	<option value="B.SC Information Technology">B.SC Information Technology</option>
	<option value="B.Sc. Applied Science">B.Sc. Applied Science</option>
	<option value="B.SC. (Hons) Agri-Business Management">B.SC. (Hons) Agri-Business Management</option>
	<option value="B.SC. (Hons) Mathematics">B.SC. (Hons) Mathematics</option>
	<option value="B.SC. Accident and Emergency Care Technology">B.SC. Accident and Emergency Care Technology</option>
	<option value="B.SC. Advanced Zoology and Biotechnology">B.SC. Advanced Zoology and Biotechnology</option>
	<option value="B.SC. Aeronautical science">B.SC. Aeronautical science</option>
	<option value="B.SC. Agricultural Microbiology">B.SC. Agricultural Microbiology</option>
	<option value="B.Sc. Agriculture">B.Sc. Agriculture</option>
	<option value="B.SC. Aircraft Maintenance Engineering">B.SC. Aircraft Maintenance Engineering</option>
	<option value="B.Sc. Airline and Airport Management">B.Sc. Airline and Airport Management</option>
	<option value="B.SC. Allied Botany">B.SC. Allied Botany</option>
	<option value="B.SC. Alied Health Sciences">B.SC. Alied Health Sciences</option>
	<option value="B.Sc. Animal Science and Biotechnology">B.Sc. Animal Science and Biotechnology</option>
	<option value="B.SC. Animation">B.SC. Animation</option>
	<option value="B.SC. Animation and VFX">B.SC. Animation and VFX</option>
	<option value="B.SC. Apparel and Fashion Technology">B.SC. Apparel and Fashion Technology</option>
	<option value="B.SC. Apparel Fashion Designing">B.SC. Apparel Fashion Designing</option>
	<option value="B.Sc. Apparel Manufacturing and Merchandising">B.Sc. Apparel Manufacturing and Merchandising</option>
	<option value="B.SC. Applied Geology">B.SC. Applied Geology</option>
	<option value="B.SC. Biological Science">B.SC. Biological Science</option>
	<option value="B.SC. Biophysics">B.SC. Biophysics</option>
	<option value="B.SC. Biotechnology">B.SC. Biotechnology</option>
	<option value="B.SC. Botany">B.SC. Botany</option>
	<option value="B.Sc. Botany with Industrial Microbiology">B.Sc. Botany with Industrial Microbiology</option>
	<option value="B.SC. Cardiac Technology">B.SC. Cardiac Technology</option>
	<option value="B.SC. Cardio Pulmonary Perfusion Care Technology">B.SC. Cardio Pulmonary Perfusion Care Technology</option>
	<option value="B.SC. Catering and Hotel Administration">B.SC. Catering and Hotel Administration</option>
	<option value="B.Sc. Catering Technology and Hotel Management">B.Sc. Catering Technology and Hotel Management</option>
	<option value="B.Sc. Chemistry">B.Sc. Chemistry</option>
	<option value="B.Sc. Biological Science">B.Sc. Biological Science</option>
	<option value="B.SC. Biophysics">B.SC. Biophysics</option>
	<option value="B.Sc. Biotechnology">B.Sc. Biotechnology</option>
	<option value="B.SC. Botany">B.SC. Botany</option>
	<option value="B.Sc. Botany with Industrial Microbiology">B.Sc. Botany with Industrial Microbiology</option>
	<option value="B.SC. Cardiac Technology">B.SC. Cardiac Technology</option>
	<option value="B.SC. Cardio Pulmonary Perfusion Care Technology">B.SC. Cardio Pulmonary Perfusion Care Technology</option>
	<option value="B.Sc. Catering and Hotel Administration">B.Sc. Catering and Hotel Administration</option>
	<option value="B.SC. Catering Technology and Hotel Marnagement">B.SC. Catering Technology and Hotel Marnagement</option>
	<option value="B.Sc. Chemistry">B.Sc. Chemistry</option>
	<option value="B.Sc. Computer Application">B.Sc. Computer Application</option>
	<option value="B.SC. Computer Science">B.SC. Computer Science</option>
	<option value="B.Sc. Computer Science and Applications">B.Sc. Computer Science and Applications</option>
	<option value="B.SC. Computer Technology">B.SC. Computer Technology</option>
	<option value="B.Sc. Costume Design and Fashion Technology">B.Sc. Costume Design and Fashion Technology</option>
	<option value="B.Sc. Critical Care Technology">B.Sc. Critical Care Technology</option>
	<option value="B.Sc. Dialysis Technology">B.Sc. Dialysis Technology</option>
	<option value="B.Sc. Digital Print Media">B.Sc. Digital Print Media</option>
	<option value="B.SC. E-Commerce and Web Design">B.SC. E-Commerce and Web Design</option>
	<option value="B.Sc. Electronics">B.Sc. Electronics</option>
	<option value="B.SC. Electronics and Communication">B.SC. Electronics and Communication</option>
	<option value="B.Sc. Environmental Science">B.Sc. Environmental Science</option>
	<option value="B.Sc. Fashion Apparel Management">B.Sc. Fashion Apparel Management</option>
	<option value="B.SC. Fashion Designing and Apparel Making">B.SC. Fashion Designing and Apparel Making</option>
	<option value="B.Sc. Fashion Technology">B.Sc. Fashion Technology</option>
	<option value="B.SC. Electronics and Communication">B.SC. Electronics and Communication</option>
	<option value="B.Sc. Environmental Science">B.Sc. Environmental Science</option>
	<option value="B.SC. Fashion Apparel Management">B.SC. Fashion Apparel Management</option>
	<option value="B.SC. Fashion Designing and Apparel Making">B.SC. Fashion Designing and Apparel Making</option>
	<option value="B.Sc. Fashion Technology">B.Sc. Fashion Technology</option>
	<option value="B.SC. Fire and Industrial Safety Management">B.SC. Fire and Industrial Safety Management</option>
	<option value="B.Sc. Fisheries">B.Sc. Fisheries</option>
	<option value="B.Sc. Food Science and Nutrition">B.Sc. Food Science and Nutrition</option>
	<option value="B.Sc. Food Science and Quality Control">B.Sc. Food Science and Quality Control</option>
	<option value="B.SC. Food Science and Technology">B.SC. Food Science and Technology</option>
	<option value="B.Sc. Forensic Science">B.Sc. Forensic Science</option>
	<option value="B.SC. Forestry">B.SC. Forestry</option>
	<option value="B.SC. Garment Production and Processing">B.SC. Garment Production and Processing</option>
	<option value="B.Sc. Geography">B.Sc. Geography</option>
	<option value="B.SC. Geology">B.SC. Geology</option>
	<option value="B.Sc. Health Care and Hospital Management">B.Sc. Health Care and Hospital Management</option>
	<option value="B.SC. Home Science">B.SC. Home Science</option>
	<option value="B.SC. Home Science (Clinical Nutrition & Dietetics)">B.SC. Home Science (Clinical Nutrition & Dietetics)</option>
	<option value="B.SC. Horticulture">B.SC. Horticulture</option>
	<option value="B.Sc. Hospital Administration">B.Sc. Hospital Administration</option>
	<option value="B.Sc. Hospital Management">B.Sc. Hospital Management</option>
	<option value="B.Sc. Hospitality and Airline Catering Management">B.Sc. Hospitality and Airline Catering Management</option>
	<option value="B.SC. Hotel Management">B.SC. Hotel Management</option>
	<option value="B.SC. Hotel Management and Tourism">B.SC. Hotel Management and Tourism</option>
	<option value="B.Sc. Industrial Chemistry">B.Sc. Industrial Chemistry</option>
	<option value="B.SC. Industrial Electronics">B.SC. Industrial Electronics</option>
	<option value="B.SC. Industrial Microbiology and Zoology">B.SC. Industrial Microbiology and Zoology</option>
	<option value="B.SC. Information Science">B.SC. Information Science</option>
	<option value="B.SC. Information System Management">B.SC. Information System Management</option>
	<option value="B.SC. Information Technology">B.SC. Information Technology</option>
	<option value="B.Sc. Information Technology and Management">B.Sc. Information Technology and Management</option>
	<option value="B.SC. Interior Design and Decoration">B.SC. Interior Design and Decoration</option>
	<option value="B.Sc. LLB">B.Sc. LLB</option>
	<option value="B.SC. Mathematics">B.SC. Mathematics</option>
	<option value="B.SC. Mathematics (Computer Applications)">B.SC. Mathematics (Computer Applications)</option>
	<option value="B.SC. Medical Biotechnology">B.SC. Medical Biotechnology</option>
	<option value="B.SC. Medical Genetics">B.SC. Medical Genetics</option>
	<option value="B.Sc. Medical Laboratory Technology">B.Sc. Medical Laboratory Technology</option>
	<option value="B.SC. Medical Records Sciences">B.SC. Medical Records Sciences</option>
	<option value="B.SC. Medical Sociology">B.SC. Medical Sociology</option>
	<option value="B.SC. Meteorology">B.SC. Meteorology</option>
	<option value="B.SC. Microbiology">B.SC. Microbiology</option>
	<option value="B.SC. Microbiology With Nanotechnology">B.SC. Microbiology With Nanotechnology</option>
	<option value="B.SC. Multimedia and Web Technology">B.SC. Multimedia and Web Technology</option>
	<option value="B.SC. Nanoscience">B.SC. Nanoscience</option>
	<option value="B.SC. Nautical Science">B.SC. Nautical Science</option>
	<option value="B.Sc. Networking Technology">B.Sc. Networking Technology</option>
	<option value="B.SC. Nursing">B.SC. Nursing</option>
	<option value="B.Sc. Nutrition and Dietetics">B.Sc. Nutrition and Dietetics</option>
	<option value="B.Sc. Nutrition, Food Service Management and Dietetics">B.Sc. Nutrition, Food Service Management and Dietetics</option>
	<option value="B.SC. Operation Theatre and Anaesthesia Technology">B.SC. Operation Theatre and Anaesthesia Technology</option>
	<option value="B.Sc. Optometry">B.Sc. Optometry</option>
	<option value="B.SC. Photography">B.SC. Photography</option>
	<option value="B.SC. Physical Education, Health Education and Sports">B.SC. Physical Education, Health Education and Sports</option>
	<option value="B.Sc. Physical Science">B.Sc. Physical Science</option>
	<option value="B.Sc. Physician Assistant">B.Sc. Physician Assistant</option>
	<option value="B.Sc. Physics">B.Sc. Physics</option>
	<option value="B.Sc. Physics with Computer Application">B.Sc. Physics with Computer Application</option>
	<option value="B.SC. Plant Biology & Plant Biotechnology (B.Sc. PBPBT)">B.SC. Plant Biology & Plant Biotechnology (B.Sc. PBPBT)</option>
	<option value="B.SC. Police Studies and Criminal Justice Planning">B.SC. Police Studies and Criminal Justice Planning</option>
	<option value="B.Sc. Psychology">B.Sc. Psychology</option>
	<option value="B.Sc. Radiography">B.Sc. Radiography</option>
	<option value="B.Sc. Radiology">B.Sc. Radiology</option>
	<option value="B.Sc. Radiology Imaging Technology">B.Sc. Radiology Imaging Technology</option>
	<option value="B.Sc. Radiotherapy Technology">B.Sc. Radiotherapy Technology</option>
	<option value="B.Sc. Rehabilitation Science">B.Sc. Rehabilitation Science</option>
	<option value="B.SC. Rural Development Science">B.SC. Rural Development Science</option>
	<option value="B.SC. Sericulture">B.SC. Sericulture</option>
	<option value="B.SC. Software Application">B.SC. Software Application</option>
	<option value="B.Sc. Software Engineering">B.Sc. Software Engineering</option>
	<option value="B.SC. Software System">B.SC. Software System</option>
	<option value="B.Sc. Statistics">B.Sc. Statistics</option>
	<option value="B.SC. Textile and Fashion Designing">B.SC. Textile and Fashion Designing</option>
	<option value="B.Sc. Tourism and Hospitality Management">B.Sc. Tourism and Hospitality Management</option>
	<option value="B.SC. Tourism and Travel Management">B.SC. Tourism and Travel Management</option>
	<option value="B.SC. Visual Communication">B.SC. Visual Communication</option>
	<option value="B.SC. Visual Communication (Electronic Media)">B.SC. Visual Communication (Electronic Media)</option>
	<option value="B.Sc. Yoga">B.Sc. Yoga</option>
	<option value="B.SC. Zoology">B.SC. Zoology</option>
	<option value="B.Tech.">B.Tech.</option>
	<option value="B.Tech. Agriculture Information Technology">B.Tech. Agriculture Information Technology</option>
	<option value="B.Tech. Aerospace Engineering">B.Tech. Aerospace Engineering</option>
	<option value="B.Tech. Agricultural Engineering">B.Tech. Agricultural Engineering</option>
	<option value="B.Tech. Apparel Technology">B.Tech. Apparel Technology</option>
	<option value="B.Tech. Architecture Engineering">B.Tech. Architecture Engineering</option>
	<option value="B.Tech. Automation and Robotics">B.Tech. Automation and Robotics</option>
	<option value="B.Tech. Automobile Engineering">B.Tech. Automobile Engineering</option>
	<option value="B.Tech. Bioinformatics">B.Tech. Bioinformatics</option>
	<option value="B.Tech. Biomedical Engineering">B.Tech. Biomedical Engineering</option>
	<option value="B.Tech. Biotechnology">B.Tech. Biotechnology</option>
	<option value="B.Tech. Chemical and Electrochemical Engineering">B.Tech. Chemical and Electrochemical Engineering</option>
	<option value="B.Tech. Chemical Engineering">B.Tech. Chemical Engineering</option>
	<option value="B.Tech. Civil Engineering">B.Tech. Civil Engineering</option>
	<option value="B.Tech. Computer Engineering">B.Tech. Computer Engineering</option>
	<option value="B.Tech. Dairy Technology">B.Tech. Dairy Technology</option>
	<option value="B.Tech. Electrical and Communication Engineering">B.Tech. Electrical and Communication Engineering</option>
	<option value="B.Tech. Electrical and Electronics Engineering">B.Tech. Electrical and Electronics Engineering</option>
	<option value="B.Tech. Electronics and Instrumentation Engineering">B.Tech. Electronics and Instrumentation Engineering</option>
	<option value="B.Tech. Energy and Environmental Engineering">B.Tech. Energy and Environmental Engineering</option>
	<option value="B.Tech. Fashion Technology">B.Tech. Fashion Technology</option>
	<option value="B.Tech. Food Process Engineering">B.Tech. Food Process Engineering</option>
	<option value="B.Tech. Food Technology">B.Tech. Food Technology</option>
	<option value="B.Tech. Handloom and Textile Technology">B.Tech. Handloom and Textile Technology</option>
	<option value="B.Tech. Horticulture">B.Tech. Horticulture</option>
	<option value="B.Tech. Industrial and Production Engineering">B.Tech. Industrial and Production Engineering</option>
	<option value="B.Tech. Industrial Bio-Technology">B.Tech. Industrial Bio-Technology</option>
	<option value="B.Tech. Industrial Microbiology">B.Tech. Industrial Microbiology</option>
	<option value="B.Tech. Information Technology">B.Tech. Information Technology</option>
	<option value="B.Tech. Instrumentation and Control Engineering">B.Tech. Instrumentation and Control Engineering</option>
	<option value="B.Tech. Leather Technology">B.Tech. Leather Technology</option>
	<option value="B.Tech. Mechanical Engineering">B.Tech. Mechanical Engineering</option>
	<option value="B.Tech. Mechatronics Engineering">B.Tech. Mechatronics Engineering</option>
	<option value="B.Tech. Nano Science and Technology">B.Tech. Nano Science and Technology</option>
	<option value="B. Tech. Petrochemical Technology">B. Tech. Petrochemical Technology</option>
	<option value="B.Tech. Petroleum Engineering">B.Tech. Petroleum Engineering</option>
	<option value="B.Tech. Petroleum Engineering and Technology">B.Tech. Petroleum Engineering and Technology</option>
	<option value="B.Tech. Petroleum Refining and Petro Chemicals Engineerir">B.Tech. Petroleum Refining and Petro Chemicals Engineerir</option>
	<option value="B.Tech. Pharmaceutical Technology">B.Tech. Pharmaceutical Technology</option>
	<option value="B.Tech. Plastic Technology">B.Tech. Plastic Technology</option>
	<option value="B.Tech. Polymer Technology">B.Tech. Polymer Technology</option>
	<option value="B.Tech. Poultry Production Technology">B.Tech. Poultry Production Technology</option>
	<option value="B.Tech. Power Engineering">B.Tech. Power Engineering</option>
	<option value="B.Tech. Printing Technology">B.Tech. Printing Technology</option>
	<option value="B.Tech. Rubber and Plastic Technology">B.Tech. Rubber and Plastic Technology</option>
	<option value="B.Tech. Software Engineering">B.Tech. Software Engineering</option>
	<option value="B.Tech. Textile Chemistry">B.Tech. Textile Chemistry</option>
	<option value="B.Tech. Textile Technology">B.Tech. Textile Technology</option>
	<option value="B.V.A (Bachelor of Visual Arts)">B.V.A (Bachelor of Visual Arts)</option>
	<option value="B.V.A. Digital Media">B.V.A. Digital Media</option>
	<option value="B.V.Sc. and A.H. (Bachelor of Veterinary Science and Animal Husbandry)">B.V.Sc. and A.H. (Bachelor of Veterinary Science and Animal Husbandry)
</option>
	<option value="B.Voc. 3D Animation">B.Voc. 3D Animation</option>
	<option value="B.Voc. Business Process Service and Data Analysis">B.Voc. Business Process Service and Data Analysis</option>
	<option value="B.Voc. Food Processing and Engineering">B.Voc. Food Processing and Engineering</option>
	<option value="B.Voc. Multimedia and Animation">B.Voc. Multimedia and Animation</option>
	<option value="Bachelor in Prosthetics and Orthotics">Bachelor in Prosthetics and Orthotics</option>
	<option value="Bachelor of Accounting and Finance">Bachelor of Accounting and Finance</option>
	<option value="Bachelor of Commerce With Computer Application">Bachelor of Commerce With Computer Application</option>
	<option value="Bachelor of Computer Science">Bachelor of Computer Science</option>
	<option value="Bachelor Of Fine Arts">Bachelor Of Fine Arts</option>
	<option value="Bachelor of Fisheries and Science">Bachelor of Fisheries and Science</option>
	<option value="Bachelor of Sports Science in Coaching">Bachelor of Sports Science in Coaching</option>
	<option value="Bachelor of Theology">Bachelor of Theology</option>
	<option value="Below 10th">Below 10th</option>
	<option value="BEMBA">BEMBA</option>
	<option value="CA. Auditor">CA. Auditor</option>
	<option value="CA Chartered Accountant">CA Chartered Accountant</option>
	<option value="Chartered Accountant (CA)">Chartered Accountant (CA)</option>
	<option value="CMA Certified Management Accountant">CMA Certified Management Accountant</option>
	<option value="COA">COA</option>
	<option value="CS Company Secretary">CS Company Secretary</option>
	<option value="D.F.S.M. Diploma In Financial and Stock Market">D.F.S.M. Diploma In Financial and Stock Market</option>
	<option value="D.G.N.M. NURSING">D.G.N.M. NURSING</option>
	<option value="D.M. Medical Gastroenterology">D.M. Medical Gastroenterology</option>
	<option value="D.M. Nephrology">D.M. Nephrology</option>
	<option value="Data science">Data science</option>
	<option value="Degree Discontinued">Degree Discontinued</option>
	<option value="Diplamo electrical & electronics engneering">Diplamo electrical & electronics engneering</option>
	<option value="Diploma Catering">Diploma Catering</option>
	<option value="diploma Ece">diploma Ece</option>
	<option value="Diploma in Khadi and Handloom Technology">Diploma in Khadi and Handloom Technology</option>
	<option value="Diploma in 2D Animation">Diploma in 2D Animation</option>
	<option value="Diploma in 3D Animation and Graphics">Diploma in 3D Animation and Graphics</option>
	<option value="Diploma in AC Mechanic">Diploma in AC Mechanic</option>
	<option value="Diploma in Accounting Management (DAM)">Diploma in Accounting Management (DAM)</option>
	<option value="Diploma in Acupuncture">Diploma in Acupuncture</option>
	<option value="Diploma in Aeronautical Engineering">Diploma in Aeronautical Engineering</option>
	<option value="Diploma in Agricultural Engineering">Diploma in Agricultural Engineering</option>
	<option value="Diploma in Agricultural Technology">Diploma in Agricultural Technology</option>
	<option value="Diploma in Agriculture">Diploma in Agriculture</option>
	<option value="Diploma in Agriculture Engineering and Farm Equipment Technology">Diploma in Agriculture Engineering and Farm Equipment Technology</option>
	<option value="Diploma in Applied Arts and Crafts (Fashion 8 Apparel Design)">Diploma in Applied Arts and Crafts (Fashion 8 Apparel Design)</option>
	<option value="Diploma in Architecture (Sandwich)">Diploma in Architecture (Sandwich)</option>
	<option value="Diploma in Architecture Assistantship">Diploma in Architecture Assistantship</option>
	<option value="Diploma in Architecture Assistantship (Sandwich)">Diploma in Architecture Assistantship (Sandwich)</option>
	<option value="Diploma in Architecture Engineering">Diploma in Architecture Engineering</option>
	<option value="Diploma in Astrology">Diploma in Astrology</option>
	<option value="Diploma in Auto CAD">Diploma in Auto CAD</option>
	<option value="Diploma in Automobile Engineering">Diploma in Automobile Engineering</option>
	<option value="Diploma in Automobile Mechanic">Diploma in Automobile Mechanic</option>
	<option value="Diploma in Automobile Technology">Diploma in Automobile Technology</option>
	<option value="Diploma in Aviation Hospitality">Diploma in Aviation Hospitality</option>
	<option value="Diploma in Ayurveda">Diploma in Ayurveda</option>
	<option value="Diploma in Bakery and Confectionery">Diploma in Bakery and Confectionery</option>
	<option value="Diploma in Banking Management">Diploma in Banking Management</option>
	<option value="Diploma in Basic Engineering">Diploma in Basic Engineering</option>
	<option value="Diploma in Beautician">Diploma in Beautician</option>
	<option value="Diploma in Catering">Diploma in Catering</option>
	<option value="Diploma in Ceramic Technology">Diploma in Ceramic Technology</option>
	<option value="Diploma in Ceramic Technology (Sandwich)">Diploma in Ceramic Technology (Sandwich)</option>
	<option value="Diploma in CG Animation">Diploma in CG Animation</option>
	<option value="Diploma in Chemical Engineering">Diploma in Chemical Engineering</option>
	<option value="Diploma in Chemical Engineering (Sandwich)">Diploma in Chemical Engineering (Sandwich)</option>
	<option value="Diploma in Chemical Technology">Diploma in Chemical Technology</option>
	<option value="Diploma in Civil and Rural Engineering">Diploma in Civil and Rural Engineering</option>
	<option value="Diploma in Civil Engineering">Diploma in Civil Engineering</option>
	<option value="Diploma in Civil Engineering (Rural Technology)">Diploma in Civil Engineering (Rural Technology)</option>
	<option value="Diploma in Civil Engineering (Sandwich)">Diploma in Civil Engineering (Sandwich)</option>
	<option value="Diploma in Commercial Practice">Diploma in Commercial Practice</option>
	<option value="Diploma in Compound Homoeopathy Medical Science (D.C.H.M.S.)">Diploma in Compound Homoeopathy Medical Science (D.C.H.M.S.)</option>
	<option value="Diploma In Computer Application">Diploma In Computer Application</option>
	<option value="Diploma in Air Conditioner">Diploma in Air Conditioner</option>
	<option value="Diploma in Airfare and Ticketing Management">Diploma in Airfare and Ticketing Management</option>
	<option value="Diploma in Airport Management">Diploma in Airport Management</option>
	<option value="Diploma in Animation, Video Editing and Post Production work">Diploma in Animation, Video Editing and Post Production work</option>
	<option value="Diploma in Apparel Technology">Diploma in Apparel Technology</option>
	<option value="Diploma in Computer Engineering">Diploma in Computer Engineering</option>
	<option value="Diploma in Computer Hardware and Networking">Diploma in Computer Hardware and Networking</option>
	<option value="Diploma in Computer Networking">Diploma in Computer Networking</option>
	<option value="Diploma in Computer Numerical Control">Diploma in Computer Numerical Control</option>
	<option value="Diploma in Computer Science and Engineering">Diploma in Computer Science and Engineering</option>
	<option value="Diploma in Computer Technology">Diploma in Computer Technology</option>
	<option value="Diploma In Computerized Industrial Account">Diploma In Computerized Industrial Account</option>
	<option value="Diploma in Cooking Management">Diploma in Cooking Management</option>
	<option value="Diploma in Cooperative Management">Diploma in Cooperative Management</option>
	<option value="Diploma in Cosmetology and Beauty Parlour Management">Diploma in Cosmetology and Beauty Parlour Management</option>
	<option value="Diploma in Costume Design and Dress Making">Diploma in Costume Design and Dress Making</option>
	<option value="Diploma in Crawler Crane Operator">Diploma in Crawler Crane Operator</option>
	<option value="Diploma in Dental Hygienist">Diploma in Dental Hygienist</option>
	<option value="Diploma in Dental Mechanics">Diploma in Dental Mechanics</option>
	<option value="Diploma in Dialysis Technology">Diploma in Dialysis Technology</option>
	<option value="Diploma in Diesel Mechanic">Diploma in Diesel Mechanic</option>
	<option value="Diploma in Digital Animation">Diploma in Digital Animation</option>
	<option value="Diploma in Direction and ScreenPlay Writing and TV Production">Diploma in Direction and ScreenPlay Writing and TV Production</option>
	<option value="Diploma in DTP Operator">Diploma in DTP Operator</option>
	<option value="Diploma in ECE">Diploma in ECE</option>
	<option value="Diploma in ECG Technology">Diploma in ECG Technology</option>
	<option value="Diploma in Electrical and Electronics Engineering">Diploma in Electrical and Electronics Engineering</option>
	<option value="Diploma in Electrical and Electronics Engineering (Sandwich)">Diploma in Electrical and Electronics Engineering (Sandwich)</option>
	<option value="Diploma in Electrical Engineering">Diploma in Electrical Engineering</option>
	<option value="Diploma in Electrical Engineering (Instruments and Control)">Diploma in Electrical Engineering (Instruments and Control)</option>
	<option value="Diploma in Electrical Engineering (Sandwich)">Diploma in Electrical Engineering (Sandwich)</option>
	<option value="Diploma in Electroincs">Diploma in Electroincs</option>
	<option value="Diploma in Electronics (Robotics)">Diploma in Electronics (Robotics)</option>
	<option value="Diploma in Electronics (Robotics)(Sandwich)">Diploma in Electronics (Robotics)(Sandwich)</option>
	<option value="Diploma in Electronics (WSI)">Diploma in Electronics (WSI)</option>
	<option value="Diploma in Electronics and Communication Engineering">Diploma in Electronics and Communication Engineering</option>
	<option value="Diploma in Electronics and Communication Engineering (Sandwich)">Diploma in Electronics and Communication Engineering (Sandwich)</option>
	<option value="Diploma in Electronics and Instrumentation Engineering">Diploma in Electronics and Instrumentation Engineering</option>
	<option value="Diploma in Electronics Engineering (Instrumentation)">Diploma in Electronics Engineering (Instrumentation)</option>
	<option value="Diploma in Engineering">Diploma in Engineering</option>
	<option value="Diploma in Environmental Engineering and Pollution Control">Diploma in Environmental Engineering and Pollution Control</option>
	<option value="Diploma in Environmental Health and Safety Management">Diploma in Environmental Health and Safety Management</option>
	<option value="Diploma in Export arnd Import Management">Diploma in Export arnd Import Management</option>
	<option value="Diploma in Fashion Design and Clothing Technology">Diploma in Fashion Design and Clothing Technology</option>
	<option value="Diploma in Fashion Technology">Diploma in Fashion Technology</option>
	<option value="Diploma in Film Editing and Television Production">Diploma in Film Editing and Television Production</option>
	<option value="Diploma in Film Technology and TV Production (Cinematography)">Diploma in Film Technology and TV Production (Cinematography)</option>
	<option value="Diploma in Film Technology and TV Production (Film Processing)">Diploma in Film Technology and TV Production (Film Processing)</option>
	<option value="Diploma in Film Technology and TV Production (Sound Recorder and Sound Engineering)">Diploma in Film Technology and TV Production (Sound Recorder and Sound Engineering)
</option>
	<option value="Diploma in Fire and Safety Engineering">Diploma in Fire and Safety Engineering</option>
	<option value="Diploma in Fish Product Technology">Diploma in Fish Product Technology</option>
	<option value="Diploma in Fisheries Science">Diploma in Fisheries Science</option>
	<option value="Diploma in Fisheries Technology">Diploma in Fisheries Technology</option>
	<option value="Diploma in Fisheries Technology (Sandwich)">Diploma in Fisheries Technology (Sandwich)</option>
	<option value="Diploma in Folk Art">Diploma in Folk Art</option>
	<option value="Diploma in Food and Beverage Service">Diploma in Food and Beverage Service</option>
	<option value="Diploma in Food Production">Diploma in Food Production</option>
	<option value="Diploma in Footwear Technology">Diploma in Footwear Technology</option>
	<option value="Diploma in Footwear Technology (Sandwich)">Diploma in Footwear Technology (Sandwich)</option>
	<option value="Diploma in Foundry Technology">Diploma in Foundry Technology</option>
	<option value="Diploma in Foundry Technology (Sandwich)">Diploma in Foundry Technology (Sandwich)</option>
	<option value="Diploma in Front Office">Diploma in Front Office</option>
	<option value="Diploma in Garment Technology">Diploma in Garment Technology</option>
	<option value="Diploma in Genetic Engineering">Diploma in Genetic Engineering</option>
	<option value="Diploma in Ground Staff and Cabin Crew Training">Diploma in Ground Staff and Cabin Crew Training</option>
	<option value="Diploma in Handloom Technology">Diploma in Handloom Technology</option>
	<option value="Diploma in Health Assistant">Diploma in Health Assistant</option>
	<option value="Diploma in Health Inspector">Diploma in Health Inspector</option>
	<option value="Diploma in Home Textiles">Diploma in Home Textiles</option>
	<option value="Diploma in Horticulture">Diploma in Horticulture</option>
	<option value="Diploma in Instrument Technology">Diploma in Instrument Technology</option>
	<option value="Diploma in Instrumentation and Control Engineering">Diploma in Instrumentation and Control Engineering</option>
	<option value="Diploma in Interior Design">Diploma in Interior Design</option>
	<option value="Diploma in Jewellery Design">Diploma in Jewellery Design</option>
	<option value="Diploma in Knitting Technology">Diploma in Knitting Technology</option>
	<option value="Diploma in Lab Technician">Diploma in Lab Technician</option>
	<option value="Diploma in Leather Technology">Diploma in Leather Technology</option>
	<option value="Diploma in Leather Technology (Sandwich)">Diploma in Leather Technology (Sandwich)</option>
	<option value="Diploma in Machine Tools Maintenance and Repairs">Diploma in Machine Tools Maintenance and Repairs</option>
	<option value="Diploma in Man Made Fibre Technology">Diploma in Man Made Fibre Technology</option>
	<option value="Diploma in Manufacturing Technology">Diploma in Manufacturing Technology</option>
	<option value="Diploma in Marine Engineering">Diploma in Marine Engineering</option>
	<option value="Diploma In Martial Art">Diploma In Martial Art</option>
	<option value="Diploma in Mechanical and Rural Engineering">Diploma in Mechanical and Rural Engineering</option>
	<option value="Diploma in Mechanical Design and Drafting">Diploma in Mechanical Design and Drafting</option>
	<option value="Diploma in Mechanical Engineering dltng">Diploma in Mechanical Engineering dltng</option>
	<option value="Diploma in Mechanical Engineering (Foundry)">Diploma in Mechanical Engineering (Foundry)</option>
	<option value="Diploma in Mechanical Engineering (Machine Tool Maintenance & Repairs)">Diploma in Mechanical Engineering (Machine Tool Maintenance & Repairs)</option>
	<option value="Diploma in Mechanical Engineering (Production)">Diploma in Mechanical Engineering (Production)</option>
	<option value="Diploma in Mechanical Engineering (Refrigeration and A.C)">Diploma in Mechanical Engineering (Refrigeration and A.C)</option>
	<option value="Diploma in Mechanical Engineering (Sandwich)">Diploma in Mechanical Engineering (Sandwich)</option>
	<option value="Diploma in Mechanical Engineering (Tool and Die)">Diploma in Mechanical Engineering (Tool and Die)</option>
	<option value="Diploma in Mechanical Fitter">Diploma in Mechanical Fitter</option>
	<option value="Diploma in Mechatronics Engineering">Diploma in Mechatronics Engineering</option>
	<option value="Diploma in Mechatronics Engineering (Sandwich)">Diploma in Mechatronics Engineering (Sandwich)</option>
	<option value="Diploma in Media Arts">Diploma in Media Arts</option>
	<option value="Diploma in Medical Laboratory Technology (D.M.L.T)">Diploma in Medical Laboratory Technology (D.M.L.T)</option>
	<option value="D Diploma in Merchandising">D Diploma in Merchandising</option>
	<option value="Diploma in Metallurgical Engineering">Diploma in Metallurgical Engineering</option>
	<option value="Diploma in Metallurgy">Diploma in Metallurgy</option>
	<option value="Diploma in Mining Engineering">Diploma in Mining Engineering</option>
	<option value="Diploma in Modern Office Practice">Diploma in Modern Office Practice</option>
	<option value="D Diploma in Multimedia">D Diploma in Multimedia</option>
	<option value="Diploma in Music">Diploma in Music</option>
	<option value="Diploma in Network Engineering">Diploma in Network Engineering</option>
	<option value="Diploma in Nursing">Diploma in Nursing</option>
	<option value="Diploma in Nutrition and Health Education (D.N.H.E)">Diploma in Nutrition and Health Education (D.N.H.E)</option>
	<option value="Diploma in Office Management">Diploma in Office Management</option>
	<option value="Diploma in Operation Theatre Technology">Diploma in Operation Theatre Technology</option>
	<option value="Diploma in Ophthalmic Technology">Diploma in Ophthalmic Technology</option>
	<option value="Diploma in Optometry Technology">Diploma in Optometry Technology</option>
	<option value="diploma in orthopaedic technician">diploma in orthopaedic technician</option>
	<option value="Diploma in PD in Advanced Technological Course in R & A/C (SWC)">Diploma in PD in Advanced Technological Course in R & A/C (SWC)</option>
	<option value="Diploma in Paper Technology">Diploma in Paper Technology</option>
	<option value="Diploma in Petrochemical Engineering">Diploma in Petrochemical Engineering</option>
	<option value="Diploma in Petrochemical Technology">Diploma in Petrochemical Technology</option>
	<option value="Diploma in Petroleum Engineering">Diploma in Petroleum Engineering</option>
	<option value="Diploma in Pharmacy (D.Pharm)">Diploma in Pharmacy (D.Pharm)</option>
	<option value="Diploma in Photography">Diploma in Photography</option>
	<option value="Diploma in Physical Education">Diploma in Physical Education</option>
	<option value="Diploma in Physiotherapy">Diploma in Physiotherapy</option>
	<option value="Diploma in Plastic Engineering">Diploma in Plastic Engineering</option>
	<option value="Diploma in Plastic Engineering (Sandwich)">Diploma in Plastic Engineering (Sandwich)</option>
	<option value="Diploma in Plastic Technology">Diploma in Plastic Technology</option>
	<option value="Diploma in Plastic Technology (Sandwich)">Diploma in Plastic Technology (Sandwich)</option>
	<option value="O Diploma in Polymer Technology">O Diploma in Polymer Technology</option>
	<option value="Diploma in Polymer Technology (Sandwich)">Diploma in Polymer Technology (Sandwich)</option>
	<option value="Diploma in Practical Nursing">Diploma in Practical Nursing</option>
	<option value="Diploma in Printing Technology">Diploma in Printing Technology</option>
	<option value="Diploma in Production Engineering">Diploma in Production Engineering</option>
	<option value="Diploma in Production Engineering (Sandwich)">Diploma in Production Engineering (Sandwich)</option>
	<option value="Diploma in Production Technology">Diploma in Production Technology</option>
	<option value="Diploma in Prosthetics and Orthotics Engineering">Diploma in Prosthetics and Orthotics Engineering</option>
	<option value="Diploma in Pulp and Paper Technology">Diploma in Pulp and Paper Technology</option>
	<option value="Diploma in Pulp and Paper Technology (Sandwich)">Diploma in Pulp and Paper Technology (Sandwich)</option>
	<option value="Diploma in Radio Diagnosis">Diploma in Radio Diagnosis</option>
	<option value="Diploma in Radiology Imaging Technology">Diploma in Radiology Imaging Technology</option>
	<option value="Diploma in Rail Transport and Management">Diploma in Rail Transport and Management</option>
	<option value="Diploma in Rail Transport and Management (DRTM)">Diploma in Rail Transport and Management (DRTM)</option>
	<option value="Diploma in Refrigeration and Air Conditioning">Diploma in Refrigeration and Air Conditioning</option>
	<option value="Diploma in Rubber Technology">Diploma in Rubber Technology</option>
	<option value="Diploma In Safety Engineering">Diploma In Safety Engineering</option>
	<option value="Diploma in Shuttleless Weaving">Diploma in Shuttleless Weaving</option>
	<option value="Diploma in Software Engineering">Diploma in Software Engineering</option>
	<option value="Diploma in Special Education">Diploma in Special Education</option>
	<option value="Diploma in Sugar Technology">Diploma in Sugar Technology</option>
	<option value="Diploma in Survey Engineering">Diploma in Survey Engineering</option>
	<option value="Diploma in Swimming">Diploma in Swimming</option>
	<option value="Diploma in Systerm Management">Diploma in Systerm Management</option>
	<option value="Diploma in Teacher Education">Diploma in Teacher Education</option>
	<option value="Diploma in Telecommunication Engineering">Diploma in Telecommunication Engineering</option>
	<option value="Diploma in Textile Design">Diploma in Textile Design</option>
	<option value="D Diploma in Textile Designing and Weaving">D Diploma in Textile Designing and Weaving</option>
	<option value="Diploma in Textile Engineeering">Diploma in Textile Engineeering</option>
	<option value="Diploma in Textile Manufacturing">Diploma in Textile Manufacturing</option>
	<option value="Diploma in Textile Marketing and Management">Diploma in Textile Marketing and Management</option>
	<option value="Diploma in Textile Processing">Diploma in Textile Processing</option>
	<option value="Diploma in Textile Processing (Sandwich)">Diploma in Textile Processing (Sandwich)</option>
	<option value="Diploma in Textile Technology">Diploma in Textile Technology</option>
	<option value="Diploma in Textile Technology (Knitting & Garment Technology)">Diploma in Textile Technology (Knitting & Garment Technology)</option>
	<option value="Diploma in Textile Technology (Knitting)">Diploma in Textile Technology (Knitting)</option>
	<option value="Diploma in Textile Technology (Man Made Fibre)">Diploma in Textile Technology (Man Made Fibre)</option>
	<option value="Diploma in Textile Technology (Sandwich)">Diploma in Textile Technology (Sandwich)</option>
	<option value="Diploma in Textronics">Diploma in Textronics</option>
	<option value="Diploma in Tool and Die Making">Diploma in Tool and Die Making</option>
	<option value="Diploma in Tool and Die Making (Sandwich)">Diploma in Tool and Die Making (Sandwich)</option>
	<option value="Diploma in Tool Design">Diploma in Tool Design</option>
	<option value="Diploma in Tool Engineering">Diploma in Tool Engineering</option>
	<option value="Diploma in Tourism and Travel Management">Diploma in Tourism and Travel Management</option>
	<option value="Diploma in Visual Communication">Diploma in Visual Communication</option>
	<option value="Diploma in Web And Graphic Designing">Diploma in Web And Graphic Designing</option>
	<option value="Diploma in X-ray Technology">Diploma in X-ray Technology</option>
	<option value="Doctor of Pharmacy (Pharm.D)">Doctor of Pharmacy (Pharm.D)</option>
	<option value="General Nursing Midwifery (G.N.M)">General Nursing Midwifery (G.N.M)</option>
	<option value="Gold appraiser">Gold appraiser</option>
	<option value="LTI AC Mechanic">LTI AC Mechanic</option>
	<option value="I.TI.">I.TI.</option>
	<option value="LTI Automobile Mechanic">LTI Automobile Mechanic</option>
	<option value="LTL Attendant Operator (Chemical Plant)">LTL Attendant Operator (Chemical Plant)</option>
	<option value="LTI. Carpenter">LTI. Carpenter</option>
	<option value="I.T.I. Computer Operator and Programming Assistant">I.T.I. Computer Operator and Programming Assistant</option>
	<option value="LTL Craftsman Food Production Vegetarian">LTL Craftsman Food Production Vegetarian</option>
	<option value="LTL Cutting and Sewing">LTL Cutting and Sewing</option>
	<option value="I.TI. Data Entry Operator">I.TI. Data Entry Operator</option>
	<option value="ITI. Desktop Publishing Operator">ITI. Desktop Publishing Operator</option>
	<option value="LTI Digital Photographer">LTI Digital Photographer</option>
	<option value="ITI. Draughtsman Civil">ITI. Draughtsman Civil</option>
	<option value="ITI. Draughtsman Mechanical">ITI. Draughtsman Mechanical</option>
	<option value="LTI. Electrician">LTI. Electrician</option>
	<option value="ITI. Electronics Mechanic">ITI. Electronics Mechanic</option>
	<option value="I.TI. Electroplater">I.TI. Electroplater</option>
	<option value="I.TI. Embroidery and Needle Work">I.TI. Embroidery and Needle Work</option>
	<option value="LTI. Fitter">LTI. Fitter</option>
	<option value="L.TI. Food Production Technology">L.TI. Food Production Technology</option>
	<option value="LTI Hospital House Keeping">LTI Hospital House Keeping</option>
	<option value="L.TI. Information Technology and Electronics System Maintenance">L.TI. Information Technology and Electronics System Maintenance</option>
	<option value="I.TI. Instrument Mechanic">I.TI. Instrument Mechanic</option>
	<option value="ITI. Instrument Mechanic (Chemical Plant)">ITI. Instrument Mechanic (Chemical Plant)</option>
	<option value="I.TI Leather Goods Maker">I.TI Leather Goods Maker</option>
	<option value="I.TI. Litho Offset Machine Minder">I.TI. Litho Offset Machine Minder</option>
	<option value="I.TI. Machinist">I.TI. Machinist</option>
	<option value="ITI Machinist Grinder">ITI Machinist Grinder</option>
	<option value="D LLL Manufacture of Footwear">D LLL Manufacture of Footwear</option>
	<option value="I.TI. Mechanic (Diesel)">I.TI. Mechanic (Diesel)</option>
	<option value="LTI. Mechanic (Machine Tool Maintenance)">LTI. Mechanic (Machine Tool Maintenance)</option>
	<option value="ITI. Mechanic (Motor Vehicle)">ITI. Mechanic (Motor Vehicle)</option>
	<option value="LTI. Mechanic (Radio and Television)">LTI. Mechanic (Radio and Television)</option>
	<option value="ITI. Mechanic Maintenance (Chemical Plant)">ITI. Mechanic Maintenance (Chemical Plant)</option>
	<option value="I.TI. Mechanic Refrigeration and Air Conditioner">I.TI. Mechanic Refrigeration and Air Conditioner</option>
	<option value="LTI Mechanical">LTI Mechanical</option>
	<option value="LTI. Mechatronics">LTI. Mechatronics</option>
	<option value="O ITI Moulder">O ITI Moulder</option>
	<option value="LTI. Old Age Care">LTI. Old Age Care</option>
	<option value="LTI. Pattern Maker">LTI. Pattern Maker</option>
	<option value="ITI Plastic Processing Operator">ITI Plastic Processing Operator</option>
	<option value="IT.I Plumber">IT.I Plumber</option>
	<option value="LTI. Pre/Preparatory School Management Assistant">LTI. Pre/Preparatory School Management Assistant</option>
	<option value="LTI Production and Manufacturing">LTI Production and Manufacturing</option>
	<option value="SLTI. Sheet Metal Worker">SLTI. Sheet Metal Worker</option>
	<option value="LTI. Tool and Die Maker (Dies & Moulds)">LTI. Tool and Die Maker (Dies & Moulds)</option>
	<option value="LTI Turner">LTI Turner</option>
	<option value="LTI. Welder (Gas and Electric)">LTI. Welder (Gas and Electric)</option>
	<option value="ICWA Institute of Cost and Works Accountants">ICWA Institute of Cost and Works Accountants</option>
	<option value="Illiterate">Illiterate</option>
	<option value="ITI">ITI</option>
	<option value="LL.B">LL.B</option>
	<option value="O M.A.">O M.A.</option>
	<option value="M.A. Astrology">M.A. Astrology</option>
	<option value="M.A. Civic Studies">M.A. Civic Studies</option>
	<option value="M.A. Development Studies">M.A. Development Studies</option>
	<option value="M.A. Economics">M.A. Economics</option>
	<option value="M.A. English Language and Linguistics">M.A. English Language and Linguistics</option>
	<option value="M.A. English Language and Literature">M.A. English Language and Literature</option>
	<option value="MA. English Literature">MA. English Literature</option>
	<option value="MA. French">MA. French</option>
	<option value="M.A. Hindi">M.A. Hindi</option>
	<option value="MA. Historical Studies">MA. Historical Studies</option>
	<option value="M.A. History">M.A. History</option>
	<option value="M.A. Human Rights">M.A. Human Rights</option>
	<option value="MA. Journalism">MA. Journalism</option>
	<option value="M.A. Kannada">M.A. Kannada</option>
	<option value="O MA. Linguistics (Applied and General)">O MA. Linguistics (Applied and General)</option>
	<option value="M.A. LLB">M.A. LLB</option>
	<option value="M.A. Mass Communication">M.A. Mass Communication</option>
	<option value="MA. Music">MA. Music</option>
	<option value="OMA. Philosophy">OMA. Philosophy</option>
	<option value="M.A. Physical Education">M.A. Physical Education</option>
	<option value="M.A. Police Administration">M.A. Police Administration</option>
	<option value="M.A. Political Science">M.A. Political Science</option>
	<option value="MA. Population Studies">MA. Population Studies</option>
	<option value="MA. Psychology">MA. Psychology</option>
	<option value="M.A. Public Administration">M.A. Public Administration</option>
	<option value="MA. Public Policy and Governance">MA. Public Policy and Governance</option>
	<option value="M.A. Rural Development">M.A. Rural Development</option>
	<option value="MA. Sanskrit">MA. Sanskrit</option>
	<option value="MA. Social Welfare Administration">MA. Social Welfare Administration</option>
	<option value="M.A. Social Work">M.A. Social Work</option>
	<option value="M.A. Sociology">M.A. Sociology</option>
	<option value="MA. Tamil Languages and Literature">MA. Tamil Languages and Literature</option>
	<option value="M.A. Tamil Literature">M.A. Tamil Literature</option>
	<option value="M.A. Tamil Literature and Culture">M.A. Tamil Literature and Culture</option>
	<option value="MA. Temple Management">MA. Temple Management</option>
	<option value="MA. Tourism and Travel Management">MA. Tourism and Travel Management</option>
	<option value="M.A. Yoga">M.A. Yoga</option>
	<option value="M.B.A. Banking and Finance">M.B.A. Banking and Finance</option>
	<option value="M.B.A. Banking and Insurance">M.B.A. Banking and Insurance</option>
	<option value="M.B.A. Environmental Management">M.B.A. Environmental Management</option>
	<option value="M.B.A. Financial Management">M.B.A. Financial Management</option>
	<option value="M.B.A. Hospital Administration">M.B.A. Hospital Administration</option>
	<option value="M.B.A. Hospital Management">M.B.A. Hospital Management</option>
	<option value="M.B.A. HR and Marketing">M.B.A. HR and Marketing</option>
	<option value="M.B.A. Human Resources Management">M.B.A. Human Resources Management</option>
	<option value="M.B.A. Logistics and Shipping Management">M.B.A. Logistics and Shipping Management</option>
	<option value="M.B.A. Master of Business Administration">M.B.A. Master of Business Administration</option>
	<option value="M.B.A. Tourism">M.B.A. Tourism</option>
	<option value="M.B.B.S">M.B.B.S</option>
	<option value="M.C.A. Master of Computer Application">M.C.A. Master of Computer Application</option>
	<option value="M.Ch. Endocrine Surgery">M.Ch. Endocrine Surgery</option>
	<option value="M.Ch. Paediatric Surgery">M.Ch. Paediatric Surgery</option>
	<option value="M.Com.">M.Com.</option>
	<option value="M.Com. Accounting and Finance">M.Com. Accounting and Finance</option>
	<option value="M.Com. Bank Management">M.Com. Bank Management</option>
	<option value="M.Com. Banking">M.Com. Banking</option>
	<option value="M.Com. Banking Technology">M.Com. Banking Technology</option>
	<option value="M.Com. Co-Operative Management">M.Com. Co-Operative Management</option>
	<option value="M.Com. Commerce">M.Com. Commerce</option>
	<option value="M.Com. Computer Application">M.Com. Computer Application</option>
	<option value="M.Com. Cooperative Management">M.Com. Cooperative Management</option>
	<option value="M.Com. Corporate Secretaryship">M.Com. Corporate Secretaryship</option>
	<option value="M.Com. Corporate Secretaryship with Computer Applications">M.Com. Corporate Secretaryship with Computer Applications</option>
	<option value="M.Com. E-Commerce">M.Com. E-Commerce</option>
	<option value="M.Com. Finance">M.Com. Finance</option>
	<option value="M.Com. Finance and Computer Applications">M.Com. Finance and Computer Applications</option>
	<option value="M.Com. Finance and Control">M.Com. Finance and Control</option>
	<option value="M.Com. Financial Management">M.Com. Financial Management</option>
	<option value="M.Com. Information Technology">M.Com. Information Technology</option>
	<option value="M.Com. International Business">M.Com. International Business</option>
	<option value="M.Com. Marketing">M.Com. Marketing</option>
	<option value="M.Com. Research Methodology in Commerce">M.Com. Research Methodology in Commerce</option>
	<option value="M.D in Tuberculosis and Respiratory Medicine">M.D in Tuberculosis and Respiratory Medicine</option>
	<option value="M.D.">M.D.</option>
	<option value="M.D. (Doctor of Medicine in Homeopathy)">M.D. (Doctor of Medicine in Homeopathy)</option>
	<option value="M.D. Anaesthesia">M.D. Anaesthesia</option>
	<option value="M.D. Anatomy">M.D. Anatomy</option>
	<option value="M.D. Anesthesiology">M.D. Anesthesiology</option>
	<option value="M.D. Biochemistry">M.D. Biochemistry</option>
	<option value="M.D. Chest and Tuberculosis">M.D. Chest and Tuberculosis</option>
	<option value="M.D.Community Medicine">M.D.Community Medicine</option>
	<option value="M.D. Dermatology">M.D. Dermatology</option>
	<option value="M.D. Dermatology, Venereology and Leprosy">M.D. Dermatology, Venereology and Leprosy</option>
	<option value="M.D. General Medicine">M.D. General Medicine</option>
	<option value="M.D. Homoeopathic (Materia Medica)">M.D. Homoeopathic (Materia Medica)</option>
	<option value="M.D. Immuno Haematology and Blood Transfusion">M.D. Immuno Haematology and Blood Transfusion</option>
	<option value="M.D. Obstetrics and Gynaecology">M.D. Obstetrics and Gynaecology</option>
	<option value="M.D. Paediatrics">M.D. Paediatrics</option>
	<option value="M.D. Pathology">M.D. Pathology</option>
	<option value="M.D. Pediatrics">M.D. Pediatrics</option>
	<option value="M.D. Pharmacology">M.D. Pharmacology</option>
	<option value="M.D. Physiology">M.D. Physiology</option>
	<option value="M.D. Psychiatry">M.D. Psychiatry</option>
	<option value="M.D. Pulmonary Medicine">M.D. Pulmonary Medicine</option>
	<option value="M.D. Radiodiagnosis">M.D. Radiodiagnosis</option>
	<option value="M.D. Radiotherapy">M.D. Radiotherapy</option>
	<option value="M.D. Respiratory Medicine">M.D. Respiratory Medicine</option>
	<option value="M.D. Siddha">M.D. Siddha</option>
	<option value="M.D. Tuberculosis and Chest Disease">M.D. Tuberculosis and Chest Disease</option>
	<option value="M.D. Yoga and Naturopathy">M.D. Yoga and Naturopathy</option>
	<option value="M.D.S. Community Dentistry">M.D.S. Community Dentistry</option>
	<option value="M.D.S. Conservative Dentistry and Endodontics">M.D.S. Conservative Dentistry and Endodontics</option>
	<option value="M.DS. Oral and Maxillofacial Surgery">M.DS. Oral and Maxillofacial Surgery</option>
	<option value="M.D.S. Oral Medicine and Radiology">M.D.S. Oral Medicine and Radiology</option>
	<option value="M.D.S. Orthodontics">M.D.S. Orthodontics</option>
	<option value="M.D.S. Orthodontics and Dentofacial Orthopedics">M.D.S. Orthodontics and Dentofacial Orthopedics</option>
	<option value="M.D.S. Paedodontics and Preventive Densitry">M.D.S. Paedodontics and Preventive Densitry</option>
	<option value="M.E. Aeronautical Engineering">M.E. Aeronautical Engineering</option>
	<option value="M.E. Aerospace Technology">M.E. Aerospace Technology</option>
	<option value="M.E. Agricultural Engineering">M.E. Agricultural Engineering</option>
	<option value="M.E. Apparel Technology">M.E. Apparel Technology</option>
	<option value="M.E. Applied Electronics">M.E. Applied Electronics</option>
	<option value="M.E. Automation and Robotics">M.E. Automation and Robotics</option>
	<option value="M.E. Automobile Engineering">M.E. Automobile Engineering</option>
	<option value="M.E. Automotive Engineering">M.E. Automotive Engineering</option>
	<option value="M.E. Avionics">M.E. Avionics</option>
	<option value="M.E. Biomedical Engineering">M.E. Biomedical Engineering</option>
	<option value="M.E. CAD/CAM">M.E. CAD/CAM</option>
	<option value="M.E. Chemical Engineering">M.E. Chemical Engineering</option>
	<option value="M.E. Civil Engineering">M.E. Civil Engineering</option>
	<option value="M.E. Communication Engineering">M.E. Communication Engineering</option>
	<option value="M.E. Communication Systems">M.E. Communication Systems</option>
	<option value="M.E. Computer and Communication Engineering">M.E. Computer and Communication Engineering</option>
	<option value="M.E. Computer Integrated Manufacturing">M.E. Computer Integrated Manufacturing</option>
	<option value="M.E. Computer Science and Engineering">M.E. Computer Science and Engineering</option>
	<option value="M.E. Computer Science and Information Security">M.E. Computer Science and Information Security</option>
	<option value="M.E. Construction Engineering">M.E. Construction Engineering</option>
	<option value="M.E. Construction Engineering and Management">M.E. Construction Engineering and Management</option>
	<option value="M.E. Construction Management">M.E. Construction Management</option>
	<option value="M.E. Control and Instrumentation Engineering">M.E. Control and Instrumentation Engineering</option>
	<option value="M.E. Control Systems">M.E. Control Systems</option>
	<option value="M.E. Design Engineering">M.E. Design Engineering</option>
	<option value="M.E. Electrical and Electronics Engineering">M.E. Electrical and Electronics Engineering</option>
	<option value="M.E. Electrical Drives and Embedded Controls">M.E. Electrical Drives and Embedded Controls</option>
	<option value="M.E. Electrical Machines">M.E. Electrical Machines</option>
	<option value="M.E. Electronics and Communication Engineering">M.E. Electronics and Communication Engineering</option>
	<option value="M.E. Environmental Management">M.E. Environmental Management</option>
	<option value="M.E. Genetic Engineering">M.E. Genetic Engineering</option>
	<option value="M.E. Heat Power">M.E. Heat Power</option>
	<option value="M.E. High Voltage Engineering">M.E. High Voltage Engineering</option>
	<option value="M.E. Industrial and Production Engineering">M.E. Industrial and Production Engineering</option>
	<option value="M.E. Industrial Engineering">M.E. Industrial Engineering</option>
	<option value="M.E. Industrial Engineering and Management">M.E. Industrial Engineering and Management</option>
	<option value="M.E. Industrial Metallurgy">M.E. Industrial Metallurgy</option>
	<option value="M.E. Industrial Safety Engineering">M.E. Industrial Safety Engineering</option>
	<option value="M.E. Infrastructure Engineering">M.E. Infrastructure Engineering</option>
	<option value="M.E. Infrastructure Engineering and Managerment">M.E. Infrastructure Engineering and Managerment</option>
	<option value="M.E. Instrumentation and Control Engineering">M.E. Instrumentation and Control Engineering</option>
	<option value="M.E. Instrumentation Engineering">M.E. Instrumentation Engineering</option>
	<option value="M.E. Integrated Water Resources Management">M.E. Integrated Water Resources Management</option>
	<option value="M.E. Internal Combustion Engineering">M.E. Internal Combustion Engineering</option>
	<option value="ME. Irrigation Water Management">ME. Irrigation Water Management</option>
	<option value="M.E. Manufacturing Engineering">M.E. Manufacturing Engineering</option>
	<option value="M.E. Manufacturing System Management">M.E. Manufacturing System Management</option>
	<option value="M.E. Mechanical and Automation Engineering">M.E. Mechanical and Automation Engineering</option>
	<option value="M.E. Mechanical Engineering">M.E. Mechanical Engineering</option>
	<option value="M.E. Mechatronics">M.E. Mechatronics</option>
	<option value="M.E. Medical Electronics Engineering">M.E. Medical Electronics Engineering</option>
	<option value="M.E. Multimedia Technology">M.E. Multimedia Technology</option>
	<option value="M.E. Petroleum Engineering">M.E. Petroleum Engineering</option>
	<option value="M.E. Physical Metallurgical Engineering">M.E. Physical Metallurgical Engineering</option>
	<option value="M.E. Power Electronics">M.E. Power Electronics</option>
	<option value="M.E. Power Electronics and Drives">M.E. Power Electronics and Drives</option>
	<option value="M.E. Power Energy">M.E. Power Energy</option>
	<option value="M.E. Power Engineering and Management">M.E. Power Engineering and Management</option>
	<option value="M.E. Power Systems and Drives">M.E. Power Systems and Drives</option>
	<option value="M.E. Power Systems Engineering">M.E. Power Systems Engineering</option>
	<option value="M.E. Printing and Packaging Technology">M.E. Printing and Packaging Technology</option>
	<option value="M.E. Product Design and Development">M.E. Product Design and Development</option>
	<option value="M.E. Production Engineering">M.E. Production Engineering</option>
	<option value="M.E. Quality Engineering and Management">M.E. Quality Engineering and Management</option>
	<option value="M.E. Structural Engineering and Construction">M.E. Structural Engineering and Construction</option>
	<option value="M.E. Textile Engineering">M.E. Textile Engineering</option>
	<option value="M.E. Thermal Engineering">M.E. Thermal Engineering</option>
	<option value="M.E. Virtual Prototyping and Digital Manufacturing">M.E. Virtual Prototyping and Digital Manufacturing</option>
	<option value="M.E. VLSI Design">M.E. VLSI Design</option>
	<option value="M.E. VLSI Design and Embedded Systerms">M.E. VLSI Design and Embedded Systerms</option>
	<option value="M.E. Water Resources and Irrigation Engineering">M.E. Water Resources and Irrigation Engineering</option>
	<option value="M.E. Welding Techrnology">M.E. Welding Techrnology</option>
	<option value="M.E. Wireless Communication">M.E. Wireless Communication</option>
	<option value="M.E.M. Masters in Engineering Management">M.E.M. Masters in Engineering Management</option>
	<option value="M.Ed. Botany">M.Ed. Botany</option>
	<option value="M.Ed. Chemistry">M.Ed. Chemistry</option>
	<option value="M.Ed. Commerce">M.Ed. Commerce</option>
	<option value="M.Ed. Computer Science">M.Ed. Computer Science</option>
	<option value="M.Ed. Economics">M.Ed. Economics</option>
	<option value="M.Ed. English">M.Ed. English</option>
	<option value="M.Ed. Geography">M.Ed. Geography</option>
	<option value="M.Ed. History">M.Ed. History</option>
	<option value="M.Ed. Master of Education">M.Ed. Master of Education</option>
	<option value="M.Ed. Mathematics">M.Ed. Mathematics</option>
	<option value="M.Ed. Physics">M.Ed. Physics</option>
	<option value="M.Ed. Political Science">M.Ed. Political Science</option>
	<option value="M.Ed. Psychology">M.Ed. Psychology</option>
	<option value="M.Ed. Sociology">M.Ed. Sociology</option>
	<option value="M.Ed. Tamil">M.Ed. Tamil</option>
	<option value="M.Ed. Urdu">M.Ed. Urdu</option>
	<option value="M.Ed. Zoology">M.Ed. Zoology</option>
	<option value="M.F. Sc. Master of Fisheries Science">M.F. Sc. Master of Fisheries Science</option>
	<option value="M.FA. Master of Fine Arts">M.FA. Master of Fine Arts</option>
	<option value="M.ILB. Master of International Business">M.ILB. Master of International Business</option>
	<option value="M.L/LL.M. (Master of Law / Master of Legislative Law)">M.L/LL.M. (Master of Law / Master of Legislative Law)</option>
	<option value="M.LISC. Master of Library Information Science">M.LISC. Master of Library Information Science</option>
	<option value="M.LM. Master of Labour Management">M.LM. Master of Labour Management</option>
	<option value="M.PEd. Master of Physical Education">M.PEd. Master of Physical Education</option>
	<option value="MPH. Master of Public Health">MPH. Master of Public Health</option>
	<option value="M.PT. Cardio-Pulmonary Physiotherapy">M.PT. Cardio-Pulmonary Physiotherapy</option>
	<option value="M.PT. Cardiorespiratory">M.PT. Cardiorespiratory</option>
	<option value="M.PT. Cardiovascular and Pulmonary Specialties">M.PT. Cardiovascular and Pulmonary Specialties</option>
	<option value="M.PT. Community Physiotherapy">M.PT. Community Physiotherapy</option>
	<option value="M.PT. Master of Physiotherapy">M.PT. Master of Physiotherapy</option>
	<option value="M.PT. Neurology">M.PT. Neurology</option>
	<option value="M.PT. Orthopaedics">M.PT. Orthopaedics</option>
	<option value="M.PT. Paediatrics">M.PT. Paediatrics</option>
	<option value="M.PT. Sports Physiothera py">M.PT. Sports Physiothera py</option>
	<option value="M.Pharm. Pharmaceutical Analysis">M.Pharm. Pharmaceutical Analysis</option>
	<option value="M.Pharm. Pharmaceutical Biotechnology">M.Pharm. Pharmaceutical Biotechnology</option>
	<option value="M.Pharm. Pharmaceutical Chemistry">M.Pharm. Pharmaceutical Chemistry</option>
	<option value="M.Pharm. Pharmaceutics">M.Pharm. Pharmaceutics</option>
	<option value="M.Pharm. Pharmacognosy">M.Pharm. Pharmacognosy</option>
	<option value="M.Pharm. Pharmacology">M.Pharm. Pharmacology</option>
	<option value="M.Pharm. Pharmacy Practice">M.Pharm. Pharmacy Practice</option>
	<option value="M.Pharm. Phytopharmacy and Phytomedicine">M.Pharm. Phytopharmacy and Phytomedicine</option>
	<option value="M.Pharmacy">M.Pharmacy</option>
	<option value="MPhil.">MPhil.</option>
	<option value="M.Plan">M.Plan</option>
	<option value="M.S">M.S</option>
	<option value="M.S. Accounting and Finance">M.S. Accounting and Finance</option>
	<option value="M.S. Anatomy">M.S. Anatomy</option>
	<option value="M.S. Automotive Engineering">M.S. Automotive Engineering</option>
	<option value="M.S. Computer Science">M.S. Computer Science</option>
	<option value="M.S. Data Science">M.S. Data Science</option>
	<option value="M.S. Engineering">M.S. Engineering</option>
	<option value="M.S. ENT">M.S. ENT</option>
	<option value="M.S. General Surgery">M.S. General Surgery</option>
	<option value="M.S. Industrial Engineering">M.S. Industrial Engineering</option>
	<option value="M.S. Information Technology">M.S. Information Technology</option>
	<option value="M.S. Obstetrics and Gynaecology">M.S. Obstetrics and Gynaecology</option>
	<option value="M.S. Ophthalmology">M.S. Ophthalmology</option>
	<option value="M.S. Orthopaedics">M.S. Orthopaedics</option>
	<option value="M.Sc. Aviation">M.Sc. Aviation</option>
	<option value="M.SC. (Hons.) Microbiology">M.SC. (Hons.) Microbiology</option>
	<option value="M.Sc. (Hons.) Physics">M.Sc. (Hons.) Physics</option>
	<option value="M.Sc. (Hons.) Zoology">M.Sc. (Hons.) Zoology</option>
	<option value="M.Sc. Actuarial Science">M.Sc. Actuarial Science</option>
	<option value="M.Sc. Agricultural Microbiology">M.Sc. Agricultural Microbiology</option>
	<option value="M.Sc. Agriculture">M.Sc. Agriculture</option>
	<option value="M.SC. Agronomy">M.SC. Agronomy</option>
	<option value="M.Sc. Analytical Chemistry">M.Sc. Analytical Chemistry</option>
	<option value="M.Sc. Anatomy">M.Sc. Anatomy</option>
	<option value="M.Sc. Animal Biotechnology">M.Sc. Animal Biotechnology</option>
	<option value="M.Sc. Apparel Fashion Designing">M.Sc. Apparel Fashion Designing</option>
	<option value="M.Sc. Applicable Mathematics">M.Sc. Applicable Mathematics</option>
	<option value="M.Sc. Applied Electronics">M.Sc. Applied Electronics</option>
	<option value="M.Sc. Applied Geology">M.Sc. Applied Geology</option>
	<option value="M.Sc. Applied Mathematics">M.Sc. Applied Mathematics</option>
	<option value="M.Sc. Applied Microbiology">M.Sc. Applied Microbiology</option>
	<option value="M.Sc. Audiologist">M.Sc. Audiologist</option>
	<option value="M.Sc. Automobile Engineering">M.Sc. Automobile Engineering</option>
	<option value="M.Sc. B.Ed">M.Sc. B.Ed</option>
	<option value="M.Sc. Biochemistry">M.Sc. Biochemistry</option>
	<option value="M.Sc. Bioinformatics">M.Sc. Bioinformatics</option>
	<option value="M.Sc. Biomedical">M.Sc. Biomedical</option>
	<option value="M.Sc. Biomedical Genetics">M.Sc. Biomedical Genetics</option>
	<option value="M.Sc. Biomedical Instrumentation">M.Sc. Biomedical Instrumentation</option>
	<option value="M.Sc. Biotechnology">M.Sc. Biotechnology</option>
	<option value="M.SC. Botany">M.SC. Botany</option>
	<option value="M.Sc. Cardiovascular Tech">M.Sc. Cardiovascular Tech</option>
	<option value="M.SC. Catering Science and Hotel Management">M.SC. Catering Science and Hotel Management</option>
	<option value="M.Sc. Chemistry">M.Sc. Chemistry</option>
	<option value="M.Sc. Child Health Nursing">M.Sc. Child Health Nursing</option>
	<option value="M.Sc. Computational Biology">M.Sc. Computational Biology</option>
	<option value="M.Sc. Computer Application">M.Sc. Computer Application</option>
	<option value="M.Sc. Computer Communication">M.Sc. Computer Communication</option>
	<option value="M.Sc. Computer Science">M.Sc. Computer Science</option>
	<option value="M.Sc. Computer Science and Information Technology">M.Sc. Computer Science and Information Technology</option>
	<option value="M.Sc. Computer Science and Technology">M.Sc. Computer Science and Technology</option>
	<option value="M.Sc. Computer Technology">M.Sc. Computer Technology</option>
	<option value="M.Sc. Costume Design and Fashion Technology">M.Sc. Costume Design and Fashion Technology</option>
	<option value="M.Sc. Counselling Psychology">M.Sc. Counselling Psychology</option>
	<option value="M.Sc. Criminology and Criminal Justice">M.Sc. Criminology and Criminal Justice</option>
	<option value="M.Sc. Cyber Technology">M.Sc. Cyber Technology</option>
	<option value="M.Sc. Dairy Science">M.Sc. Dairy Science</option>
	<option value="M.Sc. Data Analytics">M.Sc. Data Analytics</option>
	<option value="M.Sc. Defence and Strategic Studies"></option>
	<option value="M.Sc. Development Management">M.Sc. Development Management</option>
	<option value="M.SC. E-commerce and Web Design">M.SC. E-commerce and Web Design</option>
	<option value="M.SC. Electronic Media">M.SC. Electronic Media</option>
	<option value="M.Sc. Electronic Science">M.Sc. Electronic Science</option>
	<option value="M.Sc. Electronics">M.Sc. Electronics</option>
	<option value="M.Sc. Electronics and Communication">M.Sc. Electronics and Communication</option>
	<option value="M.Sc. Electronics and Instrumentation">M.Sc. Electronics and Instrumentation</option>
	<option value="M.Sc. Entomology Extension">M.Sc. Entomology Extension</option>
	<option value="M.Sc. Environmental Science">M.Sc. Environmental Science</option>
	<option value="M.Sc. Environmental Science and Technology">M.Sc. Environmental Science and Technology</option>
	<option value="M.Sc. Fabric and Apparel Science">M.Sc. Fabric and Apparel Science</option>
	<option value="M.Sc. Fashion Designing and Garment Construction">M.Sc. Fashion Designing and Garment Construction</option>
	<option value="M.Sc. Fashion Technology">M.Sc. Fashion Technology</option>
	<option value="M.Sc. Fisheries">M.Sc. Fisheries</option>
	<option value="M.Sc. Food and Nutrition">M.Sc. Food and Nutrition</option>
	<option value="M.Sc. Food Chemistry and Food Processing">M.Sc. Food Chemistry and Food Processing</option>
	<option value="M.Sc. Food Processing">M.Sc. Food Processing</option>
	<option value="M.Sc. Food Science and Technology">M.Sc. Food Science and Technology</option>
	<option value="M.Sc. Food Service Management and Dietetics">M.Sc. Food Service Management and Dietetics</option>
	<option value="M.Sc. Food Technology">M.Sc. Food Technology</option>
	<option value="M.Sc. Forensic DNA and Serology">M.Sc. Forensic DNA and Serology</option>
	<option value="M.Sc. Forensic Science">M.Sc. Forensic Science</option>
	<option value="M.Sc. Forestry">M.Sc. Forestry</option>
	<option value="M.Sc. Geography">M.Sc. Geography</option>
	<option value="M.Sc. Geoinformatics">M.Sc. Geoinformatics</option>
	<option value="M.SC. Geology">M.SC. Geology</option>
	<option value="M.Sc. Health and Yoga Therapy">M.Sc. Health and Yoga Therapy</option>
	<option value="M.Sc. Health Care and Hospital Management">M.Sc. Health Care and Hospital Management</option>
	<option value="M.Sc. Home Science">M.Sc. Home Science</option>
	<option value="M.Sc. Horticulture">M.Sc. Horticulture</option>
	<option value="M.Sc. Hotel Management">M.Sc. Hotel Management</option>
	<option value="M.Sc. Human Genetics and Molecular Biology">M.Sc. Human Genetics and Molecular Biology</option>
	<option value="M.Sc. Human Nutrition">M.Sc. Human Nutrition</option>
	<option value="M.Sc. Industrial Biotechnology">M.Sc. Industrial Biotechnology</option>
	<option value="M.Sc. Industrial Chemistry">M.Sc. Industrial Chemistry</option>
	<option value="M.Sc. Industrial Electronics">M.Sc. Industrial Electronics</option>
	<option value="MSc. Industrial Microbiology">MSc. Industrial Microbiology</option>
	<option value="M.Sc. Information Science">M.Sc. Information Science</option>
	<option value="M.Sc. Information System Management">M.Sc. Information System Management</option>
	<option value="M.Sc. Information Technology">M.Sc. Information Technology</option>
	<option value="M.Sc. Information Technology and E-Commerce">M.Sc. Information Technology and E-Commerce</option>
	<option value="M.SC. Material sciences">M.SC. Material sciences</option>
	<option value="M.Sc. Mathematical Economics">M.Sc. Mathematical Economics</option>
	<option value="M.Sc. Mathematics">M.Sc. Mathematics</option>
	<option value="M.Sc. Mathematics and Computer Applications">M.Sc. Mathematics and Computer Applications</option>
	<option value="M.Sc. Media and Communication">M.Sc. Media and Communication</option>
	<option value="M.SC. Medical Biochemistry">M.SC. Medical Biochemistry</option>
	<option value="M.Sc. Medical Laboratory Technology">M.Sc. Medical Laboratory Technology</option>
	<option value="M.Sc. Medical Microbiology">M.Sc. Medical Microbiology</option>
	<option value="M.Sc. Medical Physics">M.Sc. Medical Physics</option>
	<option value="M.Sc. Medical Surgical Nursing">M.Sc. Medical Surgical Nursing</option>
	<option value="M.Sc. Microbial Biotechnology">M.Sc. Microbial Biotechnology</option>
	<option value="M.Sc. Microbiology">M.Sc. Microbiology</option>
	<option value="M.Sc. Multimedia and Animation">M.Sc. Multimedia and Animation</option>
	<option value="M.Sc. Nanoscience">M.Sc. Nanoscience</option>
	<option value="M.Sc. Nanoscience and Nanotechnology">M.Sc. Nanoscience and Nanotechnology</option>
	<option value="M.Sc. Nautical Science">M.Sc. Nautical Science</option>
	<option value="M.Sc. Neuroscience">M.Sc. Neuroscience</option>
	<option value="M.Sc. Nuclear Medicine Technology">M.Sc. Nuclear Medicine Technology</option>
	<option value="M.Sc. Nursing">M.Sc. Nursing</option>
	<option value="M.Sc. Nutrition and Dietetics">M.Sc. Nutrition and Dietetics</option>
	<option value="M.Sc. Nutrition and Food Science">M.Sc. Nutrition and Food Science</option>
	<option value="M.SC. Nutrition and Food Technology">M.SC. Nutrition and Food Technology</option>
	<option value="M.Sc. Optometry">M.Sc. Optometry</option>
	<option value="M.Sc. Organic Chemistry">M.Sc. Organic Chemistry</option>
	<option value="M.Sc. Physical Chemistry">M.Sc. Physical Chemistry</option>
	<option value="M.Sc. Physical Education">M.Sc. Physical Education</option>
	<option value="M.Sc. Physics">M.Sc. Physics</option>
	<option value="M.Sc. Plant Biology and Biotechnology">M.Sc. Plant Biology and Biotechnology</option>
	<option value="M.Sc. Psychiatric Nursing">M.Sc. Psychiatric Nursing</option>
	<option value="M.Sc. Psychology">M.Sc. Psychology</option>
	<option value="M.Sc. Radiology and Imaging Technology">M.Sc. Radiology and Imaging Technology</option>
	<option value="M.Sc. Regenerative Medicine">M.Sc. Regenerative Medicine</option>
	<option value="M.Sc. Renewable Energy Engineering and Managemer">M.Sc. Renewable Energy Engineering and Managemer</option>
	<option value="M.SC. Seed Science and Technology">M.SC. Seed Science and Technology</option>
	<option value="M.Sc. Software Engineering">M.Sc. Software Engineering</option>
	<option value="M.Sc. Software Science">M.Sc. Software Science</option>
	<option value="M.Sc. Software Systems">M.Sc. Software Systems</option>
	<option value="M.Sc. Software Technology">M.Sc. Software Technology</option>
	<option value="M.SC. Statistics">M.SC. Statistics</option>
	<option value="M.Sc. Statistics with Computer Applications">M.Sc. Statistics with Computer Applications</option>
	<option value="M.Sc. Telecommunication">M.Sc. Telecommunication</option>
	<option value="M.Sc. Textile and Fashion Designing">M.Sc. Textile and Fashion Designing</option>
	<option value="M.Sc. Textile and Fashion Technology">M.Sc. Textile and Fashion Technology</option>
	<option value="M.Sc. Tourism Administration">M.Sc. Tourism Administration</option>
	<option value="M.Sc. Tourism and Hospitality Management">M.Sc. Tourism and Hospitality Management</option>
	<option value="M.Sc. Toxicology">M.Sc. Toxicology</option>
	<option value="M.Sc. Visual Communication">M.Sc. Visual Communication</option>
	<option value="M.Sc. Wildlife">M.Sc. Wildlife</option>
	<option value="M.SC. Wildlife Biology">M.SC. Wildlife Biology</option>
	<option value="M.Sc. Yoga">M.Sc. Yoga</option>
	<option value="M.Tech. Automobile Engineering">M.Tech. Automobile Engineering</option>
	<option value="M.Tech. Aviation Technology">M.Tech. Aviation Technology</option>
	<option value="M.Tech. Bioinformatics">M.Tech. Bioinformatics</option>
	<option value="M.Tech. Biomedical Engineering">M.Tech. Biomedical Engineering</option>
	<option value="M.Tech. Biomedical Instrumentation">M.Tech. Biomedical Instrumentation</option>
	<option value="M.Tech. Biomedical Signal Processing and Instrumentation">M.Tech. Biomedical Signal Processing and Instrumentation</option>
	<option value="M.Tech. Biotechnology">M.Tech. Biotechnology</option>
	<option value="M.Tech. Ceramic Engineering">M.Tech. Ceramic Engineering</option>
	<option value="M.Tech. Chemical Engineering">M.Tech. Chemical Engineering</option>
	<option value="M.Tech. Chemical Technology">M.Tech. Chemical Technology</option>
	<option value="M.Tech. Coastal Management">M.Tech. Coastal Management</option>
	<option value="M.Tech. Communication Systems">M.Tech. Communication Systems</option>
	<option value="M.Tech. Computer Aided Structural Engineering">M.Tech. Computer Aided Structural Engineering</option>
	<option value="M.Tech. Construction Engineering and Management">M.Tech. Construction Engineering and Management</option>
	<option value="M.Tech. Construction Technology">M.Tech. Construction Technology</option>
	<option value="M.Tech. Electro-Chemical Engineering">M.Tech. Electro-Chemical Engineering</option>
	<option value="M.Tech. Electronics And Electrical Engineering">M.Tech. Electronics And Electrical Engineering</option>
	<option value="M.Tech. Embedded engineering">M.Tech. Embedded engineering</option>
	<option value="M.Tech. Energy and Environmental Engineering">M.Tech. Energy and Environmental Engineering</option>
	<option value="M.Tech. Environmental Engineering">M.Tech. Environmental Engineering</option>
	<option value="M.Tech. Farm Power and Machinery">M.Tech. Farm Power and Machinery</option>
	<option value="M.Tech. Fashion Technology">M.Tech. Fashion Technology</option>
	<option value="M.Tech. Food Process Engineering">M.Tech. Food Process Engineering</option>
	<option value="M.Tech. Food Technology">M.Tech. Food Technology</option>
	<option value="M.Tech. Footwear Science and Engineering">M.Tech. Footwear Science and Engineering</option>
	<option value="M.Tech. Genetic Engineering">M.Tech. Genetic Engineering</option>
	<option value="M.Tech. Geo Informatics">M.Tech. Geo Informatics</option>
	<option value="M.Tech. Industrial Biotechnology">M.Tech. Industrial Biotechnology</option>
	<option value="M.Tech. Industrial Safety and Hazard Management">M.Tech. Industrial Safety and Hazard Management</option>
	<option value="M.Tech. Information Technology">M.Tech. Information Technology</option>
	<option value="M.Tech. Laser and Electro Optical Engineering">M.Tech. Laser and Electro Optical Engineering</option>
	<option value="M.Tech. Leather Technology">M.Tech. Leather Technology</option>
	<option value="M.Tech. Manufacturing Technology">M.Tech. Manufacturing Technology</option>
	<option value="M.Tech. Materials Science and Engineering">M.Tech. Materials Science and Engineering</option>
	<option value="M.Tech. Mechatronics">M.Tech. Mechatronics</option>
	<option value="M.Tech. Metallurgical and Materials Engineering">M.Tech. Metallurgical and Materials Engineering</option>
	<option value="M.Tech. NanoScience and Technology">M.Tech. NanoScience and Technology</option>
	<option value="M.Tech. Nanotechnology">M.Tech. Nanotechnology</option>
	<option value="M.Tech. Ocean Engineering and Naval Architecture">M.Tech. Ocean Engineering and Naval Architecture</option>
	<option value="M.Tech. Petrochemical Technology">M.Tech. Petrochemical Technology</option>
	<option value="M.Tech. Petroleum Engineering">M.Tech. Petroleum Engineering</option>
	<option value="M.Tech. Petroleum Refining and Petro Chemicals">M.Tech. Petroleum Refining and Petro Chemicals</option>
	<option value="M.Tech. Pharmaceutical Technology">M.Tech. Pharmaceutical Technology</option>
	<option value="M.Tech. Plastics Technology">M.Tech. Plastics Technology</option>
	<option value="M.Tech. Polymer and Nanotechnology">M.Tech. Polymer and Nanotechnology</option>
	<option value="M.Tech. Polymer Science">M.Tech. Polymer Science</option>
	<option value="M.Tech. Polymer Technology">M.Tech. Polymer Technology</option>
	<option value="M.Tech. Power Engineering">M.Tech. Power Engineering</option>
	<option value="M.Tech. Quality Management">M.Tech. Quality Management</option>
	<option value="M.Tech. Remote Sernsing">M.Tech. Remote Sernsing</option>
	<option value="M.Tech. Renewable Energy">M.Tech. Renewable Energy</option>
	<option value="M.Tech. Robotics Engineering">M.Tech. Robotics Engineering</option>
	<option value="M.Tech. Rubber and Plastic Technology Engineering">M.Tech. Rubber and Plastic Technology Engineering</option>
	<option value="M.Tech. Rubber Technology">M.Tech. Rubber Technology</option>
	<option value="M.Tech. Software Engineering">M.Tech. Software Engineering</option>
	<option value="M.Tech. Structural Engineering">M.Tech. Structural Engineering</option>
	<option value="M.Tech. Technology Management">M.Tech. Technology Management</option>
	<option value="M.Tech. Textile Technology">M.Tech. Textile Technology</option>
	<option value="M.Tech. Water Resource Engineering">M.Tech. Water Resource Engineering</option>
	<option value="M.Tech. Web and Mobile Technology">M.Tech. Web and Mobile Technology</option>
	<option value="M.V.Sc.">M.V.Sc.</option>
	<option value="M.V.Sc. Animal Nutrition">M.V.Sc. Animal Nutrition</option>
	<option value="M.Voc. Digital Journalism">M.Voc. Digital Journalism</option>
	<option value="M.Voc.(Animation and VEX)">M.Voc.(Animation and VEX)</option>
	<option value="Master Diploma In Computer Application (M.D.C.A)">Master Diploma In Computer Application (M.D.C.A)</option>
	<option value="Master in Audiology and Speech- Language Pathology [MASLP]">Master in Audiology and Speech- Language Pathology [MASLP]</option>
	<option value="Master of Physical Education">Master of Physical Education</option>
	<option value="Master of Science">Master of Science</option>
	<option value="MBA">MBA</option>
	<option value="MD alternative medicine">MD alternative medicine</option>
	<p>Others</p>
	<option value="P.G. Diploma in Medical Radio Diagnosis">P.G. Diploma in Medical Radio Diagnosis</option>
	<option value="PG Diploma in Artificial Intelligence">PG Diploma in Artificial Intelligence</option>
	<option value="PGDCA">PGDCA</option>
	<option value="Ph.D. Doctor of Philosophy">Ph.D. Doctor of Philosophy</option>
	<option value="Ph.D. Doctor of Psychology">Ph.D. Doctor of Psychology</option>
	<option value="Post Diploma in Plastic Mould Design">Post Diploma in Plastic Mould Design</option>
	<option value="Post Graduate Diploma in Animation Technology (PGDAT)">Post Graduate Diploma in Animation Technology (PGDAT)</option>
	<option value="Post Graduate Diploma in Special Education">Post Graduate Diploma in Special Education</option>
	<option value="Ration Officer">Ration Officer</option>
	<option value="(staff nurse)">(staff nurse)</option>

</select>
			</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6 mt-3">
				<label class="text-dark"><b>உத்தியோகம்</b></label>
				<div class="mt-2">
				<input type="text" class="form-control" value="<?php echo "$work";?>" name="work" >
			</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6 mt-3">
				<label class="text-dark"><b>சம்பளம்</b></label>
				<div class="mt-2">
				<input type="text" class="form-control" value="<?php echo "$salary";?>" name="salary">
			</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6 mt-3">
				<label class="text-dark"><b>நிறம்</b></label>
				<div class="mt-2">
				<!-- <input type="text" class="form-control" value="<?php echo "$color";?>" name="color" > -->
				<select name="color" class="form-select" id="">
				<option value="<?php echo "$color";?>">-- <?php echo "$color";?> --</option>

					<option value="கருப்பு">கருப்பு</option>
					<option value="மாநிறம்">மாநிறம்</option>
					<option value="சிவப்பு">சிவப்பு</option>

				</select>
			</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6 mt-3">
				<label class="text-dark"><b>திருமணமான நிலை</b></label>
				<div class="mt-2">
				<!-- <input type="text" class="form-control" value="<?php echo "$color";?>" name="color" > -->
				<!-- <select name="married_status" class="form-select" id="">
				<option value="<?php echo "$married_status";?>">-- <?php echo "$married_status";?> --</option>

					<option value="never_married">Never Married</option>
					<option value="widowed">Widowed</option>
					<option value="divorced">Divorced</option>
					<option value="awaiting_divorced">Awaiting Divorced</option>

				</select> -->
				<input type="text" class="form-control"  value="<?php echo "$married_status";?>" name="married_status">

			</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6 mt-3">
				<label class="text-dark"><b>உயரம்</b></label>
				<div class="mt-2">
				<!-- <input type="text" class="form-control" value="<?php echo "$height";?>" name="height" > -->
				<select name="height" class="form-select" id="" required>
				<option value="<?php echo "$height";?>">-- <?php echo "$height";?> --</option>

					<option value="4ft 6in/137 cms">4ft 6in/ 137 cms</option>
					<option value="4ft 7in/139 cms">4ft 7in/ 139 cms</option>
					<option value="4ft 8in/142 cms">4ft 8in/ 142 cms</option>
					<option value="4ft 9in/144 cms">4ft 9in/ 144 cms</option>
					<option value="4ft 10in/144 cms">4ft 10in/ 147 cms</option>
					<option value="4ft 11in/144 cms">4ft 11in/ 149 cms</option>
					<option value="5ft/ 152 cms">5ft/ 152 cms</option>
					<option value="5ft 1in/ 152 cms">5ft 1in/ 154 cms</option>
					<option value="5ft 2in/ 152 cms">5ft 2in/ 157 cms</option>
					<option value="5ft 3in/ 152 cms">5ft 3in/ 160 cms</option>
					<option value="5ft 4in/ 152 cms">5ft 4in/ 162 cms</option>
					<option value="5ft 5in/ 152 cms">5ft 5in/ 165 cms</option>
					<option value="5ft 6in/ 152 cms">5ft 6in/ 167 cms</option>
					<option value="5ft 7in/ 152 cms">5ft 7in/ 170 cms</option>
					<option value="5ft 8in/ 152 cms">5ft 8in/ 172 cms</option>
					<option value="5ft 9in/ 152 cms">5ft 9in/ 175 cms</option>
					<option value="5ft 10in/ 152 cms">5ft 10in/ 177 cms</option>
					<option value="5ft 11in/ 152 cms">5ft 11in/ 180 cms</option>
					<option value="6ft">6ft/ 182 cms</option>
				</select>
			</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6 mt-3">
				<label class="text-dark"><b>ராசி</b></label>
				<div class="mt-2">
					
					<!-- <select id="rasi" name="rasi"  class="form-select"> -->
					<!-- <option value="<?php echo "$rasi";?>">-- <?php echo "$rasi";?> --</option> -->

					<!-- <option value="மேஷம்">மேஷம்</option>
						<option value="ரிஷபம்">ரிஷபம்</option>
						<option value="மிதுனம்">மிதுனம்</option>
						<option value="கடகம்">கடகம்</option>
						<option value="சிம்மம்">சிம்மம்</option>
						<option value="கன்னி">கன்னி</option>
						<option value="துலாம்">துலாம்</option>
						<option value="விருச்சிகம்">விருச்சிகம்</option>
						<option value="தனுசு">தனுசு</option>
						<option value="மகரம்">மகரம்</option>
						<option value="கும்பம்">கும்பம்</option>
						<option value="மீனம்">மீனம்</option> -->
  <!-- add options for all 12 rasis -->
<!-- </select> -->
<input type="text" class="form-control"  value="<?php echo "$rasi";?>" name="rasi">

			</div>
			</div>

			<div class="col-lg-9 col-md-9 col-sm-12 mt-3">
			
			   <label for="natchathira"><b>நட்சத்திரம்</b></label>
				<!-- <select id="natchathira" name="najathiram"  class="form-select mt-2">
					
				</select> -->
				<input type="text" class="form-control"  value="<?php echo "$najathiram";?>" name="najathiram">
			</div>
			

			   <div class="col-lg-3 col-md-6 col-sm-6 mt-3">
				<label class="text-dark"><b>லக்கினம்</b></label>
				<div class="mt-2">
				<select name="lakunam" class="form-select">
						<option value="<?php echo "$lakunam";?>">-- <?php echo "$lakunam";?> --</option>
						<option value="மேஷம்">மேஷம்</option>
						<option value="ரிஷபம்">ரிஷபம்</option>
						<option value="மிதுனம்">மிதுனம்</option>
						<option value="கடகம்">கடகம்</option>
						<option value="சிம்மம்">சிம்மம்</option>
						<option value="கன்னி">கன்னி</option>
						<option value="துலாம்">துலாம்</option>
						<option value="விருச்சிகம்">விருச்சிகம்</option>
						<option value="தனுசு">தனுசு</option>
						<option value="மகரம்">மகரம்</option>
						<option value="கும்பம்">கும்பம்</option>
						<option value="மீனம்">மீனம்</option>
					</select>
			</div>
			</div>


			   <!-- end -->

			<div class="col-lg-3 col-md-6 col-sm-6 mt-3">
				<label class="text-dark"><b>தந்தை வேலை</b></label>
				<div class="mt-2">
				<input type="text" class="form-control" value="<?php echo "$father_work";?>" name="father_work" >
				</div>
				</div>

		<div class="col-lg-3 col-md-6 col-sm-6 mt-3">
				<label class="text-dark"><b>சொத்து விபரம்</b></label>
				<div class="mt-2">
				<input type="text" class="form-control" value="<?php echo "$assets";?>" name="assets" >
			</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6 mt-3">
				<label class="text-dark"><b>பூர்வீகம்</b></label>
				<div class="mt-2">
				<input type="text" class="form-control"  value="<?php echo "$purvegam";?>" name="purvegam" >
			</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6 mt-3">
				<label class="text-dark"><b>குலதெய்வம்</b></label>
				<div class="mt-2">
				<input type="text" class="form-control" value="<?php echo "$kulatheivam";?>" name="kulatheivam" >
			</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6 mt-3">
				<label class="text-dark"><b>கூட்டம்</b></label>
				<div class="mt-2">
				<input type="text" class="form-control" value="<?php echo "$kuttam";?>" name="kuttam" >
			</div>
			</div>

			

			<div class="col-lg-3 col-md-6 col-sm-6 mt-3">
				<label class="text-dark"><b>தொலைபேசி</b></label>
				<div class="mt-2">
				<input type="text" class="form-control"  value="<?php echo "$mobile_no";?>" name="mobile_no" >
			</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 mt-3">
				<label class="text-dark"><b>மாற்று தொலைபேசி  எண்</b></label>
				<div class="mt-2">
				<input type="text" class="form-control"  value="<?php echo "$alternate_no";?>" name="alternate_no" placeholder="optional">
			</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6 mt-3">
				<label class="text-dark"><b>தோஷம்</b></label>
				<div class="mt-2">
				<!-- <input type="text" class="form-control"  value="<?php echo "$thosam";?>" name="thosam" > -->
				<select name="thosam" class="form-select" id="">
				<option value="<?php echo "$thosam";?>">-- <?php echo "$thosam";?> --</option>

					<option value="செவ்வாய் ஜாதகம்">செவ்வாய் ஜாதகம்</option>
					<option value="ராகு கேது ஜாதகம்">ராகு கேது ஜாதகம்</option>
					<option value="செவ்வாய், ராகு கேது ஜாதகம்">செவ்வாய், ராகு கேது ஜாதகம்</option>
					<option value="சுத்த ஜாதகம்">சுத்த ஜாதகம்</option>

				</select>
			</div>
			</div>

			
			<div class="col-lg-3 col-md-6 col-sm-6 mt-3">
				<label class="text-dark"><b>இயலாமை</b></label>
				<div class="mt-2">
					<select name="disability" class="form-select" id="">
						<option value="normal">Normal</option>
						<option value="physically_challenged">Physichally Challenged</option>
						<option value="deaf_dumb">Deaf and Dumb</option>
						<option value="physically_handicap">Physichally Handicap</option>
						<option value="vision_impairment">Vision Impairment</option>
						<option value="hearing_impairment">Hearing Impairment</option>

					</select>
			</div>
			</div>

			
					<div class="col-lg-3 mt-4">
				<label class="text-dark"><b>கதவு எண்</b></label>

					<input type="text" name="door_no" class="form-control" value="<?php echo "$door_no";?>" placeholder="கதவு எண்">
					</div>
					<div class="col-lg-3 mt-4">
				<label class="text-dark"><b>பகுதி</b></label>

					<input type="text" name="area" class="form-control" placeholder="Area/பகுதி" value="<?php echo "$area";?>" required>
					</div>
					
					<div class="col-lg-3 mt-4">
				<label class="text-dark"><b>மாவட்டம்</b></label>
				<!-- <input type="text" name="district" class="form-control"  value="<?php echo "$district";?>" required> -->

				

					<select name="district" id="rasi3" class="form-select" required>
								<option value="<?php echo "$district"; ?>">-- <?php echo "$district"; ?> --</option>

								<option value="சென்னை">சென்னை</option>
								<option value="காஞ்சிபுரம்">காஞ்சிபுரம்</option>
								<option value="செங்கல்பட்டு">செங்கல்பட்டு</option>
								<option value="திருவள்ளூர்">திருவள்ளூர்</option>
								<option value="திருவண்ணாமலை">திருவண்ணாமலை</option>
								<option value="வேலூர்">வேலூர்</option>
								<option value="விழுப்புரம்">விழுப்புரம்</option>
								<option value="கள்ளக்குறிச்சி">திருப்பத்தூர்</option>
								<option value="இராணிப்பேட்டை">இராணிப்பேட்டை</option>
								<option value="அரியலூர்">அரியலூர்</option>
								<option value="கடலூர்">கடலூர்</option>
								<option value="மயிலாடுதுறை">மயிலாடுதுறை</option>
								<option value="நாகப்பட்டினம்">நாகப்பட்டினம்</option>
								<option value="பெரம்பலூர்">பெரம்பலூர்</option>
								<option value="புதுக்கோட்டை">புதுக்கோட்டை</option>
								<option value="தஞ்சாவூர்">தஞ்சாவூர்</option>
								<option value="திருச்சிராப்பள்ளி">திருச்சிராப்பள்ளி</option>
								<option value="திருவாரூர்">திருவாரூர்</option>
								<option value="தருமபுரி">தருமபுரி</option>
								<option value="திண்டுக்கல்">திண்டுக்கல்</option>
								<option value="கோயம்புத்தூர்">கோயம்புத்தூர்</option>
								<option value="கரூர்">கரூர்</option>
								<option value="ஈரோடு">ஈரோடு</option>
								<option value="கிருஷ்ணகிரி">கிருஷ்ணகிரி</option>
								<option value="நாமக்கல்">நாமக்கல்</option>
								<option value="நீலகிரி">நீலகிரி</option>
								<option value="சேலம்">சேலம்</option>
								<option value="திருப்பூர்">திருப்பூர்</option>
								<option value="கன்னியாகுமரி">கன்னியாகுமரி</option>
								<option value="மதுரை">மதுரை</option>
								<option value="இராமநாதபுரம்">இராமநாதபுரம்</option>
								<option value="சிவகங்கை">சிவகங்கை</option>
								<option value="தேனி">தேனி</option>
								<option value="தூத்துக்குடி">தூத்துக்குடி</option>
								<option value="திருநெல்வேலி">திருநெல்வேலி</option>
								<option value="தென்காசி">தென்காசி</option>
								<option value="விருதுநகர்">விருதுநகர்</option>
								<option value="திருப்பத்தூர்">திருப்பத்தூர்</option>

							</select>
						
					
					</div>

			

					<div class="col-lg-3 mt-4">
					<label class="text-dark"><b>தாலுகா</b></label>
					<!-- <input type="text" name="taluka"  class="form-control" placeholder="தாலுகா" value="<?php echo "$taluka";?>"> -->
					<select id="natchathira3" name="taluka"  class="form-select mt-2" value="<?php echo "$taluka";?>"></select>
					</div>
					
					
					<div class="col-lg-3 mt-4">
				<label class="text-dark"><b>அஞ்சல் குறியீடு</b></label>

					<input type="text" name="pincode" id="pincode" class="form-control" placeholder="Pincode/அஞ்சல் குறியீடு" value="<?php echo "$pincode";?>" required>
					</div>
				
					
					 

			<div class="row  mt-3">
				<!-- <div class="col-lg-1"></div> -->
				<div class="col-lg-10">
				<!-- onclick="Eligible()" -->
				<button type="submit"  name="submit" class="btn  mt-4" style="background-color:#9a1447;color:white; padding: 13px 20px; font-size: 18px;"><span>புதுப்பிக்கவும்</span></button>

				</div>
				<!-- <div class="col-lg-1"></div> -->

			</div>

				</div>
			
				
			</form>
	
							<?php
							if(isset($_POST["submit"])){
								
								$name=$_POST["name"];
								$father_name=$_POST["father_name"];
								$dob=$_POST["dob"];
								$age=$_POST["age"];
								$study=$_POST["study"];
								// $qualification=$_POST["qualification"];
								$work=$_POST["work"];
								$salary=$_POST["salary"];
								$color=$_POST["color"];
								$height=$_POST["height"];
								$disability=$_POST["disability"];
								$rasi=$_POST["rasi"];
								$lakunam=$_POST["lakunam"];
								$najathiram=$_POST["najathiram"];
								$father_work=$_POST["father_work"];
								$assets=$_POST["assets"];
								$purvegam=$_POST["purvegam"];
								$kulatheivam=$_POST["kulatheivam"];
								$kuttam=$_POST["kuttam"];
								// $like_status=$_POST["like_status"];
								$mobile_no1=$_POST["mobile_no"];
								$alternate_no=$_POST["alternate_no"];

								$door_no=$_POST["door_no"];
								// $state=$_POST["state"];
								$district=$_POST["district"];
								$area=$_POST["area"];
								$pincode=$_POST["pincode"];
								$taluka=$_POST["taluka"];
								$thosam=$_POST["thosam"];
								// $reg_date=$_POST["reg_date"];
								$reg_time=$_POST["reg_time"];
								$gender=$_POST["gender"];
								
								
							$sql= "UPDATE register SET name='$name', father_name='$father_name', dob='$dob', age='$age', study='$study', work='$work', salary='$salary', color='$color', height='$height', rasi='$rasi', lakunam='$lakunam', najathiram='$najathiram', father_work='$father_work', assets='$assets', purvegam='$purvegam', kulatheivam='$kulatheivam', kuttam='$kuttam', door_no='$door_no', district='$district', area='$area', pincode='$pincode', taluka='$taluka', mobile_no='$mobile_no1', alternate_no='$alternate_no', thosam='$thosam', reg_date='$reg_date', reg_time='$reg_time', gender='$gender', disability='$disability' WHERE mobile_no='$mobile_no'";

								if($con->query($sql)){
									
									echo "<script>alert('Updated Successfully');window.location.replace('user.php')</script>";

								}
								else{
									echo "<script>alert('Updated not Successfully');</script>";
								}
							}
							?>

</div>
<div class="col-lg-3"></div>

							
						
		
		
			

		
		</div>
        </div>

		
						
	
	
        <!-- footer -->

	
						




<script>
    const rasiToNatchathira = {
        மேஷம்: ['பரணி ', 'அஸ்வனி 1ம் பாதம்','அஸ்வனி','அஸ்வனி 2ம் பாதம்','அஸ்வனி 3ம் பாதம்','அஸ்வனி 4ம் பாதம்','பரணி 1ம் பாதம்', 'பரணி 2ம் பாதம்', 'பரணி 3ம் பாதம்', 'பரணி 4ம் பாதம்', 'கிருத்திகை 1ம் பாதம்'],
        ரிஷபம்: ['கிருத்திகை 2ம் பாதம்','கிருத்திகை 3ம் பாதம்', 'ரோகிணி 1ம் பாதம்', 'ரோகிணி 2ம் பாதம்', 'ரோகிணி 3ம் பாதம்', 'மிருகசீரிசம் 1ம் பாதம்', 'மிருகசீரிசம் 2ம் பாதம்'],
        மிதுனம்: ['மிருகசீரிசம் 3ம் பாதம்', 'மிருகசீரிசம் 4ம் பாதம்', 'திருவாதிரை 1ம் பாதம்', 'திருவாதிரை 2ம் பாதம்', 'திருவாதிரை 3ம் பாதம்', 'திருவாதிரை 4ம் பாதம்', 'புணர்பூசம் 1ம் பாதம்', 'புணர்பூசம் 2ம் பாதம்', 'புணர்பூசம் 3ம் பாதம்'],
        கடகம்: ['புணர்பூசம் 4ம் பாதம்', 'பூசம் 1ம் பாதம்','பூசம் 2ம் பாதம்','பூசம் 3ம் பாதம்','பூசம் 4ம் பாதம்', 'ஆயில்யம் 1ம் பாதம்', 'ஆயில்யம் 2ம் பாதம்', 'ஆயில்யம் 3ம் பாதம்', 'ஆயில்யம் 2ம் பாதம்'],
        சிம்மம்: ['மகம் 1ம் பாதம்','மகம் 2ம் பாதம்','மகம் 3ம் பாதம்','மகம் 4ம் பாதம்', 'பூரம் 1ம் பாதம்','பூரம் 2ம் பாதம்','பூரம் 3ம் பாதம்','பூரம் 4ம் பாதம்', 'உத்திரம் 1ம் பாதம்'],
        கன்னி: ['உத்திரம் 2ம் பாதம்', 'உத்திரம் 3ம் பாதம்', 'உத்திரம் 4ம் பாதம்', 'அஸ்தம் 1ம் பாதம்', 'அஸ்தம் 2ம் பாதம்', 'அஸ்தம் 3ம் பாதம்', 'அஸ்தம் 4ம் பாதம்', 'சித்திரை 1ம் பாதம்', 'சித்திரை 2ம் பாதம்'],
        துலாம்: ['சித்திரை 3ம் பாதம்', 'சித்திரை 4ம் பாதம்', 'சுவாதி 1ம் பாதம்', 'சுவாதி 2ம் பாதம்', 'சுவாதி 3ம் பாதம்', 'சுவாதி 4ம் பாதம்', 'விசாகம்'],
        விருச்சிகம்: ['விசாகம் 4ம் பாதம்', 'அனுசம் 1ம் பாதம்' , 'அனுசம் 2ம் பாதம்' , 'அனுசம் 3ம் பாதம்' , 'அனுசம் 4ம் பாதம்' ,'கேட்டை 1ம் பாதம்','கேட்டை 2ம் பாதம்','கேட்டை 3ம் பாதம்','கேட்டை 4ம் பாதம்'],
        தனுசு: ['மூலம் 1ம் பாதம்' ,'மூலம் 2ம் பாதம்' ,'மூலம் 3ம் பாதம்' ,'மூலம் 4ம் பாதம்' ,'பூராடம் 1ம் பாதம்', 'பூராடம் 2ம் பாதம்', 'பூராடம் 3ம் பாதம்','பூராடம் 4ம் பாதம்',  'உத்திராடம் 4ம் பாதம்'],
        மகரம்: ['உத்திராடம் 2ம் பாதம்', 'உத்திராடம் 3ம் பாதம்', 'உத்திராடம் 4ம் பாதம்',  'திருவோணம் 1ம் பாதம்',  'திருவோணம் 2ம் பாதம்',  'திருவோணம் 3ம் பாதம்',  'திருவோணம் 4ம் பாதம்', 'அவிட்டம் 1ம் பாதம்', 'அவிட்டம் 2ம் பாதம்'],
        கும்பம்: ['அவிட்டம் 3ம் பாதம்', 'அவிட்டம் 4ம் பாதம்', 'சதயம் 1ம் பாதம்', 'சதயம் 2ம் பாதம்', 'சதயம் 3ம் பாதம்', 'சதயம் 4ம் பாதம்', 'புரட்டாதி 1ம் பாதம்', 'புரட்டாதி 2ம் பாதம்', 'புரட்டாதி 3ம் பாதம்'],
        மீனம்: ['புரட்டாதி 4ம் பாதம்', 'உத்திரட்டாதி 1ம் பாதம்', 'உத்திரட்டாதி 2ம் பாதம்', 'உத்திரட்டாதி 3ம் பாதம்', 'உத்திரட்டாதி 4ம் பாதம்', 'ரேவதி 1ம் பாதம்', 'ரேவதி 2ம் பாதம்', 'ரேவதி 3ம் பாதம்', 'ரேவதி 4ம் பாதம்',],

  mithuna: ['Ardra', 'Punarvasu'],
  // add natchathira for all 12 rasis
};

const rasiSelect = document.getElementById('rasi');
const natchathiraSelect = document.getElementById('natchathira');

function populateNatchathira() {
  const selectedRasi = rasiSelect.value;
  const natchathiraOptions = rasiToNatchathira[selectedRasi];
  
  // remove any existing natchathira options
  while (natchathiraSelect.firstChild) {
    natchathiraSelect.removeChild(natchathiraSelect.firstChild);
  }
  
  // add new natchathira options
  natchathiraOptions.forEach((natchathira) => {
    const option = document.createElement('option');
    option.value = natchathira;
    option.textContent = natchathira;
    natchathiraSelect.appendChild(option);
  });
}

// populate natchathira options initially and whenever rasi changes
populateNatchathira();
rasiSelect.addEventListener('change', populateNatchathira);
</script>

<script>
		const rasiToNatchathira1 = {
			சென்னை: ['Chennai', 'Velachery', 'Tondiarpet', 'Alandur', 'Ambattur', 'Aminjikarai', 'Ayanavaram ', 'Egmore', 'Guindy', 'Madhavaram', 'Maduravoyal', 'Tiruvottiyur', 'Sholinganallur ', 'Purasawalkam', 'Perambur', 'Mylapore', 'Mambalam'],
			காஞ்சிபுரம்: ['Kanchipuram', 'Kunrathur', 'Sriperumbudur', 'Uthiramerur', 'Walajabad'],
			செங்கல்பட்டு: ['Chengalpattu', 'Cheyyur', 'Madurantakam', 'Pallavaram', 'Tambaram', 'Thiruporur', 'Thirukazhukundram', 'Vandalur'],
			திருவள்ளூர்: ['Tiruvallur', 'Uthukkottai', 'Tiruttani', 'RK Pet', 'Poonamallee', 'Ponneri', 'Pallipattu', 'Gummidipoondi', 'Avadi'],
			திருவண்ணாமலை: ['Tiruvannamalai', 'Polur', 'Thandarampattu', 'Vandavasi', 'Vembakkam', 'Kilpennathur', 'Kalasapakkam', 'Aarani', 'Chengam', 'Chetpet', 'Cheyyar', 'Jamunamarathur'],
			வேலூர்: ['Vellore', 'Kilvaithinankuppam', 'Katpadi', 'Pernambut', 'Gudiyatham', 'Anaicut'],
			விழுப்புரம்: ['Villupuram', 'Vikravandi', 'Vanur', 'Thiruvennainallur', 'Tindivanam', 'Melmalaianur', 'Marakkanam', 'Kandachipuram', 'Gingee'],
			கள்ளக்குறிச்சி: ['Kallakkurichi', 'Kalvarayan Hills', 'Ulundurpet', 'Thirukoilur', 'Sankarapuram', 'Chinnasalem'],
			இராணிப்பேட்டை: ['Walajapet', 'Sholingur', 'Nemili', 'Kalavai', 'Arcot', 'Arakkonam'],
			அரியலூர்: ['Ariyalur', 'Andimadam', 'Udayarpalayam', 'Sendurai'],
			கடலூர்: ['Cuddalore	', 'Kurinjipadi', 'Panruti', 'Srimushnam', 'Titakudi', 'Veppur', 'Vriddachalam', 'Kattumannarkoil', 'Chidambaram', 'Bhuvanagiri'],
			மயிலாடுதுறை: ['Mayiladuthurai', 'Tharangambadi', 'Sirkazhi', 'Kuthalam'],
			நாகப்பட்டினம்: ['Nagapattinam', 'Vedaranyam', 'Thirukkuvalai', 'Kilvelur'],
			பெரம்பலூர்: ['Veppanthattai', 'Perambalur', 'Kunnam', 'Alathur'],
			புதுக்கோட்டை: ['Pudukkottai', 'Viralimalai', 'Thirumayam', 'Ponnamaravathi', 'Manamelkudi', 'Kulathur', 'Karambakkudi', 'Alangudi', 'Aranthangi', 'Avadaiyarkoil', 'Gandarvakottai', 'Illuppur'],
			தஞ்சாவூர்: ['Thanjavur', 'Thiruvidaimarudur', 'Thiruvaiyaru', 'Peravurani', 'Pattukkottai', 'Papanasam', 'Orathanadu', 'Kumbakonam', 'Budalur'],
			திருச்சிராப்பள்ளி: ['Tiruchirappalli East', 'Thiruverumbur', 'Thottiyam', 'Thuraiyur', 'Tiruchirappalli West', 'Srirangam', 'Musiri', 'Marungapuri', 'Manapparai', 'Manachanallur', 'Lalgudi'],
			திருவாரூர்: ['Tiruvarur', 'Valangaiman', 'Thiruthiraipoondi', 'Needamangalam', 'Nannilam', 'Mannargudi', 'Kudavasal', 'Koothanallur'],
			தருமபுரி: ['Pennagaram', 'Pappireddipatti', 'Palacode', 'Nallampalli', 'Karimangalam', 'Harur', 'Dharmapuri'],
			திண்டுக்கல்: ['Vedasandur', 'Palani', 'Oddanchattiram', 'Nilakottai', 'Natham', 'Kodaikanal', 'Gujiliamparai', 'Dindigul-East', 'Dindigul-West', 'Athoor'],
			கோயம்புத்தூர்: ['Valparai', 'Sulur', 'Pollachi', 'Perur', 'Mettupalayam', 'Madukkarai', 'Kinathukadavu', 'Coimbatore-South', 'Coimbatore-North', 'Annur', 'Anaimalai'],
			கரூர்: ['Karur', 'Pugalur', 'Manmangalam', 'Kulithalai', 'Krishnarayapuram', 'Kadavur', 'Aravakurichi'],
			ஈரோடு: ['Kodumudi', 'Modakurichi', 'Perundurai', 'Sathyamangalam', 'Nambiyur taluk', 'Gobichettipalayam', 'Erode', 'Bhavani', 'Anthiyur'],
			கிருஷ்ணகிரி: ['Krishnagiri', 'Uthangarai', 'Shoolagiri', 'Pochampalli', 'Hosur', 'Denkanikottai', 'Bargur', 'Anchetty'],
			நாமக்கல்: ['Namakkal', 'Thiruchengode', 'Sendamangalam', 'Rasipuram', 'Paramathi-Velur', 'Mohanur', 'Kumarapalayam ', 'Kollimalai'],
			நீலகிரி: ['Udagamandalam', 'Pandalur', 'Kundah', 'Kotagiri', 'Gudalur', 'Coonoor'],
			சேலம்: ['Yercaud', 'Salem', 'Valapady', 'Sankagiri', 'Salem West', 'Salem South', 'Pethanaickenpalayam', 'Omalur', 'Attur', 'Idappadi', 'Gangavalli', 'Kadyampatti', 'Mettur'],
			திருப்பூர்: ['Uthukuli', 'Udumalaipettai', 'Tiruppur South', 'Tiruppur North', 'Palladam', 'Madathukulam', 'Kangeyam', 'Dharapuram', 'Avinashi'],
			கன்னியாகுமரி: ['Thovalai', 'Thiruvattar', 'Vilavancode', 'Killiyur', 'Kalkulam', 'Agastheeswaram'],
			மதுரை: ['Vadipatti', 'Usilampatti', 'Thirupparankundram', 'Thirumangalam', 'Peraiyur', 'Melur', 'Kallikudi', 'Madurai-West', 'Madurai-South', 'Madurai-North', 'Madurai-East'],
			இராமநாதபுரம்: ['Ramanathapuram', 'Tiruvadanai', 'Rameswaram', 'Tiruvadanai', 'R. S. Mangalam', 'Paramakudi', 'Mudukulathur', 'Kilakarai', 'Kamuthi', 'Kadaladi'],
			சிவகங்கை: ['Sivaganga', 'Tiruppuvanam', 'Tirupathur', 'Singampunari', 'Manamadurai', 'Karaikudi', 'Kalayarkoil', 'Ilayangudi', 'Devakottai'],
			தேனி: ['Theni', 'Uthamapalayam', 'Periyakulam', 'Bodniayakkanur', 'Andipatti'],
			தூத்துக்குடி: ['Thoothukudi', 'Vilathikulam', 'Tiruchendur', 'Thiruvaikundam', 'Sathankulam', 'Ottapidaram', 'Kovilpatti', 'Kayatharu', 'Ettayapuram', 'Eral'],
			திருநெல்வேலி: ['Tirunelveli', 'Thisayanvilai', 'Radhapuram', 'Palayamkottai', 'Nanguneri', 'Manur', 'Cheranmahadevi', 'Ambasamudram'],
			தென்காசி: ['Tenkasi', 'Sivagiri', 'Veerakeralampudur', 'Thiruvengadam', 'Shenkottai', 'Sankarankoil', 'Kadayanallur', 'Alangulam'],
			விருதுநகர்: ['Virudhunagar', 'Watrap', 'Tiruchuli', 'Srivilliputhur', 'Sivakasi', 'Sattur', 'Rajapalayam', 'Kariapatti', 'Aruppukkottai', 'Vembakottai' ],
			திருப்பத்தூர்: ['Vaniyambadi', 'Tirupattur', 'Natrampalli', 'Ambur'],
			
			mithuna: ['Ardra', 'Punarvasu'],
			// add natchathira for all 12 rasis
		};

		const rasiSelect1 = document.getElementById('rasi3');
		const natchathiraSelect1 = document.getElementById('natchathira3');

		function populateNatchathira1() {
			const selectedRasi1 = rasiSelect1.value;
			const natchathiraOptions1 = rasiToNatchathira1[selectedRasi1];

			// remove any existing natchathira options
			while (natchathiraSelect1.firstChild) {
				natchathiraSelect1.removeChild(natchathiraSelect1.firstChild);
			}

			// add new natchathira options
			natchathiraOptions1.forEach((natchathira3) => {
				const option = document.createElement('option');
				option.value = natchathira3;
				option.textContent = natchathira3;
				natchathiraSelect1.appendChild(option);
			});
		}

		// populate natchathira options initially and whenever rasi changes
		populateNatchathira1();
		rasiSelect1.addEventListener('change', populateNatchathira1);
	</script>

<?php include "footer.php"; ?>

<script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <!-- <script src="../assets/js/swiper-bundle.min.js"></script> -->
        <script src="../assets/js/jquery.meanmenu.min.js"></script>
        <script src="../assets/js/wow.js"></script>
        <script src="../assets/js/jquery.nice-select.min.js"></script>
        <script src="../assets/js/jquery.scrollUp.min.js"></script>
        <script src="../assets/js/jquery.magnific-popup.min.js"></script>
        <script src="../assets/js/odometer.min.js"></script>
        <script src="../assets/js/appear.min.js"></script>
        <script src="../assets/js/datepicker.min.js"></script>
        <script src="../assets/js/select2.min.js"></script>
        <script src="../assets/js/cross2.min.js"></script>
        <script src="../assets/js/jquery-ui-slider-range.js"></script>
        <script src="../assets/js/star-rating.js"></script>
        <script src="../assets/js/back-to-top.min.js"></script>
        <script src="../assets/js/main.js"></script>
</body>

</html>