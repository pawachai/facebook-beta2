<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <style>
        body{
            /* background: #d182eb52; */
            background: #000;
        }
        .veiw {
            text-align: center;
        }

        .col-8 {
            text-align: center;
        }

        .col-4 {
            border: 1px solid red;
        }

        .vlog {
            border-radius: 10px 0px 0px 10px;
            box-shadow: 0px 0px 5px 0.5px;
            overflow-y: scroll;
            height: 80vh;
            max-height: 80vh;
            padding: 20px;
        }
    </style>
    <?php require("./nav.php") ?>


    <div class="container-fluid">
        <div class="veiw">
            <h1><?php
                if (isset($_SESSION['username'])) {
                    echo "Welcome ";
                    echo $_SESSION['username'];
                } else {
                    echo "";
                }
                ?></h1>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
                <h3>Game console</h3>
            </div>
            <div class="col-8">
                <div class="vlog">
                    <form action="post.php" method="post" enctype="multipart/form-data">
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="inputPassword6" class="col-form-label">โพสของคุณ</label>
                            </div>
                            <div class="col-auto">
                                <input name="text" type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" placeholder="ข้อความของคุณ">
                            </div>
                            <div class="col-auto">
                                <label for="exampleInputEmail1" class="form-label">Upload IMAGE</label>
                                <input type="file" name="img">
                            </div>
                            <div class="col-auto">
                                <span id="passwordHelpInline" class="form-text">
                                    <button name="iopic" type="submit" class="btn btn-danger">POST</button>
                                </span>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <?php
                    require_once('connect.php');
                    $sql = "SELECT * FROM facebook order by id";
                    $data = mysqli_query($conn, $sql);
                    while ($row = $data->fetch_assoc()) {
                        echo "<img src='./uploadss/" . $row['img'] . "' alt='" . $row['text'] . "' />";
                    }
                    ?>
                </div>
            </div>
            <div class="col-2">
                <h3>รายชื่อผู้ติดต่อ</h3>
                <?php
                // require_once 'connect.php';
                include("connect.php");
                $sql = "select * from loglog order by username";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<td align='left'> <br>" . $row["id"] . $row["username"] . "</td>";
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>