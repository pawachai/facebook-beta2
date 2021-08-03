<?php 
    session_start();
    include('connect.php');
    
    if (isset($_POST['reg_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);

        $user_check_query = "SELECT * FROM loglog WHERE username = '$username' OR email = '$email' LIMIT 1";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);


        if ($result) { // if user exists
            if ($result['username'] == $username) {
                $_SESSION['username'] = $result['username'];
                echo"<script>
                window.location = 'sigin.php';
                </script>";
            }else{
                if ($result['email'] == $email) {
                    $_SESSION['email'] = $result['email'];
                    echo"<script>
                    window.location = 'sigin.php';
                    </script>";
                }else{
                    exit();
                }
            }
        }

        if (empty($username) === "") { 
            echo"<script>
            alert('plase enter username');
            window.location = 'sigin.php';
            </script>";
            
        }else{
            if (empty($email) === "") {
                echo"<script>
                alert('plase enter email');
                window.location = 'sigin.php';
                </script>";
                
            }else{
                if (empty($password) === "") {
                    echo"<script>
                    alert('plase enter password');
                    window.location = 'sigin.php';
                    </script>";
                }else{
                    $pass = md5($password);
                    $img_name = $_FILES['p_pic']['name'];
                    $img_size = $_FILES['p_pic']['size'];
                    $tmp_name = $_FILES['p_pic']['tmp_name'];
                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);
                    $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                    move_uploaded_file($tmp_name, "./uploads/$new_img_name");
        
                    $sql = "INSERT INTO loglog (username, email, password, phone, p_pic) VALUES ('$username', '$email', '$password', '$phone' , '$new_img_name')";
                    mysqli_query($conn, $sql); 
        
                    $_SESSION['username'] = $username;
                    $_SESSION['success'] = "You are now logged in";
                    header('location: login.php');
                }
            }
        }
    }

?>