<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `login`(name,email,mobile,password) VALUES('$name','$email','$mobile','$password')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Data inserted";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>CRUD</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="name" class="form-control" id="name" name='name' placeholder="Enter Name" autocomplete="off">

            </div>
            <div class="form-group">
                <label>Mobile Number</label>
                <input type="mobile" class="form-control" name="mobile" placeholder="Enter Mobile Number" autocomplete="off">

            </div>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email" autocomplete="off">

            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>


</body>

</html>