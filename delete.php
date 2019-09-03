<?php  include "db.php";

if(isset($_POST['submit'])){
        
    $id = $_POST['id'];

    $query = "delete from user where user_id = $id ";

    $result = mysqli_query($connection, $query);

    if($result){
        echo "Deleted Successfully";
    }else{
        echo "Error: " . $result . "<br>" . mysqli_error();
    }
    
}



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Delete</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
</head>
<body>

    <div class="container col-md-6">

        <h1 class="text-center">Delete User</h1>
        <form action="delete.php" method="post">
            <div class="form-group">
                <select name="id"class="form-control">
                    <?php readId(); ?>
                </select>
            </div>


            <div class="form-group">
                <input class="btn btn-danger btn-block" type="submit" name="submit" value="Delete">
            </div>
        </form>
    
    </div>
</body>
</html>