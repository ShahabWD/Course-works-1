<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assinment-2</title>
    <!-- link css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

<div class="container">
        <h1 class="text-center mt-5">Sign form (GEET)</h1>
       <div class="row">
        <div class="col-12">

            <?php
                if(isset($_POST['username'])){
                    $name = $_POST['username'];
                    echo "your name is: " .$name;
                }

                if(isset($_POST['password'])){
                    $name = $_POST['password'];
                    echo "your password is: " .$name;
                }



            ?>

            <form class="form-group" action=""  method="GEET">
                <label>Username</label>
                <input class="form-control" type="text" name="username">

                <label class="mt-3">Your Email</label>
                <input class="form-control" type="password" name="password">

                <input class="btn btn-success mt-3 btn-block" type="submit" name="submit" value="Register">
            </form>
        </div>
       </div>
    </div>

</body>

</html>