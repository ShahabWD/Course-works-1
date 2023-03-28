<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootsrap -->
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
   
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <h1 class="text-center mt-5">Sign form post</h1>


                <?php 
                    if(isset($_POST['name1'])){
                        $name = $_POST['name1'];
                        echo "Frist name : " .$name;
                    }

                    if(isset($_POST['name2'])){
                        $name = $_POST['name2'];
                        echo " Last name : " .$name;
                    }

                    if(isset($_POST['Age'])){
                        $name = $_POST['Age'];
                        echo " Age: " .$name;
                    }

                    if(isset($_POST['Gender'])){
                        $name = $_POST['Gender'];
                        echo " Gender: " .$name;
                    }
                       
                
                ?>

                <form class="form-group" action="" method="POST">

                <label>Frist  name</label>
                <input class="form-control" type="text" name="name1" placeholder="Frist name">
                
                <label class="mt-3">Last name</label>
                <input class="form-control" type="text" name="name2" placeholder="Last name">

                <label class="mt-3">Age</label>
                <input class="form-control" type="text" name="Age" placeholder="Age">

                <label class="mt-3">Gender</label>
                <input class="form-control" type="text" name="Gender" placeholder="Gender">

                <input class="btn btn-success mt-3 btn-block" type="submit" name="submit" value="Register">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
