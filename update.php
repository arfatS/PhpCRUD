<?php include "db.php";

    if(isset($_POST['submit'])){
        
        $id = $_POST['id'];
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $age = $_POST['age'];

        $query = "update user set name = '$name', mobile = '$mobile', password = '$password', age = $age where user_id = $id ";

        $result = mysqli_query($connection, $query);

        if($result){
            echo "Updated Successfully";
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
    <title>Update</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <div class="container col-md-6">
        <h1 class="text-center">Update User Data</h1>
        <form action="update.php" method="post">

            <div class="form-group">
                <select name="id"class="form-control">
                    <?php readId(); ?>
                </select>
            </div>

            <div class="form-group">
                <label for="name">Full Name :</label>
                <input class="form-control" type="text" name="name">
            </div>

            <div class="form-group">
                <label for="mobile">Mobile No :</label>
                <input class="form-control" type="text" name="mobile">
            </div>

            <div class="form-group">
                <label for="password">Password :</label>
                <input class="form-control" type="password" name="password">
            </div>

            <div class="form-group">
                <label for="age">Age :</label>
                <input class="form-control" type="text" name="age">
            </div>

            <div class="form-group">
                <input class="btn btn-success btn-block" type="submit" name="submit" value="Update">
            </div>



        </form>
    </div>
</body>
</html>