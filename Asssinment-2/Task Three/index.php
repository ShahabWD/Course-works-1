<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

      <!-- link css -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
   
   <div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mt-5">Task Registation form</h2>

            <?php 
                
                if(isset($_POST['username'])){
                    $name = $_POST['username'];
                    echo "Your name is : " .$name;
                }
                
                
                    
                    
                    
                ?>

            <form class="form-group" action="" method="Post">

                <label>Username</label>
                <input class="form-control" type="text" name="username">

                <label class="mt-4">password</label>
                <input class="form-control" type="password" name="password">

                <label class="mt-4">Your Email</label>
                <input class="form-control" type="Email" name="Email">

                <label class="mt-4">Phone Number</label>
                <input class="form-control" type="number" name="number">

                <label class="mt-4">Your Address</label>
                <input class="form-control" type="text" name="Address">

                <input class="btn btn-success btn-block mt-3" type="submit" name="submit" value="Registation">

            </form>
        </div>
    </div>
   </div>
    
</body>
</html>