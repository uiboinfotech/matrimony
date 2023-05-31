<?php
    include "config.php";
    if(isset($_POST["tamil"]))
    {
        $tamil=$_POST["tamil"];
        echo "<option value=''>Select</option>";
        $sql="SELECT * FROM translate WHERE tamil='$tamil' GROUP BY english";
        $res=$con->query($sql);
        while($row=$res->fetch_assoc())
        {
            $english=$row["english"];
            echo "<option value='$english'>$english</option>";
        }
    }
?>
