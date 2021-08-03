<?php
    session_start();

    if(!$_SESSION['username']){
        header("Location:login.php");
    } else{
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>profile</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <style>
            .boxbox {
                border: 1px solid #000;
                width: 100%;
                height: 30vh;
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .text {
                text-align: center;
            }
        </style>


        <?php
        include_once "nav.php";
        ?>


        <div class="container">

            <div class="boxbox">
                <?php
                require_once ('connect.php');
                $sql = "SELECT * FROM loglog where username = '".$_SESSION['username']."'"; 
                $data = mysqli_query($conn, $sql);
                while($row = $data->fetch_assoc()){ 
                    echo "<img src='./uploads/".$row['p_pic']."' alt='".$row['p_pic']."' />";
                }
                ?>

            </div>

        </div>


        <!-- Modal -->
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">upload image</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="file" name="filUpload">
                        </div>
                        <div class="modal-footer">
                            <button name="file" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button name="btnSubmit" type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>



        <div class="text">
            <h1><?= $_SESSION['username'] ?></h1>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
        <script>
            var myModal = document.getElementById('myModal')
            var myInput = document.getElementById('myInput')

            myModal.addEventListener('shown.bs.modal', function() {
                myInput.focus()
            })
        </script>
    </body>

    </html>
<?php } ?> 