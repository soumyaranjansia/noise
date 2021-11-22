<?php
require('includes/db_con.php');

        if($_POST['type']==""){
            $query = "SELECT * FROM districts ";
            $result = mysqli_query($connection, $query);
            $str="";
                while ($row = mysqli_fetch_assoc($result)) {
                    $str.="<option value='{$row['district_name']}'>{$row['district_name']}</option>";
                }
            }
        else if($_POST['type']=="blockData"){
                        $district_n=$_POST['dist'];
                        $query = "SELECT * FROM blocks where district_name='$district_n' ";
                        $result = mysqli_query($connection, $query);
                        $str="";
                            while ($row = mysqli_fetch_assoc($result)) {
                                $str.="<option value='{$row['block_name']}'>{$row['block_name']}</option>";
                            }
                    }
 echo $str;
?>