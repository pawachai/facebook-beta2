<?php 
    include_once "connect.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <style>
    body {
        background: linear-gradient(to bottom right, #3f51b5, #9c27b0);
        height: 100vh;
    }

    .container {
        background: #fff;
        padding: 15px;
        width: 50%;
        border-radius: 10px;
    }
    .box{
        height: 100vh;
        align-items: center;
        display: flex;
    }
    .bot{
        background: linear-gradient(to bottom right, #3f51b5, #9c27b0);
        border: none;
        color: #fff;
        padding: 10px;
        width: 100%;
        border-radius: 5px;
        font-weight: bold;
    }
    .pp{
        text-align: center;
        margin-top: 10px;
    }
    </style>
    <div class="box">
        <div class="container">
            <h5 style="text-align: center;"> <i class="fas fa-address-card"></i> Sigin</h5>
            <?php 
            if(isset($_SESSION['username'])){
                echo "<div class='alert alert-danger' role='alert'>
                username already exists
                </div>";
            }else{ 
                if(isset($_POST['email'])){
                echo "<div class='alert alert-danger' role='alert'>
                email already exists
                </div>";
                }else{
                    echo "";
                }
            }
            ?>
            <form method="POST" action="save.php" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">username</label>
                    <input name="username" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">email</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">phone</label>
                    <input name="phone" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Upload Profile</label>
                    <input  type="file" name="p_pic">
                </div>
                
                <button name="reg_user" type="submit" class="bot">Signin</button>
                <div class="pp">
                <p>????????????????????????????????????????????????????????????????????????? <a href="login.php">Login</a></p>
                </div>               
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>