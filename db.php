<?php
    $connection = mysqli_connect('localhost','newuser','newuser','crud');

    if(!($connection)){
        die("Connection Failed") ;
    }

    function readId(){

        global $connection;

        $query = "select * from user";

        $result = mysqli_query($connection, $query);

        if(!$result){
                die('Query Failed' . mysqli_error());
        }

        while($user_info = mysqli_fetch_assoc($result)){

            $id = $user_info['user_id'];
            echo "<option value= '$id' >$id</option>";
        }
    }
?>