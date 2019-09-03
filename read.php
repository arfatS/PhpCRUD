<?php include "db.php";
        
    $query = "select * from user";

    $result = mysqli_query($connection, $query);

    if(!$result){
            echo "Error: " . $result . "<br>" . mysqli_error();
    }

    if(mysqli_num_rows($result) == 0){
        echo "No data to be fetched" . "<br>";
    }

    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Read</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
</head>
<body>
    <h1 class="text-center">Read User Data From Database</h1>
        <div class="text-center">
        
        <?php

            $no = 1;

            while($user_info = mysqli_fetch_assoc($result)){

                echo "<h2>$no</h2>";

                echo "User Id : " . $user_info['user_id'] . "<br>";
                echo "Name : " . $user_info['name'] . "<br>";
                echo "Mobile : " . $user_info['mobile'] . "<br>";
                echo "Password : " . $user_info['password'] . "<br>";
                echo "Age : " . $user_info['age'] . "<br><br><br>" ; 
                
                $no+=1;
            }
        ?>
        </div>

</body>
</html>