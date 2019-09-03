<?php include "db.php";

    if(isset($_POST['submit'])){
        
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $age = $_POST['age'];

        $query = "insert into user (name, mobile, password, age) values ('$name', '$mobile', '$password', $age)";

        $result = mysqli_query($connection, $query);

        if($result){
            echo "Record Created Successfully";
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
    <title>Create</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <div class="container col-md-6">
        <h1 class="text-center">Create</h1>

        <form action="create.php" method="post">

            <div class="form-group">
                <label for="name">Full Name :</label>
                <input class="form-control" type="text" name="name" id="name">
            </div>

            <div class="form-group">
                <label for="mobile">Mobile No :</label>
                <input class="form-control" type="text" name="mobile" id="mobile">
            </div>

            <div class="form-group">
                <label for="password">Password :</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>

            <div class="form-group">
                <label for="age">Age :</label>
                <input class="form-control" type="text" name="age" id="age">
            </div>

            <div class="form-group">
                <input class="btn btn-primary btn-block" type="submit" name="submit" id="submit" value="Create">
            </div>



        </form>
    </div>
</body>
</html>