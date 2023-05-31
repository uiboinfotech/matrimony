<?php 
include "config.php";
session_start();
?>
<!DOCTYPE html>
    <head>

    </head>
    <body>
        <form method="POST">
            
					<div class="row">
						
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="example-text-input" class="form-label">Tamil</label>
                            <select class="form-control" name="tamil" id="tamil" required >
                                <?php
                                echo "<option value=''>Select</option>";
                                $sql="SELECT tamil FROM translate GROUP BY tamil";
                                $res=$con->query($sql);
                                while($row=$res->fetch_assoc())
                                {
                                    $tamil=$row["tamil"];
                                    echo "<option value='$tamil'>$tamil</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="example-text-input" class="form-label">English</label>
                            <select class="form-control" name="english" id="english" required>
                            <?php
                            echo "<option value=''>Select</option>";
                            ?>
                            </select>
                        </div>
                    </div>
					</div>
        </form>

                            </br>
                            </br>
        <form method="POST">
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <lable>Tamil</lable>
                        <input type="text" name="tamil" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label>English</label>
                        <input type="text" name="english">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <button type="submit" name="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
        <?php 
        if (isset($_POST["submit"])){
        $tamil=$_POST["tamil"];
        $english=$_POST["english"];
       
            $sql="INSERT INTO translate(id, tamil, english) VALUES (Null, '$tamil', '$english')";
                if($con->query($sql))   
            {
                echo "<script>alert('Added Successfull');window.location.replace('test.php')</script>";

                echo $con;
            
            }
            // end
            else{
                    
                echo "<script>alert('Not Added!'); window.location.replace('test.php');</script>";                         
            }
         
        }                               

    ?>
        

        <script src="libs/jquery/jquery.min.js"></script>





        <script>
    $(document).ready(function(){
        $("#tamil").change(function(){
            var tamil=document.getElementById("tamil").value;
            if(tamil.length<=0)
            {}
            else
            {
                $.ajax({
                    url: 'english_list.php',
                    method: "POST",
                    data: {tamil: tamil},
                    success: function(data) {
                        $("#english").html(data);
                    }
                })
            }
        });
        $('#myModal').modal('show');
    });
</script>
    </body>
</html>